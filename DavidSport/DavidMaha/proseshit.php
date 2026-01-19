<?php
$a=$_POST['txta'];
$b=$_POST['txtb'];
$o=$_POST['op'];

if($o=='+'){
    $hasil=$a+$b;
    $v="+";

}else{
    $hasil=$a-$b
}
echo"Nilai A= $a <br>
     Nilai A= $a <br>
     Hasil A $v B =$hasil"; 
?> 
    
