<?php include 'public_header.php';

if (isset($_POST['login'])) 
{
	extract($_POST);
 $q="select * from login where user_name='$uname' and password='$pass'";
	$temp=select($q);
	if (sizeof($temp)>0) 
		  
	{

		$_SESSION['logid']=$temp[0]['login_id'] ;
         $logid=$_SESSION['logid'];
		if($temp[0]['user_type']=="student")
		{
			$q4="select * from student where login_id='$logid'";
			$te=select($q4);
			if (sizeof($te)>0) 
			{
				$_SESSION['student_id']=$te[0]['student_id'];
				$sid=$_SESSION['student_id'];
			}
			alert("login successfull");
			return redirect ('student_home.php');
		}
		 else if ($temp[0]['user_type']=="headteacher") 
		 {
		 	$q2="select * from ncc_head where login_id='$logid'";
		 	$se=select($q2);
		 	if (sizeof($se)>0) 
		 	{
			$_SESSION['head_id']=$se[0]['head_id'];
		 		$hid=$_SESSION['head_id'];
		 		alert("login successfull");
		 	return redirect ('hteacher_home.php');
		 	}
		 }	
	
		else if ($temp[0]['user_type']=="admin") 
		{
			alert("login successfull");
			return redirect ('admin_home.php');
		}
	}
	
else{
		     alert('invalid username and password');
	     }

}
?>


<section class="banner-silder">
		
			<ul>
				<li>
					<div class="banner-top banner-top1">
						<div class="container">
							<div class="banner-info info2">
							<body>
	<h1 align="center" style="color: teal" >LOGIN</h1><br><br>
	<form method="post">
		<table align="center" class="table" style="width: 500px;color: white">
			<tr>
				<th>user name</th>
				<td><input type="text" name="uname" required="" class="form-control" placeholder="enter your user name"></td>
			</tr>
			<tr>
				<th>password</th>
				<td><input type="password" name="pass" required="" class="form-control" placeholder="enter your password"></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input class="btn btn-success" type="submit" name="login" value="LOGIN">  </td>
			</tr>
		</table>
		
	</form>	
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
		</section>

<br><br><br><br>
   


	<?php include 'footer.php'?>