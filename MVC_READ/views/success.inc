<?php

echo "<h1>Welcome back, ".$data['fullname']."! </h1>";

echo "<div id='navigation'><p><a href ='logout.php'>Log Out</a>  <a href='profile.php?id=".$data['id']."'>View Profile</a></p></div>";

$model = new GenreModel(MY_DSN, MY_USER, MY_PASS);

$rows = $model->getBooks();

$view = new BookView();
 
$view->showBooks($rows);


?>