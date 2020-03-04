<?php
$file = fopen("input1a.csv","r");

while(true){

    $line = fgetcsv($file);
    echo $line[0]*3600+$line[1]*60+$line[2]."<br>";
    
    if(feof($file))
        break;
}
    # code...
fclose($file);

$file = fopen("input1b.csv","r");

while(true){
    $line = fgetcsv($file);
    
    $y = 2-$line[0]+3/7*$line[0]*$line[0]+log($line[0]);
    echo sprintf("%01.2f",$y)."<br>";
    
    if(feof($file))
break;
}
fclose($file);

$file = fopen("input1c.csv","r");

while(true){
    $line = fgetcsv($file);
    
    $Y = 0.5*$line[0]*$line[1]*sin($line[2]);
    echo sprintf("%01.4f",$Y)."<br>";

    if(feof($file))
break;
}
fclose($file);

$file = fopen("input1d.csv","r");

while(true){
    $line = fgetcsv($file);

    if($line[0] < 37){
        echo "XS"."<br>";
    }
    elseif($line[0] < 41){
        echo "S"."<br>";
    }
    elseif($line[0] < 43){
        echo "M"."<br>";
    }
    elseif($line[0] < 46){
        echo "L"."<br>";
    }
    else {
        echo "XL"."<br>";
    }

    if(feof($file))
break;
}
fclose($file);


