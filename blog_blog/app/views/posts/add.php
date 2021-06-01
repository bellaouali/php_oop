<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto mt-3">
            <div class="text-center">
                <div class="col">
                    <a href="<?= URLROOT ;?>/posts" class="btn btn-light pull-right card-header"><img src="<?= URLROOT; ?>/icons/return.svg" alt="Back" class="sidebar-icon"></img></a>
                </div>
                <div class="card-header">
                    <h2>Ceate Blog</h2>
                </div>
                <div class="card-body">
                    <form action="<?= URLROOT ;?>/Posts/add" method="POST">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control card-header">
                        </div>
                        <div class="form-group">
                            <label>Body</label>
                            <textarea type="text" name="body" class="form-control card-header"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <input type="submit" class="btn btn-secondary btn-block" value="Add">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>