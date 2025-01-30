<?php require('layout/header.php'); ?>
<?php require('layout/left-sidebar-long.php'); ?>
<?php require('layout/topnav.php'); ?>
<?php require('layout/left-sidebar-short.php'); ?>


<?php

require('../backends/connection-pdo.php');

$sql = 'SELECT * FROM categories';

$query  = $pdoconn->prepare($sql);
$query->execute();
$arr_all = $query->fetchAll(PDO::FETCH_ASSOC);



?>
						

<div class="section white-text" style="background: #B35458;font-family: IRANSans;">

	<div class="section">
		<h3>دسته بندی ها</h3>
	</div>

  <?php

    if (isset($_SESSION['msg'])) {
        echo '<div class="section center" style="margin: 5px 35px;"><div class="row" style="background: red; color: white;">
        <div class="col s12">
            <h6>'.$_SESSION['msg'].'</h6>
            </div>
        </div></div>';
        unset($_SESSION['msg']);
    }

    ?>

	<div class="section left" style="padding: 15px 25px;">
		<a href="category-add.php" class="waves-effect waves-light btn">اضافه کردن دسته بندی جدید</a>
	</div>
	
	<div class="section center" style="padding: 20px;">
		<table class="centered responsive-table">
        <thead>
          <tr>
              <th>عملیات</th>
              <th>توضیح کامل</th>
              <th>توضیح کوتاه</th>
              <th> نام دسته</th>

          </tr>
        </thead>

        <tbody>
          <?php

            foreach ($arr_all as $key) {

          ?>
          <tr>
              <td><a href="../backends/admin/cat-delete.php?id=<?php echo $key['id']; ?>"><span class="new badge" data-badge-caption="">حذف</span></a></td>
            <td><?php echo $key['long_desc']; ?></td>
              <td><?php echo $key['short_desc']; ?></td>
              <td><?php echo $key['name']; ?></td>

          </tr>

          <?php } ?>
         
        </tbody>
      </table>
	</div>
</div>

<?php require('layout/about-modal.php'); ?>
<?php require('layout/footer.php'); ?>