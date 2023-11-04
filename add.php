<?php
    include_once('header.php');
?>

<div>
    <form action="search.php" method="get"></form>
    <input type="text" name="search" placeholder="Search">
    <button type="button">Search</button>
</div>
<br><br><br>
<div>
    <form action="add_user.php" method="POST">
    <div>
        <label for="name">Full Name</label>
        <input type="text" placeholder="Enter Name" name="name" required>
    </div>
    <div>
        <label for="email">Email</label>
        <input type="text" placeholder="Enter Email" name="email" required>
    </div>
    <div>
        <label for="password">Password</label>
        <input type="text" placeholder="Enter Password" name="password" required>
    </div>
    <button type="submit" name="add">Submit</button>
    </form>
</div>
<br><br><br>
<div>
    <a href="index.php">RETURN</a>
</div>