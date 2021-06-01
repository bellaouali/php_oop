<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="<?= URLROOT; ?>"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <img src="<?= URLROOT; ?>/img/blog.png" alt="" width="80" height="50">
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <?php if (isset($_SESSION['user_id'])) : ?>
            <span class="mr-3 text-dark align-self-center ">Welcome back, <?= $_SESSION['name'] ?></span>
            <a class="btn btn" href="<?= URLROOT; ?>/pages/index">
                <img src="<?= URLROOT; ?>/icons/logout.svg" alt="..." class="sidebar-icon"></img>
            </a>
            <?php endif; ?>
        </ul>
    </div>
</nav>