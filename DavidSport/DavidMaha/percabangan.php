<?php
function determine_predicate($ipk)
{
    if ($ipk >= 2.5 && $ipk <=2.75){
        return "memuaskan";
    }elseif ($ipk >= 2.75 && $ipk <=3.00){
        return"sangat memuaskan";  
    }elseif ($ipk >= 3.00 && $ipk <=3.50){
        return"dengan pujian";  
    }elseif ($ipk >= 3.50 && $ipk <=4.00){
        return"cumlaude";
    }else {
        return "tidak lulus";
    }
}                    

$ipk = 2.2 ;
$predikat = determine_predicate($ipk);
echo "dengan ipk $ipk, predikat wisudawan adalah:$predikat";
?>