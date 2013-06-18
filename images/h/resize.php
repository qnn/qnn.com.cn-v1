<?php
if(!isset($_SERVER['PATH_INFO'])||strlen($_SERVER['PATH_INFO'])<2)die();
$file=substr($_SERVER['PATH_INFO'], 1);
if(!is_file(realpath($file)))die();
require_once 'ThumbLib.inc.php';

$thumb = PhpThumbFactory::create(realpath($file));
$thumb->adaptiveResize(150, 150);
$thumb->show();
