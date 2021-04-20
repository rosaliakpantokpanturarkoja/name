	<?php

if (!file_exists('madeline.php')) {
    copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
}
include 'madeline.php';

$MadelineProto = new \danog\MadelineProto\API('session.madeline');
$MadelineProto->start();
$timUSA=date("H:i",strtotime("-5 hour"));
$timUKR=date("H:i",strtotime("3 hour"));
$timUZB = date("H:i",strtotime("5 hour"));
$timGER = date("H:i",strtotime("1 hour"));
$kun=date("d-m-Y",strtotime("5 hour"));
$input = [""];
  $rand=array_rand($input);
  $text="$input[$rand]";
  $d = getdate();
if($d[hours] < 18){
$d[hours] = $d[hours] + 6;
}
if($d[hours] == 18){
$d[hours] = 0;
}
if($d[hours] == 19){
$d[hours] = 01;
}
if($d[hours] == 20){
$d[hours] = 02;
}
if($d[hours] == 21){
$d[hours] = 03;
}
if($d[hours] == 22){
$d[hours] = 04;
}
if($d[hours] == 23){
$d[hours] = 05;
}
 $nik = ["🇱 🇺 🇨 🇮 🇫 🇪 🇷 $d[hours].$d[minutes].$d[seconds]"," millke $d[hours].$d[minutes].$d[seconds]"]; // тут место LUCIFER напишите свой ник
  $nikrand=array_rand($nik);
  $niktxt="$nik[$nikrand]";
  

?>
