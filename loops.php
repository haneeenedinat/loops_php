<?php

echo "<h1>Task1</h1>";
for($i=1; $i <= 10;$i++){
    if($i < 10){
        echo $i."-";
    }

    elseif($i==10){
        echo $i;
    }

}

echo "<br>";
echo "---------------------------------------------------------------------------------------";


echo "<h1>Task2</h1>";
$sum=0;
for($i=0; $i <= 30;$i++){
    $sum=$sum+$i;
}
echo 'the sum of all number'."\t".$sum;
echo "<br>";
echo "---------------------------------------------------------------------------------------";

echo "<h1>Task3</h1>";
for($i=0;$i < 5;$i++){
    for($j=0; $j < 5 ;$j++){
     

        if($i==0 || $i+$j <=3)
        echo "A"." ";

        elseif($i==1)
        echo "B"." ";

        elseif($i==2)
        echo "C"." ";
        elseif($i==3)
        echo "D"." ";
        elseif($i==4)
        echo "E"." ";
        else{
            echo $i." ".$j."/";
        }
       
       
    }  
    echo "<br>";
}
echo "<br>";
echo "---------------------------------------------------------------------------------------";


echo "<h1>Task4</h1>";

for($i=0;$i < 5 ;$i++){
    for($j=0; $j <5 ;$j++){
        if($i==0 || $i+$j<=3){
           echo "1"." "; 
        }

        elseif($i==1){
            echo "2"." ";
        }

        elseif($i==2){
            echo "3"." ";
        }

        elseif($i==3){
            echo "4"." ";
        }

        elseif($i==4){
            echo "5"." ";
        }
        
        else{
            echo $i." ".$j."/";
        }
      
    }
    echo "<br>";
}


echo "<br>";
echo "---------------------------------------------------------------------------------------";

echo "<h1>Task5</h1>";
for($i=0;$i < 5 ;$i++){
    for($j=0 ; $j<5;$j++){
        // echo $i." ".$j."/";
        if($i==$j){
            echo ($i+1)." ";
        }
        else{
            echo '0'." ";
        }
    }
    echo "<br>";
}

echo "<br>";
echo "---------------------------------------------------------------------------------------";


echo "<h1>Task6</h1>";
$num=5;
$factorial=1;
for($i=1;$i <= 5 ;$i++){
$factorial=$factorial*$i;
}
echo $factorial;


echo "<br>";
echo "---------------------------------------------------------------------------------------";


echo "<h1>Task7</h1>";
$num=12;
function series($num){  
    if($num == 0){  
    return 0;  
    }else if( $num == 1){  
return 1;  
}  else {  
return (series($num-1) + series($num-2));  
}   
}  
/* Call Function. */  
for ($i = 0; $i < $num; $i++){  
echo series($i);  
echo "\n";  
}  

echo "<br>";
echo "---------------------------------------------------------------------------------------";


echo "<h1>Task8</h1>";
$sting = "orange coding academy";
echo substr_count($sting, 'c');
echo "<br>";
echo "---------------------------------------------------------------------------------------";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="2" cellpadding="3px" cellspacing="0px">
    <?php
    
  echo "<h1>Task8</h1>";
for($i=1;$i <= 6;$i++){
    echo "<tr>";
for($j=1;$j <= 5;$j++){
    $num=$i*$j;
    echo "<td> $i * $j = $num</td>";
}
echo "</tr>";
}
  echo "<br>";
  echo "---------------------------------------------------------------------------------------";
?>
</table>
</body>
</html>


<?php

echo "<h1>Task9</h1>";

for ($i=1;$i <= 50;$i++ ){
    if($i%3 !== 0 && $i%5 !==0){
        echo $i." ";
    }

    elseif($i%3==0){
        echo "Fizz"." ";
    }

    elseif($i%5==0){
        echo "Buzz"." ";
    }

    elseif ($i%3==0 && $i%5==0){
        echo "FizzBuzz"." ";
    }
}

echo "<br>";
echo "---------------------------------------------------------------------------------------";

echo "<h1>Task10</h1>";
$count=1;
for($i=0;$i < 5 ;$i++){
    for($j=0; $j < 5 ;$j++){
        if( $i >= $j ){

        echo $count."  ";
        $count++;
           }
        // echo $i." ".$j."/";  
    }
    echo "<br>";
}


echo "<br>";
echo "---------------------------------------------------------------------------------------";



?>


