<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>
<div class="container card-header">
    <div class="card mb-3" style="max-width: 100%;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="<?= URLROOT; ?>/img/bloging.jpg" alt="..." style="width: 350px" height="190px">
            </div>
            <div class="col-md-8">
                <div>
                    <a class="btn btn pull-right" href="<?= URLROOT; ?>/posts"><img
                    src="<?= URLROOT; ?>/icons/compress.svg" alt="Back" class="sidebar-icon"></img></a>
                </div>
                <div class="text-center card-body">
                    <h5 class="card-title"><?=  $data['post']->title ;?></h5>
                    <p class="card-text"><?=  $data['post']->body ;?>.</p>
                    <p class="card-text"><small class="text-muted">Created By <?= $data['user']->name ;?></small></p>
                </div>
                <div>
                    <?php if($data['post']->user_id == $_SESSION['user_id']) : ?>
                    <div class="row">
                        <div class="col">
                            <a href="<?= URLROOT ;?>/posts/edit/<?= $data['post']->id ;?>"class="btn btn-primary btn-block">Edit</a>
                        </div>
                        <div class="col">
                            <form action="<?= URLROOT ;?>/posts/delete/<?= $data['post']->id ;?>" method="POST">
                                <input type="submit" class="btn btn-danger btn-block" value="Delete">
                            </form>
                        </div>
                    </div>
                    <?php endif ;?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>