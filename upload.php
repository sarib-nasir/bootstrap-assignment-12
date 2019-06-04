<?php define("TITLE","upload || souq"); ?>
<?php include("header.php"); ?>
<?php include("conn.php"); ?>

<?php foreach ($product_catagories as $key => $catagory) {?>
	<option value="<?php echo $product_catagories['id'];?>"><?php echo  $product_catagories['Title'];?></option>
<?php } ?>





<!-- <select id="catagory" class="form-control" name="catagory">
	<?php foreach ($product_catagories as $key => $catagory) {?>
		<option value="<?php echo $product_catagories['id'];?>">
			<?php echo $product_catagories['Title'];?>		
		</option>
	<?php } ?>
	<option class="text-capitalize">catagory</option>
	<option class="text-capitalize">mobile & tech</option>
	<option class="text-capitalize">laptops</option>
	<option class="text-capitalize">tools</option>
	<option class="text-capitalize">make up</option>
	<option class="text-capitalize">accessoires</option>
</select> -->







<!-- <?php foreach ($product_catagories as $key => catagory) {?>
											<option value="<?php echo $product_categories['id'];?>">
												<?php echo $product_categories['title'];?>		
											</option>
										<?php } ?>  -->





										<!-- <?php while ($display = mysqli_fetch_assoc($reg)) {
											echo "<option value=".$product_categories['id'].">
												".$product_categories['title']."		
											</option>";
										} ?> -->




										<!-- <?php foreach ($display as $key => $catagory) {
											echo "<option value=".$product_categories['id'].">
												".$product_categories['title']."		
											</option>";
										} ?> -->

<?php include("footer.php"); ?>