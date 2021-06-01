<?php require APPROOT . '/views/inc/header.php'; ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6 col-sm-6 mx-auto mt-5">
                <div class="card-header">
                    <h2 class="text-center">Login</h2>
                </div>
                <div class="card-body">
                    <form method="post" action="<?= URLROOT; ?>/users/login">
                        <div class="form-group">
                            <labe>Email</labe>
                            <input type="email" name="email" class="form-control card-header">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password"class="form-control card-header">   
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <input type="submit" class="btn btn-light btn-block card-header" value="Login">
                                </div>
                                <div class="alert alert-light" role="alert">
                                    <a href="<?= URLROOT; ?>/users/register" class="alert-link">Go To Register
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php require APPROOT . '/views/inc/footer.php'; ?>