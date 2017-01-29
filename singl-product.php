
 
   <section class="container clearfix">
        <aside role="complementary">
			<div id="price">
			<?php echo "<h3>" . $price . " руб. </h3>"; ?> 
			</div>
			<div id="link">
			<a href="<?=$link?>" class="button left">К продавцу  <span class="icon">:</span></a>
			</div>

        </aside>
        <article class="post content">
            <h3><?=$name?></h3>
             <img src="uploads/product/<?=$id?>/1.jpg" alt="<?=$name?>" WIDTH="350">
<?php echo $text;?>
        </article>
   </section> 