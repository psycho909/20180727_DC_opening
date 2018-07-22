<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>7/27 全新開幕！快來體驗：新潮 3C 科技∣ 全國電子DigitalCity中華東店</title>
	<link rel="stylesheet" href="./css/reset.css">
	<link rel="stylesheet" href="./css/jquery.fancybox.min.css">
	<link rel="stylesheet" href="./css/swiper.min.css">
	<link rel="stylesheet" href="./css/index.css">
	<script src="./js/jquery-3.1.1.min.js"></script>
	<script src="./js/jquery.fancybox.min.js"></script>
	<script src="./js/swiper.min.js"></script>
</head>
<body>
<ul id="app">
	<header></header>
	<nav>
		<div class="nav-wrap">
			<div class="nav-button">
				<svg version="1.1" id="menu" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 38 25" style="enable-background:new 0 0 38 25;" xml:space="preserve">
					<style type="text/css">
					.st0{fill:#FFFFFF;}
					</style>
					<g id="tops">
					<path class="st0" d="M35.5,5h-33C1.1,5,0,3.9,0,2.5v0C0,1.1,1.1,0,2.5,0h33C36.9,0,38,1.1,38,2.5v0C38,3.9,36.9,5,35.5,5z"></path>
					</g>
					<g id="middle">
					<path class="st0" d="M35.5,15h-33C1.1,15,0,13.9,0,12.5v0C0,11.1,1.1,10,2.5,10h33c1.4,0,2.5,1.1,2.5,2.5v0
						C38,13.9,36.9,15,35.5,15z"></path>
					</g>
					<g id="bottom">
					<path class="st0" d="M35.5,25h-33C1.1,25,0,23.9,0,22.5v0C0,21.1,1.1,20,2.5,20h33c1.4,0,2.5,1.1,2.5,2.5v0
						C38,23.9,36.9,25,35.5,25z"></path>
					</g>
				</svg>
			</div>
			<ul class="nav-box">
				<li><a href="index.php"># 活動首頁</a></li>
				<li><a href="openingdm.php?link=0"># 開幕慶手冊</a></li>
				<li><a href="charge.php"># 門號資費方案</a></li>
				<li><a href="bank.php"># 銀行加碼贈好禮</a></li>
				<li><a href="http://www.elifemall.com.tw/allnewweb/index.php" target="_blank"># 全國電子官網</a></li>
			</ul>
		</div>
	</nav>
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
							<img src="./images/dm/<?php echo $i; ?>.jpg" alt="">
						<?php } ?>
					<?php } else { ?>
						<?php if($i == 0) { ?>
							<img src="./images/dm/0.jpg" alt="">
						<?php } ?>
					<?php } ?>
				<?php } ?>
			</div>
		</section>
		<section class="photo">
			<div class="photo-swiper swiper-container">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<a data-fancybox="gallery" href="./images/photo/1.jpg"><img src="./images/photo/1.jpg"></a>
					</div>
					<div class="swiper-slide">
						<a data-fancybox="gallery" href="./images/photo/2.jpg"><img src="./images/photo/2.jpg"></a>
					</div>
					<div class="swiper-slide">
						<a data-fancybox="gallery" href="./images/photo/3.jpg"><img src="./images/photo/3.jpg"></a>
					</div>
					<div class="swiper-slide">
						<a data-fancybox="gallery" href="./images/photo/4.jpg"><img src="./images/photo/4.jpg"></a>
					</div>
					<div class="swiper-slide">
						<a data-fancybox="gallery" href="./images/photo/5.jpg"><img src="./images/photo/5.jpg"></a>
					</div>
					<div class="swiper-slide">
						<a data-fancybox="gallery" href="./images/photo/6.jpg"><img src="./images/photo/6.jpg"></a>
					</div>
					<div class="swiper-slide">
						<a data-fancybox="gallery" href="./images/photo/7.jpg"><img src="./images/photo/7.jpg"></a>
					</div>
					<div class="swiper-slide">
						<a data-fancybox="gallery" href="./images/photo/8.jpg"><img src="./images/photo/8.jpg"></a>
					</div>
					<div class="swiper-slide">
						<a data-fancybox="gallery" href="./images/photo/9.jpg"><img src="./images/photo/9.jpg"></a>
					</div>
				</div>
				<div class="swiper-pagination"></div>
			</div>
		</section>
	</main>
	<footer>全國電子股份有限公司 Copyright © elifemall.com.tw All rights reserved.</footer>
</div>
	<script src="./js/main.js"></script>
</body>
</html>