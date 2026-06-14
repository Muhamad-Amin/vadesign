<!doctype html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>VA Design — Jasa Desain & Joki Tugas</title>

    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/icon.ico') }}">

    <meta name="description"
        content="VA Design menyediakan jasa joki tugas sekolah & kuliah (makalah, PPT Canva, poster), cetak spanduk banner, dan desain feed Instagram profesional harga terjangkau." />
    <meta name="keywords"
        content="joki tugas, jasa pembuatan makalah, joki ppt kuliah, jasa desain feed instagram, jasa desain poster, bikin spanduk murah, va design lombok, joki tugas sekolah" />
    <meta name="robots" content="index, follow" />
    <meta name="author" content="VA Design" />
    <link rel="canonical" href="{{ url()->current() }}" />

    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:title" content="VA Design — Desain Keren, Tugas Beres!" />
    <meta property="og:description"
        content="Solusi joki tugas sekolah, kuliah, presentasi PPT, makalah, cetak spanduk, dan desain media sosial harga bersahabat." />
    <meta property="og:image" content="{{ asset('assets/img/logo.jpeg') }}" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="VA Design — Jasa Joki Tugas & Desain Grafis" />
    <meta name="twitter:description"
        content="Jasa pembuatan makalah, PPT Canva, spanduk, banner, poster, dan feed Instagram pengerjaan cepat." />
    <meta name="twitter:image" content="{{ asset('assets/img/logo.jpeg') }}" />

    <script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@type": "LocalBusiness",
  "name": "VA Design",
  "image": "{{ asset('assets/img/logo.jpeg') }}",
  "description": "Penyedia jasa joki tugas sekolah/kuliah, pembuatan makalah, PPT, desain spanduk, banner, dan manajemen konten media sosial.",
  "telephone": "+6287760058673",
  "url": "{{ url('/') }}",
  "priceRange": "RP",
  "address": {
    "@@type": "PostalAddress",
    "addressLocality": "Mataram",
    "addressRegion": "Nusa Tenggara Barat",
    "addressCountry": "ID"
  },
  "openingHoursSpecification": {
    "@@type": "OpeningHoursSpecification",
    "dayOfWeek": [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday",
      "Saturday",
      "Sunday"
    ],
    "opens": "00:00",
    "closes": "23:59"
  },
  "sameAs": [
    "https://linktr.ee/VaDesignn"
  ]
}
</script>

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/vendor/fontawesome-free-7/css/all.min.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Outfit:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
</head>

