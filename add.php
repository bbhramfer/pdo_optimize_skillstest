<?php
    include_once('header.php');
?>
<div>
    <a href="index.php">BACK</a>
</div>

<div>
    <form action="add_user.php" method="post">
        <div>
            <label for="name">FULLNAME</label>
            <input type="text" name="name" placeholder="Enter Fullname" required>
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
    </form>
</div>