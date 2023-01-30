<?php
//date_default_timezone_set('Europe/Istanbul');

$date = new DateTime('now', new DateTimezone('europe/Istanbul'));

//$date->setTimezone(new DateTimezone('europe/Istanbul'));


//echo $date->format('Y-m-d H:i:s');
//echo $date->getTimestamp();


//$date->setTimestamp(time());
//echo $date->format('Y-m-d H:i:s');


//$date->setTimestamp(time());
//$date->modify('+2 day');
//echo $date->format('Y-m-d H:i:s');

$date1 = new DateTime('2023-01-30 4:11:31', new DateTimezone('europe/Istanbul'));
$date2 = new DateTime('now', new DateTimezone('europe/Istanbul'));


$difrent = $date1->diff($date2);
//print_r($difrent);
$date3 = $difrent->format('%y yil, %m ay, %d gun, %h saat, %i dakika, %s saniye');

$date3 = str_replace(
    ['0 yil,','0 ay,','0 gun,','0 saat,','0 dakika,'],
    '',
    $date3
);
echo $date3;

?>
