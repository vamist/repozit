<?php require_once "functions.php";
$bredCrumbs = array('name', 'link');


 if (isset($_GET["category"])) {
	$crumb = "category";
	$id = $_GET["category"] ;
	include "header.php";		
	include "menu.php";	?>
        <article role="main" class="clearfix">
           <div class="post">
            <h2>Витрина подарков</h2>
        </article>
	  </section> <!-- // banner ends -->		
 <?php	include "page.php";
 } 
 
 elseif (isset($_GET["post"])) {
	$crumb = "post";
	$id = $_GET["post"] ;
	if ($id) {
		$post = getPost($id);
			$title = $post[0]["title"];
			$text = $post[0]["text"];
			$keywords = $post[0]["keywords"];
			$description = $post[0]["description"];	
			$name = $title;
		include "header.php";		
		include "menu.php";	
		echo  "</section>"; // banner end
		include "singl-post.php";		
	}
	else {
		$id=0;
		$name = "Все о подарках";
		include "header.php";		
		include "menu.php";
		include "blog.php";
	}
 }
 
 elseif (isset($_GET["product"])) {
	$crumb = "product";
	$id = $_GET["product"];
	$product = getProduct($id);
		$name = $product[0]["name"];
		$text = $product[0]["text"];
		$price = $product[0]["price"];
		$link = $product[0]["link"];
		$keywords = $product[0]["keywords"];
		$description = $product[0]["description"];
	include "header.php";		
	include "menu.php";	
	echo  "</section>"; // banner end
	include "singl-product.php";
 }
 
else   {  
	$crumb = "main";
	$name = "Главная";
	$id = 0;
	include "header.php";		
	include "menu.php";	
	include "main_post.php";	
	echo  "</section>"; // banner end
	include "page.php";	 
 } 
 setCrumb($crumb, $id);

	include "footer.php";	
?>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="assets/js/libs/jquery-1.7.1.min.js"><\/script>')</script>
  <script src="assets/js/script.js"></script>
</body>
</html>