# Guia PHP

- [Guia PHP](#guia-php)
  - [Condicionales](#condicionales)
    - [is\_int](#is_int)
  - [Tratar strings](#tratar-strings)
    - [strlen](#strlen)
    - [substr](#substr)
    - [strpos](#strpos)
    - [Trim](#trim)
    - [strtoupper](#strtoupper)
    - [strtolower](#strtolower)
    - [str\_replace](#str_replace)
    - [range](#range)
  - [Funciones](#funciones)
    - [Variable opcional en funciones](#variable-opcional-en-funciones)
  - [Arrays](#arrays)
    - [print\_r ($array);](#print_r-array)
    - [array\_key\_exists](#array_key_exists)
    - [array\_values](#array_values)
    - [explode](#explode)
    - [implode](#implode)
    - [in\_array](#in_array)
    - [isset](#isset)
    - [array\_search](#array_search)
    - [sort](#sort)
    - [asort](#asort)
    - [ksort](#ksort)
    - [krsort](#krsort)
    - [shuffle](#shuffle)
    - [foreach](#foreach)
    - [Recorrer un array asociativo](#recorrer-un-array-asociativo)
    - [empty()](#empty)
    - [Count](#count)
    - [matriz](#matriz)
    - [Array](#array)
    - [array\_merge](#array_merge)
    - [array asociativo](#array-asociativo)
  - [Bucles](#bucles)
    - [for](#for)
    - [While](#while)
    - [do while](#do-while)
    - [tabla con html](#tabla-con-html)
  - [Operadores](#operadores)
    - [$val+= 5;](#val-5)

## Condicionales

### is_int

Nos dice si es un int o no

is_int($value)

````
$value = 2;
if(is_int($value)){
      echo "INT";
    }
    else
    {
      echo "NO INT";
    }
    echo "<br>";
````
**RESULTADO**

````
INT
````

## Tratar strings

### strlen

Dice la longitud en carácteres de una variable

````
$var1="hola";
echo strlen($var1);
````

**RESULTADO**

````
4
````

### substr

Extraer de una cadena la cantidad que queremos
````
echo substr('abcdef', 3, 1);
````

**RESULTADO**

````
d
````

### strpos


La función strpos() en PHP se utiliza para encontrar la posición de la primera aparición de una subcadena dentro de una cadena. Devuelve el índice de la primera ocurrencia de la subcadena (empezando desde 0) o false si la subcadena no se encuentra.
````

strpos("cadena_completa", "subcadena_a_buscar");


$cadena = "Hola, ¿cómo estás?";
$posicion = strpos($cadena, "cómo");

if ($posicion !== false) {
    echo "La palabra 'cómo' se encuentra en la posición: " . $posicion;
} else {
    echo "La palabra 'cómo' no se encuentra en la cadena.";
}
````
**RESULTADO**

````
La palabra 'cómo' se encuentra en la posición: 6
````

### Trim

Sirve para eliminar espacios en blanco u otros carácteres específicos.

````
$texto = "  Hola mundo  ";
$resultado = trim($texto);
echo $resultado; // Salida: "Hola mundo"
````

### strtoupper
Pasa un string a mayusculas
````
$userid = "PedroMonreal123";
$userid = strtoupper($userid);
echo $userid; // Salida: "PEDROMONREAL123"
````

### strtolower
Pasa un string a minusculas

````
$userid = strtolower($userid);
````

### str_replace
Remplaza caracteres
````
$date="12/12/2012";
$date=str_replace("/","-",$date);
echo $date."<br>\n";
````

### range

Genera un array que contiene los carácteres o numeros en el rango.

````
<?php
// Crear un array con los números del 0 al 9
$digits = range(0, 9);

// Crear un array con las letras de la A a la F
$digits2 = range("A", "F");

// Mostrar el contenido de $digits
echo "Array de dígitos del 0 al 9:\n";
print_r($digits);

// Mostrar el contenido de $digits2
echo "Array de letras de la A a la F:\n";
print_r($digits2);
?>
````
## Funciones

###  Variable opcional en funciones

$language = 'en'

Por defecto, si no se pasa el valor, tomará el valor **"en"**
````
function getWeekDayStr($number, $language = 'en'){

}
````
## Arrays

### print_r ($array);

Muestra el contenido de un array

### array_key_exists

Verifica si el valor está en el array asociativo

**"También se puede usar isset"**

````
if (array_key_exists($language, $days)) {

}    
````


### array_values

Reindexa los valores de array

Elimina los huecos vacios
````
$names=["Pedro","Christian","Biel"]

array_values($names);
````


### explode

Convierte string en array, estando separado por un carácter, por ejemplo ;

````
function showArray($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
  }


$dataStr="Pedro;Monreal;717776040;2004";

$dataArray=explode(";", $dataStr);
showArray($dataArray);
````

**Resultado**

````Array
(
    [0] => Pedro
    [1] => Monreal
    [2] => 717776040
    [3] => 2004
)
````

### implode

Convierte array en string, estando separado por un carácter, por ejemplo ;

````
$dataArray=["Pedro","Monreal","717776040","2004"];

$Valores=implode(",", $dataArray);

echo $Valores;
````
**Resultado**
````
Pedro,Monreal,717776040,2004
````

### in_array

Ver si existe un valor dentro de un array

````
$colores=["rojo", "verde", "azul"];
var_dump(in_array("verde",$colores));
````

**Resultado**

````
bool(true)
````

### isset

Verificar si un elemento existe en un array asociativo

var_dump(isset($phoneNumber))

### array_search

Sirve para buscar un valor asociado a otro
````
$phoneNumbers = [
    "John" => "123-456-789",
    "Jane" => "555-555-555",
    "Mike" => "666-666-666",
    "Sara" => "777-777-777"
];

$testIndex = array_search("666-666-666", $phoneNumbers);
var_dump($testIndex);

````
**Resultado**

````
string(4) "Mike"
````

### sort

Ordena valores de array tipo index

````
function showArray($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

$colors = array("rojo", "azul", "verde", "amarillo");  // Definir el array

$colorsv2 = $colors;  
showArray($colorsv2);

sort($colors); 
showArray($colors); 

````

**RESULTADO**

````
Array
(
    [0] => rojo
    [1] => azul
    [2] => verde
    [3] => amarillo
)
Array
(
    [0] => amarillo
    [1] => azul
    [2] => rojo
    [3] => verde
)
````

### asort
Ordena un array asociativo 
````
asort($phoneNumbers);
````

### ksort
Ordena un array asociativo por clave
````
ksort($phoneNumbers);
````

### krsort
Ordena un array asociativo por clave al revés
````
krsort($phoneNumbers); //reverse order
````

### shuffle

Desordenar los valores del array
````
function showArray($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

$colors = array("rojo", "azul", "verde", "amarillo");  // Definir el array

$colorsv2 = $colors;  
showArray($colorsv2);

shuffle($colors); 
showArray($colors); 
````
**RESULTADO**

````  
function showArray($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

$colors = array("rojo", "azul", "verde", "amarillo");  // Definir el array

$colorsv2 = $colors;  
showArray($colorsv2);

shuffle($colors); 
showArray($colors); 
````

### foreach

Recorrer un array

````
$colors = array("rojo", "azul", "verde", "amarillo");
echo "<ol>\n";
foreach ($colors as $color) {
  echo "<li>$color</li>\n";
}
echo "</ol>\n";

````
**RESULTADO**
````
rojo
azul
verde
amarillo
````


### Recorrer un array asociativo

````

$phoneNumbers = array(
    "Casa" => "123-456-7890",
    "Trabajo" => "098-765-4321",
    "Móvil" => "555-123-4567"
);

echo "<ul>\n";
foreach ($phoneNumbers as $key => $value) {
    echo "<li>$key: $value</li>\n";
}
echo "</ul>\n";

````
**RESULTADO**

````
Casa: 123-456-7890
Trabajo: 098-765-4321
Móvil: 555-123-4567
````


Añade el campo Mike con sus atributos.
````
    $users = [ "John" => ["age" => 25, "city" => "New York"], "Jane" => ["age" => 22, "city" => "Paris"] ];
    $users["Mike"] = ["age" => 30, "city" =>  "Berlin"];
    showArray($users);

````

### empty()

Verificar si un array está vacío.

````
if (empty($values)){
  return false;
}
````
### Count

Dice la longitud del array

````
count($array);
````

### matriz

````
$matrix = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);
````

### Array

La función array crea un array con los valores establecidos.

````
$array1 = array(1, 2, 3);
````
### array_merge

````
$mergedArray = array_merge($digits, $letters);
````

### array asociativo

````
$phoneNumbers = array(
    "Pedro" => "123-456-7890",
    "Ana" => "987-654-3210",
    "Luis" => "555-555-5555",
    "Marta" => "333-333-3333"
);

````

## Bucles

### for

````
echo "<h2>Tabla del 5</h2>";
for($i=1; $i<=10;$i++){
echo $i." x ". 5 . "= ". ($i*5) . "<br>\n";
}
````

**RESULTADO**
````
Tabla del 5
1 x 5= 5
2 x 5= 10
3 x 5= 15
4 x 5= 20
5 x 5= 25
6 x 5= 30
7 x 5= 35
8 x 5= 40
9 x 5= 45
10 x 5= 50
````


### While

````
<?php

$a=8;
$i=1;

while ($i<=10){
    echo "$a x $i = " .($a*$i). "<br>";
    $i++;
}
?>
````

**RESULTADO**

````
8 x 1 = 8
8 x 2 = 16
8 x 3 = 24
8 x 4 = 32
8 x 5 = 40
8 x 6 = 48
8 x 7 = 56
8 x 8 = 64
8 x 9 = 72
8 x 10 = 80
````

### do while
````
<?php
$a = 8;
$i = 1;

do {
    echo "$a x $i = " . ($a * $i) . "<br>";
    $i++;
} while ($i <= 10);

?>
````

**RESULTADO**
````
8 x 1 = 8
8 x 2 = 16
8 x 3 = 24
8 x 4 = 32
8 x 5 = 40
8 x 6 = 48
8 x 7 = 56
8 x 8 = 64
8 x 9 = 72
8 x 10 = 80
````

### tabla con html

````
<?php

echo "<table border=1>\n";
for ($r=1; $r<=10;$r++){
    echo "<tr>"; 
    for($c=1;$c<=10;$c++){
        echo "<td>".($r*$c)."</td>";
    }
    echo "</tr>\n";
}
echo "</table>\n";

?>
````

**RESULTADO**

````
1	2	3	4	5	6	7	8	9	10
2	4	6	8	10	12	14	16	18	20
3	6	9	12	15	18	21	24	27	30
4	8	12	16	20	24	28	32	36	40
5	10	15	20	25	30	35	40	45	50
6	12	18	24	30	36	42	48	54	60
7	14	21	28	35	42	49	56	63	70
8	16	24	32	40	48	56	64	72	80
9	18	27	36	45	54	63	72	81	90
10	20	30	40	50	60	70	80	90	100
````

## Operadores

### $val+= 5;

Sirve para sumer un valor a una variable funciona igual que:

````
$val = $val + 5;