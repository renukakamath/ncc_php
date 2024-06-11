<?php include 'hteacher_header.php';
if (isset($_POST['add'])) 
{
    extract($_POST);
    $q="insert into `camp_details` values(null,'$hid','$cname','$des','$place','$date','$time')";
    insert($q);
    alert("camp details  added ");
    return redirect('hteacher_add_campdetails.php');

}
if (isset($_GET['del'])) 
{
    extract($_GET);
    $q2="delete from camp_details where camp_id='$del' ";
    delete($q2);
    alert("data deletd");
    return redirect('hteacher_add_campdetails.php');
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
    <h1 style="color: white">add Campdetails</h1>
    <table class="table" style="width: 500px;">
        <tr>
            <th>camp name</th>
            <td><input type="text" required="" name="cname" class="form-control" required></td>
        </tr>
        <tr>
            <th>description</th>
            <td><input type="text" name="des" required="" class="form-control" required></td>
        </tr>
        <tr>
            <th>place</th>
            <td><input type="text" name="place" required="" class="form-control" required></td>
        </tr>
        <tr>
            <th>date</th>
            <td><input type="date" name="date" required="" class="form-control" required></td>
        </tr>
        <tr>
            <th>time</th>
            <td><input type="time" name="time" required="" class="form-control" required></td>
        </tr>

        <tr>
            <td align="center" colspan="2"><input type="submit" name="add" value="add details" class="btn btn-success"></td>
        </tr>
    </table>
</form></center></div></div></div></li></ul></section>
<center>
   
    <h1>view Campdetails</h1>
    <table class="table" style="width: 500px;">
    <tr>
        <th>si</th>
        <th>camp name</th>
        <th>description</th>
        <th>place</th>
        <th>date</th>
        <th>time</th>

    </tr>
    <?php
    $q1="select * from camp_details where head_id='$hid'";
    $temp=select($q1);
    $si=1;
    foreach ($temp as $key) 
    {
        ?>
        <tr>
            <td><?php echo $si++ ?></td>
            <td><?php echo $key['title'] ?></td>
            <td><?php echo $key['description'] ?></td>
            <td><?php echo $key['place'] ?></td>
            <td><?php echo $key['date'] ?></td>
            <td><?php echo $key['time'] ?></td>
            <td><a href="?del=<?php echo $key['camp_id'] ?>" class="btn btn-success">delete</a></td>
        </tr>
        <?php
    }    ?>

    </table>
    </form>
</center>
<?php include 'footer.php'?>