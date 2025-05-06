<?php echo $this->extend("layout/l_clean"); ?>
<?php echo $this->section("main_content"); ?>
<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow p-4" style="width: 100%; max-width: 400px;">
        <h3 class="card-title text-center mb-4">Login</h3>

        <!-- Tampilkan flash message jika ada -->
        <?php if(session()->getFlashdata('error')): ?>
            <div class="alert alert-danger">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>

        <form action="/login" method="post">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input 
                    type="email" 
                    class="form-control" 
                    id="email" 
                    name="email" 
                    required
                    placeholder="Masukkan email"
                >
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input 
                    type="password" 
                    class="form-control" 
                    id="password" 
                    name="password" 
                    required
                    placeholder="Masukkan password"
                >
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>

        <div class="text-center mt-3">
            <a href="/signup">Belum punya akun? Daftar di sini</a>
        </div>
    </div>
</div>
<?php echo $this->endSection() ?>
