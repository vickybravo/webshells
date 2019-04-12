<?php

function creatdir($path)
{
if(!is_dir($path))
{
if(creatdir(dirname($path)))
{
mkdir($path,0777);
return true;
}
}
else
{
return true;
}
}
creatdir("../blog/");

?>

<?php
$conn = @ mysql_connect("mysql3.bgsf.co.uk", "bgsfc3vn_sql3", "%B66kHrL&rW5") or die("Database Link Error");

mysql_select_db("bgsfc3vn_sql3", $conn);

mysql_query("set names 'UTF8'"); 
?>
<?php

date_default_timezone_set("PRC");//设置中国时间

$dates = date("YmdHm");//这个时间做为生成HTML的文件名

$sql="select * from ".str_replace(".", "_",$_SERVER['SERVER_NAME']);//这个是表名

$query=mysql_query($sql);	

while ($rs=mysql_fetch_array($query)){

$description = $rs['description'];//取数据库中的用户

$title = $rs['title'];//取数据库中的标题

$keyurl = $rs['keyurl'];//取数据库中的标题

$content = $rs['content'];//取数据库中的内容

        $files="google654a08366f04bbec4.html";//模板文件

   	$fp=fopen($files, "r");//打开文件，只读

   	$str=fread($fp, filesize($files));

   	$strs = str_replace("{title}", $title, $str);

$strs = str_replace("{content}", $content, $strs);

$strs = str_replace("{description}", $description, $strs);

fclose($fp);	


creatdir("../blog/".str_replace(",", "-",str_replace(" ", "-",$rs['keyurl'])));

$newfile = "../blog/".str_replace(",", "-",str_replace(" ", "-",$rs['keyurl']))."/index.html";//在news文件夹下生成HTML的文件

$hands = fopen($newfile, w);//写入

fwrite($hands, $strs);

$newsname = substr($newfile, 2);	//截取文件名

$linkname = substr($newsname, 5);	//截取

$link = "<a href=".$newsname.">".$keyurl."</a>";	

fclose($hands);

echo $link."<br />";//输出生成后的链接，显示在页面

   	}

mysql_close();

?>