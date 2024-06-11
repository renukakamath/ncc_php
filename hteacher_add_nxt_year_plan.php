<?php include 'hteacher_header.php';
if (isset($_POST['add'])) 
{
    extract($_POST);
    $q="insert into `next_year_plan` values(null,'$hid','$plan','$des',now())";
    insert($q);
    alert(" successfully added ");
    return redirect('hteacher_add_nxt_year_plan.php');

}
if (isset($_GET['del'])) 
{
    extract($_GET);
   echo $q2="delete from next_year_plan where next_year_plan_id='$del' ";
    delete($q2);
    alert("data deletd");
    return redirect('hteacher_add_nxt_year_plan.php');
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
    <h1 style="color: white">add next year plan</h1>
    <table class="table" style="width: 500px;">
        <tr>
            <th>plan</th>
            <td><input type="text" name="plan" required=""  class="form-control" required></td>
        </tr>
        <tr>
            <th>description</th>
            <td><input type="text" name="des" required="" class="form-control" required></td>
        </tr>
      
        <tr>
            <td align="center" colspan="2"><input type="submit" name="add" value="add plan" class="btn btn-success"></td>
        </tr>
    </table>
   </form></center></div></div></div></li></ul></section>
   <center>
    <h1>view next year plan</h1>
    <table class="table" style="width: 500px;">
    <tr>
        <th>si</th>
        <th>notification</th>
        <th>description</th>
        <th>date</th>

    </tr>
    <?php
    $q1="select * from next_year_plan where head_id='$hid'";
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
            <td><a href="?del=<?php echo $key['next_year_plan_id'] ?>" class="btn btn-success">delete</a></td>
        </tr>
        <?php
    }    ?>

    </table>
    </form>
</center>
<?php include 'footer.php'?>