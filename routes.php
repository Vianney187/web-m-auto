<?php 
    // session_start();
    // i will check my connexion session here
    $page = null;
    $defaultpage = "home"; // default page dav
    $pages = scandir("./pages/"); // scan dir for all pages dav

    function _checkSession($args = null){
        return true;
    }
    _checkSession();

    if(isset($_GET['page'])) {
        $page = $_GET['page'];
        $page .= ".php";
    }else{
        $page = $defaultpage;
        $page .= ".php";
    }

    if(in_array($page, $pages, true)) $page = $page;
    else $page = $defaultpage;
?>