<?php

    function angka2($data){
        $samadengan = 3;
        for($i=1;$i<=$data;$i++){
            if($samadengan == $i){
                echo "+ ";
                $samadengan += 3;
            }else{
                echo "= ";
            }
        }
    }
    function angka($data){
        for ($i=1;$i<=$data;$i++){
            echo "+ ";
        }
        echo PHP_EOL;
        angka2($data);
        echo PHP_EOL;
        angka2($data);
        echo PHP_EOL;
        angka2($data);
        echo PHP_EOL;
        for ($i=1;$i<=$data;$i++){
            echo "+ ";
        }
    }
angka(5);
