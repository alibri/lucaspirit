<?php
use MatthiasMullie\Minify;

require 'vendor/autoload.php';
require_once(__DIR__ . '/config/config.php');

$minifiedPath = __DIR__ . '/' . $config['cssmin'];
$maincss = __DIR__ . '/' . $config['css']['main'];

#var_dump(filemtime($minifiedPath), filemtime($maincss), filemtime($minifiedPath) < filemtime($maincss));
if (!is_file($minifiedPath) || filemtime($minifiedPath) < filemtime($maincss))
{
    $minifier = new Minify\CSS();
    foreach ($config['css'] as $css)
    {
        $minifier->add(__DIR__ . '/' . $css);    
    }
    
    $minifier->minify($minifiedPath);
}
#var_dump(filemtime($minifiedPath), filemtime($maincss), filemtime($minifiedPath) < filemtime($maincss)); die();

$minifiedPath = __DIR__ . '/' . $config['jsmin'];

if (!is_file($minifiedPath))
{
    $minifier = new Minify\JS();
    foreach ($config['js'] as $js)
    {
        $minifier->add(__DIR__ . '/' . $js);    
    }
    
    $minifier->minify($minifiedPath);
}
