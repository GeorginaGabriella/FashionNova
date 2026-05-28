@extends('layouts.app')

@section('title', 'FashionNova — Premium Fashion Store')

@section('content')

<!-- ═══ HERO SECTION ═══ -->
<section class="hero">
    <div class="hero-grid-pattern"></div>
    <div class="container">
        <div class="hero-content animate-fade-in-up">
            <span class="eyebrow">Summer Collection 2026</span>
            <h1>Discover Your <em>Signature</em> Style</h1>
            <p class="lead">Koleksi fashion terbaru yang dikurasi dengan cermat. Temukan gaya yang merepresentasikan dirimu dengan kualitas premium.</p>
            <div class="hero-actions">
                <a class="hero-btn filled" href="@auth{{ route('wishlist.index') }}@else{{ route('register') }}@endauth">
                    Explore Now
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
                <a class="hero-btn outlined" href="@auth{{ route('profile.index') }}@else{{ route('login') }}@endauth">My Account</a>
            </div>
        </div>
    </div>
    <div class="hero-shapes">
        <div class="hero-shape"></div>
        <div class="hero-shape"></div>
        <div class="hero-shape"></div>
    </div>
</section>

<!-- ═══ FEATURES BAR ═══ -->
<section class="page-section flush">
    <div class="container">
        <div class="features-bar animate-fade-in-up animate-delay-1">
            <div class="feature-item">
                <div class="feature-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 00-3.213-9.193 2.056 2.056 0 00-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 00-10.026 0 1.106 1.106 0 00-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12"/></svg>
                </div>
                <div>
                    <h4>Gratis Ongkir</h4>
                    <p>Untuk pesanan di atas Rp 500k</p>
                </div>
            </div>
            <div class="feature-item">
                <div class="feature-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182"/></svg>
                </div>
                <div>
                    <h4>Easy Returns</h4>
                    <p>30 hari pengembalian gratis</p>
                </div>
            </div>
            <div class="feature-item">
                <div class="feature-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/></svg>
                </div>
                <div>
                    <h4>Secure Payment</h4>
                    <p>100% transaksi aman</p>
                </div>
            </div>
            <div class="feature-item">
                <div class="feature-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155"/></svg>
                </div>
                <div>
                    <h4>Customer Support</h4>
                    <p>Bantuan 24/7 siap membantu</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══ CATEGORIES ═══ -->
<section class="page-section">
    <div class="container">
        <div class="section-header">
            <div>
                <span class="eyebrow">Shop by Category</span>
                <h2>Explore Collections</h2>
            </div>
            <a href="#" class="view-all">
                View All
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>
        <div class="categories-grid">
            <div class="category-card animate-fade-in-up animate-delay-1">
                <div class="category-card-bg"></div>
                <div class="category-card-overlay"></div>
                <div class="category-card-content">
                    <span class="eyebrow">New Season</span>
                    <h3>Women</h3>
                    <p>Dresses, tops, outerwear & more</p>
                    <span class="arrow-link">
                        Shop Now
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                    </span>
                </div>
            </div>
            <div class="category-card animate-fade-in-up animate-delay-2">
                <div class="category-card-bg"></div>
                <div class="category-card-overlay"></div>
                <div class="category-card-content">
                    <span class="eyebrow">Trending</span>
                    <h3>Men</h3>
                    <p>Shirts, pants, jackets & more</p>
                    <span class="arrow-link">
                        Shop Now
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                    </span>
                </div>
            </div>
            <div class="category-card animate-fade-in-up animate-delay-3">
                <div class="category-card-bg"></div>
                <div class="category-card-overlay"></div>
                <div class="category-card-content">
                    <span class="eyebrow">Must Have</span>
                    <h3>Accessories</h3>
                    <p>Bags, jewelry, scarves & more</p>
                    <span class="arrow-link">
                        Shop Now
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══ FEATURED PRODUCTS ═══ -->
<section class="page-section" style="padding-top: 0;">
    <div class="container">
        <div class="section-header">
            <div>
                <span class="eyebrow">Curated for You</span>
                <h2>Best Sellers</h2>
            </div>
            <a href="#" class="view-all">
                View All
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>
        <div class="products-grid">
            <div class="product-card animate-fade-in-up animate-delay-1">
                <div class="product-thumb">
                    <div class="product-thumb-bg"></div>
                    <span class="product-thumb-label">New</span>
                    <button class="wishlist-btn" aria-label="Add to wishlist">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/></svg>
                    </button>
                </div>
                <div class="product-info">
                    <span class="product-brand">FashionNova</span>
                    <span class="product-name">Linen Blend Oversized Blazer</span>
                    <div class="product-price">
                        <span class="current">Rp 899.000</span>
                    </div>
                </div>
            </div>
            <div class="product-card animate-fade-in-up animate-delay-2">
                <div class="product-thumb">
                    <div class="product-thumb-bg"></div>
                    <span class="product-thumb-label sale">-30%</span>
                    <button class="wishlist-btn" aria-label="Add to wishlist">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/></svg>
                    </button>
                </div>
                <div class="product-info">
                    <span class="product-brand">FashionNova</span>
                    <span class="product-name">Relaxed Fit Cotton Shirt</span>
                    <div class="product-price">
                        <span class="current">Rp 349.000</span>
                        <span class="original">Rp 499.000</span>
                    </div>
                </div>
            </div>
            <div class="product-card animate-fade-in-up animate-delay-3">
                <div class="product-thumb">
                    <div class="product-thumb-bg"></div>
                    <button class="wishlist-btn" aria-label="Add to wishlist">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/></svg>
                    </button>
                </div>
                <div class="product-info">
                    <span class="product-brand">FashionNova</span>
                    <span class="product-name">Silk Midi Wrap Dress</span>
                    <div class="product-price">
                        <span class="current">Rp 1.299.000</span>
                    </div>
                </div>
            </div>
            <div class="product-card animate-fade-in-up animate-delay-4">
                <div class="product-thumb">
                    <div class="product-thumb-bg"></div>
                    <span class="product-thumb-label">New</span>
                    <button class="wishlist-btn" aria-label="Add to wishlist">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/></svg>
                    </button>
                </div>
                <div class="product-info">
                    <span class="product-brand">FashionNova</span>
                    <span class="product-name">Wide Leg Tailored Trousers</span>
                    <div class="product-price">
                        <span class="current">Rp 749.000</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══ PROMO BANNER ═══ -->
