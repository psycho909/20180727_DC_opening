<?php include("./head.php"); ?>
<body>
<ul id="app">
	<?php include("./header.php"); ?>
	<?php include("./nav.php"); ?>
	<main>
		<section class="pagination-nav-wrap">
			<select id="select-page">
				<?php for($i=0;$i<16;$i++) { ?>
					<?php 
						if ($i == 0) {  
							$name="封面";
						} else if($i == 15) { 
							$name = "封底";  
						} else {
							$name = $i;
						}
					?>
					<?php if(isset($_GET['link'])) { ?>
						<?php if($_GET['link'] == $i) { ?>
							<option value="?link=<?php echo $i; ?>" selected><?php echo $name; ?></option>
						<?php } else { ?>
							<option value="?link=<?php echo $i; ?>"><?php echo $name; ?></option>
						<?php } ?>
					<?php } else { ?>
						<?php if($i == 0) { ?>
							<option value="?link=<?php echo $i; ?>" selected><?php echo $name; ?></option>
						<?php } else { ?>
							<option value="?link=<?php echo $i; ?>"><?php echo $name; ?></option>
						<?php } ?>
					<?php } ?>
				<?php } ?>
			</select>
			
			<ul class="pagination-nav">
			<?php for($i=0;$i<16;$i++) { ?>
				<?php 
					if ($i == 0) {  
						$name="封面";
					} else if($i == 15) { 
						$name = "封底";  
					} else {
						$name = $i;
					}
				?>
				<?php if(isset($_GET['link'])) { ?>
					<?php if($_GET['link'] == $i) { ?>
						<li><a class="select" href="?link=<?php echo $i; ?>"><?php echo $name; ?></a></li>
					<?php } else { ?>
						<li><a href="?link=<?php echo $i; ?>"><?php echo $name; ?></a>
					<?php } ?>
				<?php } else { ?>
					<?php if($i == 0) { ?>
						<li><a class="select" href="?link=<?php echo $i; ?>"><?php echo $name; ?></a></li>
					<?php } else { ?>
						<li><a href="?link=<?php echo $i; ?>"><?php echo $name; ?></a></li>
					<?php } ?>
				<?php } ?>
			<?php } ?>
			</ul>
			<div class="dm-pic">
				<?php for($i=0;$i<16;$i++) { ?>
					<?php if(isset($_GET['link'])) { ?>
						<?php if($_GET['link'] == $i) { ?>
							<?php if( $i >= 15 ) { ?>
								<a href="?link=<?php echo $i-1; ?>" class="left"></a>
								<img src="./images/dm/<?php echo $i; ?>.jpg" alt="">
							<?php } else if( $i > 0 ) { ?>
								<a href="?link=<?php echo $i-1; ?>" class="left"></a>
								<a href="?link=<?php echo $i+1; ?>" class="right"></a>
								<img src="./images/dm/<?php echo $i; ?>.jpg" alt="">
							<?php } else { ?>
								<a href="?link=<?php echo $i+1; ?>" class="right"></a>
								<img src="./images/dm/<?php echo $i; ?>.jpg" alt="">
							<?php } ?>
						<?php } ?>
					<?php } else { ?>
						<?php if($i == 0) { ?>
							<img src="./images/dm/0.jpg" alt="">
						<?php } ?>
					<?php } ?>
				<?php } ?>
			</div>
		</section>
		<?php include("./photo.php"); ?>
	</main>
	<?php include("./footer.php"); ?>
</div>
<?php include("./script.php"); ?>
</body>
</html>