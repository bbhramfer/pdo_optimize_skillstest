<?php
    include_once('header.php');
?>

<div>
    <form action="search.php" method="get">
        <input type="text" name="search" placeholder="Search">
        <button type="submit" name="search">SEARCH</button>
    </form>
</div>
<div>
    <a href="add.php">+ADD USERS</a>
</div>
<div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>EMAIL</th>
            </tr>
        </thead>
        <?php
            include_once('dbconfig.php');
            $result = $conn->prepare('SELECT * FROM users');
            $result->execute();
            foreach($result->fetchAll() as $key => $row){
        ?>
        <tbody>
            <tr>
                <td><?=$row['id']?></td>
                <td><?=$row['name']?></td>
                <td><?=$row['email']?></td>
                <td>
                    <a href="">UPDATE</a>
                    <a href="delete.php?id=<?= $row['id'] ?>">Delete</a>
                </td>
            </tr>
        </tbody>
        <?php
            }
        ?>
    </table>
</div>