
   <section class="container clearfix">
        <aside role="complementary">
            <h2>Addtional info</h2>
            <p>Vestibulum viverra <strong>consectetur enim vel rutrum</strong>. Mauris hendrerit sodales congue. Etiam malesuada nibh id sapien tincidunt vitae rhoncus nunc tincidunt.</p>
            <p>Curabitur posuere libero sit amet est tristique egestas. Duis porta tempor tristique. Nam in erat sed leo lacinia vestibulum vitae in ipsum.</p>
            <p><a href="#">Jump now <span class="icon">:</span></a></p>
        </aside>
		
        <article class="post content">
            <ul class="post-list">
 <?php	
		$posts = getAllPosts();	
			if ($posts) {
				for ($i = 0; $i < count($posts); $i++) {
					$id = $posts[$i]["id"];
					$title = $posts[$i]["title"];
					$pre = $posts[$i]["pre"];
					$date = $posts[$i]["date"];
?>	
				<li>
                    <h2><a href="index.php?post=<?=$id?>"><?=$title?></a></h2>
                    <p class="meta"><?=$date?> | Автор:<a href="#">vamist</a></p>
                    <img src="uploads/post/<?=$id?>.jpg" alt="<?=$title?>" HEIGHT="100">
                    <p> <?=$pre?></p>
                    <p><a href="index.php?post=<?=$id?>" class="more-link">Читать дальше... <span class="icon">:</span></a></p>
                </li>
<?php			}	
			}?>
            </ul>
        </article>
   </section>
