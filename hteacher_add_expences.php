<?php include 'hteacher_header.php';
if (isset($_POST['add'])) 
{
    extract($_POST);
    $q="insert into `expences` values(null,'$hid','$title','$det','$amount',curdate())";
    insert($q);
    alert("expence added successfully");
    return redirect('hteacher_add_expences.php');

}
if (isset($_GET['del'])) 
{
    extract($_GET);
    $q2="delete from expences where expence_id='$del' ";
    delete($q2);
    alert("data deletd");
    return redirect('hteacher_add_expences.php');
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
    <h1 style="color: white">add expences</h1>
    <table class="table" style="width: 500px;">
        <tr>
            <th>title</th>
            <td><input type="text" name="title" required="" class="form-control" required></td>
        </tr>
        <tr>
            <th>details</th>
            <td><input type="text" name="det" required="" class="form-control" required></td>
        </tr>
        <tr>
            <th>expence amount</th>
            <td><input type="text  " name="amount" required="" class="form-control" required></td>
        </tr>
        <tr>
            <td align="center" colspan="2"><input type="submit" name="add" value="add expence" class="btn btn-success"></td>
        </tr>
    </table>
    </form></center></div></div></div></li></ul></section>
    <center>
    <h1>view expences</h1>
    <table class="table" style="width:700px">
        <tr>
            <th>si</th>
            <th>head teacher name</th>
            <th>expence for</th>
            <th>details</th>
            <th>expemce amount</th>
            <th>date</th>
        </tr>
        <?php
        $q="SELECT * FROM expences INNER JOIN ncc_head USING (head_id) where head_id='$hid'";
        $temp=select($q);
        $si=1;
        foreach ($temp as $key) 
        {
            ?>
            <tr>
            <td><?php echo $si++ ?></td>
                <td><?php echo $key['first_name'] ?><?php echo $key['last_name'] ?></td>
              
                <td><?php echo $key['title'] ?></td>
                <td><?php echo $key['details'] ?></td>
                <td><?php echo $key['amount'] ?></td>
                <td><?php echo $key['date'] ?></td>
        </tr>
        <?php
    }    ?>

    </table>
    </form>
</center>
<?php include 'footer.php'?>