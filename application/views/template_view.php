<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>

		<meta name="description" content="" />
		<meta name="keywords" content="" />

		
		<link rel="stylesheet" href="/css/fonts/firasans.css">
		<link rel="stylesheet" href="/css/fonts/font-awesome.css">

		<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
		<link href="http://fonts.googleapis.com/css?family=Kreon" rel="stylesheet" type="text/css" />

		<link rel="stylesheet" type="text/css" href="/css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="/css/style.css" />
		<link rel="stylesheet" type="text/css" href="/css/adjustment.css" />

		<link rel="stylesheet/less" type="text/css" href="/less/main.less">
<!--		<script src="/js/jquery-1.6.2.js" type="text/javascript"></script>-->
		<link href="/img/icon/mail.png" rel="shortcut icon" title="Обо мне"/>

		<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
		<meta name="viewport" content="width=device-width">

		<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.6.1/less.min.js"></script>
	</head>


	<body>
	<div class="wrapper">
		<div class="page-content">
			<header class="header">
				<div class="container">
					<div class="user">
						<div class="user__photo">
							<a class="user__avatar-pic" href="/"><img alt="image" class="my_face" src="/img/my_face3_1.png">
							</a>
						</div>
						<div class="user__name">
							Чернов Илья
						</div>
					</div>
					<div class="contacts">
						<a href="/contacts" class="contacts__trigger">Связаться со мной</a>

						
					</div>
				</div>
			</header>


			<div class="content">
				<div class="container clearfix">
					
							<?php include 'application/views/'.$content_view; ?>
					</div>
					<br class="clearfix" />
				</div>
			</div>
		</div>
	</div>

		<footer class="footer">
			<div class="container">
				<div class="copy">
					© Дизайн сайта был разработан в школе LoftSchool
				</div>
				<div class="socials">
					<ul class="socials__list">
						<li class="socials__item">
							<a href="http://www.facebook.com" class="socials__link socials__link_fb"></a>
						</li>
						<li class="socials__item">
							<a href="http://www.vk.com/leo_skyer" class="socials__link socials__link_vk"></a>
						</li>
						<li class="socials__item">
							<a href="http://www.twitter.com" class="socials__link socials__link_tw"></a>
						</li>
					</ul>
				</div>
			</div>
		</footer>

	</body>
</html>