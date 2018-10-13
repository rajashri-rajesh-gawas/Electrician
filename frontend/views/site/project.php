<?php
use yii\heplers\Html;
?>
<div class="container-full">
	<h3 class="wthree_head">Projects</h3>
	<p class="agileits_w3layouts_para w3_agile_para">Etiam malesuada odio vitae enim malesuada accumsan diam sed.</p>
</div>
<?php
	foreach ($pro as $key) {
?>
	<div class="col-md-4 w3_agile_gallery_grid">
		<div class="agile_gallery_grid">
			<a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/s1.jpg">
				<div class="agile_gallery_grid1">
					<!-- <img src="images/s1.jpg" alt=" " class="img-responsive" /> -->
					<img src="image/project/<?= $key->image_file ?>"  width="100%" height="250px">
						<div class="w3layouts_gallery_grid1_pos">
							<h3><?php echo $key['heading'];?></h3>
							<p><?php echo $key['description'];?></p>
						</div>
				</div>
			</a>
		</div>
		<br>
	</div>

<?php
	}
?>
