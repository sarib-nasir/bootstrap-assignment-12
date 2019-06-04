<?php define("TITLE","signup || souq"); ?>
<?php include("conn.php");?>
<?php include("header.php");?>
<?php
	
	if (isset($_POST['submit'])) {
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		if (!$firstname || !$lastname || !$email || !$password) {
			echo "all fields are required";
		}else{		
			$query = "INSERT INTO SOUQ (firstname, lastname, email, password) VALUES('$firstname','$lastname','$email','$password')";
			$data = mysqli_query($conn,$query);
			header("location:home.php");


			/*if ( false === $data ) {
			  	mysqli_error($conn);
			}
			else {
			  	echo 'done.';
			}                                                   
			if ($data) {
				echo "data inserted into data base";
			}else{
				echo "process failed";
			}
			echo var_dump($data);*/

													/* 	** checking where we are getting errors
														***  echo var_dump($data); helps in in identify error
														***  mysqli_error($conn)  helps in in identify error */

			
		}
	}


?>











<div id="section-3">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-sm-4">
				<div class="card">
					<div class="card-header">
						<h4 class="text-capitalize">sign-up</h4>
					</div>
					<div class="card-body">
						<form method="post" action="signup.php" id="form1">
							<form class="form-inline">
								<div class="row">
									<div class="col">
										<div class="form-group">
											<label class="text-capitalize">firstname:</label>
											<input type="text" name="firstname" class="form-control form-control-sm" placeholder="firstname" id="firstname" aria-describedby="firstname">
										</div>
									</div>
									<div class="col">
										<div class="form-group">
											<label class="text-capitalize">lastname:</label>
											<input type="text" name="lastname" class="form-control form-control-sm" placeholder="lastname" id="lastname" aria-describedby="lastname">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="form-group">
											<label class="text-capitalize">email:</label>
											<input type="text" name="email" class="form-control form-control-sm" placeholder="email" id="email" aria-describedby="email">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="form-group">
											<label class="text-capitalize">password:</label>
											<input type="password" name="password" class="form-control form-control-sm" placeholder="password" id="password" aria-describedby="password">
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col">
											<button type="submit" name="submit" class="btn btn-primary btn-sm w-100 d-block text-capitalize" role="button" id="submit">sign-up</button>
										</div>
									</div>
									
								</div>
							</form>
						</form>
					</div>
				</div>			
			</div>	
		</div>
	</div>
</div>






































<?php include("footer.php");?>