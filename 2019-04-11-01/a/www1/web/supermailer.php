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
   # Systemvoraussetzungen: PHP 4+ und Windows/Unix                            #
   #                                                                           #
   #############################################################################
 error_reporting(0); $V5b155fb0 = "No file to send specified."; $V29e35f3c = "Can't open file.";
$V35a66a54 = "This file is not supported by this script."; $Va04131c3 = "Error reading data from file."; 
$Vde482add = "There is nothing to send."; $V332d5bec = "No MX server found for recipient"; $Va159acea = "Requested mail action okay, completed"; 
include_once("class.mailer.php"); $V64258139 = 0x102; if ( isset($_GET['GetSupportedScriptVersion']) ||
 isset($_POST['GetSupportedScriptVersion']) ) { Fb8564a4d('SupportedScriptVersion', $V64258139, 'SupportedScriptVersion');
exit; } $V467015f4=0; $Vcb0d0ead=0; if ( isset($_GET['ToSendFile']) ) $V2f8480bd=$_GET['ToSendFile'];
if ( isset($_POST['ToSendFile']) ) $V2f8480bd=$_POST['ToSendFile']; if ( isset($_GET['ToSendFileBZ']) ) {
 $V2f8480bd=$_GET['ToSendFileBZ']; $V467015f4=1; } if ( isset($_POST['ToSendFileBZ']) ) { $V2f8480bd=$_POST['ToSendFileBZ'];
$V467015f4=1; } if ( isset($_GET['ToSendFileZLib']) ) { $V2f8480bd=$_GET['ToSendFileZLib']; $Vcb0d0ead=1;
} if ( isset($_POST['ToSendFileZLib']) ) { $V2f8480bd=$_POST['ToSendFileZLib']; $Vcb0d0ead=1; } if ( (!isset($V2f8480bd)) || ($V2f8480bd == "") ) {
 Fb8564a4d($V5b155fb0, 9999, $V5b155fb0); exit; } $V07213a01 = 0; $V24550cd7 = ""; $V7361be4e = 0;
if ($V467015f4) { $V8fa14cdd = bzopen($V2f8480bd, "rb"); if (!$V8fa14cdd) { $Vcb5e100e = bzerror($V8fa14cdd);
Fb8564a4d($Vcb5e100e["errno"]." ".$Vcb5e100e["errstr"], 9998, $V29e35f3c); exit; } } else if($Vcb0d0ead) {
 $V8fa14cdd = fopen($V2f8480bd, "rb"); if (!$V8fa14cdd) { $Vcb5e100e = $V29e35f3c; Fb8564a4d($V29e35f3c, 9998, $V29e35f3c);
exit; } while (!feof($V8fa14cdd)) { $V24550cd7 .= fgets($V8fa14cdd, 4096); } $V24550cd7 = gzuncompress($V24550cd7);
 } else { $V8fa14cdd = fopen($V2f8480bd, "rb"); if (!$V8fa14cdd) { $Vcb5e100e = $V29e35f3c; Fb8564a4d($V29e35f3c, 9998, $V29e35f3c);
exit; } } $V2af72f10 = F1a0998e1($V8fa14cdd); if ($V2af72f10 > $V64258139) { if ($V467015f4) bzclose($V8fa14cdd);
else if($Vcb0d0ead) fclose($V8fa14cdd); else fclose($V8fa14cdd); Fb8564a4d($V35a66a54, 9997, $V35a66a54);
exit; } $V4e39b4e6 = F1a0998e1($V8fa14cdd); $V7d3ad249 = Fe384e84b($V8fa14cdd); $Vb8f41059 = F1a0998e1($V8fa14cdd);
$V297aeb3e = F1a0998e1($V8fa14cdd); $V6f6cfbe5 = Fe384e84b($V8fa14cdd); $V5bb7db51 = F1a0998e1($V8fa14cdd);
$Vb298fa6c = F1a0998e1($V8fa14cdd); $Va19a28ff = ""; $V58d7d478 = ""; if ($Vb298fa6c != 0) { $Va19a28ff = Fe384e84b($V8fa14cdd);
$V58d7d478 = Fe384e84b($V8fa14cdd); } $V0644c6f8 = Fe384e84b($V8fa14cdd); $V11b31501 = F1a0998e1($V8fa14cdd);
if ($V11b31501 == 0) { if ($V467015f4) bzclose($V8fa14cdd); else if($Vcb0d0ead) fclose($V8fa14cdd);
else fclose($V8fa14cdd); Fb8564a4d($Vde482add, 9995, $Vde482add); exit; } if ($V07213a01 != 0) { exit; 
} $Vee5bd868 = ini_get("safe_mode"); $Vb83a886a = new Fab7cdc2b(); $Vb83a886a->Vad42f669= false; $Vb83a886a->V4e39b4e6= $V4e39b4e6;
$Vb83a886a->Vee5bd868= $Vee5bd868; $Vb83a886a->V7d3ad249= $V7d3ad249; $Vb83a886a->Vb8f41059= $Vb8f41059;
$Vb83a886a->V297aeb3e= $V297aeb3e; $Vb83a886a->V6f6cfbe5= $V6f6cfbe5; if ($Vb298fa6c != 0) { $Vb83a886a->Vb298fa6c= true;
$Vb83a886a->Va19a28ff= $Va19a28ff; $Vb83a886a->V58d7d478= $V58d7d478; } if ($V7d3ad249 == "") { $Vb83a886a->Vb8f41059= 25;
} $Vb83a886a->V0644c6f8= $V0644c6f8; if ( ($V11b31501 > 1) && ($V5bb7db51 != 0) && ($V7d3ad249 != "") )
 $Vb83a886a->V5bb7db51= true; for ($V865c0c0b=0; $V865c0c0b<$V11b31501; $V865c0c0b++) { $V8f8bcd88 = F1a0998e1($V8fa14cdd);
$V5da618e8 = Fe384e84b($V8fa14cdd, $V8f8bcd88); $V07213a01 = 0;
 if (isset($V3cc01e4d)) unset($V3cc01e4d);
 $V3cc01e4d = array(); $V15c31240 = F1a0998e1($V8fa14cdd, $V8f8bcd88); for ($V363b122c=0; $V363b122c<$V15c31240; $V363b122c++) {
 $V3cc01e4d[] = Fe384e84b($V8fa14cdd, $V8f8bcd88); } if ($V07213a01 != 0) { exit; } if($V4e39b4e6 == 0)
 $V1b2eefec = Fe384e84b($V8fa14cdd, $V8f8bcd88); else $V1b2eefec = ""; $Vb83a886a->V78617b60= $V1b2eefec;
 $Vb83a886a->V1e7b1667= Fe384e84b($V8fa14cdd, $V8f8bcd88); $V8d777f38 = Fe384e84b($V8fa14cdd, $V8f8bcd88);
if ($V07213a01 != 0) { exit; } if ( ($V7d3ad249 == "") && ($V4e39b4e6 != 0) ) { $Vb83a886a->V7d3ad249= $Vb83a886a->F60d63ab2($V3cc01e4d[0]);
if ($Vb83a886a->V7d3ad249== "") { Fb8564a4d($V332d5bec, 9994, $V332d5bec, $V8f8bcd88); continue; }
} $Vb83a886a->Vbdcd5bef= $V5da618e8; $Vb83a886a->Vdda0645a= $V8d777f38; $Vb83a886a->V63cec92a= $V3cc01e4d;

 if (!$Vb83a886a->Fafcb1270()) { Fb8564a4d($Vb83a886a->Vd8c6d3e4, $Vb83a886a->V11eb38d1, $Vb83a886a->Vd8c6d3e4, $V8f8bcd88);
} else { Fb8564a4d($Va159acea, 250, $Va159acea, $V8f8bcd88); } 
 @set_time_limit(30); } $Vb83a886a->F4d6f5b0a();
