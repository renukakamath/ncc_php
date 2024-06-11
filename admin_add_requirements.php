<?php include 'admin_header.php';
if (isset($_POST['add'])) 
{
    extract($_POST);
    $q="insert into `requirement` values(null,'$req','$fees','$ld')";
    insert($q);
    alert("requirement added successfully");
    return redirect('admin_add_requirements.php');

}
if (isset($_GET['del'])) 
{
    extract($_GET);
    $q2="delete from requirement where requirement_id='$del' ";
    delete($q2);
    alert("data delete");
    return redirect('admin_add_requirements.php');
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
    <h1 style="color: white">add requirement</h1>
    <table class="table" style="width: 500px;">
        <tr>
            <th>requirements</th>
            <td><input type="text" name="req" required="" class="form-control" required></td>
        </tr>
        <tr>
            <th>fees</th>
            <td><input type="number" name="fees" required="" class="form-control" required></td>
        </tr>
        <tr>
            <th>last date</th>
            <td><input type="date" name="ld" required="" class="form-control" required></td>
        </tr>
        <tr>
            <td align="center" colspan="2"><input type="submit" name="add" value="add requirement" class="btn btn-success"></td>
        </tr>
    </table>
</form></center></div></div></div></li></ul></section>
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
            <td><a href="?del=<?php echo $key['requirement_id'] ?>" class="btn btn-success">delete</a></td>
        </tr>
        <?php
    }    ?>

    </table>
    </form>
</center>
<?php include 'footer.php'?>