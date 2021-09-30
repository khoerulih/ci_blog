<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">Khoerulih</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= base_url('/'); ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('/pages/about'); ?>">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('/pages/contact'); ?>">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('/komik'); ?>">Comic</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('/orang'); ?>">Orang</a>
        </li>
        <?php if(logged_in()) : ?>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('/logout'); ?>">Logout</a>
        </li>
        <?php else : ?>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('/login'); ?>">Login</a>
        </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>
