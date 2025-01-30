
<?php

require('backends/connection-pdo.php');

$sql = 'SELECT * FROM categories';

$query  = $pdoconn->prepare($sql);
$query->execute();
$arr_all = $query->fetchAll(PDO::FETCH_ASSOC);



?>


<section class="fcategories">

	<div class="container">

		<div class="section white center">
			<h3 style="font-family: IRANSans" class="header">دسته بندی غذاها</h3>
		</div>

<?php if (count($arr_all) == 0) {
	echo '<div class="section gray center" style="border: 1px solid black; border-radius: 5px;">
			<p style="font-family:IRANSans " class="header">متاسفانه هیچ دسته بندی وجود ندارد</p>
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
				    <div style="font-family: IRANSans;" class="card-content">
				      <span style="direction: rtl;" class="card-title activator grey-text text-darken-4"><a  class="black-text" href="foods.php?id=<?php echo $arr_all[$i+$j-2]['id']; ?>"><?php echo $arr_all[$i+$j-2]['name']; ?></a><i class="material-icons left">more_vert</i></span>
				      <div class="card-content">
			          <p style="font-family: IRANSans; direction: rtl; text-align: justify; text-justify: inter-word;"><?php echo $arr_all[$i+$j-2]['short_desc']; ?></p>

			        </div>
				    </div>
				    <div class="card-reveal">
				      <span style="font-family: IRANSans;direction: rtl;" class="card-title grey-text text-darken-4"><?php echo $arr_all[$i+$j-2]['name']; ?><i class="material-icons left">close</i></span>
				      <p style="font-family: IRANSans; direction: rtl; text-align: justify; text-justify: inter-word;"><?php echo $arr_all[$i+$j-2]['long_desc']; ?></p>
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