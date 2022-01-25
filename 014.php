<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>014</title>
</head>
<body>
    <h3>
    <?php
    $bonus = 10000;
     $price = 10000;
     if($price>=10000){

     $bonus=$price * 3;
     }
     else if($price>=50000){
        $bonus=$price * 2;
     }
  
     else if($price>=100000){
        $bonus = $price;
     }
     
     echo " เงินเดือนที่ได้รับ = ($price)บาท <br>";
     echo " โบนัสที่ได้รับ = ($bonus) บาท <br>";
     $x = $price + $bonus;
     echo " เงินเดือนสุทธิ= ($x) บาท<br>";
     
     
     $name = array("a", "b", "c","d", "f");
     $age = array("1", "2", "3","4", "5");   
    
     echo  "ชื่อ ".$name[0] , " อายุ ". $age[0] ;
     echo "<br>";
     echo  "ชื่อ ".$name[1] , " อายุ ". $age[1] ;
     echo "<br>";
     echo  "ชื่อ ".$name[2] , " อายุ ". $age[2] ;
     echo "<br>";
     echo  "ชื่อ ".$name[3] , " อายุ ". $age[3] ;
     echo "<br>";
     echo  "ชื่อ ".$name[4] , " อายุ ". $age[4] ;
   

        
        
     
    
        
    ?>
    </h3>
    
</body>
</html>