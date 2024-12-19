<?php
    include_once("templates/header.php");

    if (isset($_GET['id'])) {
        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post){
            if ($post['id'] == $postId ) {
                $currentPost = $post;
            }
        }
    }
?>

<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?= $currentPost['title']?></h1>
        <p id="post-description"><?= $currentPost['description']?></p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title']?>">
        </div>
        <p class="post-content">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta non saepe in magnam adipisci ex earum ipsa natus quo aperiam repudiandae, ea illum quisquam nulla blanditiis? Inventore saepe qui asperiores!
            Officiis enim ratione facere amet repellendus suscipit ut culpa doloribus numquam, sequi quibusdam perspiciatis quidem aut est, labore perferendis voluptas modi tempora. Nesciunt debitis, distinctio perferendis officiis cumque ducimus dicta.
            Quos explicabo sapiente veritatis mollitia maxime, consequatur sed amet id autem praesentium minus minima ex rerum nesciunt animi cumque cum fugiat, repellat quibusdam laboriosam commodi. Laudantium fugit asperiores dolorum dolorem.
            Fuga blanditiis odit aut quas deleniti nobis consequatur? Odit maiores eligendi, accusantium sit magni veritatis debitis iure quidem tenetur labore atque minus quam doloremque molestiae maxime, tempore illum? Officia, animi!
            Saepe animi voluptates error repellat odio, consectetur fugiat, nam sint dolore atque ipsum tenetur rerum esse id veritatis reprehenderit. Repellat commodi quia eos error optio harum incidunt? Sed, dolorum voluptate.
        </p>
    </div>
<aside id="nav-container">
    <h3 id="tags-title">Tags</h3>
    <ul id="tags-list">
        <?php foreach($currentPost['tags'] as $tag): ?>
          <li>  <a href="#"><?= $tag ?></a></li>
        <?php endforeach; ?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
        <?php foreach($categories as $category): ?>
          <li>  <a href="#"><?= $category ?></a></li>
        <?php endforeach; ?>
        </ul>
</aside>

</main>

<?php
    include_once("templates/footer.php");
?>
