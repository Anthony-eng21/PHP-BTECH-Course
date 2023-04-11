<?php 
require_once('./header.php');
include('./functions.php');

$test = $_GET['test'] ?? '';

if($test == '404') {
    error_404();
} elseif($test == '500') {
    error_500();
} elseif ($test == 'redirect') {
    redirect_to(url_for('./header.php'));
} else {
    echo 'No error';
}
?>