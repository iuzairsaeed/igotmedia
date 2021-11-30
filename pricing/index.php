
<?php
ob_start();
session_start();

$url = $_SERVER['REQUEST_URI'];

$current_url = explode('?', $url);
$url = $current_url[0];






$dir    = __DIR__.'/views';
$files = array_slice(scandir($dir), 2); 

$fileWithOutExt = array();

foreach($files as $file){
    // remove end slash if you dont need traling slash
    $without_extension = '/'.pathinfo($file, PATHINFO_FILENAME).'/';
    array_push($fileWithOutExt,$without_extension);
}
$url =str_replace(addslashes('/pricing'),'',$url);

if($url=='/'){
    require $dir.'/packages.php';
    die();
}

// print_r($fileWithOutExt);
// die();

if (in_array($url,$fileWithOutExt)) {
    $filename = str_replace('/','',$url);

    require $dir.'/'.$filename.'.php';
    // for($i=0;$i<count($files);$i++){
        

    //     if($url == __DIR__.'/'.$fileWithOutExt[$i]){
    //         require $dir.'/'.$files[$i];
    //         // echo "somethisn";
    //     }
    
    // }
    
}
else{
    require $_SERVER['DOCUMENT_ROOT'].'/views/404.php';
}




?>