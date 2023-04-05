<?php
    session_start();

    $_SESSION = array();

    //check cookie saved in browser for this session
    if(isset($_COOKIE[session_name()])){

        //cookie name, cookie value, expire time in s, impact forlder( we set it as root path)
        setcookie(session_name(),'', time()-86400, '/');
    }
    
    session_destroy();

    header('location: home.php');

?>