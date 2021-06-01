<?php require APPROOT . '/views/inc/header.php'; ?>
    <div class="row">
        <div class="d-flex flex-column  p-4 fixed-top" style="width: 10%;">
            <ul class="nav nav-pills  mt-5 mx-auto">
                <li>
                    <a class="btn btn mt-4" href="#">
                        <img src="<?= URLROOT; ?>/icons/dashboard.svg" alt="..." class="sidebar-icon"></img>
                    </a>
                </li>
                <li>
                    <a class="btn btn mt-4" href="#">
                        <img src="<?= URLROOT; ?>/icons/contacts.svg" alt="..." class="sidebar-icon"></img>
                    </a>
                </li>
                <li>
                    <a class="btn btn mt-4" href="#">
                        <img src="<?= URLROOT; ?>/icons/inbox.svg" alt="..." class="sidebar-icon"></img>
                    </a>
                </li>
                <li>
                    <a class="btn btn mt-4" href="#">
                        <img src="<?= URLROOT; ?>/icons/graph.svg" alt="..." class="sidebar-icon"></img>
                    </a>
                </li>
                <li>
                    <a class="btn btn mt-4" href="#">
                        <img src="<?= URLROOT; ?>/icons/compress.svg" alt="..." class="sidebar-icon"></img>
                    </a>
                </li>
                <li>
                    <a class="btn btn mt-4" href="#">
                        <img src="<?= URLROOT; ?>/icons/settings.svg" alt="..." class="sidebar-icon"></img>
                    </a>
                </li>
                <li>
                    <a class="btn btn mt-4" href="<?= URLROOT; ?>/pages/index">
                        <img src="<?= URLROOT; ?>/icons/logout.svg" alt="..." class="sidebar-icon"></img>
                    </a>
                </li>
            </ul>
        </div>
        <div class="col">
            <div class="text-center">
                <div class="container mt-5">
                    <div class="d-flex justify-content-between">
                        <div>
                            <?php $name = $_SESSION['name']; ?>
                            <h5 class="card mb-3"><?= "Start a blog : $name, " ?></h5>
                        </div>
                        <div>
                            <a class="btn btn pull-right" href="<?= URLROOT ;?>/posts/add">Add+Blog</a>
                        </div>
                    </div>
                    <div>
                        <form class="form-inline d-flex justify-content-center mb-2 mt-2 fixed-top">
                            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-light pull-right" type="submit">
                                <img src="<?= URLROOT; ?>/icons/search.svg" alt="..." class="sidebar-icon"></img></button>
                        </form>
                    </div>
                </div>
                <?php foreach ($data['posts'] as $post) : ?>
                <div class="container card-header">
                    <div class="card mb-2" style="width: 100%;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="<?= URLROOT; ?>/img/bloging.jpg" alt="..." style="width: 350px"
                                    height="190px">
                            </div>
                            <div class="col-md-8">
                                <div>
                                    <a href="<?= URLROOT ;?>/posts/show/<?= $post->postId ;?>"
                                        class="btn btn pull-right">
                                        <img src="<?= URLROOT; ?>/icons/expand.svg" alt="..." class="sidebar-icon"></img></a>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title"><?= $post->title ;?></h5>
                                    <p class="card-text"><?= $post->body ;?></p>
                                    <p class="card-text"><small class="text-muted">Created By <?= $name ;?></small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container card-header">
                    <div class="card mb-2" style="width: 100%;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="<?= URLROOT; ?>/img/bloging.jpg" alt="..." style="width: 350px"
                                    height="190px">
                            </div>
                            <div class="col-md-8">
                                <div>
                                    <a href="<?= URLROOT ;?>/posts/show/<?= $post->postId ;?>"
                                        class="btn btn pull-right">
                                        <img src="<?= URLROOT; ?>/icons/expand.svg" alt="..." class="sidebar-icon"></img></a>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title"><?= $post->title ;?></h5>
                                    <p class="card-text"><?= $post->body ;?></p>
                                    <p class="card-text"><small class="text-muted">Created By <?= $name ;?></small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container card-header">
                    <div class="card mb-2" style="width: 100%;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="<?= URLROOT; ?>/img/bloging.jpg" alt="..." style="width: 350px"
                                    height="190px">
                            </div>
                            <div class="col-md-8">
                                <div>
                                    <a href="<?= URLROOT ;?>/posts/show/<?= $post->postId ;?>"
                                        class="btn btn pull-right">
                                        <img src="<?= URLROOT; ?>/icons/expand.svg" alt="..." class="sidebar-icon"></img></a>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title"><?= $post->title ;?></h5>
                                    <p class="card-text"><?= $post->body ;?></p>
                                    <p class="card-text"><small class="text-muted">Created By <?= $name ;?></small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container card-header">
                    <div class="card mb-2" style="width: 100%;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="<?= URLROOT; ?>/img/bloging.jpg" alt="..." style="width: 350px"
                                    height="190px">
                            </div>
                            <div class="col-md-8">
                                <div>
                                    <a href="<?= URLROOT ;?>/posts/show/<?= $post->postId ;?>"
                                        class="btn btn pull-right">
                                        <img src="<?= URLROOT; ?>/icons/expand.svg" alt="..." class="sidebar-icon"></img></a>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title"><?= $post->title ;?></h5>
                                    <p class="card-text"><?= $post->body ;?></p>
                                    <p class="card-text"><small class="text-muted">Created By <?= $name ;?></small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach ;?>
            </div>
        </div>
    </div>
    <?php require APPROOT . '/views/inc/footer.php'; ?>