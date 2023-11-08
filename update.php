<?php
    include_once('header.php');
?>
<?php
    include_once('dbconfig.php');
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $result = $conn->prepare("SELECT * FROM users WHERE id = $id");
        $result->execute();
        
        while($row = $result->fetch(PDO::FETCH_ASSOC)){
            $id = $row['id'];
            $name = $row['name'];
            $email = $row['email'];
        }
    }
?>
<div>
    <form action="update_user.php" method="POST";>
        <div>
        <input type="hidden" name="id" value="<?= $id?>">
        <div>
            <input type="text" name="name" value="<?= $name?>" required>
            <label for="pwd">FULLNAME</label>
        </div>
        <div>
            <input type="email" name="email" value="<?= $email?>" required>
            <label for="email">EMAIL</label>
        </div>
        </div>
        <button type="submit" name="update";>Submit</button>
        <a href="index.php">RETURN</a>
    </form>
</div>