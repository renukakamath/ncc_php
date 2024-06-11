<?php include 'admin_header.php';
if (isset($_POST['add'])) 
{
    extract($_POST);
    $q="insert into `notification` values(null,'$noti','$desc',now())";
    insert($q);
    alert("notification added successfully");
    return redirect('admin_add_notification.php');

}
if (isset($_GET['del'])) 
{
    extract($_GET);
    $q2="delete from notification where notification_id='$del' ";
    delete($q2);
    alert("data deletd");
    return redirect('admin_add_notification.php');
}
?>
<section class="banner-silder">
        
            <ul>
                <li>
                    <div class="banner-top banner-top1">
                        <div class="container">
                            <div class="banner-info info2">
<center>
    <form action="" method="post">
    <h1 style="color: white">add notifications</h1>
    <table class="table" style="width: 500px;">
        <tr>
            <th>notification</th>
            <td><input type="text" name="noti" required="" class="form-control" required></td>
        </tr>
        <tr>
            <th>description</th>
            <td><input type="text" name="desc" required="" class="form-control" required></td>
        </tr>
        <tr>
            <td align="center" colspan="2"><input type="submit" name="add" value="add notification" class="btn btn-success"></td>
        </tr>
    </table>
</form></center></div></div></div></li></ul></section>
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
    </form>
</center>
<?php include 'footer.php'?>