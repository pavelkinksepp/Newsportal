<?php
$host = explode('?',$_SERVER['REQUEST_URI'])[0];
$num = substr_count($host,'/');
$path = explode('/',$host)[$num];

if ($path == '' or $path == 'index' or $path == 'index.php'){
    //echo "routing work";
    $response = Controller::StartSite();
}
elseif ($path == 'all') {
    $response = Controller::AllNews();
}
elseif ($path == 'category' and isset($_GET['id'])){
    $response =  Controller::NewsByCatID($_GET['id']);
}
elseif ($path == 'news' and isset($_GET['id'])) {
    $response =  Controller::NewByID($_GET['id']);
}
else{
    $response = Controller::error404();
}