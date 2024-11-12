    <?php
    function fibonacci($n)
    {
        $v1 = 0;
        $v2 = 1;
        for ($i = 0; $i < $n; $i++) {
            echo $v1 . "<br>";
            $res = $v1 + $v2;
            $v1 = $v2;
            $v2 = $res;
        }
    }


    fibonacci(20);
