<?php
    include_once('./templates/header.php');

    if(isset($_GET['id'])){
        $postId = $_GET['id'];

        $currentPost;

        foreach($posts as $post){
            if($post['id'] == $postId){
                $currentPost = $post;
            }
        }
    }
?>

<main id="post-container">
    <div class="content-container">
        <h1 id="main-title">
            <?= $currentPost['title'] ?>
        </h1>
        <p id="post-description">
            <?= $currentPost['description'] ?>
        </p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
        </div>
        <p class="post-content">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis eos dolorem velit incidunt tempora excepturi, itaque ipsum fugiat, commodi harum nam quasi minus voluptate neque quaerat quidem molestias nesciunt tenetur!
            Quos fuga nemo exercitationem tenetur repellat mollitia est quibusdam, eum voluptas recusandae pariatur reiciendis reprehenderit officiis dolore, velit consectetur, aperiam similique porro vitae adipisci! Vero similique dicta debitis perferendis error.
            Nisi veritatis accusamus eveniet quaerat, cumque nemo quo officia maiores doloremque quisquam possimus maxime reiciendis dicta assumenda. Quaerat fuga, iste, a soluta tenetur atque, quibusdam numquam assumenda fugiat asperiores sed!
            Officiis eligendi, dolores voluptate assumenda magnam similique cupiditate explicabo sint perspiciatis sequi, reprehenderit enim asperiores velit saepe et? Dolores, placeat fuga ea quia sequi magnam quam nesciunt quisquam itaque. Fuga!
            Magni dolor, nostrum dicta dolorem natus eius perspiciatis pariatur! Voluptate hic doloribus iure quaerat aperiam maxime expedita, mollitia nam error molestiae alias, laboriosam ullam fugit tenetur officiis, placeat non asperiores!
            <br>
            <br>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis eos dolorem velit incidunt tempora excepturi, itaque ipsum fugiat, commodi harum nam quasi minus voluptate neque quaerat quidem molestias nesciunt tenetur!
            Quos fuga nemo exercitationem tenetur repellat mollitia est quibusdam, eum voluptas recusandae pariatur reiciendis reprehenderit officiis dolore, velit consectetur, aperiam similique porro vitae adipisci! Vero similique dicta debitis perferendis error.
            Nisi veritatis accusamus eveniet quaerat, cumque nemo quo officia maiores doloremque quisquam possimus maxime reiciendis dicta assumenda. Quaerat fuga, iste, a soluta tenetur atque, quibusdam numquam assumenda fugiat asperiores sed!
            Officiis eligendi, dolores voluptate assumenda magnam similique cupiditate explicabo sint perspiciatis sequi, reprehenderit enim asperiores velit saepe et? Dolores, placeat fuga ea quia sequi magnam quam nesciunt quisquam itaque. Fuga!
            Magni dolor, nostrum dicta dolorem natus eius perspiciatis pariatur! Voluptate hic doloribus iure quaerat aperiam maxime expedita, mollitia nam error molestiae alias, laboriosam ullam fugit tenetur officiis, placeat non asperiores!
        </p>
    </div>
</main>
<aside id="nav-container">
    <h3 id="tags-title">Tags</h3>
    <ul id="tag-list">
        <?php foreach($currentPost['tags'] as $tag): ?>
            <li><a href="#"><?= $tag ?></a></li>
        <?php endforeach; ?>
    </ul>

    <h3 id="categories-title">Categorias</h3>
    <ul id="categories -list">
        <?php foreach($categories as $category): ?>
            <li><a href="#"><?= $category ?></a></li>
        <?php endforeach; ?>
    </ul>
</aside>

<?php
    include_once('./templates/footer.php');
?>