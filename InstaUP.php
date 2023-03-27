<?php
$green = "\e[1;32m";
    $blue = "\e[1;34m";
    $red = "\e[1;31m";
    $white = "\33[37;1m";
    $yellow = "\e[1;33m";
    $cyan = "\e[1;36m";
    $purple = "\e[1;35m";
    $gray = "\e[1;30m";  
    $res="\033[0m";
$hitam="\033[0;30m";
$abu2="\033[1;30m";
$putih="\033[0;37m";
$putih2="\033[1;37m";
$red="\033[1;31m";
$red2="\033[1;31m";
$green2="\033[1;32m";
$yellow2="\033[1;33m";
$blue="\033[0;34m";
$blue2="\033[1;34m";
$purple="\033[0;35m";
$purple2="\033[1;35m";
$lblue="\033[0;36m";
$lblue2="\033[1;36m";
system("clear");
echo $green."==============================\n";
echo $green2.'|[+] GitHub    : '.$lblue.'whisper-666 |
'.$green2.'|[+] InstaGram : '.$lblue.'_sshs       |
'.$green2.'|[+] TeleGram  : '.$lblue.'whisper_io  |';
echo $green."\n==============================\n";
	$uid=readline($cyan.'[+] UserID : '.$yellow);
	echo $green."==============================\n";
  function RandomNumber($length){
    $str="";
    for($i=0;$i<$length;$i++){
    $str.=mt_rand(0,9);
    }
    return $str;
    }
    function rando($length) {
        $characters = '1234567890abcdefghijklmnopqrstuvwxyz';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
  $x16=rando(16);
$ts=time();
$f = array("sameer","suresh","chettiar","jatin","chauhan","agarwal","rahul","tanmay","tiwari","kunal","rasania","sunil","kumar","gaurav","arihant","jain","falguni","yashashree","arpi","arshish","gupta","tanmay","samtgr","kiyera","atul","abhay","chandra","shoibaakriti","aanchal","talreja","aatholiy","abhijeet","akkalwar","abhijeet","bajpai","abhijeetsh","abhirup","roy","abhishek","sumit","kapil","suman","rani","ramu","souvik","yogesh","umesh","sahadat","ankit","prasant","pravakar","sunil","sibaram");
$fname = $f[mt_rand(0,50)];
$l = array("sameer","suresh","chettiar","jatin","chauhan","agarwal","rahul","tanmay","tiwari","kunal","rasania","sunil","kumar","gaurav","arihant","jain","falguni","yashashree","arpi","arshish","gupta","tanmay","samtgr","kiyera","atul","abhay","chandra","shoibaakriti","aanchal","talreja","aatholiy","abhijeet","akkalwar","abhijeet","bajpai","abhijeetsh","abhirup","roy","abhishek","sumit","kapil","rani","ramu","souvik","yogesh","umesh","sahadat","ankit","prasant","pravakar","sunil","sibaram");
$lname = $l[mt_rand(0,50)];
$no = rand(1,999);
$name=''.$fname.''.$lname.''.$no.'';
$x40=rando(40);
while(true){
$url1="https://instaup.marsapi.com/get_likes/follow/orders?user_id=$uid";
$a1 = RandomNumber(2);
$a2 = RandomNumber(2);
$a3 = RandomNumber(2);
$a4 = RandomNumber(2);
$ipz = $a1.'.'.$a2.'.'.$a3.'.'.$a4;
$access=md5('45:8D:2E:5C:3A:B4:02:2D:B5:DD:3B:E0:98:4F:14:90:CB:5F:B5:45'.$uid);
$headers1=['market: Bazaar','access: '.$access,'lng: en','api_key: ABCXYZ123TEST',"Nagent: null/02:00:00:00:00:00/'.$ts.'/$x16/null/$x40",'cnt: unknown','version: 51','pkg: f2c6d7a5b030a1542f7eb589d5013340','aid: '.$x40,'Content-Type: application/x-www-form-urlencoded','Host: instaup.marsapi.com','Connection: Keep-Alive','Accept-Encoding: gzip','User-Agent: okhttp/3.12.1','X-Forwarded-For: '.$ipz.''];
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,$url1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	   curl_setopt($ch, CURLOPT_HTTPHEADER,$headers1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
	$output1= curl_exec ($ch);
	curl_close ($ch);
    $json1=json_decode($output1,true);
    $id=$json1['data'][0]['id'];
    $oid=$json1['data'][0]['order_id'];
    $id1=$json1['data'][1]['id'];
    $oid1=$json1['data'][1]['order_id'];   
     $id2=$json1['data'][2]['id'];
    $oid2=$json1['data'][2]['order_id'];  
      $id3=$json1['data'][3]['id'];
    $oid3=$json1['data'][3]['order_id'];
      $url0="https://instaup.marsapi.com/get_likes/follow/checklist";
$idx=$id+3423;
$d=$idx.'ig';
$i='3rFz>|)VHl-w+5I0';
$k='#p0yJmVK/@($nX?#';
$enc_data = base64_encode(openssl_encrypt($d,"AES-128-CBC",$k,OPENSSL_RAW_DATA,$i));
$tkv=md5($enc_data.':M3JGej58KVZIbC13KzVJMA==');
 $dx='[{"id":'.$id.',"liked_before":0,"order_id":"'.$oid.'","smartCommented":0,"smartLiked":0},{"id":'.$id1.',"liked_before":0,"order_id":"'.$oid1.'","smartCommented":0,"smartLiked":0},{"id":'.$id2.',"liked_before":0,"order_id":"'.$oid2.'","smartCommented":0,"smartLiked":0},{"id":'.$id3.',"liked_before":0,"order_id":"'.$oid3.'","smartCommented":0,"smartLiked":0}]';
$dx=urlencode($dx);
 $data0='tokenV2='.$tkv.'&orders='.$dx.'&user_id='.$uid;
 $ch = curl_init();
 curl_setopt($ch, CURLOPT_URL,$url0);
 curl_setopt($ch, CURLOPT_POST, 1);
 curl_setopt($ch, CURLOPT_POSTFIELDS,$data0);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER,$headers1);
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
 curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
  $cc= curl_exec ($ch);
  $json1=json_decode($cc,true);
  $msg=$json1['message'];
  $coin=$json1['return']['coins'];
 curl_close ($ch);
echo $blue."[+] Total COINS : ".$red.$coin.PHP_EOL;
sleep(10);}
?>
