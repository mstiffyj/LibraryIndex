<?php

if (isset($_POST['bookId'], $_POST['title'], $_POST['author'], $_POST['publisher'], $_POST['isbn'])) {
    
    $bookId = $_POST['bookId'];
    
    $title = $_POST['title'];
    
    $author = $_POST['author'];
    
    $publisher = $_POST['publisher'];
    
    $isbn = $_POST['isbn'];

    
}

require_once "db.php";

require_once "GenreModel.php";

require_once "BookView.php";

$model = new GenreModel(MY_DSN, MY_USER, MY_PASS);

$view = new BookView();

$username = empty($_POST['username']) ? '' : strtolower(trim($_POST['username']));
$password = empty($_POST['password']) ? '' : trim($_POST['password']);

$contentPage = 'form';
$user = NULL;
$headerTite = "Login";
session_start();

if (!empty($_SESSION['userInfo'])) {
    
    $contentPage = 'success';
    $headerTite = 'Welcome';
    $user = $_SESSION['userInfo'];
    
}


if (!empty($username) && !empty($password)) {
    
    $user = $model->getUserByNamePass($username, $password);
    
    if (is_array($user)) {
        
        $contentPage = 'success';
        $headerTite = 'Welcome';

        
        $_SESSION['userInfo'] = $user;
    }
    
}

if (isset($_POST['bookId']) && isset($_POST['title']) && isset($_POST['author']) && isset($_POST['publisher']) && isset($_POST['isbn'])) {
    
    $add = $model->addBook($bookId, $title, $author, $publisher, $isbn);
    
}


$view->showHeader($headerTite);
$view->show($contentPage, $user);
$view->showFooter();

?>
        