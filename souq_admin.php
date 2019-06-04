<?php define("TITLE","admin || souq"); ?>
<?php require("header.php"); ?>
<?php require("conn.php"); ?>
<?php 
	$product_catagories = "SELECT * FROM `product_catagories`";
	$reg = mysqli_query($conn,$product_catagories);
	$result = mysqli_num_rows($reg);
	//$display = mysqli_fetch_assoc($reg);
	//echo var_dump($display);
	//echo var_dump($result);
	
	if (isset($_POST['submit1'])) {
		$name = $_POST['name'];
		$catagory = $_POST['catagory'];
		//$image = $_FILES["image"];
		$filename = $_FILES["image"]["name"];
		$temp_name = $_FILES["image"]["tmp_name"];
		$folder = "uploads/".$filename;
		move_uploaded_file($temp_name, $folder);
		//print_r($_FILES["image"]);
		$description = $_POST['description'];
		$price = $_POST['price'];
		$discount = $_POST['discount'];

		if ($name =="" || $catagory =="" || $folder  =="" ||$description =="" || $price =="" ||$discount =="") {
			echo "all fields should be filled";
		}else{
			$query = "INSERT INTO ITEMS (name, catagory, image, description, price, discount) VALUES('$name','$catagory','$folder','$description','$price','$discount')";
			$data = mysqli_query($conn,$query);

			/*if ( false === $data ) {
			  echo	mysqli_error($conn);
			}
			else {
			  	echo 'done.';
			} */
			/*if ($data) {
				echo "data inserted into data base";
			}else{
				echo "process failed";
			}*/
			//echo var_dump($product_catagories);
			//echo var_dump($_POST);
			//echo var_dump($_FILES);
		}
	}

?>
<!-- <?php require "navbar.php" ?> -->
<nav class="navbar navbar-expand-sm">
	<a href="index.php" class="navbar-brand text-uppercase">souq</a>
</nav>
<section id="section-4">
	<div class="container-fluid h-100">
		<div class="row h-100">
			<div class="col-sm-2 h-100" id="admin">
				<ul class="list-unstyled">
					<li><a href="#" class="text-capitalize">add item</a></li>
					<li><a href="#" class="text-capitalize">slider</a></li>
					<li><a href="#" class="text-capitalize">offers</a></li>
					<li><a href="#" class="text-capitalize">option 1</a></li>
					<li><a href="#" class="text-capitalize">option 2</a></li>
				</ul>
			</div>
			<div class="col-sm-10">
				<div class="col-sm-7">
					<form method="post" action="" enctype="multipart/form-data">
						<form class="form-inline">
							<h4 class="text-uppercase mb-5">add new item</h4>
							<div class="form-group">
								<input type="text" name="name" placeholder="enter item name" class="form-control form-control-sm mb-2" aria-describedby="itemname">
							</div>
							<div class="form-group">
								<select id="catagory" class="form-control js-example-basic-single" name="catagory">
									<?php while ($display = mysqli_fetch_assoc($reg)) {?>
										<option value="cat"><?php echo $display['title']; ?></option>
									<?php } ?>
								</select>
							</div>							
							<div class="form-group">
								<label for="files" class="btn btn-info btn-sm" ><i class="fas fa-upload mr-1"></i>Select file</label>
								<input type="file" name="image" placeholder="upload" id="files">
								<?php error_reporting(0); echo "<img src='$folder'  height='100' width='100'>"; ?>
							</div>
							<div class="form-group">
								<textarea type="text" name="description" placeholder="describe your product" class="form-control form-control-sm" aria-describedby="description"></textarea>
							</div>
							<div class="form-group">
								<input type="text" name="price" placeholder="price" class="form-control form-control-sm">
							</div>
							<div class="form-group">
								<input type="text" name="discount" placeholder="discount" class="form-control form-control-sm">
							</div>
							<div class="form-group">
								<button type="submit" name="submit1" class="btn btn-info btn-sm btn btn-info btn-sm">submit</button>
							</div>
						</form>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>


<?php  ?>

<?php require("footer.php"); ?>