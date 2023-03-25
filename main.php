<?php
    phpinfo();
    echo "<br>";
    define('name','Welcome ');
    echo name;
    echo "<br>";
    print_r ($_SERVER)  ;
    echo "<br>";
    echo __FILE__ ;
    echo "<br>";
    $age = 10 ;
    switch($age){
        case $age<5 :
            echo "Stay home" ;
            break;
        case "5" :
            echo "Go to the  kindergarden";
            break;
        default : 
            if ($age>=6 && $age<=12){
                $age=$age-4;
                echo "Go to Grade : $age ";
            }
    }

?>