<section class="page-section" style="padding-top: 0;">
    <div class="container">
        <div class="promo-banner">
            <div class="promo-content">
                <span class="eyebrow">Limited Time Offer</span>
                <h2>End of Season Sale<br>Up to 50% Off</h2>
                <p>Dapatkan diskon besar untuk koleksi musim ini. Jangan lewatkan kesempatan ini.</p>
            </div>
            <div class="promo-actions">
                <a class="hero-btn filled" href="#">
                    Shop Sale
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ═══ NEW ARRIVALS ═══ -->
<section class="page-section" style="padding-top: 0;">
    <div class="container">
        <div class="section-header">
            <div>
                <span class="eyebrow">Just Dropped</span>
                <h2>New Arrivals</h2>
            </div>
            <a href="#" class="view-all">
                View All
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
            </a>
        </div>
        <div class="products-grid">
            <div class="product-card">
                <div class="product-thumb">
                    <div class="product-thumb-bg"></div>
                    <button class="wishlist-btn" aria-label="Add to wishlist">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/></svg>
                    </button>
                </div>
                <div class="product-info">
                    <span class="product-brand">FashionNova</span>
                    <span class="product-name">Cropped Knit Cardigan</span>
                    <div class="product-price">
                        <span class="current">Rp 599.000</span>
                    </div>
                </div>
            </div>
            <div class="product-card">
                <div class="product-thumb">
                    <div class="product-thumb-bg"></div>
                    <span class="product-thumb-label sale">-20%</span>
                    <button class="wishlist-btn" aria-label="Add to wishlist">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/></svg>
                    </button>
                </div>
                <div class="product-info">
                    <span class="product-brand">FashionNova</span>
                    <span class="product-name">High-Waist Straight Jeans</span>
                    <div class="product-price">
                        <span class="current">Rp 479.000</span>
                        <span class="original">Rp 599.000</span>
                    </div>
                </div>
            </div>
            <div class="product-card">
                <div class="product-thumb">
                    <div class="product-thumb-bg"></div>
                    <button class="wishlist-btn" aria-label="Add to wishlist">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/></svg>
                    </button>
                </div>
                <div class="product-info">
                    <span class="product-brand">FashionNova</span>
                    <span class="product-name">Structured Leather Tote Bag</span>
                    <div class="product-price">
                        <span class="current">Rp 1.499.000</span>
                    </div>
                </div>
            </div>
            <div class="product-card">
                <div class="product-thumb">
                    <div class="product-thumb-bg"></div>
                    <span class="product-thumb-label">New</span>
                    <button class="wishlist-btn" aria-label="Add to wishlist">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/></svg>
                    </button>
                </div>
                <div class="product-info">
                    <span class="product-brand">FashionNova</span>
                    <span class="product-name">Cashmere Blend Scarf</span>
                    <div class="product-price">
                        <span class="current">Rp 399.000</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══ ACCOUNT QUICK ACCESS ═══ -->
<section class="page-section" style="padding-top: 0;">
    <div class="container">
        <div class="section-header">
            <div>
                <span class="eyebrow">Your Account</span>
                <h2>Manage Everything</h2>
            </div>
        </div>
        <div class="dashboard-grid">
            <a class="stat-card" href="@auth{{ route('profile.index') }}@else{{ route('login') }}@endauth">
                <div class="stat-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/></svg>
                </div>
                <span class="stat-label">Account</span>
                <span class="stat-value">Profil Pelanggan</span>
            </a>
            <a class="stat-card" href="@auth{{ route('addresses.index') }}@else{{ route('login') }}@endauth">
                <div class="stat-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/></svg>
                </div>
                <span class="stat-label">Shipping</span>
                <span class="stat-value">Alamat Pengiriman</span>
            </a>
            <a class="stat-card" href="@auth{{ route('wishlist.index') }}@else{{ route('login') }}@endauth">
                <div class="stat-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/></svg>
                </div>
                <span class="stat-label">Saved Items</span>
                <span class="stat-value">Wishlist Produk</span>
            </a>
        </div>
    </div>
</section>

<!-- ═══ NEWSLETTER ═══ -->
<section class="page-section" style="padding-top: 0;">
    <div class="container">
        <div class="newsletter-section">
            <span class="eyebrow" style="justify-content: center; margin-bottom: 12px;">Stay Updated</span>
            <h2>Join Our Newsletter</h2>
            <p class="lead">Dapatkan update koleksi terbaru, promo eksklusif, dan inspirasi fashion langsung ke inbox kamu.</p>
            <div class="newsletter-form">
                <input type="email" placeholder="Masukkan email kamu...">
                <button class="button">Subscribe</button>
            </div>
        </div>
    </div>
</section>

@endsection
