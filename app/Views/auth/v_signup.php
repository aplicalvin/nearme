<?php echo $this->extend("layout/l_clean"); ?>
<?php echo $this->section("main_content"); ?>

<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow p-4" style="width: 100%; max-width: 500px;">
        <h3 class="card-title text-center mb-4">Daftar Akun</h3>

        <form action="/register" method="post">
            <?= csrf_field() ?>

            <!-- Nama Lengkap -->
            <div class="mb-3">
                <label for="full_name" class="form-label">Nama Lengkap</label>
                <input
                    type="text"
                    class="form-control <?= session('errors.full_name') ? 'is-invalid' : '' ?>"
                    id="full_name"
                    name="full_name"
                    value="<?= old('full_name') ?>"
                    required
                    placeholder="Masukkan nama lengkap"
                />
                <?php if(session('errors.full_name')): ?>
                    <div class="invalid-feedback">
                        <?= session('errors.full_name') ?>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Username -->
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input
                    type="text"
                    class="form-control <?= session('errors.username') ? 'is-invalid' : '' ?>"
                    id="username"
                    name="username"
                    value="<?= old('username') ?>"
                    required
                    placeholder="Masukkan username"
                />
                <?php if(session('errors.username')): ?>
                    <div class="invalid-feedback">
                        <?= session('errors.username') ?>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input
                    type="email"
                    class="form-control <?= session('errors.email') ? 'is-invalid' : '' ?>"
                    id="email"
                    name="email"
                    value="<?= old('email') ?>"
                    required
                    placeholder="Masukkan email"
                />
                <?php if(session('errors.email')): ?>
                    <div class="invalid-feedback">
                        <?= session('errors.email') ?>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Nomor Telepon -->
            <div class="mb-3">
                <label for="phone" class="form-label">Nomor Telepon</label>
                <input
                    type="tel"
                    class="form-control <?= session('errors.phone') ? 'is-invalid' : '' ?>"
                    id="phone"
                    name="phone"
                    value="<?= old('phone') ?>"
                    placeholder="Contoh: 081234567890"
                />
                <?php if(session('errors.phone')): ?>
                    <div class="invalid-feedback">
                        <?= session('errors.phone') ?>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input
                    type="password"
                    class="form-control <?= session('errors.password') ? 'is-invalid' : '' ?>"
                    id="password"
                    name="password"
                    required
                    placeholder="Masukkan password"
                />
                <?php if(session('errors.password')): ?>
                    <div class="invalid-feedback">
                        <?= session('errors.password') ?>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Konfirmasi Password -->
            <div class="mb-3">
                <label for="pass_confirm" class="form-label">Konfirmasi Password</label>
                <input
                    type="password"
                    class="form-control <?= session('errors.pass_confirm') ? 'is-invalid' : '' ?>"
                    id="pass_confirm"
                    name="pass_confirm"
                    required
                    placeholder="Ulangi password"
                />
                <?php if(session('errors.pass_confirm')): ?>
                    <div class="invalid-feedback">
                        <?= session('errors.pass_confirm') ?>
                    </div>
                <?php endif; ?>
            </div>

            <button type="submit" class="btn btn-success w-100">Daftar</button>

            <div class="mt-3 text-center">
                Sudah punya akun? <a href="/login">Login disini</a>
            </div>
        </form>
    </div>
</div>


<?php echo $this->endSection() ?>
