<?php


echo date('y-m-d H:i:s ');

$date= getdate();
//print_r($date);

echo time();

$time= time()-(60*60*24*5);


//echo '<br>'.date('y-m-d H:i:s',$time);

$tarih = getdate($time);

print_r($tarih);


?>