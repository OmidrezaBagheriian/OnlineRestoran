
<?php

require('backends/connection-pdo.php');


if (isset($_REQUEST['id'])) {

	$sql = 'SELECT * FROM food WHERE cat_id = "'.$_REQUEST['id'].'"';
	
} else {

	$sql = 'SELECT * FROM food';

}

$query  = $pdoconn->prepare($sql);
$query->execute();
$arr_all = $query->fetchAll(PDO::FETCH_ASSOC);



?>


<section class="fcategories" style="font-family: IRANSans;">

	<div class="container">

		<?php

			if (isset($_SESSION['msg'])) {
				echo '<div class="section pink center" style="margin: 10px; padding: 3px 10px; margin-top: 35px; border: 2px solid black; border-radius: 5px; color: white;">
						<p><b>'.$_SESSION['msg'].'</b></p>
					</div>';

				unset($_SESSION['msg']);
			}
		?>

		<div class="section white center">
			<h3 style="font-family: IRANSans;" class="header">لیست غذاها</h3>
		</div>

		<?php if (count($arr_all) == 0) {
	echo '<div class="section gray center" style="border: 1px solid black; border-radius: 5px;">
			<p style="font-family: IRANSans;" class="header">متاسفانه هیچ دسته بندی برای نمایش وجود ندارد</p>
		</div>';
} else {  ?>

<?php for ($i=1; $i <= count($arr_all); ) { ?>
		
		<div class="row">
			
			<?php for ($j=1; $j <= 3; $j++) { ?>


				<?php if ($i+$j-2 == count($arr_all)) {
					break;
				}  ?>

			<div class="col s12 m4">
				<div class="card">
				    <div class="card-image waves-effect waves-block waves-light">
				      <img class="activator" src="images/banner<?php echo $j; ?>.jpg">
				    </div>
				    <div class="card-content">
				      <span style="direction: rtl;" class="card-title activator grey-text text-darken-4"><a class="black-text" href=""><?php echo $arr_all[$i+$j-2]['fname']; ?></a><i style="direction: ltr;" class="material-icons left">more_vert</i></span>
				      <div class="card-content">
			          <p style="font-family: IRANSans; direction: rtl; text-align: justify; text-justify: inter-word;">این یک غذای محبوب برای همه است. اکنون سفارش دهید تا یک پرس کامل از آن را بگیرید!</p>
			        </div>
			        <div class="card-content center">
			          <a href="backends/order-food.php?id=<?php echo $arr_all[$i+$j-2]['id']; ?>" style="background: #ee6e73;" class="btn waves-effect waves-block waves-light" href="">سفارش دهید</a>
			        </div>
				    </div>
				    <div class="card-reveal">
				      <span style="font-family: IRANSans;direction: rtl;" class="card-title grey-text text-darken-4"><?php echo $arr_all[$i+$j-2]['fname']; ?><i style="direction: ltr;" class="material-icons left">close</i></span>
				      <p style="font-family: IRANSans; direction: rtl; text-align: justify; text-justify: inter-word;"><?php echo $arr_all[$i+$j-2]['description']; ?></p>
				    </div>
				  </div>
			</div>

			<?php } ?>

			<?php $i = $i + 3; ?>


		</div>

		<?php
				}
			} 
		?>




	</div>
	
</section>