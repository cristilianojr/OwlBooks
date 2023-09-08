<?php
require_once('templates/header.php');

    if (isset($_GET['id'])) {
        $postId = $_GET['id'];
        $currentPost;

        foreach ($posts as $post) {
            if ($post['id'] == $postId) {
                $currentPost = $post;
                $content = $currentPost['content'];
            }
        }
    }

?>
<main>
    <div id="title-container">
            <h1><?php echo $currentPost['title'] ?></h1>
            <hr>
    </div>
    <img class="post-content-image" src="<?php echo get_image($currentPost['image']) ?>?v=<?php echo microtime() ?>" alt="<?php echo $currentPost['title'] ?>">
    <div id="post-content">
        <?php foreach ($content as $paragraph): ?>
            <p class="post-content-paragraph"><?php echo $paragraph ?></p><br>
        <?php endforeach ?>
    </div>
    <div class="post-content-categories">
        <?php foreach ($currentPost['tags'] as $tag):?>
            <a class="post-content-category-link" href="#"><?php echo $tag?></a>
        <?php endforeach ?> 
    </div>
</main>
<?php
require_once('templates/footer.php');
?>