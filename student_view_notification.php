<?php include 'student_header.php'?>
<center>
<h1>view notifications</h1>
    <table class="table" style="width: 500px;">
    <tr>
        <th>si</th>
        <th>notification</th>
        <th>description</th>
        <th>date</th>

    </tr>
    <?php
    $q1="select * from notification ";
    $temp=select($q1);
    $si=1;
    foreach ($temp as $key) 
    {
        ?>
        <tr>
            <td><?php echo $si++ ?></td>
            <td><?php echo $key['title'] ?></td>
            <td><?php echo $key['description'] ?></td>
            <td><?php echo $key['date'] ?></td>
            <td><a href="?del=<?php echo $key['notification_id'] ?>" class="btn btn-success">delete</a></td>
        </tr>
        <?php
    }    ?>

    </table>
</center>
<?php include 'footer.php'?>