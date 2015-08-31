<?php
    define('IN_MYBB', 1);
    require_once("global.php");

    add_breadcrumb("Oops! Error 404", $_SERVER['PHP_SELF']);

    eval("\$page = \"".$templates->get("404")."\";");

    output_page($page);
?>
