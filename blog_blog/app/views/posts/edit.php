<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto mt-3">
            <div class="text-center">
                <div>
                    <a class="btn btn pull-right" href="<?= URLROOT; ?>/posts"><img
                    src="<?= URLROOT; ?>/icons/return.svg" alt="Back" class="sidebar-icon"></img></a>
                </div>
                <div class="card-header">
                    <h2>Edit</h2>
                </div>
                <div class="card-body">
                    <form method="post" action="<?= URLROOT ;?>/Posts/edit/<?= $data['id'] ;?>">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control card-header"
                                value="<?= $data['title'] ;?>">
                        </div>
                        <div class="form-group">
                            <label for="password">Body</label>
                            <textarea type="text" name="body"
                                class="form-control card-header"><?= $data['body'] ;?>
                            </textarea>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <input type="submit" class="btn btn-secondary btn-block pull-left" value="Update">
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