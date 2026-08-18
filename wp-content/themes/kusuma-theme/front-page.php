<?php
/**
 * The front page template file
 *
 * @package Kusuma_Craft
 */

get_header();
?>

<!-- Section 1: Hero -->
<section class="hero-section">
    <div class="hero-bg" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/images/hero_bg.png' ); ?>');"></div>
    <div class="container">
        <div class="hero-content">
            <h1>A Living Color Archive of Indonesia</h1>
            <p>Transforming domestic organic waste into natural colors, textiles, and crafted objects &mdash; preserving botanical color knowledge through everyday pieces.</p>
            <div class="hero-buttons">
                <a href="<?php echo esc_url( home_url( '/shop/' ) ); ?>" class="btn btn-primary">Shop Collection</a>
                <a href="<?php echo esc_url( home_url( '/color-archive/' ) ); ?>" class="btn btn-secondary">Explore Color Archive</a>
            </div>
        </div>
    </div>
</section>

<!-- Section 2: Brand Introduction -->
<section class="section brand-intro" style="background-color: var(--color-white); border-bottom: 1px solid var(--color-border);">
    <div class="container-narrow">
        <blockquote>"Setiap material bermula dari alam. Setiap warna menyimpan cerita. Setiap benda membawa cerita itu ke kehidupan sehari-hari."</blockquote>
        <p class="brand-intro-p">Kusuma adalah laboratorium kriya dan tekstil berkelanjutan yang mengeksplorasi pewarna alami dari limbah organik domestik, kulit buah, rempah lokal Indonesia, dan material tekstil. Melalui riset, workshop, dan proses buatan tangan, kami merawat pengetahuan warna botani untuk objek keseharian Anda.</p>
        <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="btn btn-secondary">Tentang Kusuma</a>
    </div>
</section>

<!-- Section 3: Featured Categories -->
<section class="section">
    <div class="container">
        <header style="text-align: center; margin-bottom: var(--spacing-lg);">
            <span style="font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.1em; color: var(--color-accent); font-weight: bold;">Koleksi Kami</span>
            <h2>Kategori Produk Artisan</h2>
        </header>

        <div class="categories-grid">
            <!-- Cat 1 -->
            <a href="<?php echo esc_url( home_url( '/shop/?category=textile' ) ); ?>" class="category-card">
                <div class="category-card-img" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/images/hero_bg.png' ); ?>');"></div>
                <div class="category-card-content">
                    <h3>Kain & Tekstil</h3>
                    <span>Jelajahi Koleksi</span>
                </div>
            </a>
            <!-- Cat 2 -->
            <a href="<?php echo esc_url( home_url( '/shop/?category=wearable' ) ); ?>" class="category-card">
                <div class="category-card-img" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/images/scarf.png' ); ?>');"></div>
                <div class="category-card-content">
                    <h3>Wearable Pieces</h3>
                    <span>Jelajahi Koleksi</span>
                </div>
            </a>
            <!-- Cat 3 -->
            <a href="<?php echo esc_url( home_url( '/shop/?category=workshop-kit' ) ); ?>" class="category-card">
                <div class="category-card-img" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/images/workshop_kit.png' ); ?>');"></div>
                <div class="category-card-content">
                    <h3>Workshop Kit</h3>
                    <span>Jelajahi Koleksi</span>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- Section 4: Color Archive Preview -->
