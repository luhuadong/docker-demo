<?php

switch ($_SERVER['PATH_INFO']) {

    //http://localhost/index.php/
    case '/':
        echo 'user service';
        break;
    case '/login':
        echo 'login success!';
        break;
    
    default:
        header('HTTP/1.1 404 Not Found');
        echo '404 Not Found';
        break;
}
