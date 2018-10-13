<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<div class="container">
	<h3 class="wthree_head">Icons</h3>
	<p class="agileits_w3layouts_para w3_agile_para">Etiam malesuada odio vitae enim malesuada accumsan diam sed.</p>
</div>

	<h3 class="agileits-icons-title">Font Awesome Icons</h3>
		<section id="new">
			<h3 class="page-header page-header icon-subheading">30 New Icons </h3>

			<div class="row fontawesome-icon-list">
				

					<?php
						foreach ($ico as $key) {
							if($key['id'] <= 34){
					?>
					<div class="icon-box col-md-3 col-sm-4">
						<a class="agile-icon" href="#">
							<i class="icon alt major <?php echo $key['icon']; ?>"></i>
							<h5><?php echo $key['name'];?></h5>
						</a>
					</div>
					<?php
						}else{
					?>

					<?php
  							}
						}
					?>			
			</div>
		</section>

		

			<div class="title ">
				<h3 class="page-header icon-subheading">Web Application Icons</h3>
			</div>
				<?php
					foreach ($ico as $key) {
						if($key['id'] > 34 && $key['id'] <= 272) {
				?>	
					<div class="icon-box col-md-3 col-sm-4">
						<a class="agile-icon" href="#">
							<i class="icon alt major <?php echo $key['icon']; ?>"></i>
							<h5><?php echo $key['name'];?></h5>
						</a>
					</div>
				<?php
  					}else{
  				?>	
  		
				<?php
  						}
					}
				?>			
			<div class="clearfix"></div>

		<div class="title margin-top">
			<h3 class="page-header icon-subheading">Form Control Icons</h3>
		</div>
			<?php
				foreach ($ico as $key) {
				if($key['id'] > 272 && $key['id'] <= 282) {
			?>	
				<div class="icon-box col-md-3 col-sm-4">
					<a class="agile-icon" href="#check-square">
						<i class="icon alt major <?php echo $key['icon']; ?>"></i>
					<h5><?php echo $key['name'];?></h5>
					</a>
				</div>
			<?php
  				}else{
  			?>	
  		
			<?php
  					}
				}
			?>			
			<div class="clearfix"></div>
			
		<div class="title  margin-top">
			<h3 class="page-header icon-subheading">Currency Icons</h3>
		</div>
			<?php
				foreach ($ico as $key) {
				if($key['id'] > 283 && $key['id'] <= 303) {
			?>	
				<div class="icon-box col-md-3 col-sm-4">
					<a class="agile-icon" href="#">
						<i class="icon alt major <?php echo $key['icon']; ?>"></i>
					<h5><?php echo $key['name'];?></h5>
					</a>
				</div>
			<?php
  				}else{
  			?>	
  		
			<?php
  					}
				}
			?>	
		<div class="clearfix"></div>

		<div class="title margin-top">
			<h3 class="page-header icon-subheading">Text Editor Icons</h3>
		</div>
			<?php
				foreach ($ico as $key) {
				if($key['id'] > 304 && $key['id'] <= 349) {
			?>	
			<div class="icon-box col-md-3 col-sm-4">
				<a class="agile-icon" href="#">
					<i class="icon alt major <?php echo $key['icon']; ?>"></i>
					<h5><?php echo $key['name'];?></h5>
				</a>
			</div>
			<?php
	  			}else{
	  		?>	
	  		
			<?php
	  				}
				}
			?>	
		<div class="clearfix"></div>

		<div class="title margin-top">
			<h3 class="page-header icon-subheading">Directional Icons</h3>
		</div>
			<?php
				foreach ($ico as $key) {
				if($key['id'] >= 350 && $key['id'] <= 402) {
			?>	
			<div class="icon-box col-md-3 col-sm-4">
				<a class="agile-icon" href="#">
					<i class="icon alt major <?php echo $key['icon']; ?>"></i>
					<h5><?php echo $key['name'];?></h5>
				</a>
			</div>
			<?php
	  			}else{
	  		?>	
	  		
			<?php
	  				}
				}
			?>	
		<div class="clearfix"></div>

		<div class="title margin-top">
			<h3 class="page-header icon-subheading">Video Player Icons</h3>
		</div>
			<?php
				foreach ($ico as $key) {
				if($key['id'] >= 403 && $key['id'] <= 418) {
			?>	
			<div class="icon-box col-md-3 col-sm-4">
				<a class="agile-icon" href="#">
					<i class="icon alt major <?php echo $key['icon']; ?>"></i>
					<h5><?php echo $key['name'];?></h5>
				</a>
			</div>
			<?php
	  			}else{
	  		?>	
	  		
			<?php
	  				}
				}
			?>	
		<div class="clearfix"></div>

		<div class="title margin-top">
			<h3 class="page-header icon-subheading">Brand Icons</h3>
		</div>
			<?php
				foreach ($ico as $key) {
				if($key['id'] >= 419 && $key['id'] <= 464) {
			?>	
			<div class="icon-box col-md-3 col-sm-4">
				<a class="agile-icon" href="#">
					<i class="icon alt major <?php echo $key['icon']; ?>"></i>
					<h5><?php echo $key['name'];?></h5>
				</a>
			</div>
			<?php
	  			}else{
	  		?>	
	  		
			<?php
	  				}
				}
			?>	
		<div class="clearfix"></div>

		<div class="title margin-top">
			<h3 class="page-header icon-subheading">Medical Icons</h3>
		</div>
			<?php
				foreach ($ico as $key) {
				if($key['id'] >= 465 && $key['id'] <= 472) {
			?>	
			<div class="icon-box col-md-3 col-sm-4">
				<a class="agile-icon" href="#">
					<i class="icon alt major <?php echo $key['icon']; ?>"></i>
					<h5><?php echo $key['name'];?></h5>
				</a>
			</div>
			<?php
	  			}else{
	  		?>	
	  		
			<?php
	  				}
				}
			?>	
		<div class="clearfix"></div>


		<div class="grid_3 grid_4">
				<h3 class="agileits-icons-title">Bootstrap Glyphicons</h3>
				<h3 class="page-header icon-subheading">Glyphicons</h3>
		</div>
		<div class="bs-glyphicons">
			<ul class="bs-glyphicons-list"> 
				<?php
					foreach ($ico as $key) {
					if($key['id'] >= 473) {
				?>
				<li>
					<span class="glyphicon <?php echo $key['icon']; ?>"></span>
					<span class="glyphicon-class"><?php echo $key['name'];?></span>
				</li>
				<?php
	  				}else{
		  		?>	
		  		
				<?php
		  				}
					}
				?>	

						

						<script src="js/jarallax.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
	<!-- //jarallax -->
	<script src="js/bootstrap.js"></script>