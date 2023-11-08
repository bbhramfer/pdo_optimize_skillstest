<?php
    include_once('header.php');
?>
<div>
    <form action="search.php" method="get">
        <input type="text" name="search" placeholder="Search">
        <button type="submit" name="search">SUBMIT</button>
    </form>
</div>
<div>
    <a href="add.php">+ADD USER</a>
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
            foreach($result->fetchAll() as $key=>$row){
        ?>
        <tbody>
            <tr>
                <td><?=$row['id']?></td>
                <td><?=$row['name']?></td>
                <td><?=$row['email']?></td>
                <td>
                    <a href="update.php?id=<?=$row['id']?>">UPDATE</a>
                    <a href="delete.php?id=<?=$row['id']?>">DELETE</a>
                </td>
            </tr>
        </tbody>
        <?php
            }
        ?>
    </table>
</div>