<body>
    <nav class="navbar" id="navbar">
        <div class="nav-inner">
            <a href="#hero" class="nav-logo">
                <img src="{{ asset('assets/img/logo.jpeg') }}" alt="VA Design Logo" class="logo-img" />
            </a>
            <button class="hamburger" id="hamburger" aria-label="Menu">
                <span></span><span></span><span></span>
            </button>
            <ul class="nav-links" id="navLinks">
                <li><a href="#services">Layanan</a></li>
                <li><a href="#pricing">Harga</a></li>
                <li><a href="#why">Keunggulan</a></li>
                <li>
                    <a href="https://wa.me/{{ $whatsapp_number }}?text=Halo%20VA%20Design!%20Saya%20mau%20order%20jasa%20desain%2Ftugas%20nih%20%F0%9F%99%8F"
                        target="_blank" class="btn-nav"><i class="fa-solid fa-cart-shopping icon-spacing"></i> Order
                        Sekarang</a>
                </li>
            </ul>
            <div class="nav-overlay" id="navOverlay"></div>
        </div>
    </nav>

    <section class="hero" id="hero">
        <div class="hero-bg-grid"></div>
        <div class="hero-orb orb1"></div>
        <div class="hero-orb orb2"></div>
        <div class="hero-content">
            <div class="hero-badge reveal">
                <i class="fa-solid fa-star icon-spacing" style="color: var(--white); opacity: 0.6"></i>
                Jasa Desain & Joki Tugas Terpercaya
            </div>
            <h1 class="hero-title reveal">
                <span class="line">Desain Keren,</span>
                <span class="line accent-text">Tugas Beres.</span>
            </h1>
            <p class="hero-sub reveal">
                Solusi lengkap untuk kebutuhan desain grafis & tugas sekolahmu.<br />
                Revisi sampai tuntas · File siap dikirim · Bebas request
            </p>
            <div class="hero-cta reveal">
                <a href="#pricing" class="btn-primary"><i class="fa-solid fa-tags icon-spacing"></i> Lihat Pricelist</a>
                <a href="https://wa.me/{{ $whatsapp_number }}?text=Halo%20VA%20Design!%20Saya%20mau%20order%20jasa%20desain%2Ftugas%20nih%20%F0%9F%99%8F"
                    target="_blank" class="btn-ghost"><i class="fa-solid fa-paper-plane icon-spacing"></i> Hubungi
                    Kami</a>
            </div>
            <div class="hero-stats reveal">
                <div class="stat">
                    <span class="stat-num">100+</span><span class="stat-label">Order Selesai</span>
                </div>
                <div class="stat-div"></div>
                <div class="stat">
                    <span class="stat-num">∞</span><span class="stat-label">Revisi Gratis</span>
                </div>
                <div class="stat-div"></div>
                <div class="stat">
                    <span class="stat-num">24h</span><span class="stat-label">Pengerjaan Cepat</span>
                </div>
            </div>
        </div>
        <div class="hero-visual">
            <div class="logo-ring">
                <img src="{{ asset('assets/img/logo.jpeg') }}" alt="VA Design" class="big-logo-img" />
                <div class="ring ring1"></div>
                <div class="ring ring2"></div>
                <div class="ring ring3"></div>
            </div>
        </div>
        <div class="scroll-hint">
            <span>Scroll</span>
            <div class="scroll-line"></div>
        </div>
    </section>

    <section class="services" id="services">
        <div class="container">
            <div class="section-header reveal">
                <span class="section-tag">— Layanan Kami</span>
                <h2 class="section-title">
                    Apa yang Bisa Kami <span class="accent-text">Bantu?</span>
                </h2>
            </div>
            <div class="services-grid">
                <div class="service-card reveal" data-delay="0">
                    <div class="card-icon-fa">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>
                    <h3>Joki Tugas Sekolah</h3>
                    <p>
                        Tugas rapi dengan cover profesional, makalah lengkap, hingga
                        presentasi Canva yang memukau.
                    </p>
                    <a href="#pricing" class="card-link">Lihat Harga
                        <i class="fa-solid fa-arrow-right-long" style="margin-left: 4px"></i></a>
                </div>
                <div class="service-card reveal featured" data-delay="100">
                    <div class="card-badge">Populer</div>
                    <div class="card-icon-fa"><i class="fa-solid fa-palette"></i></div>
                    <h3>Desain Media Sosial</h3>
                    <p>
                        Feed Instagram, Story, Poster promosi — semua didesain menarik dan
                        sesuai brand-mu.
                    </p>
                    <a href="#pricing" class="card-link">Lihat Harga
                        <i class="fa-solid fa-arrow-right-long" style="margin-left: 4px"></i></a>
                </div>
                <div class="service-card reveal" data-delay="200">
                    <div class="card-icon-fa">
                        <i class="fa-solid fa-image"></i>
                    </div>
                    <h3>Spanduk & Banner</h3>
                    <p>
                        Desain spanduk sederhana hingga detail penuh teks & gambar untuk
                        berbagai kebutuhan.
                    </p>
                    <a href="#pricing" class="card-link">Lihat Harga
                        <i class="fa-solid fa-arrow-right-long" style="margin-left: 4px"></i></a>
                </div>
            </div>
        </div>
    </section>

    <section class="pricing" id="pricing">
        <div class="container">
            <div class="section-header reveal">
                <span class="section-tag">— Pricelist</span>
                <h2 class="section-title">
                    Harga yang <span class="accent-text">Terjangkau</span>
                </h2>
            </div>
            <div class="pricing-grid">
                <div class="price-card reveal" data-delay="0">
                    <div class="price-card-header">
                        <span class="price-icon"><i class="fa-solid fa-book" style="color: #3b82f6"></i></span>
                        <h3>Jasa Tugas Sekolah</h3>
                    </div>
                    <ul class="price-list">
                        @forelse($schoolServices as $srv)
                            <li>
                                <span class="price-item">{{ $srv->name }}</span>
                                <span class="price-val">Rp{{ number_format($srv->price, 0, ',', '.') }}</span>
                            </li>
                        @empty
                            <li><span class="price-item" style="color: var(--muted)">Belum ada paket layanan.</span>
                            </li>
                        @endforelse
                    </ul>
                    @if ($schoolServices->count() > 0)
                        <button type="button" class="btn-card order-trigger"
                            data-price-id="{{ $schoolServices->first()->id }}"
                            data-service-name="Jasa Tugas Sekolah">
                            <i class="fa-solid fa-circle-dollar-to-slot icon-spacing"></i> Order Sekarang
                        </button>
                    @endif
                </div>

                <div class="price-card reveal featured-card" data-delay="100">
                    <div class="price-card-header">
                        <span class="price-icon"><i class="fa-solid fa-image" style="color: #a855f7"></i></span>
                        <h3>Spanduk & Banner</h3>
                    </div>
                    <ul class="price-list">
                        @forelse($bannerServices as $srv)
                            <li>
                                <span class="price-item">{{ $srv->name }}</span>
                                <span class="price-val">Rp{{ number_format($srv->price, 0, ',', '.') }}</span>
                            </li>
                        @empty
                            <li><span class="price-item" style="color: var(--muted)">Belum ada paket layanan.</span>
                            </li>
                        @endforelse
                    </ul>
                    @if ($bannerServices->count() > 0)
                        <button type="button" class="btn-card order-trigger"
                            data-price-id="{{ $bannerServices->first()->id }}" data-service-name="Spanduk & Banner">
                            <i class="fa-solid fa-circle-dollar-to-slot icon-spacing"></i> Order Sekarang
                        </button>
                    @endif
                </div>

                <div class="price-card reveal" data-delay="200">
                    <div class="price-card-header">
                        <span class="price-icon"><i class="fa-solid fa-hashtag" style="color: #22c55e"></i></span>
                        <h3>Desain Media Sosial</h3>
                    </div>
                    <ul class="price-list">
                        @forelse($socialServices as $srv)
                            <li>
                                <span class="price-item">{{ $srv->name }}</span>
                                <span class="price-val">Rp{{ number_format($srv->price, 0, ',', '.') }}</span>
                            </li>
                        @empty
                            <li><span class="price-item" style="color: var(--muted)">Belum ada paket layanan.</span>
                            </li>
                        @endforelse
                    </ul>
                    @if ($socialServices->count() > 0)
                        <button type="button" class="btn-card order-trigger"
                            data-price-id="{{ $socialServices->first()->id }}"
                            data-service-name="Desain Media Sosial">
                            <i class="fa-solid fa-circle-dollar-to-slot icon-spacing"></i> Order Sekarang
                        </button>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <div class="public-modal-overlay" id="publicOrderModal">
        <div class="public-modal">
            <div class="public-modal-header">
                <h3>
                    <i class="fa-solid fa-file-invoice icon-spacing"></i> Form Data
                    Pemesanan
                </h3>
                <button type="button" class="public-modal-close" id="closePublicModal">
                    ✕
                </button>
            </div>

            <form id="publicOrderForm" action="{{ route('public.order.submit') }}" method="POST" target="_blank">
                @csrf
                <div class="public-modal-body">
                    <input type="hidden" name="price_id" id="modalPriceId" value="" />

                    <div class="public-form-group">
                        <label>Kategori yang Dipilih</label>
                        <input type="text" id="modalServiceName" class="public-form-input disabled-look" readonly
                            value="" />
                    </div>

                    <div class="public-form-group">
                        <label for="client_name">Nama Lengkap Anda *</label>
                        <div class="public-input-icon-wrapper">
                            <i class="fa-solid fa-user input-icon"></i>
                            <input type="text" name="client_name" id="client_name" class="public-form-input"
                                placeholder="Masukkan nama panggilan / lengkap..." required />
                        </div>
                    </div>

                    <div class="public-form-group">
                        <label for="client_wa">Nomor WhatsApp Aktif *</label>
                        <div class="public-input-icon-wrapper">
                            <i class="fa-brands fa-whatsapp input-icon"></i>
                            <input type="tel" name="client_wa" id="client_wa" class="public-form-input"
                                placeholder="Contoh: 08123456789" required />
                        </div>
                        <small class="input-hint">Pastikan nomor WA aktif untuk mempermudah proses negosiasi detail
                            tugas.</small>
                    </div>
                </div>
                <div class="public-modal-footer">
                    <button type="button" class="public-btn-secondary" id="btnCancelPublicModal">Batal</button>
                    <button type="submit" class="public-btn-primary" id="btnSubmitPublicForm">
                        Lanjutkan ke WhatsApp <i class="fa-solid fa-arrow-right" style="margin-left: 6px"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <section class="why" id="why">
        <div class="container">
            <div class="section-header reveal">
                <span class="section-tag">— Keunggulan</span>
                <h2 class="section-title">
                    Kenapa Pilih <span class="accent-text">VA Design?</span>
                </h2>
            </div>
            <div class="why-grid">
                <div class="why-card reveal" data-delay="0">
                    <div class="why-icon-fa">
                        <i class="fa-solid fa-rotate-left"></i>
                    </div>
                    <h3>Revisi Sampai Tuntas</h3>
                    <p>
                        Tidak puas? Kami revisi tanpa batas hingga kamu benar-benar puas
                        dengan hasilnya.
                    </p>
                </div>
                <div class="why-card reveal" data-delay="100">
                    <div class="why-icon-fa">
                        <i class="fa-solid fa-file-arrow-up"></i>
                    </div>
                    <h3>File Siap Dikirim</h3>
                    <p>
                        Semua file langsung dikirim dalam format yang kamu butuhkan — PDF,
                        JPG, PNG, atau lainnya.
                    </p>
                </div>
                <div class="why-card reveal" data-delay="200">
                    <div class="why-icon-fa">
                        <i class="fa-solid fa-wand-magic-sparkles"></i>
                    </div>
                    <h3>Bebas Request</h3>
                    <p>
                        Punya ide atau referensi? Sampaikan saja! Kami siap mewujudkan
                        desain sesuai keinginanmu.
                    </p>
                </div>
                <div class="why-card reveal" data-delay="300">
                    <div class="why-icon-fa">
                        <i class="fa-solid fa-gauge-high"></i>
                    </div>
                    <h3>Pengerjaan Cepat</h3>
                    <p>
                        Deadline mepet? Tenang, kami prioritaskan kecepatan tanpa
                        mengorbankan kualitas hasil.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <div class="ticker-wrap">
        <div class="ticker">
            <span>✦ Revisi Sampai Tuntas</span>
            <span>✦ File Siap Dikirim</span>
            <span>✦ Bebas Request</span>
            <span>✦ Harga Terjangkau</span>
            <span>✦ Pengerjaan Cepat</span>
            <span>✦ Desain Profesional</span>
            <span>✦ Revisi Sampai Tuntas</span>
            <span>✦ File Siap Dikirim</span>
            <span>✦ Bebas Request</span>
            <span>✦ Harga Terjangkau</span>
            <span>✦ Pengerjaan Cepat</span>
            <span>✦ Desain Profesional</span>
        </div>
    </div>

    <section class="contact" id="contact">
        <div class="container">
            <div class="section-header reveal">
                <span class="section-tag">— Hubungi Kami</span>
                <h2 class="section-title">
                    Siap Order? <span class="accent-text">Yuk Mulai!</span>
                </h2>
                <p class="section-sub">
                    Pilih cara yang paling mudah buatmu untuk langsung order sekarang.
                </p>
            </div>

            <div class="contact-grid">
                <div class="contact-card wa-card reveal" data-delay="0">
                    <div class="contact-card-icon-fa" style="color: #25d366">
                        <i class="fa-brands fa-whatsapp"></i>
                    </div>
                    <div class="contact-card-body">
                        <h3>WhatsApp Direct</h3>
                        <p>
                            Chat langsung dengan kami di WhatsApp. Respon cepat, ramah, dan
                            siap bantu kebutuhan tugasmu!
                        </p>
                        <div class="contact-meta">
                            <span><i class="fa-solid fa-comment-dots icon-spacing"></i>
                                Biasanya balas dalam 1 jam</span>
                        </div>
                    </div>
                    <a href="https://wa.me/{{ $whatsapp_number }}?text=Halo%20VA%20Design!%20Saya%20mau%20order%20jasa%20desain%2Ftugas%20nih%20%F0%9F%99%8F"
                        target="_blank" rel="noopener" class="btn-wa">
                        <i class="fa-brands fa-whatsapp"></i> Chat via WhatsApp
                    </a>
                </div>

                <div class="contact-card lt-card reveal" data-delay="120">
                    <div class="contact-card-icon-fa" style="color: #39e09b">
                        <i class="fa-solid fa-link"></i>
                    </div>
                    <div class="contact-card-body">
                        <h3>Linktree Portofolio</h3>
                        <p>
                            Kunjungi Linktree kami untuk melihat seluruh kanal media sosial
                            dan hasil pengerjaan portofolio lengkap.
                        </p>
                        <div class="contact-meta">
                            <span><i class="fa-solid fa-globe icon-spacing"></i>
                                linktr.ee/VaDesignn</span>
                        </div>
                    </div>
                    <a href="{{ $linktree }}" target="_blank" rel="noopener" class="btn-lt">
                        <i class="fa-solid fa-arrow-up-right-from-square"></i> Buka
                        Linktree
                    </a>
                </div>
            </div>

            <p class="contact-note reveal">
                ⚡ Setelah menghubungi kami, tim VA Design akan segera membalas dan
                memandu proses ordermu dari awal sampai selesai.
            </p>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="footer-inner">
                <div class="footer-brand">
                    <img src="{{ asset('assets/img/logo.jpeg') }}" alt="VA Design" class="footer-logo-img" />
                    <p>Jasa Desain & Joki Tugas<br />Terpercaya & Terjangkau</p>
                </div>
                <div class="footer-links">
                    <h4>Layanan</h4>
                    <ul>
                        <li><a href="#pricing">Joki Tugas Sekolah</a></li>
                        <li><a href="#pricing">Desain Media Sosial</a></li>
                        <li><a href="#pricing">Spanduk & Banner</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h4>Kontak</h4>
                    <ul>
                        <li>
                            <a href="https://wa.me/{{ $whatsapp_number }}" target="_blank">WhatsApp</a>
                        </li>
                        <li>
                            <a href="{{ $linktree }}" target="_blank">Linktree</a>
                        </li>
                        <li><a href="#why">Keunggulan</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>© 2025 VA Design. All rights reserved.</p>
                <p>linktr.ee/VaDesignn</p>
            </div>
        </div>
    </footer>

    <a href="https://wa.me/{{ $whatsapp_number }}?text=Halo%20VA%20Design!%20Saya%20mau%20order%20jasa%20desain%2Ftugas%20nih%20%F0%9F%99%8F"
        target="_blank" rel="noopener" class="wa-float" aria-label="Chat WhatsApp">
        <i class="fa-brands fa-whatsapp" style="font-size: 1.5rem"></i>
        <span class="wa-float-label">Order via WA</span>
    </a>

    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>
