<h3>Your Profile</h3>

<form action="?" method="POST">

<?php

foreach($rows as $num => $row) {
            
    echo 'Username: '.$row['user_name'].'<br />';
    
    echo 'Name: '.$row['user_fullname'].'<br />';
        
}

echo "<h3>Update Your Profile</h3>";

foreach($rows as $num => $row) {
    
    echo '<input type="hidden" name="userId" id="userId" maxlength="20" size="20" value="'.$row['user_id'].'"/><br />';
    
    echo '<label for="username">Username:</label>';
    
    echo '<input type="text" name="username" id="username" maxlength="20" size="20" value="'.$row['user_name'].'"/><br />';
    
    echo '<label for="name">Name:</label>';

    echo '<input type="text" name="name" id="name" maxlength="20" size="20" value="'.$row['user_fullname'].'"/><br />';
        
}
    echo "<br><br>";
    
    echo '<a href="deleteUser.php?id='.$row['user_id'].'">Delete Account</a>';
    
?>

<br/><br/>

<input type="submit" value="Update" />

</form>

<br/><br/>

<a href='index.php'>Back</a>