<section class="fnavbar">
		<div class="navbar-fixed">
		<nav>
		    <div class="nav-wrapper">
		      <a href="#" class="brand-logo">رستوران آنلاین</a>
		      <a style="font-family: IRANSans;" href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
		      <ul class="right hide-on-med-and-down">

		        <?php

		        	if (isset($_SESSION['user'])) {
		        		echo '<li><a href="#" class="hvr-grow">  '.$_SESSION['user'].' سلام </a></li>
		        		<li><a style="font-family: IRANSans;"  href="logout.php" class="hvr-grow">خروج</a></li>';
		        	} else {
		        		echo '<li><a style="font-family: IRANSans; href="#" class="hvr-grow modal-trigger" data-target="modal1">ورود</a></li>
		        		<li><a style="font-family: IRANSans; href="#" class="hvr-grow modal-trigger" data-target="modal2">عضویت</a></li>';
		        	}

		        ?>
                  <li><a style="font-family: IRANSans;"href="admin/index.php" class="hvr-grow">بخش مدیریت</a></li>
                  <li><a style="font-family: IRANSans;"href="/onlinerestoran/contact.php" class="hvr-grow" > تماس با ما</a></li>
                  <li><a style="font-family: IRANSans;"href="/onlinerestoran/about-restro-girls.php" class="hvr-grow">درباره ما</a></li>
                  <li><a style="font-family: IRANSans;"href="foods.php" class="hvr-grow">غذاها</a></li>
                  <li><a style="font-family: IRANSans;" href="food-categories.php" class="hvr-grow" >دسته بندی ها </a></li>
                  <li><a style="font-family: IRANSans;" href="/onlinerestoran" class="hvr-grow">صفحه اصلی</a></li>
		      </ul>
		    </div>
		  </nav>
		</div>

		  <ul class="sidenav" id="mobile-demo">
		    <li><a href="/onlinerestoran">صفحه اصلی</a></li>
	        <li><a href="food-categories.php">دسته بندی ها</a></li>
	        <li><a href="foods.php">غذاها</a></li>
			<li><a href="/onlinerestoran/about-restro-girls.php">درباره ما</a></li>
			<li><a href="/onlinerestoran/contact.php">تماس با ما</a></li>
			<li><a href="admin/index.php">بخش مدیریت</a></li>
	        

	        <?php

		        	if (isset($_SESSION['user'])) {
		        		echo '<li><a href="#">سلام, '.$_SESSION['user'].'</a></li>
		        		<li><a href="logout.php">خروج</a></li>';
		        	} else {
		        		echo '<li><a href="#" class="modal-trigger" data-target="modal1">ورود</a></li>
		        		<li><a href="#" class="modal-trigger" data-target="modal2">عضویت</a></li>';
		        	}

		        ?>
		  </ul>
	</section>