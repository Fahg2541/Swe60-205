<?php
    print_r($_GET);
    echo "<br/>";

    foreach($_GET as $key=>$value){
        echo $key . "=" . $value . "<br/>";
    }
    print_r($_GET[game]);
