<?php
$id = 0;

if (isset($_POST['userId'], $_POST['username'],  $_POST['name'])) {
    
    $userId = $_POST['userId'];
    
    $uname= $_POST['username'];
    
    $name = $_POST['name'];

    
} else if (isset($_GET['id'])) {
    
    $id = $_GET['id'];
}

require_once 'db.php';
require_once 'GenreModel.php';
require_once 'BookView.php';

$model = new GenreModel(MY_DSN, MY_USER, MY_PASS);
$view = new BookView();


if (isset($_POST['userId']) && isset($_POST['name']) && isset($_POST['username'])) {
    
    $id = $userId;
    $status = $model->updateUser($userId, $uname, $name);    
    
}

$rows = $model->getUser($id);
$view->showHeader('My Library | User Profile');
$view->showProfile($rows);
$view->showFooter();

?>