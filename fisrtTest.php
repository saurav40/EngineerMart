<?php 
function sum($var1,$var2)
{
    $var=$var1+$var2;
    return $var;
}
?>

<!DOCTYPE html>
<html>
    <head> 
        <title> <?php echo"Batman"; ?> </title>
    </head>
   <body>
    <?php
       
       $var1=10;
       $var2=20;
       $var=array("index1"=>10,"index2"=>30);
      
       foreach($var as $mark_index => $mark_value)
       {
           echo "The marks index $mark_index and marks value $mark_value <br/>";
       }
    ?>
    
   </body>
</html>