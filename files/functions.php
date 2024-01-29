<?php

function unique_id_Real($lenght = 15) {

    if (function_exists("random_bytes")) {
        $bytes = random_bytes(ceil($lenght / 2));
    } elseif (function_exists("openssl_random_pseudo_bytes")) {
        $bytes = openssl_random_pseudo_bytes(ceil($lenght / 2));
    } else {
        throw new Exception("no cryptographically secure random function available");
    }
    return substr(bin2hex($bytes), 0, $lenght);
}

date_default_timezone_set("Asia/Dhaka");

function timeRemain($enddate){

  $startdate=date("Y-m-d H:i:s");

  $diff=strtotime($enddate)-strtotime($startdate);
  
  // immediately convert to days
  $temp=$diff/86400; // 60 sec/min*60 min/hr*24 hr/day=86400 sec/day

  // days
  $days=floor($temp);

  $temp=24*($temp-$days);
  // hours
  $hours=floor($temp);

  $temp=60*($temp-$hours);
  // minutes
  $minutes=floor($temp);

  $temp=60*($temp-$minutes);
  // seconds
  $seconds=floor($temp);

  if ($days<=0) {
    return "{$hours} ঘন্টা {$minutes} মিনিট";
  }else{
    return "{$days} দিন {$hours} ঘন্টা {$minutes} মিনিট";
  }

}
//---------------Post Difference---------------
function dateDiff($date)
{
    $mydate= date("Y-m-d H:i:s");
    $theDiff="";
    $datetime1 = date_create($date);
    $datetime2 = date_create($mydate);
    $interval = date_diff($datetime1, $datetime2);
    //echo $interval->format('%s Seconds %i Minutes %h Hours %d days %m Months %y Year    Ago')."<br>";
    $min=$interval->format('%i');
    $sec=$interval->format('%s');
    $hour=$interval->format('%h');
    $mon=$interval->format('%m');
    $day=$interval->format('%d');
    $year=$interval->format('%y');
    if($interval->format('%i%h%d%m%y')=="00000") {
        //echo $interval->format('%i%h%d%m%y')."<br>";
        return $sec." Seconds";
    } else if($interval->format('%h%d%m%y')=="0000"){
        return $min." Minutes";
    } else if($interval->format('%d%m%y')=="000"){
        return $hour." Hours";
    } else if($interval->format('%m%y')=="00"){
        return $day." Days";
    } else if($interval->format('%y')=="0"){
        return $mon." Months";
    } else{
        return $year." Years";
    }
}
?>
