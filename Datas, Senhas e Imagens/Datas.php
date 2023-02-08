<?php
$today = new DateTime();
$end = new DateTime('2023-12-31');

$diff = $today->diff($end);
echo $diff->format('%y anos, %m meses, %d dias, %h horas, %i minutos, %s segundos');

$date = new DateTime('2020-01-01 15:35:00');

$date1= new DateTime('2020-01-01');
$date2= new DateTime('2020-02-15');

/* $diff = $date1->diff($date2);
echo $diff->format('%a'); */

/* if($date1 > $date2){
    echo "DATA 1 é maior que DATA 2";
}else{
    echo "DATA 2 é maior que DATA 1";
} */

//$date->sub(DateInterval::createFromDateString('7 years 2 days 5 minutes 17 seconds'));

//$date->setTimezone(new DateTimeZone('America/Sao_Paulo'));

//echo $date->format('d/m/Y H:i:s');