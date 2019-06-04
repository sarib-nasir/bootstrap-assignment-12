<?php define("TITLE"," login || souq"); ?>
<?php include("conn.php");?>
<?php include("header.php");?>
<?php 
	session_start();
		if (isset($_POST['submit'])) {
			$email = $_POST['email'];
			$password = $_POST['password'];

			if (!$email || !$password) {
				echo "all fields are required";
			}else{
				$query = "SELECT * FROM SOUQ WHERE email = '$email' && password = '$password'";
				$data = mysqli_query($conn,$query);
				$result = mysqli_num_rows($data);
				if ($result == true) {
					header("location:home.php");
				}else{
					header('Location: index.php?login=error22');
				}
			}
		}
 ?>


<div id="section-3">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-sm-4">
				<div class="card">
					<div class="card-header">
						<h4 class="text-capitalize">log-in</h4>
					</div>
					<div class="card-body">
						<form method="post" action="login.php" id="form1">
							<form class="form-inline">
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
											<button type="submit" name="submit" class="btn btn-primary btn-sm w-100 d-block text-capitalize" role="button" id="submit">login</button>
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