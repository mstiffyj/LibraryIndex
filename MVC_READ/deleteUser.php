<?php
$id = 0;

if (isset($_GET['id'])) {
    
    $id = $_GET['id'];
}

require_once 'db.php';
require_once 'GenreModel.php';

$model = new GenreModel(MY_DSN, MY_USER, MY_PASS);

if (isset($_GET['id'])) {
    
    $delete= $model->deleteUser($id);
    
    session_start();
    unset($_SESSION['userInfo']);

    session_regenerate_id(true);

    header('Location: index.php');

    exit;

}

?>