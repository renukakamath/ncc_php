<?php include 'student_header.php';
extract($_GET);
if (isset($_POST['pay'])) 
{
	extract($_POST);
	
  echo  $q="insert into payment values(null,'$sid','$del','$amount',now(),'$type')";
	insert($q);
	
	alert("payment successfull");
	return redirect('student_home.php');
}
?>

<section class="banner-silder">
		
			<ul>
				<li>
					<div class="banner-top banner-top1">
						<div class="container">
							<div class="banner-info info2">
<body>
	<h1 align="center" style="color: white">secure payment</h1>
	<form method="post">
		<table align="center" class="table" style="width: 500px">
			<tr>
				<th>AMOUNT PAYABLE</th>
				<td><input type="text" name="pamount" readonly="" class="form-control"value="<?php echo $amount ?>"></td>
			</tr>
			<tr>
				<th>CARD NUMBER</th>
				<td><input type="text" name="cnum" required="" class="form-control" pattern="[0-9]{16}"></td>
			</tr>
			<tr>
				<th>EXP DATE</th>
				<td><input type="date" name="exp" class="form-control" required=""></td>
			</tr>
			<tr>
				<th>CVV</th>
				<td><input type="password" required="" class="form-control"  name="cvv" pattern="[0-9]{3}"></td>
			</tr>
            <tr>
				<th>CARD HOLDER NAME</th>
				<td><input type="password" required="" class="form-control"  name="chn" ></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" class="btn btn-success"  name="pay" value="pay securely"></td>
			</tr>
		</table>
	</form>
</body></div></div></div></li></ul></section>
<?php include 'footer.php'?>