<section class="section" style="background-color: var(--color-white); border-top: 1px solid var(--color-border); border-bottom: 1px solid var(--color-border);">
    <div class="container">
        <header style="text-align: center; margin-bottom: var(--spacing-lg);">
            <span style="font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.1em; color: var(--color-accent); font-weight: bold;">Living Lab</span>
            <h2>Arsip Warna Alami (Color Archive)</h2>
            <p style="max-width: 600px; margin: 0 auto; color: var(--color-text-muted);">Dokumentasi eksperimen kami mengolah sisa dapur dan limbah organik domestik menjadi warna botani.</p>
        </header>

        <div class="archive-grid" style="margin-bottom: var(--spacing-lg);">
            <!-- Swatch 1 -->
            <div class="archive-card">
                <div class="archive-swatch-container">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/images/onion_skin.png' ); ?>" alt="Kulit Bawang" class="archive-swatch-img">
                </div>
                <div class="archive-card-content">
                    <div class="archive-card-meta">Kitchen Waste</div>
                    <h3>Bawang Merah (Warm Tan)</h3>
                    <div class="archive-card-specs">
                        <div class="archive-spec-row">
                            <span>Sumber:</span>
                            <span>Limbah Rumah Tangga</span>
                        </div>
                        <div class="archive-spec-row">
                            <span>Kain:</span>
                            <span>Organic Linen</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Swatch 2 -->
            <div class="archive-card">
                <div class="archive-swatch-container">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/images/mangosteen_skin.png' ); ?>" alt="Kulit Manggis" class="archive-swatch-img">
                </div>
                <div class="archive-card-content">
                    <div class="archive-card-meta">Fruit Skin Waste</div>
                    <h3>Kulit Manggis (Deep Grayish Plum)</h3>
                    <div class="archive-card-specs">
                        <div class="archive-spec-row">
                            <span>Sumber:</span>
                            <span>Pasar Tradisional</span>
                        </div>
                        <div class="archive-spec-row">
                            <span>Kain:</span>
                            <span>Organic Cotton</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Swatch 3 -->
            <div class="archive-card">
                <div class="archive-swatch-container">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/images/turmeric.png' ); ?>" alt="Kunyit Swatch" class="archive-swatch-img">
                </div>
                <div class="archive-card-content">
                    <div class="archive-card-meta">Local Spices</div>
                    <h3>Kunyit (Golden Ochre)</h3>
                    <div class="archive-card-specs">
                        <div class="archive-spec-row">
                            <span>Sumber:</span>
                            <span>Sisa Dapur Rumah</span>
                        </div>
                        <div class="archive-spec-row">
                            <span>Kain:</span>
                            <span>Mulberry Silk</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div style="text-align: center;">
            <a href="<?php echo esc_url( home_url( '/color-archive/' ) ); ?>" class="btn btn-secondary">Buka Seluruh Arsip Warna</a>
        </div>
    </div>
</section>

<!-- Section 5: Process -->
<section class="section">
    <div class="container">
        <header style="text-align: center; margin-bottom: var(--spacing-lg);">
            <span style="font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.1em; color: var(--color-accent); font-weight: bold;">Siklus Produksi</span>
            <h2>Proses Pembuatan Slow Craft Kami</h2>
        </header>

        <div class="process-flow-grid">
            <div class="process-step">
                <div class="process-step-num">1</div>
                <h4>Collect</h4>
                <p>Mengumpulkan limbah organik dapur dan kulit buah.</p>
            </div>
            <div class="process-step">
                <div class="process-step-num">2</div>
                <h4>Extract</h4>
                <p>Mengekstrak pigmen warna botani secara alami.</p>
            </div>
            <div class="process-step">
                <div class="process-step-num">3</div>
                <h4>Dye</h4>
                <p>Pencelupan kain handmade berulang kali untuk kekuatan warna.</p>
            </div>
            <div class="process-step">
                <div class="process-step-num">4</div>
                <h4>Dry</h4>
                <p>Pengeringan di bawah sinar matahari langsung secara perlahan.</p>
            </div>
            <div class="process-step">
                <div class="process-step-num">5</div>
                <h4>Craft</h4>
                <p>Dijahit dan dirakit menjadi objek kriya fungsional.</p>
            </div>
            <div class="process-step">
                <div class="process-step-num">6</div>
                <h4>Use</h4>
                <p>Digunakan dan dirawat sebagai bagian dari gaya hidup lestari.</p>
            </div>
        </div>

        <div style="text-align: center; margin-top: var(--spacing-lg);">
            <a href="<?php echo esc_url( home_url( '/process/' ) ); ?>" class="btn btn-secondary">Pelajari Proses Lengkap</a>
        </div>
    </div>
</section>

<!-- Section 6: Featured Products -->
<section class="section" style="background-color: var(--color-white); border-top: 1px solid var(--color-border); border-bottom: 1px solid var(--color-border);">
    <div class="container">
        <header style="text-align: center; margin-bottom: var(--spacing-lg);">
            <span style="font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.1em; color: var(--color-accent); font-weight: bold;">Kurasi Spesial</span>
            <h2>Produk Unggulan Hari Ini</h2>
        </header>

        <?php if ( class_exists( 'WooCommerce' ) ) : ?>
            <!-- WooCommerce loop representation or custom layout -->
            <div class="product-grid">
                <!-- Custom styling matching Sukkhacitta style -->
                <div class="product-card">
                    <div class="product-image-wrapper">
                        <span class="product-badge">Naturally Dyed</span>
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/images/scarf.png' ); ?>" alt="Linen Scarf">
                    </div>
                    <div class="product-info">
                        <h3>Kusuma Natural Scarf - Terracotta</h3>
                        <div class="product-price">Rp385.000</div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image-wrapper">
                        <span class="product-badge">DIY Kit</span>
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/images/workshop_kit.png' ); ?>" alt="Natural Dye Kit">
                    </div>
                    <div class="product-info">
                        <h3>Botanical Color DIY Workshop Kit</h3>
                        <div class="product-price">Rp250.000</div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image-wrapper">
                        <span class="product-badge">One of a Kind</span>
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/images/hero_bg.png' ); ?>" alt="Eco Fabric Bundle">
                    </div>
                    <div class="product-info">
                        <h3>Raw Silk Shibori Fabric Bundle</h3>
                        <div class="product-price">Rp420.000</div>
                    </div>
                </div>
            </div>
        <?php else : ?>
            <p style="text-align: center;">Aktifkan WooCommerce untuk mengelola katalog produk.</p>
        <?php endif; ?>

        <div style="text-align: center; margin-top: var(--spacing-lg);">
            <a href="<?php echo esc_url( home_url( '/shop/' ) ); ?>" class="btn btn-primary">Belanja Seluruh Produk</a>
        </div>
    </div>
