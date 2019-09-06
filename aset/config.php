<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$conn=mysqli_connect("localhost","root","","ujikom");	

		function reg($data)
		{
			global $conn;
			$nama =strtolower(stripcslashes($data['nama']));
			$email = ($data['email']);
			$password =mysqli_real_escape_string($conn,$data['password']);
			$passwordd =mysqli_real_escape_string($conn,$data['passwordd']);

			$result = mysqli_query($conn,"SELECT nama FROM profile WHERE nama='$nama'");
				if(mysqli_fetch_assoc($result)){
					echo "<script>
							alert('Username sudah Terdaftar!');
						  </script>";

					return false;
				}

			if ($password !== $passwordd) {
				echo "<script>
						alert('Konfirmasi Password Salah!');
					  </script>";

				return false;
			}
				$password = password_hash($password,PASSWORD_DEFAULT);

				mysqli_query($conn, "INSERT INTO profile VALUES('','$nama','$email','$password')");
            	
				return mysqli_affected_rows($conn);	
		}
	?>
</body>
</html>