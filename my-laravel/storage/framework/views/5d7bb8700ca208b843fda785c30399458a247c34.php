<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark nav-pd">
    <div class="container">
        <a class="navbar-brand" href="bootsrap.html">
            <!-- <img src="Logo.png" width="30" height="30" class="d-inline-block align-top" alt=""> Enjoy Explore -->
        </a>
        <!-- <a class="navbar-brand" href="#">Navbar</a> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active mr-3 fs-7">
                    <a class="nav-link <?php echo e(($title === "Home") ? 'active' : ''); ?>" href="/home">Beranda <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item mr-3 fs-7">
                    <a class="nav-link <?php echo e(($title === "Pariwisata") ? 'active' : ''); ?>" href="#">Pariwisata</a>
                </li>
                <li class="nav-item mr-3 fs-7">
                    <a class="nav-link <?php echo e(($title === "TentangKami") ? 'active' : ''); ?>" href="#">Tentang Kami</a>
                </li>
            </ul>
        </div>
        <?php if(auth()->guard()->check()): ?>
        <form action="/logout" method="post">
            <?php echo csrf_field(); ?>
            <button class="btn ml-3 px-4 h-40 fs-7 btn-masuk text-white border-radius-none">Log out</button>
        </form>
        
        <a href="/dashboard/index">
            <button class="btn ml-3 px-4 h-40 fs-7 btn-white text-white">Profil</button>
        </a>
        <?php else: ?>    
        <a href="/login">
            <button class="btn ml-3 px-4 h-40 fs-7 btn-masuk text-white border-radius-none">Masuk</button>
        </a>
        <a href="/register">
            <button class="btn ml-3 px-4 h-40 fs-7 btn-white text-white">Daftar</button>
        </a>
        <?php endif; ?>
    </div>
</nav><?php /**PATH D:\Aplication\my-laravel\resources\views/partials/navbarbeforelogin.blade.php ENDPATH**/ ?>