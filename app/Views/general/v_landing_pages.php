<?php echo $this->extend("layout/l_default"); ?>
<?php echo $this->section("main_content"); ?>

<!-- HERO SECTION -->

<section class="hero-section" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= base_url('assets/images/landing.png') ?>'); background-size: cover; background-position: center; padding: 160px 0; color: white; text-align: center;">
    <div class="container">
        <h1 class="font-heading" style="font-size: 3rem; margin-bottom: 20px;">Temukan Penginapan Terbaik di Dekatmu</h1>
        <p style="font-size: 1.2rem; max-width: 700px; margin: 0 auto 30px;">Booking hotel favorit dengan harga terjangkau di seluruh Indonesia bersama NearMe</p>
        
        <!-- Search Form -->
        <div class="search-box" style="background: white; padding: 20px; border-radius: 8px; max-width: 800px; margin: 0 auto; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
            <form action="<?= base_url('/search') ?>" method="get">
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" class="form-control form-control-lg" placeholder="Mau ke mana?" name="location" style="height: 50px;">
                    </div>
                    <div class="col-md-3">
                        <input type="date" class="form-control form-control-lg" name="checkin" style="height: 50px;">
                    </div>
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-primary w-100" style="height: 50px; background-color: #0176C8; border: none; color: #F6F6F6; font-weight: bold;">Cari Hotel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- HERO SECTION ENDS -->

<!-- DESTINASI POPULER -->
<!-- Berisikan daftar 4 kota dengan destinasi terpopular -->

<section class="popular-destinations" style="padding: 60px 0; background-color: #F8F9FA;">
    <div class="container">
        <h2 class="font-heading text-center mb-5">Destinasi Populer</h2>
        <div class="row">
            <!-- <?php for($jmlku = 0; $jmlku < 4; $jmlku++) { ?> -->
                <div class="col-md-3 mb-4">
                    <a href="dummy/semarang.jpg" 
                    class="destination-link" 
                    style="text-decoration: none; color: inherit;">
                        <div class="destination-card" style="border-radius: 8px; overflow: hidden; box-shadow: 0 4px 8px rgba(0,0,0,0.1); transition: transform 0.3s;">
                            <img src="/dummy/semarang.jpg" 
                                alt="Hotel di  semarang" 
                                style="width: 100%; height: 150px; object-fit: cover;">
                            <div class="p-3" style="background: white;">
                                <h5 class="font-heading mb-0">Kota Semarang</h5>
                                <small class="text-muted">3 hotel tersedia</small>
                            </div>
                        </div>
                    </a>
                </div>
            <!-- <?php } // endforeach; ?> -->
        </div>
    </div>
</section>

<!-- DESTINASI POPULER ENDS -->
<!--  -->

<!-- HOTEL POPULAR -->

<section class="featured-hotels" style="padding: 60px 0;">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="font-heading mb-0">Hotel Paling Populer</h2>
            <a href="<?= base_url('/hotels') ?>" class="btn btn-outline-dark">Lihat Semua</a>
        </div>
        
        <div class="row">
            <?php 
            for ($jmlku = 0; $jmlku < 4; $jmlku++) {
            //foreach ($hotels as $hotel): ?>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">

                <?= view('components/cs_card_hotel') ?> 
            </div>
            <?php } //endforeach; ?>
        </div>
    </div>
</section>

<!-- HOTEL POPULAR ENDS -->

<!-- HOTEL POPULAR -->

<section class="featured-hotels" style="padding: 60px 0;">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="font-heading mb-0">Hotel Paling Populer</h2>
            <a href="<?= base_url('/hotels') ?>" class="btn btn-outline-dark">Lihat Semua</a>
        </div>
        
        <div class="row">
            <?php 
            for ($jmlku = 0; $jmlku < 4; $jmlku++) {
            //foreach ($hotels as $hotel): ?>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">

                <?= view('components/cs_card_hotel') ?> 
            </div>
            <?php } //endforeach; ?>
        </div>
    </div>
</section>

<!-- HOTEL POPULAR ENDS -->

<?php echo $this->endSection() ?>