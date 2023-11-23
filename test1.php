<?php
ini_set('memory_limit', '1024M');
require_once 'vendor/autoload.php';

use Fukuball\Jieba\Jieba;
use Fukuball\Jieba\Finalseg;

Jieba::init();
Finalseg::init();

$text = "這是一個示例句子";
$words = Jieba::cut($text);

print_r($words);
?>