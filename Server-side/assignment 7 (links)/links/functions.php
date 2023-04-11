<?php 

// function url_for($script_path) {
//     //add the leading '/' if not present 
//     if ($script_path[0] != '/') {
//         $script_path = "/" . $script_path;
//     }
//     return WWW_ROOT . $script_path;
// }

function u($string="") {
    return urlencode($string);
}

function raw_u($string="") {
    return rawurlencode($string);
}

function html($string=""){
    return htmlspecialchars($string);
}

function get_id() {
    return $_GET['page'] ?? '1';
}

function error_404() {
    header($_SERVER ["SERVER_PROTOCOL"] . "404 NOT FOUND");
    exit();
}

function error_500() {
    header($_SERVER ["SERVER_PROTOCOL"] . "500 INTERNAL SERVER ERROR");
    exit;
}

function redirect_to($location) {
    header("Location: " . $location);
    exit;
}
?>