<?php 

function print_product($img,$price,$title) {

	$product = '<div class="pg-item" style="text-align:center; padding:10px; margin:25px;">
			<form action="index.php" method="POST" onsubmit="return false">
				<div class="product-img-box" style="justify-content: center; border: 2px solid rgba(122,183,245); border-radius:1000px; background-image:radial-gradient(white,rgba(193, 219, 245),rgba(101,101,202,0.8))">
					<img src='.$img.' width="200px" height="200px" class="rounded-circle" style="margin:70px;">
				</div>
				<h3>'.$title.'</h3>
				<p id="product-description"><i>A basic descrption with a basic price:</i><b>'.$price.'</b></p>
				<button type="button" name="'.$title.'" class="btn btn-info">Add To Cart</button>
				<button type="button" name="Reviews" class="btn btn-warning" onclick="">Reviews</button>
			</form>
		</div>';
		echo $product;
}


function print_breaks($amount){

	for ($i=0; $i<$amount;$i++){
		echo "<br>";
	}
}

function print_contact_form(){
	$form = '<h3>Need to contact us? Enter your email and a brief message and our team will get back to you within the next 24 hours. </h3>
			<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We\'ll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Messsage Us</label>
    <input type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-check">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
	';

	echo $form;
}
 ?>

 