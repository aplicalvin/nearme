<?php 
echo $this->extend('layout/l_default');
echo $this->section('main_content');
?>
<div class="container py-3">
    <h1 class="font-heading">Daftar Hotel</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem sed distinctio modi delectus quaerat sit!</p>


    <!-- ============ FILTER ============ -->
    
    <div class="d-flex flex-row gap-3 card my-3 p-3 shadow-md">
        <h3>Filter</h3>
        <!-- current_url() berfungsi utk dapatkan link sebelumnya -->
        <form action="<?= current_url() ?>" method="get" class="mb-4">
            <div class="row g-3 align-items-end">
                <!-- City Filter -->
                <div class="col-md-3">
                    <label for="city" class="form-label fw-semibold" style="color: #075085;">City</label>
                    <select name="city" id="city" class="form-select shadow-sm" style="border-color: #0176C8; color: #075085;">
                        <option value="">All Cities</option>
                        <option value="Semarang">Semarang</option>
                        <option value="Surabaya">Surabaya</option>
                    </select>
                </div>
                
                <!-- Star Filter -->
                <div class="col-md-3">
                    <label for="star" class="form-label fw-semibold" style="color: #075085;">Hotel Rating</label>
                    <select name="star" id="star" class="form-select shadow-sm" style="border-color: #0176C8; color: #FFD700;">
                        <option value="">All Ratings</option>
                        <?php for ($i = 1; $i <= 5; $i++): ?>
                            <option value="<?= $i ?>">
                                <?= str_repeat('★', $i) ?>
                                <?php if ($i < 5): ?>
                                    <span class="text-muted"><?= str_repeat('★', 5 - $i) ?></span>
                                <?php endif; ?>
                            </option>
                        <?php endfor; ?>
                    </select>
                </div>

                <!-- Price Filter -->
                <div class="col-md-3">
                    <label for="price_range" class="form-label fw-semibold" style="color: #075085;">Price Range</label>
                    <select name="price_range" id="price_range" class="form-select shadow-sm" style="border-color: #0176C8; color: #075085;">
                        <option value="">All Prices</option>
                        <option value="0-500000">Under Rp 500,000</option>
                        <option value="500000-1000000">Rp 500,000 - 1,000,000</option>
                        <option value="1000000-2000000">Rp 1,000,000 - 2,000,000</option>
                        <option value="2000000">Above Rp 2,000,000</option>
                    </select>
                </div>
                
                <!-- Filter Button -->
                <div class="col-md-3 d-grid">
                    <button type="submit" class="btn fw-semibold shadow-sm" 
                            style="background-color: #0176C8; border-color: #0176C8; color: white; height: 38px;">
                        <i class="fas fa-filter me-2"></i>Apply Filters
                    </button>
                </div>
            </div>
        </form>

        <style>
            .form-select:focus, .btn:focus {
                box-shadow: 0 0 0 0.25rem rgba(1, 118, 200, 0.25);
                border-color: #035EA1;
            }
            
            .btn:hover {
                background-color: #035EA1 !important;
                border-color: #035EA1 !important;
            }
            
            .form-select option:hover {
                background-color: #0176C8 !important;
                color: white !important;
            }
        </style>
        
    </div>
    
    <!-- ============ FILTER DONE ============ -->
    
    <!-- ============ LIST ============ -->
        
    <section class="featured-hotels">
        <div class="row">
            <?php 
            for ($jmlku = 0; $jmlku < 12; $jmlku++) {
            //foreach ($hotels as $hotel): ?>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">

                <?= view('components/cs_card_hotel') ?> 
            </div>
            <?php } //endforeach; ?>
        </div>
    </section>
    <!-- ============ LIST DONE ============ -->

</div>




<?php echo $this->endSection() ?>
