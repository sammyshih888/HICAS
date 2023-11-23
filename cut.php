<?php
ini_set('memory_limit', '1024M');
require_once 'vendor/autoload.php';
use Fukuball\Jieba\Jieba;
use Fukuball\Jieba\Finalseg;

if (isset($_POST['text'])) {
    $text = $_POST['text'];
    Jieba::init();
    Finalseg::init();
    $words = Jieba::cut($text);
    $str="";
   
    foreach($words as $w){
        if($str==""){
            $str.='<div>';
        }else{
            $str.='<div style="width:calc(100% - 6px);margin:0 3px;border:1px solid white;"></div></div><div>';
        }
        $str.=$w;
       
    }
    $str.='<div style="width:calc(100% - 6px);margin:0 3px;border:1px solid white;"></div></div>';
    // $str=implode('<div style="width:calc(100% - 4px);margin:1px 2px;border:1px solid white;"></div></p><p>', $words);
    // echo '<p>'.$str.'<div style="width:calc(100% - 4px);margin:1px 2px;border:1px solid white;"></div></p>';
    echo $str;
}
?>