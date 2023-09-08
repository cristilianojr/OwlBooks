<?php
require_once("data/post.php"); 
require_once('templates/header.php');
?>
<main>
    <div id="title-container">
        <h1>Página principal</h1>
        <hr>
    </div>
    <div id="post-container">
        <?php foreach ($posts as $post):?>
            <div class="post">
                <img class="post-image" src="<?php echo get_image($post['image']) ?>?v=<?php echo microtime() ?>" alt="<?php echo $post['title'] ?>">
                <h2 class="post-title"><a href="<?php echo get_post_url($post['id']) ?>"><?php echo $post['title'] ?></a></h2>
                <p class="post-description"><?php echo $post['description'] ?></p>
                <div class="post-categories">
                    <?php foreach ($post['tags'] as $tag):?>
                        <a class="post-category-link" href="#"><?php echo $tag?></a>
                    <?php endforeach ?> 
                </div>
            </div>
        <?php endforeach ?>
    </div>
</main>
<?php
require_once('templates/footer.php');
?>