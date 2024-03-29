<?php
error_reporting(0);
function breadcrumbs($separator = ' > ', $home = 'Home') {
    
    $path = array_filter(explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)));
    $base_url = $_SERVER['REQUEST_URI'];
    $breadcrumbs = array("<a href=\"$base_url\">$home</a>");
 
    $last = end(array_keys($path));
 
    foreach ($path AS $x => $crumb) {
        $title = ucwords(str_replace(array('.php', '_'), Array('', ' '), $crumb));
        if ($x != $last){
            $breadcrumbs[] = '<a href="$base_url$crumb">$title</a>';
        }else{
            $breadcrumbs[] = $title;
        }
    }
 
    return implode($separator, $breadcrumbs);
}  
?>