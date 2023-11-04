<?php
    include_once('header.php');
?>

<div>
    <form action="search.php" method="get"></form>
    <input type="text" name="search" placeholder="Search">
    <button type="button">Search</button>
</div>
<div>
    <a href="add.php" style="margin-left: 85%">+ADD USER</a>
    <br><br>
</div>
<div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>ACTIONS</th>
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
                <td><?=$row ['id']?></td>
                <td><?=$row ['name']?></td>
                <td><?=$row ['email']?></td>
                <td>
                    <a href="">VIEW</a>
                    <a href="">UPDATE</a>
                    <a href="">DELETE</a>
                </td>
            </tr>
        </tbody>
        <?php
            }
        ?>
    </table>
</div>