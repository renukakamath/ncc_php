<?php include 'student_header.php';
extract($_GET);
// if (isset($_GET['del'])) 
// {
//     extract($_GET);
//     
// }
?>
<center>
<h1>view requirement</h1>
    <table class="table" style="width: 500px;">
    <tr>
        <th>si</th>
        <th>notification</th>
        <th>description</th>
        <th>date</th>

    </tr>
    <?php
    $q1="select * from requirement ";
    $temp=select($q1);
    $si=1;
    foreach ($temp as $key) 
    {
        ?>
        <tr>
            <td><?php echo $si++ ?></td>
            <td><?php echo $key['type'] ?></td>
            <td><?php echo $key['amount'] ?></td>
            <td><?php echo $key['last_date'] ?></td>
            <td><a href="student_make_payments.php?del=<?php echo $key['requirement_id'] ?>&amount=<?php echo $key['amount'] ?>&type=<?php echo $key['type'] ?>" class="btn btn-success">pay now</a></td>
        </tr>
        <?php
    }    ?>

    </table>
</center>
<?php include 'footer.php'?>