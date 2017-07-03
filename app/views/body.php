<!DOCTYPE html>
<html lang="ru" id="body">
<head><!---->
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=no, maximum-scale=1.0"/>
	<meta name="HandheldFriendly" content="True"/>
  <meta http-equiv="Cache-Control" content="no-cache"/>
  <meta name="apple-mobile-web-app-capable" content="yes"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta http-equiv="msthemecompatible" content="no"/>
	<meta charset="utf-8">
	<?php
	$routes = explode('/',$_SERVER['REQUEST_URI']);
		if ($routes[1] == 'bigLib') {
		$firstRout = 2;
		$secondRout = 3;
		$bigLibPrefix = "/bigLib";
	}else{
		$firstRout = 1;
		$secondRout = 2;
		$bigLibPrefix ="";
	}
	?>
	<link rel="shortcut icon" href="<?php echo $bigLibPrefix;?>/img/logoIco.png" type="image/png">
	<!--///////////////////////////////////////-->
	<!--///////////Options/////////////////////-->
	<!--///////////////////////////////////////-->
	<title>Большая библиотека</title>
  <link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<link href="<?php echo $bigLibPrefix;?>/css/main.css" rel="stylesheet" type="text/css">



	<!--///////////////////////////////////////-->
	<!--///////////Links///////////////////////-->
	<!--///////////////////////////////////////-->
</head>
<body>
<div class="membrane_for_modal">
</div>
<div class="setings">
<?php if (!isset($_SESSION['login_on'])/*!= 1*/): ?>
		<p class="no_cog">Sign in to add articles.</p>
	<?php else:?>
		<div class="cog_wrap">
			<div><i class="fa fa-cogs gear" aria-hidden="true"></i></div>
			<div class="cog_menu">
				<p >Chose a section to add:</p>
				 <div class="line_delim_cog_menu"></div>
				 <ul>
					 <a href="<?php echo $bigLibPrefix;?>/addArticles/articles_it"><li>IT</li></a>
					 <a href="<?php echo $bigLibPrefix;?>/addArticles/articles_marketing"><li>Marketing and advertising</li></a>
					 <a href="<?php echo $bigLibPrefix;?>/addArticles/articles_space"><li>Science</li></a>
					 <a href="<?php echo $bigLibPrefix;?>/addArticles/articles_lists"><li>Other</li></a>
				 </ul>
			</div>
		</div>

 <?php endif; ?>


<div class="line_delim line_delim_two"></div>

  <div class="authorization">
	
		<?php if (!isset($_SESSION['login_on']) /*!= 1*/):?>
    <form method="POST" class="formAuth" action="<?php echo $bigLibPrefix;?>/autorization">
      <p class="input_name">User Login</p>
        <input class="input_user_inform" name="log_login" type="">
      <p class="input_name">User Password</p>
        <input class="input_user_inform" name="log_pass" type="password">
        <a href="#" class="registration registration_two">Login<input class="input input_button_login" name="submit_login" type="submit" value="Login"></a>
        <a href="../Registration" class="registration">Regist</a>
          <!--<input class="input inputButtonTwo" type="submit" value="Regist" >-->
   	</form>
	<?php else: ?>
			<p class="bot"><?php echo $indexData['helloText']?><strong> <?php echo $indexData['userName'];?></strong>!</p>
			<form action="<?php echo $bigLibPrefix;?>/autorization" method="POST">
				<a href="<?php echo $bigLibPrefix;?>" class="registration registration_two exit">Exit
					<input class="input input_button_login" name="exit_login" type="submit" value="Login">
				</a>
			</form>
		<?php endif; ?>
   </div>
   <div class="line_delim"></div>
   <div class="search">
 		<form action="../search" method="POST">
 			<input type="text" placeholder="Search" name="searchQuery" class="search_input">
 			<div class="search_button" type="submit" ><i class="fa fa-search fa_symbol_search" aria-hidden="true"></i></div>
      <p class="search_values">Search in</p>
      <div class="checkbox_wrap">
        <input type="radio" name="articleSelect" value="All" class="checkbox" checked="" style="margin-left:0px;">
        <p class="check_name">All</p>
        <input type="radio" name="articleSelect" value="articles_it" class="checkbox">
        <p class="check_name">IT</p>
        <input type="radio" name="articleSelect" value="articles_marketing" class="checkbox">
        <p class="check_name">Marketing</p>
        <input type="radio" name="articleSelect" value="articles_space" class="checkbox">
        <p class="check_name">Science</p>
        <input type="radio" name="articleSelect" value="articles_lists" class="checkbox">
        <p class="check_name">Lists</p>
      </div>
      <p class="search_values search_values_by">Search by</p>
      <div class="checkbox_wrap">
        <input type="radio" name="search_by" value="name" class="checkbox" checked="" style="margin-left:0px;">
        <p class="check_name">Name</p>
        <input type="radio" name="search_by" value="author" class="checkbox">
        <p class="check_name">Author</p>
        <input type="radio" name="search_by" value="comment" class="checkbox">
        <p class="check_name">Comment</p>
      </div>
 		</form>
 	</div>
