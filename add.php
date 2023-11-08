<?php
    include_once('header.php');
?>
<div>
    <form action="add.php" method="post">
        <div>
            <label for="name">FULLNAME</label>
            <input type="text" name="name" placeholder="Enter Name" required>
        </div>
        <div>
            <label for="email">EMAIL</label>
            <input type="text" name="email" placeholder="Enter Email" required>
        </div>
        <div>
            <label for="password">PASSWORD</label>
            <input type="text" name="password" placeholder="Enter Password" required>
        </div>
        <button type="submit" name="add">SUBMIT</button>
        <a href="index.php">RETURN</a>
    </form>
</div>