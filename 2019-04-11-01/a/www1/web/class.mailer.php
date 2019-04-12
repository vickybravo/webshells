<?php
   #############################################################################
   #                    SUPERMAILER WebMail SCRIPT                             #
   #                                                                           #
   #      Copyright © 2003-2007 Mirko Boeer Softwareentwicklungen Leipzig      #
   #                 http://www.supermailer.de/                                #
   #                                                                           #
   # Dieses Script ist URHEBERRECHTLICH GESCHÜTZT und KEIN Open Source Script! #
   #                                                                           #
   # Es ist NICHT gestattet dieses Script ohne Einverstaendnis des Autors      #
   # weiterzugeben oder in anderen Anwendungen einzusetzen.                    #
   #                                                                           #
   # Dieses Script nutzt die SMTP-Klasse class.smtp.php, Infos zu den          #
   # Lizenzbedingungen des Scripts finden Sie in der Datei LICENSE.            #
   #                                                                           #
   #                                                                           #
   #############################################################################
 class Fab7cdc2b { var $V4e39b4e6 = 1; var $V7d3ad249 = "localhost"; var $Vb8f41059 = 25;
var $V297aeb3e = 30; var $V6f6cfbe5 = ""; var $V5bb7db51 = false; var $Vb298fa6c = false; var $Va19a28ff = "";
var $V58d7d478 = ""; var $V0644c6f8 = ""; var $Vbdcd5bef = ""; var $V78617b60 = ""; var $Vdda0645a = "";
var $V63cec92a = array(); var $V787c7523 = NULL; var $V0305b77c = ""; var $V11eb38d1 = 0; var $Vd8c6d3e4 = "";
var $Vad42f669 = false; var $Vee5bd868 = false; var $V1e7b1667 = ""; function F82e10194() { $V4b43b0ae = implode(", ", $this->V63cec92a);
$V4340fd73 = substr($this->Vdda0645a, 0, strpos($this->Vdda0645a, "\r\n\r\n") - 1); $V78e73102 = substr($this->Vdda0645a, strpos($this->Vdda0645a, "\r\n\r\n") + 4);
$Vb2cb3986 = ""; if($this->V0644c6f8!= "") $Vb2cb3986 = "-f ".$this->V0644c6f8; if ( strtoupper(substr(PHP_OS, 0, 3) == 'MAC') ) {
 $V4340fd73 = str_replace ("\r\n", "\r", $V4340fd73); $V78e73102 = str_replace ("\r\n", "\r", $V78e73102);
} else if ( strtoupper(substr(PHP_OS, 0, 3) != 'WIN') ) {
 $V4340fd73 = str_replace ("\r\n", "\n", $V4340fd73);
$V78e73102 = str_replace ("\r\n", "\n", $V78e73102); } if ( ($Vb2cb3986 != "") && (!$this->Vee5bd868) )
 return mail($V4b43b0ae, $this->V78617b60, $V78e73102, $V4340fd73, $Vb2cb3986); else return mail($V4b43b0ae, $this->V78617b60, $V78e73102, $V4340fd73);
} function Fafcb1270() { if ($this->Vad42f669== true) { $this->F7bff1255('Requested mail action okay, completed', '250', 'Requested mail action okay, completed');
return true; } if($this->V1e7b1667!= "") {
 $V8fa14cdd = fopen($this->V1e7b1667, "rb"); if ( (!$V8fa14cdd) || (filesize($this->V1e7b1667) == 0) ) {
 $this->F7bff1255("Can't load attachment file(s).", "550", "Can't load attachment file(s)."); return false;
}
 $this->Vdda0645a.= fread ($V8fa14cdd, filesize($this->V1e7b1667)); fclose($V8fa14cdd); } if($this->V4e39b4e6== 0) {
 $Vb4a88417 = $this->F82e10194(); if(!$Vb4a88417) $this->F7bff1255("Can't send email. (PHP mail function)", "550", "Can't send email. (PHP mail function)");
return $Vb4a88417; } include_once("class.smtp.php"); if(!$this->F16b00d77()) { return false; } if ($this->V0644c6f8!= "") {
 if(!$this->V787c7523->Mail($this->V0644c6f8)) { $this->F7bff1255($this->V787c7523->error["error"], $this->V787c7523->error["smtp_code"], $this->V787c7523->error["smtp_msg"]);
$this->F4d6f5b0a(); return false; } } else { if(!$this->V787c7523->Mail($this->Vbdcd5bef)) { $this->F7bff1255($this->V787c7523->error["error"], $this->V787c7523->error["smtp_code"], $this->V787c7523->error["smtp_msg"]);
$this->F4d6f5b0a(); return false; } } for ($V865c0c0b=0; $V865c0c0b<count($this->V63cec92a); $V865c0c0b++) {
 if(!$this->V787c7523->Recipient($this->V63cec92a[$V865c0c0b])) { $this->F7bff1255($this->V787c7523->error["error"], $this->V787c7523->error["smtp_code"], $this->V787c7523->error["smtp_msg"]);
$this->F4d6f5b0a(); return false; } } if(!$this->V787c7523->Data($this->Vdda0645a)) { $this->F7bff1255($this->V787c7523->error["error"], $this->V787c7523->error["smtp_code"], $this->V787c7523->error["smtp_msg"]);
$this->F4d6f5b0a(); return false; } if($this->V5bb7db51== true) { if (!$this->V787c7523->Reset() ) {
 $this->F4d6f5b0a(); } } else $this->F4d6f5b0a(); return true; } function F16b00d77() { if($this->V787c7523== NULL) { $this->V787c7523= new SMTP(); }
if ($this->V787c7523->Connected() == false) { if($this->V787c7523->Connect($this->V7d3ad249, $this->Vb8f41059, $this->V297aeb3e)) {
 if (!$this->V787c7523->Hello($this->F3cb2fb0b($this->V6f6cfbe5))) { $this->F7bff1255($this->V787c7523->error["error"], $this->V787c7523->error["smtp_code"], $this->V787c7523->error["smtp_msg"]);
$this->F4d6f5b0a(); return false; } if($this->Vb298fa6c) { if(!$this->V787c7523->Authenticate($this->Va19a28ff,
 $this->V58d7d478)) { $this->F7bff1255($this->V787c7523->error["error"], $this->V787c7523->error["smtp_code"], $this->V787c7523->error["smtp_msg"]);
$this->F4d6f5b0a(); return false; } } return true; } else { $this->F7bff1255($this->V787c7523->error["error"], $this->V787c7523->error["errno"], $this->V787c7523->error["errstr"]);
$this->F4d6f5b0a(); return false; } } else return true; return false; } function F4d6f5b0a() { if($this->V787c7523!= NULL)
 { if($this->V787c7523->Connected()) { $this->V787c7523->Quit(); $this->V787c7523->Close(); } $this->V787c7523->smtp_conn = 0; 
 } } function F18f4641e($V51746fc9) { global $HTTP_SERVER_VARS; global $HTTP_ENV_VARS; if(!isset($_SERVER))
 { $_SERVER = $HTTP_SERVER_VARS; if(!isset($_SERVER["REMOTE_ADDR"])) $_SERVER = $HTTP_ENV_VARS; }
if(isset($_SERVER[$V51746fc9])) return $_SERVER[$V51746fc9]; else return ""; } function F3cb2fb0b($V4b9af7d7) {
 if ($V4b9af7d7 != "") $Vb4a88417 = $V4b9af7d7; elseif ($this->F18f4641e('SERVER_NAME') != "") $Vb4a88417 = $this->F18f4641e('SERVER_NAME');
else $Vb4a88417 = "localhost.localdomain"; return $Vb4a88417; } function F7bff1255($V2406976f, $V3f19f5c1, $Ve93280bd) {
 $this->V0305b77c= $V2406976f; $this->V11eb38d1= $V3f19f5c1; $this->Vd8c6d3e4= $Ve93280bd; } 
 function F72182f5c($V0666f0ac, $Vc68271a6){
 fwrite($V0666f0ac, $Vc68271a6 . "\r\n"); return F54070395($V0666f0ac); } function F54070395($V0666f0ac){
 $V03c7c0ac = ""; stream_set_timeout($V0666f0ac, 10); for($V865c0c0b=0; $V865c0c0b < 2; $V865c0c0b++)
 $V03c7c0ac .= fgets($V0666f0ac, 1024); return $V03c7c0ac; }
 function F60d63ab2($V0c83f57c) { $Vcf1e8c14="";
$V9c9e50eb = explode("@", $V0c83f57c); if (count($V9c9e50eb) <> 2) return $Vcf1e8c14; $V0897acf4 = $V9c9e50eb[1];
$Vb580de2b = Faa408ed0($V0897acf4, $V744fa43b, $V6c5ea816); if($Vb580de2b){ $V510f47cf = array(); for($V865c0c0b=0; $V865c0c0b<count($V744fa43b); $V865c0c0b++)
 $V510f47cf[$V6c5ea816[$V865c0c0b]] = $V744fa43b[$V865c0c0b]; ksort($V510f47cf, SORT_NUMERIC); reset($V510f47cf);
$Vca0e6914 = 0; while (list ($V6c5ea816, $Vdf9a5b4a) = each ($V510f47cf) ) { $V0666f0ac = @fsockopen($Vdf9a5b4a, 25, $V70106d0d, $V809b1abe, 10);
if($V0666f0ac){ $V2cee9874 = ""; $V2cee9874 .= F72182f5c($V0666f0ac, "HELO ".$this->F3cb2fb0b($this->V6f6cfbe5));
if (substr($V2cee9874, 0, 3) == "250") $Vca0e6914 = 1; F72182f5c($V0666f0ac, "QUIT"); fclose($V0666f0ac);
if ($Vca0e6914) { $Vcf1e8c14 = $Vdf9a5b4a; break; } } } } return $Vcf1e8c14; } } if (!function_exists ('getmxrr') ) {
 function Faa408ed0($V0897acf4, &$V71db3b82, &$V791b2072) { if (!is_array ($V71db3b82) ) { $V71db3b82 = array ();
} if (!empty ($V0897acf4) ) { $V78e6221f = ""; @exec ("nslookup.exe -type=MX $V0897acf4.", $V78e6221f);
$V0f10d265=-1; foreach ($V78e6221f as $V6438c669) { $V0f10d265++; $V78f0805f = ""; if (preg_match ("/^$V0897acf4\tMX preference = ([0-9]+), mail exchanger = (.*)$/", $V6438c669, $V78f0805f) ) {
 $V791b2072[$V0f10d265] = $V78f0805f[1]; $V71db3b82[$V0f10d265] = $V78f0805f[2]; } } return ($V0f10d265!=-1);
} return false; } } ?>