</div>
<nav class="menu">
	<!--<a href="<?php echo $bigLibPrefix;?>/">	<img src="<?php echo $bigLibPrefix;?>/img/<?php/* if ($_SESSION['inversion_on']==1):*/?>logoAdd.png<?php /*else:*/?>logo.png<?php /*endif;*/?>" class="logoMenu" /></a>-->
		<a href="<?php echo $bigLibPrefix;?>/">	<img src="<?php echo $bigLibPrefix;?>/img/logo.png" class="logoMenu" />
	<!--<div class="horizontal_line_delim"></div>-->

	<!--<div class="horizontal_line_delim"></div>-->
	<a class="paragraph_header" id="ITinform">
		<li class="paragraph_open paragraph_openIt">IT technologies</li>
	</a>
	<div class="paragraph_wrap close paragraph_wrap_it_h" id="paragraphWrapIt">
		<ul class="paragraph">
			<a href="<?php echo $bigLibPrefix;?>/articles_it/htmlAndCss"><li>HTML & CSS</li></a>
			<a href="<?php echo $bigLibPrefix;?>/articles_it/JS"><li>JavaScript</li></a>
			<a href="<?php echo $bigLibPrefix;?>/articles_it/PHP"><li>PHP</li></a>
			<a href="<?php echo $bigLibPrefix;?>/articles_it/CMS"><li>CMS</li></a>
			<a href="<?php echo $bigLibPrefix;?>/articles_it/Python"><li>Python</li></a>
			<a href="<?php echo $bigLibPrefix;?>/articles_it/CAndC++"><li>C/C++</li></a>
			<a href="<?php echo $bigLibPrefix;?>/articles_it/GameDev"><li>GameDev</li></a>
			<a href="<?php echo $bigLibPrefix;?>/articles_it/2Dand3Dmodeling"><li>2D/3D modeling</li></a>
			<a href="<?php echo $bigLibPrefix;?>/articles_it/Hardware"><li>hardware</li></a>
			<a href="<?php echo $bigLibPrefix;?>/articles_it/NeuralNetworks"><li>Neural networks</li></a>
			<a href="<?php echo $bigLibPrefix;?>/articles_it/Cryptography"><li>Cryptography</li></a>
			<a href="<?php echo $bigLibPrefix;?>/articles_it/Other_it"><li>Other</li></a>
		</ul>
	</div>
	<a class="paragraph_header" id="MAbt">
		<li class="paragraph_open">Marketing and advertising</li>
	</a>
	<div class="paragraph_wrap close paragraph_wrap_ba_h" id="paragraphWrapMA">
		<ul class="paragraph">
			<a href="<?php echo $bigLibPrefix;?>/articles_marketing/Marketing"><li>Marketing</li></a>
			<a href="<?php echo $bigLibPrefix;?>/articles_marketing/Advertising"><li>Advertising</li></a>
		</ul>
	</div>
	<a class="paragraph_header" id="SpaceInform">
		<li class="paragraph_open">Science</li>
	</a>
	<div class="paragraph_wrap close paragraph_wrap_space_h" id="paragraphWrapSpace">
		<ul class="paragraph">
			<a href="<?php echo $bigLibPrefix;?>/articles_space/Films_Space"><li>Films</li></a>
			<a href="<?php echo $bigLibPrefix;?>/articles_space/Articles"><li>Articles</li></a>
			<a href="<?php echo $bigLibPrefix;?>/articles_space/Other_Space"><li>Other</li></a>
		</ul>
	</div>
	<a class="paragraph_header" id="ListInform"><li class="paragraph_open">Other</li></a>
	<div class="paragraph_wrap close paragraph_wrap_list_h" id="paragraphWrapList">
		<ul class="paragraph">
			<a href="<?php echo $bigLibPrefix;?>/articles_lists/Films"><li>Films</li></a>
			<a href="<?php echo $bigLibPrefix;?>/articles_lists/Literature"><li>Literature</li></a>
			<a href="<?php echo $bigLibPrefix;?>/articles_lists/Picture"><li>Picture</li></a>
			<a href="<?php echo $bigLibPrefix;?>/articles_lists/Painting"><li>Painting</li></a>
		</ul>
	</div>
		<div class="horizontal_line_delim" style="margin-top:20px"></div>
		<div class="close_menu_button">
			 < >
		</div>

</nav>
<div class="main">
<?php include 'app/views/'.$contentView;?>
</div>
<div class="buttonWrap">Click to open <p style="opacity:0;display:inline;">_</p> /<p style="opacity:0;display:inline;">_</p>close menu</div>
<script type="text/javascript" src="<?php echo $bigLibPrefix;?>/app/views/javascripts/javascript.js"></script>
<script type="text/javascript" src="<?php echo $bigLibPrefix;?>/app/views/javascripts/javascript_articles.js"></script>
</body>
</html>
