<?php require('layout/header.php'); ?>
<?php require('layout/left-sidebar-long.php'); ?>
<?php require('layout/topnav.php'); ?>
<?php require('layout/left-sidebar-short.php'); ?>


<div class="section white-text" style="background: #B35458;font-family: IRANSans;" >

	<div class="section">
		<h3>اضافه کردن دسته بندی</h3>
	</div>


    <div class="section center" style="padding: 40px;">

        <form action="../backends/admin/cat-add.php" method="post">

            <?php

            if (isset($_SESSION['msg'])) {
                echo '<div class="row" style="background: red; color: white;">
                <div class="col s12">
                    <h6>'.$_SESSION['msg'].'</h6>
                    </div>
                </div>';
                unset($_SESSION['msg']);
            }

            ?>

            <div class="row">
                <div class="col s6" style="">
                            <div class="input-field">
                            <input dir="rtl" id="name" name="name" type="text" class="validate" style="color: white; width: 70%">
                            <label dir="rtl" for="name" style="color: white;"><b>توضیح کوتاه</b></label>
                            </div>
                </div>
                <div class="col s6" style="">
                            <div class="input-field">
                            <input dir="rtl" id="short_desc" name="short_desc" type="text" class="validate" style="color: white; width: 70%">
                            <label dir="rtl" for="short_desc" style="color: white;"><b>نام دسته</b></label>
                            </div>
                </div>
            </div>

            <div class="row">
                <div class="col s12">

                <div class="input-field">
                <input dir="rtl" id="long_desc" name="long_desc" type="text" class="validate" style="color: white; width: 70%">
                <label dir="rtl" for="long_desc" style="color: white;"><b>توضیح کامل</b></label>
                </div>
                
                </div>
            
            </div>

            <div class="row">
                <div class="col s12">
                    <div class="section left" style="padding: 15px 10px;">
                        <a style="font-family: IRANSans;"  href="category-list.php" class="waves-effect waves-light btn">انصراف</a>
                    </div>
                    <div class="section left" style="padding: 15px 20px;">
                        <button style="font-family: IRANSans;" type="submit" class="waves-effect waves-light btn">اضافه کردن</button>
                    </div>
                </div>
            </div>

        </form>


    </div>

</div>

<?php require('layout/about-modal.php'); ?>
<?php require('layout/footer.php'); ?>