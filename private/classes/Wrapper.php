<?php

include_once 'private/classes/PhpInclude.php';
include_once 'private/libraries/Minifier.php';

$css = file_get_contents('public/css/style.css');
$header = phpInclude('private/components/Header.php');

$html = "
    <!DOCTYPE html>
    <html lang='nl'>
        <head>
            <meta charset='utf-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1, viewport-fit=cover'>
            <title>$title</title>
            <meta name='description' content='$description'>
            <link rel='shortcut icon' type='image/x-icon' href='public/img/favicon.ico'/>
            <style>$css</style>
            <link rel='canonical' href='$canonical'/>
            <meta name='monetization' content='\$ilp.uphold.com/6N2G3HpwKZMp'>
        </head>
        <body>
            $header
            $main
            <script></script>
        </body>
    </html>
";

$minifiedHtml = minify_html($html);

// render html
echo $minifiedHtml;