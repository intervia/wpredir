<?php
/**
 * @name WordPress redir directory installation to root
 * @version 1.0.0 (2022-01-05)
 * @author Juan cimadevilla
 * @license MIT
 * @copyright Intervia IT (intervia.com)
 * 
 * 1.- Edit wp-config.php and add to the beginning:
 * $_oldir = 'shop';
 * incluce "redirect";
 * 
 * 2.- Upload this file to your WP root
 * 
 */

$_uri = filter_var(getenv('REQUEST_URI'),FILTER_SANITIZE_URL);
$_size = strlen($_oldir)+2;
if (substr($_uri, 0, $_size) == "/$_oldir/") {
    $_domain = filter_var(getenv('SERVER_NAME'),FILTER_SANITIZE_URL);
    $url = "https://$_domain/".substr($_uri, $_size);
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: $url");
    die();
}
