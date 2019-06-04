<?php define("TITLE","souq"); ?>
<?php require("header.php"); ?>
<?php require("conn.php"); ?>

<?php 
	$query = "SELECT * FROM items ORDER BY id";
	$data = mysqli_query($conn,$query);
	$total = mysqli_num_rows($data);


 ?>



<?php require("navbar.php"); ?>
	
	<section id="section-2" class="section-2">
		<div class="container-fluid">
			<div id="carousel-control" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<a href="#"><img class="d-block w-100" src="images/sample1.jpg" alt="slides"></a>
					</div>
					<div class="carousel-item">
						<a href="#"><img class="d-block w-100" src="images/sample2.jpg" alt="slides"></a>
					</div>
					<div class="carousel-item">
						<a href="#"><img class="d-block w-100" src="images/sample3.jpg" alt="slides"></a>
					</div>
					<div class="carousel-item">
						<a href="#"><img class="d-block w-100" src="images/sample4.jpg" alt="slides"></a>
					</div>
					<div class="carousel-item">
						<a href="#"><img class="d-block w-100" src="images/sample5.jpg" alt="slides"></a>
					</div>
					<div class="carousel-item">
						<a href="#"><img class="d-block w-100" src="images/sample6.jpg" alt="slides"></a>
					</div>
					<div class="carousel-item">
						<a href="#"><img class="d-block w-100" src="images/sample7.jpg" alt="slides"></a>
					</div>
					<a class="carousel-control-prev" href="#carousel-control" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carousel-control" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">next</span>
					</a>
				</div>
			</div>	
			<div id="catagory-1" class="card-deck text-center mb-5">
				<div class="card">
					<a href="#"><img class="card-img-top" src="images/perfumes.jpg" alt="image"></a>
					<div class="card-body">
						<h4 class="card-text">
							Perfumes & Beauty
						</h4>
					</div>
				</div>
				<div class="card">
					<a href="#"><img class="card-img-top" src="images/speakers.jpg" alt="image"></a>
					<div class="card-body">
						<h4 class="card-text">
							Home entertainment
						</h4>
					</div>
				</div>
				<div class="card">
					<a href="#"><img class="card-img-top" src="images/furniture.jpg" alt="image"></a>
					<div class="card-body">
						<h4 class="card-text">
							Furniture
						</h4>
					</div>
				</div>
				<div class="card">
					<a href="#"><img class="card-img-top" src="images/laptop.jpg" alt="image"></a>
					<div class="card-body">
						<h4 class="card-text">
							Laptops & Cameras
						</h4>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div id="items" class="card-deck">
						<?php while ($display = mysqli_fetch_assoc($data)) { ?>
							<div  class='card'>
								<img class='card-img-top' src=" <?php echo $display["image"]; ?>"  width='80' height='170'>
								<div class='card-text'>
									<p class="ml-2"><?php echo $display['name']; ?></p>
									<span style='padding-left:5px;' class='fa fa-star checked'></span>
									<span class='fa fa-star checked'></span>
									<span class='fa fa-star checked'></span>
									<span class='fa fa-star'></span>
									<span class='fa fa-star  mb-3'></span>
									<h5 style='color: #0370cc; padding-left:5px;'><?php echo $display['price'] ; ?><span style='font-size:12px;'>AED</span><a href='cart.php' class='cart_button'><img src='images/cart.png' alt='cart' width='20' height='20' class=''></a></h5>
								</div>
							</div>
						<?php } ?>
					</div>	
				</div>
			</div>
			
		</div>
		
	</section>
	
		




<?php require("footer.php"); ?>