<?php session_start();

include('dist/includes/dbcon.php');

if(isset($_POST['login']))
{

$user_unsafe=$_POST['username'];
$pass_unsafe=md5($_POST['password']);

$user = mysqli_real_escape_string($con,$user_unsafe);
$pass = mysqli_real_escape_string($con,$pass_unsafe);

/*$pass=md5($pass1);
$salt="a1Bz20ydqelm8m1wql";
$pass=$salt.$pass;*/

$query=mysqli_query($con,"SELECT * from admin where username='$user' and password='$pass'")or die(mysqli_error($con));
	$row=mysqli_fetch_array($query);
           
           $name=$row['nama'];
           $counter=mysqli_num_rows($query);
           $id=$row['id_admin'];
           $status=$row['status'];
	  	if ($counter == 0) 
		  {	
		  echo "<script type='text/javascript'>alert('Username atau Password Tidak Sesuai!');
		  document.location='index.php'</script>";
		  } 
	  else
		  {

	  	$query=mysqli_query($con,"SELECT * from settings where status='active'")or die(mysqli_error());
		$row=mysqli_fetch_array($query);		
	
		$_SESSION['settings']=$row['settings_id'];
		$_SESSION['term']=$row['term'];
	  	$_SESSION['id']=$id;	
	  	$_SESSION['name']=$name;	
	  	$_SESSION['type']=$status;	
	  		
		  	if ($status=='admin')
		  		{
				  
				 	echo "<script type='text/javascript'>document.location='pages/home.php'</script>";
				 }
			  else
			  {

					//echo "<script type='text/javascript'>document.location='pages/faculty_home.php'</script>";
					// arahkan yang bukan admin ke halaman khusus asprak
				}
		  
	 
	
		// echo "<script type='text/javascript'>document.location='pages/home.php'</script>";
	  }
}	 
?>
