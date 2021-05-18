<?php defined('_EXEC') or die; ?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="{$vkye_lang}">
	<head>
		<meta charset="UTF-8" />
		<meta content="text/html; charset=iso-8859-1" http-equiv="Content-Type" />
		{$dependencies.meta}
		<base href="{$vkye_base}">
		<title>{$vkye_title}</title>
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
		<meta name="author" content="codemonkey.com.mx" />
		<meta name="description" content="" />
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
		<link rel="stylesheet" href="https://cdn.codemonkey.com.mx/css/valkyrie.css" type="text/css" media="all" />
		<link rel="stylesheet" href="{$path.css}styles.css?v=1.1" type="text/css" media="all" />
		{$dependencies.css}
	</head>
	<body>
		<header id="desktop_menu" class="pos-fixed p-t-10 p-t-md-40 p-b-10 p-b-md-40" style="width:100%;transition:400ms;z-index:98;">
			<div class="container">
				<div class="row d-flex align-items-center">
					<div data-mobile-block class="col-4">
						<nav>
							<ul class="d-flex align-items-center justify-content-start list-unstyled">
								<li><a class="btn btn-link btn-light" data-action="open_mobile_menu"><i class="fas fa-bars"></i></a></li>
							</ul>
						</nav>
					</div>
					<div class="col-4 col-md-2">
						<figure>
							<img src="{$path.images}logotype_light.png" alt="Logotype" class="img-fluid">
						</figure>
					</div>
					<div data-desktop class="col-8 p-l-20">
						<nav>
							<ul class="d-flex align-items-center list-unstyled">
								<li class="m-r-15"><a href="#contact" class="text-uppercase text-light">{$lang.contact}</a></li>
								<li class="m-r-15"><a href="#brochure1" class="text-uppercase text-light">Brochure</a></li>
								<li class="m-r-15"><a href="#about" class="text-uppercase text-light">{$lang.about_development}</a></li>
								<li class="m-r-15"><a href="?lang=es" class="text-uppercase text-light"><strong>Es</strong></a></li>
								<li><a href="?lang=en" class="text-uppercase text-light"><strong>En</strong></a></li>
							</ul>
						</nav>
					</div>
					<div class="col-4 col-md-2">
						<figure data-desktop>
							<img src="{$path.images}neoterre_desktop.png" alt="Neoterre desktop logotype" class="img-fluid">
						</figure>
						<figure data-mobile-flex class="d-flex align-items-center justify-content-end p-r-20">
							<img src="{$path.images}neoterre_mobile.png" alt="Neoterre mobile logotype" style="width:40px;" class="img-fluid">
						</figure>
					</div>
				</div>
			</div>
		</header>
		<header id="mobile_menu" data-mobile-flex class="pos-fixed d-flex align-items-center justify-content-center" style="width:300px;height:100vh;left:-300px;background-color:#000;transition:400ms;z-index:99;">
			<nav class="pos-absolute" style="top:20px;left:20px;">
				<ul>
					<li><a data-action="close_mobile_menu" class="btn btn-link btn-light"><i class="fas fa-times"></i></a></li>
				</ul>
			</nav>
			<nav>
				<ul class="d-flex align-items-center flex-column list-unstyled">
					<li class="m-b-15"><a href="#contact" class="text-uppercase text-light">{$lang.contact}</a></li>
					<li class="m-b-15"><a href="#brochure1" class="text-uppercase text-light">Brochure</a></li>
					<li class="m-b-15"><a href="#about" class="text-uppercase text-light">{$lang.about_development}</a></li>
					<li><a href="?lang=es" class="m-r-20 text-uppercase text-light"><strong>Es</strong></a><a href="?lang=en" class="text-uppercase text-light"><strong>En</strong></a></li>
				</ul>
			</nav>
		</header>
