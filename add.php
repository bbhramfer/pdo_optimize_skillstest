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
    <a href="index.php">RETURN</a>
</div>
<div>
    <form action="add_user.php" method="POST">
    <div>
        <input type="text" placeholder="Enter Name" name="name" required>
        <label for="name">Full Name</label>
    </div>
    <div>
        <input type="text" placeholder="Enter Email" name="email" required>
        <label for="email">Email</label>
    </div>
    <div>
        <input type="text" placeholder="Enter Password" name="password" required>
        <label for="password">Password</label>
    </div>
    <button type="submit" name="add">Submit</button>
    </form>
</div>