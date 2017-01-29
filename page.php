<div class="columns">   
	<section class="container">
<?php	
	$categorys = getAllCategorys($id);	
	if ($categorys) {
		for ($i = 0; $i < count($categorys); $i++) {
			$id = $categorys [$i]["id"];
			$name = $categorys [$i]["name"];
		if($i % 4 == 0) {	?>
	</section>
	<section class="container">
<?php	}
?>
			   <article>
				 <figure>
					<a href="index.php?category=<?=$id?>"><img src="uploads/category/<?=$id?>.jpg" alt="Подарки <?=$name?>" >
					 <figcaption>
					 <h3>Подарки <?=$name?></h3>
					 </a>
					 </figcaption>
				 </figure>
			   </article>
<?php 	} 
	}
	else	{
		$products = getAllProducts($id);
				if ($products) {
					for ($i = 0; $i < count($products); $i++) {
						$id = $products [$i]["id"];
						$name = $products [$i]["name"];
?>
						   <article>
							 <figure>
								<a href="index.php?product=<?=$id?>"><img src="uploads/product/<?=$id?>/main.jpg" alt="<?=$name?>">
								 <figcaption>
								 <h3><?=$name?></h3>
								 </a>
								 </figcaption>
							 </figure>
						   </article>
			<?php 	} 
				}
				else echo "<h2>В этой категории товаров нет</h2>";
	}
?>
     </section>
</div> <!-- //.columns -->
        <ul class="thumb-rotator">
         <li><a href=""><img src="" alt="" ></a></li>
         <li><a href=""><img src="" alt="" ></a></li>
         <li><a href=""><img src="" alt="" ></a></li>
         <li><a href=""><img src="" alt="" ></a></li>
         <li><a href=""><img src="" alt="" ></a></li>
       </ul>