</section>

<!-- Section 7: Journal Preview (Research Notes, PISN 2026) -->
<section class="section">
    <div class="container">
        <header style="text-align: center; margin-bottom: var(--spacing-lg);">
            <span style="font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.1em; color: var(--color-accent); font-weight: bold;">Catatan Editor</span>
            <h2>Journal & Cerita Riset</h2>
        </header>

        <div class="journal-grid">
            <?php
            $journal_query = new WP_Query( array(
                'post_type'      => 'post',
                'posts_per_page' => 3,
                'post_status'    => 'publish'
            ) );

            if ( $journal_query->have_posts() ) :
                while ( $journal_query->have_posts() ) : $journal_query->the_post();
                    // Get categories
                    $categories = get_the_category();
                    $category_name = !empty( $categories ) ? $categories[0]->name : 'Journal';
                    ?>
                    <article class="journal-card">
                        <div class="journal-card-img">
                            <a href="<?php the_permalink(); ?>">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <?php the_post_thumbnail( 'large' ); ?>
                                <?php else : ?>
                                    <div style="width:100%; height:250px; background-color: var(--color-warm-neutral); display:flex; align-items:center; justify-content:center; color: white; font-weight:600; font-family:var(--font-heading);"><?php the_title(); ?></div>
                                <?php endif; ?>
                            </a>
                        </div>
                        <div class="journal-card-content">
                            <div class="journal-card-category"><?php echo esc_html( $category_name ); ?></div>
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <div class="journal-card-excerpt">
                                <?php echo wp_trim_words( get_the_excerpt(), 18, '...' ); ?>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="journal-card-link">Baca Cerita</a>
                        </div>
                    </article>
                <?php
                endwhile;
                wp_reset_postdata();
            else :
                ?>
                <p style="grid-column: 1/-1; text-align: center; color: var(--color-text-muted);">Belum ada cerita jurnal yang ditambahkan.</p>
            <?php endif; ?>
        </div>

        <div style="text-align: center; margin-top: var(--spacing-lg);">
            <a href="<?php echo esc_url( home_url( '/journal/' ) ); ?>" class="btn btn-secondary">Buka Journal Selengkapnya</a>
        </div>
    </div>
</section>

<!-- Section 8: Workshop & Collaboration Section -->
<section class="section" style="background-color: var(--color-primary-navy); color: var(--color-white); border-top: 1px solid var(--color-border);">
    <div class="container-narrow" style="text-align: center;">
        <span style="font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.1em; color: var(--color-soft-beige); font-weight: bold; display: block; margin-bottom: var(--spacing-sm);">Kolaborasi & Edukasi</span>
        <h2 style="color: var(--color-white); margin-bottom: var(--spacing-md);">Ingin Belajar Bersama atau Mengajukan Kerja Sama?</h2>
        <p style="color: rgba(245, 243, 233, 0.8); font-size: 1.05rem; margin-bottom: var(--spacing-lg);">Kami mengadakan workshop berkala untuk membagikan teknik natural dye DIY dan juga melayani pemesanan khusus untuk korporat, interior, maupun kolaborasi akademik.</p>
        <div style="display: flex; gap: var(--spacing-sm); justify-content: center; flex-wrap: wrap;">
            <a href="<?php echo esc_url( home_url( '/workshops/' ) ); ?>" class="btn btn-accent">Ikuti Workshop</a>
            <a href="<?php echo esc_url( home_url( '/custom/' ) ); ?>" class="btn btn-secondary" style="color: var(--color-white); border-color: var(--color-white);">Hubungi Kolaborasi</a>
        </div>
    </div>
</section>

<?php
get_footer();
