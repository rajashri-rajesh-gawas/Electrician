<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>


<?php
use yii\heplers\Html;
?>

<section id="serv">
<div class="container-full">
	<h3 class="wthree_head">Services</h3>
	<p class="agileits_w3layouts_para w3_agile_para">Etiam malesuada odio vitae enim malesuada accumsan diam sed.</p>
</div>


<?php
	foreach ($srr as $key) {
		if($key['id']%2 != 0) {
?>
	<div class="agile-prod1">
		<div class="col-md-6 agile-sub">
			<h3><?php echo $key['heading'];?></h3>
			<p><?php echo $key['description'];?></p>
			<ul>
				<li><span class="icon alt major <?php echo $key['icon']; ?>" aria-hidden="true"></span><a href="#">Nullam tristique faucibus pharetra.</a>
				<li><span class="icon alt major <?php echo $key['icon']; ?>" aria-hidden="true"></span><a href="#">Pellentesque auctor</a>
				<li><span class="icon alt major <?php echo $key['icon']; ?>" aria-hidden="true"></span><a href="#">Labore et dolore magna aliqua</a>
			</ul>
		</div>
		<div class="col-md-6 agile-img">
			<img src="image/service/<?= $key->image_file ?>"  width="100%" height="405px">
		</div>
		<div class="clearfix"> </div>
	</div>
	<br>
	<br>

<?php
  }else{
  	?>

  	<div class="agile-prod1">
  	     <div class="col-md-6 agile-img">
			<img src="image/service/<?= $key->image_file ?>"  width="100%" height="405px">
		</div>
		<div class="col-md-6 agile-sub">
			<h3><?php echo $key['heading'];?></h3>
			<p><?php echo $key['description'];?></p>
			<ul>
				<li><span class="icon alt major <?php echo $key['icon']; ?>" aria-hidden="true"></span><a href="#">Nullam tristique faucibus pharetra.</a>
				<li><span class="icon alt major <?php echo $key['icon']; ?>" aria-hidden="true"></span><a href="#">Pellentesque auctor</a>
				<li><span class="icon alt major <?php echo $key['icon']; ?>" aria-hidden="true"></span><a href="#">Labore et dolore magna aliqua</a>
			</ul>
		</div>
		
		<div class="clearfix"> </div>
	</div>
	<br>
	<br>
 <?php
  }
	}
?>
</section>


