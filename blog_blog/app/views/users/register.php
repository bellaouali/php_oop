<?php require APPROOT . '/views/inc/header.php'; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-6 mx-auto mt-5">
                <div class="card-header">
                    <h2 class="text-center">Register</h2>
                </div>
                <form method="post" action="<?= URLROOT ;?>/users/register">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control card-header">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control card-header">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control card-header">
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <input type="submit" class="btn btn-light btn-block pull-left card-header"
                                    value="Resgister">
                            </div>
                            <div class="alert alert-light" role="alert">
                                <a href="<?= URLROOT; ?>/users/login" class="alert-link">Go To Login </a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php require APPROOT . '/views/inc/footer.php'; ?>