if ($V467015f4) bzclose($V8fa14cdd); else if($Vcb0d0ead) fclose($V8fa14cdd); else fclose($V8fa14cdd);
echo "\n\n"; flush(); function F1a0998e1(&$V0666f0ac, $V8015583b=-1) { global $Va04131c3, $V467015f4, $Vcb0d0ead;
global $V24550cd7, $V7361be4e; if ($V467015f4) $V9e3669d1 = "0x".bzread($V0666f0ac, 8); else if ($Vcb0d0ead) {
 $V9e3669d1 = "0x".substr($V24550cd7, $V7361be4e, 8); $V7361be4e += 8; } else $V9e3669d1 = "0x".fread($V0666f0ac, 8);
$V9e3669d1 = $V9e3669d1 * 1; if ($V467015f4) { $Vcb5e100e = bzerror($V0666f0ac); if ($Vcb5e100e["errno"] != 0) {
 Fb8564a4d($Vcb5e100e["errno"]." ".$Vcb5e100e["errstr"], 9996, $Va04131c3, $V8015583b); exit; } } else {
 } return $V9e3669d1; } function Fe384e84b(&$V0666f0ac, $V8015583b=-1) { global $Va04131c3, $V467015f4, $Vcb0d0ead;
global $V24550cd7, $V7361be4e; $Vf7bd60b7 = F1a0998e1($V0666f0ac, $V8015583b); if ($Vf7bd60b7 > 0) {
 if ($V467015f4) { $V03c7c0ac = bzread($V0666f0ac, $Vf7bd60b7); $Vcb5e100e = bzerror($V0666f0ac); if ($Vcb5e100e["errno"] != 0) {
 Fb8564a4d($Vcb5e100e["errno"]." ".$Vcb5e100e["errstr"], 9996, $Va04131c3, $V8015583b); exit; } } else
 if ($Vcb0d0ead) { $V03c7c0ac = substr($V24550cd7, $V7361be4e, $Vf7bd60b7); $V7361be4e += $Vf7bd60b7;
} else $V03c7c0ac = fread($V0666f0ac, $Vf7bd60b7); return $V03c7c0ac; } else return ""; } function F43d937f2($V03c7c0ac) {
 $V03c7c0ac = str_replace("\n", " ", $V03c7c0ac); return str_replace("\r", " ", $V03c7c0ac); } function Fb8564a4d($Vd438707f, $V11eb38d1, $Vd8c6d3e4, $V8015583b=-1) { 
 global $V07213a01; echo "EMailNo: ".$V8015583b."\r\n"; echo "SMTPErrorNo: ".$V11eb38d1."\r\n"; echo "SMTPErrorString: ".F43d937f2($Vd8c6d3e4)."\r\n";
echo "ErrorText: ".F43d937f2($Vd438707f)."\r\n\r\n"; $V07213a01 = 1; flush(); } ?>