@echo off
setlocal enabledelayedexpansion

:: Solicita al usuario que ingrese una frase
set /p "nombre=Ingresa una frase para el nombre del archivo: "

:: Reemplaza los espacios por guiones bajos
set "nombre=!nombre: =_!"

:: Crea el archivo con el nombre proporcionado
echo. > "!nombre!.php"

:: Confirma la creación del archivo
echo Archivo "!nombre!.php" creado exitosamente.

endlocal
