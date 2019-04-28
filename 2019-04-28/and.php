<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
    <html>
    <head>
    </head>
    <body>
    <div style="text-align: center;"><span
    style="font-family: monospace;">Joomla 1.7
    Verifier by
    n4sss<br>
    ex: http://joomla.com.br/</span></div>
    <br>
    <?php
    /*
    
    by n4sss
    joomla 1.7 Verifier
    
    
    */
    ob_start();
    set_time_limit(0);
    echo '<center><title>shell consult</title>
    <form method="post" action=""><div style="text-align: center;"><span
    style="font-family: monospace;">
    Sites: </span></div><textarea name="joomlas" cols="35" rows="7"></textarea><br>
    <input type="submit" value="iniciar">
    </form>
    </center>';
    $timeout = 8;
    if(! $_POST['joomlas']==""){
    $joomlas = explode("\n",$_POST['joomlas']);
    foreach($joomlas as $sites){
    $sites=trim($sites);
    $sitess = str_replace("http://", "", $sites);
    $curl=curl_init($sites);
    curl_setopt($curl, CURLOPT_URL, 'http://'.$sitess.'/administrator/index.php');
    curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
    curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 1);
    $exec=curl_exec($curl);
    if(eregi('Joomla! 1.7',$exec)){
    echo '<div
    style="text-align: center; font-family: monospace;"><span
    style="color: rgb(29, 106, 185);">Joomla 1.7:</span>
    '.$sites.'<div>
    ';
    ob_flush();
    flush();
    }
    }
    }
    ?>
    </body>
    </html>