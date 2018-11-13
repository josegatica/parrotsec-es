<?php
$languages = array(
    'it' => 'Italian',
    'en' => 'English',
    'ru' => 'Russian',
    'uz' => 'Uzbek'
);

if(isset($_GET['lang'])){
    $language = $_GET['lang'];
} else {
    $language = 'es';
}

$file_path = "languages/core_$language.php";
if(file_exists($file_path))
    include_once($file_path);

else
    include_once('languages/core_es.php');

?>
