<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="FashionNova — Temukan gaya terbaru dan koleksi fashion premium untuk pria dan wanita.">
    <title>@yield('title', 'FashionNova — Premium Fashion Store')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500&family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        /* ═══════════════════════════════════════════════
           DESIGN SYSTEM — FashionNova
           ═══════════════════════════════════════════════ */
        :root {
            /* Core palette */
            --ink: #0a0a0a;
            --ink-soft: #1a1a1a;
            --muted: #71717a;
            --muted-light: #a1a1aa;
            --line: #e4e4e7;
            --line-soft: #f0f0f2;
            --paper: #ffffff;
            --cream: #faf9f7;
            --warm-bg: #f5f3ef;

            /* Accent */
            --accent: #be123c;
            --accent-hover: #9f1239;
            --accent-light: #fff1f2;
            --accent-glow: rgba(190, 18, 60, .12);

            /* Fashion tones */
            --rose: #e11d48;
            --rose-light: #ffe4e6;
            --gold: #b8860b;
            --gold-light: #fef3c7;
            --emerald: #059669;

            /* Shadows */
            --shadow-sm: 0 1px 3px rgba(0,0,0,.06);
            --shadow-md: 0 8px 30px rgba(0,0,0,.07);
            --shadow-lg: 0 20px 50px rgba(0,0,0,.10);
            --shadow-xl: 0 25px 65px rgba(0,0,0,.14);

            /* Typography */
            --font-display: 'Playfair Display', Georgia, 'Times New Roman', serif;
            --font-body: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;

            /* Layout */
            --nav-height: 72px;
            --container: 1280px;
            --radius: 8px;
            --radius-lg: 12px;
            --radius-xl: 16px;
        }

        /* ── RESET ── */
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        html { scroll-behavior: smooth; }

        body {
            font-family: var(--font-body);
            color: var(--ink);
            background: var(--cream);
            line-height: 1.6;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        a { color: inherit; text-decoration: none; transition: color .2s ease; }
        img { display: block; max-width: 100%; }
        button { cursor: pointer; font: inherit; }

        /* ── CONTAINER ── */
        .container {
            width: min(var(--container), calc(100% - 40px));
            margin: 0 auto;
        }

        /* ══════════════════════════════════════════════════
           NAVBAR
           ══════════════════════════════════════════════════ */
        .site-navbar {
            position: sticky;
            top: 0;
            z-index: 1000;
            background: rgba(255,255,255,.88);
            backdrop-filter: blur(20px) saturate(180%);
            -webkit-backdrop-filter: blur(20px) saturate(180%);
            border-bottom: 1px solid rgba(0,0,0,.06);
            transition: box-shadow .3s ease;
        }

        .site-navbar:hover {
            box-shadow: 0 4px 20px rgba(0,0,0,.05);
        }

        .navbar-inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: var(--nav-height);
            gap: 24px;
        }

        .navbar-left {
            display: flex;
            align-items: center;
            gap: 32px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
        }

        .brand-logo {
            width: 36px;
            height: 36px;
            display: grid;
            place-items: center;
            background: var(--ink);
            color: #fff;
            border-radius: 50%;
            font-family: var(--font-display);
            font-size: 15px;
            font-weight: 700;
            letter-spacing: -.02em;
        }

        .brand-name {
            font-family: var(--font-display);
            font-size: 22px;
            font-weight: 700;
            letter-spacing: -.02em;
            color: var(--ink);
        }

        .nav-menu {
            display: flex;
            align-items: center;
            gap: 4px;
        }

        .nav-item {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 8px 14px;
            font-size: 13.5px;
            font-weight: 600;
            color: var(--muted);
            border-radius: 8px;
            transition: all .2s ease;
            text-transform: uppercase;
            letter-spacing: .06em;
            border: none;
            background: none;
        }

        .nav-item:hover {
            color: var(--ink);
            background: var(--line-soft);
        }

        .nav-item.active {
            color: var(--ink);
        }

        .nav-item svg {
            width: 18px;
            height: 18px;
            stroke-width: 1.8;
        }

        .navbar-right {
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .nav-icon-btn {
            position: relative;
            display: grid;
            place-items: center;
            width: 42px;
            height: 42px;
            border: none;
            background: none;
            color: var(--ink-soft);
            border-radius: 50%;
            transition: all .2s ease;
        }

        .nav-icon-btn:hover {
            background: var(--line-soft);
            color: var(--ink);
        }

        .nav-icon-btn svg {
            width: 20px;
            height: 20px;
            stroke-width: 1.7;
        }

        .nav-icon-btn .badge-dot {
            position: absolute;
            top: 8px;
            right: 8px;
            width: 8px;
            height: 8px;
            background: var(--accent);
            border-radius: 50%;
            border: 2px solid #fff;
        }

        .nav-divider {
            width: 1px;
            height: 24px;
            background: var(--line);
            margin: 0 8px;
        }

        .nav-cta {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 9px 20px;
            font-size: 13px;
            font-weight: 700;
            color: #fff;
            background: var(--ink);
            border: none;
            border-radius: 999px;
            transition: all .25s ease;
            text-transform: uppercase;
            letter-spacing: .06em;
        }

        .nav-cta:hover {
            background: var(--accent);
            transform: translateY(-1px);
            box-shadow: 0 6px 20px var(--accent-glow);
        }

        /* Mobile nav toggle */
        .nav-toggle {
            display: none;
            width: 42px;
            height: 42px;
            border: none;
            background: none;
            cursor: pointer;
            color: var(--ink);
        }

        .nav-toggle svg {
            width: 22px;
            height: 22px;
        }

        /* ══════════════════════════════════════════════════
           ANNOUNCEMENT BAR
           ══════════════════════════════════════════════════ */
        .announcement-bar {
            background: var(--ink);
            color: #fff;
            text-align: center;
            padding: 10px 16px;
            font-size: 12.5px;
            font-weight: 600;
            letter-spacing: .1em;
            text-transform: uppercase;
        }

        .announcement-bar span {
            color: var(--gold);
        }

        /* ══════════════════════════════════════════════════
           MAIN CONTENT
           ══════════════════════════════════════════════════ */
        .site-main {
            min-height: calc(100vh - var(--nav-height) - 44px);
        }

        .page-section {
            padding: 60px 0;
        }

        .page-section.flush {
            padding: 0;
        }

        /* ── Page Header (for inner pages) ── */
        .page-header {
            padding: 48px 0 40px;
        }

        .page-header .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 12px;
        }

        .eyebrow {
            display: block;
            color: var(--accent);
            font-size: 11.5px;
            font-weight: 800;
            letter-spacing: .18em;
            text-transform: uppercase;
        }

        .eyebrow::before {
            content: '';
            display: inline-block;
            width: 24px;
            height: 2px;
            background: var(--accent);
            vertical-align: middle;
        }

        .page-header h1 {
            font-family: var(--font-display);
            font-size: clamp(32px, 5vw, 48px);
            font-weight: 700;
            line-height: 1.1;
            letter-spacing: -.02em;
            color: var(--ink);
            margin-bottom: 12px;
        }

        .page-header h2 {
            font-family: var(--font-display);
            font-size: clamp(28px, 4vw, 40px);
            font-weight: 700;
            line-height: 1.15;
            letter-spacing: -.02em;
            color: var(--ink);
        }

        .lead {
            max-width: 580px;
            color: var(--muted);
            font-size: 15px;
            line-height: 1.7;
        }

        /* ══════════════════════════════════════════════════
           PANELS & CARDS
           ══════════════════════════════════════════════════ */
        .panel {
            background: var(--paper);
            border: 1px solid var(--line);
            border-radius: var(--radius-lg);
            overflow: hidden;
            transition: box-shadow .3s ease;
        }

        .panel:hover {
            box-shadow: var(--shadow-md);
        }

        .panel-body {
            padding: clamp(24px, 4vw, 36px);
        }

        /* ── Stat Cards ── */
        .stat-card {
            padding: 24px;
            background: var(--paper);
            border: 1px solid var(--line);
            border-radius: var(--radius-lg);
            transition: all .3s ease;
            text-decoration: none;
            display: block;
        }

        .stat-card:hover {
            border-color: var(--ink);
            box-shadow: var(--shadow-md);
            transform: translateY(-3px);
        }

        .stat-card .stat-icon {
            width: 44px;
            height: 44px;
            display: grid;
            place-items: center;
            border-radius: 12px;
            margin-bottom: 16px;
            background: var(--line-soft);
            color: var(--ink-soft);
        }

        .stat-card .stat-icon svg {
            width: 22px;
            height: 22px;
            stroke-width: 1.7;
        }

        .stat-card .stat-label {
            display: block;
            margin-bottom: 6px;
            color: var(--muted);
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .1em;
        }

        .stat-card .stat-value {
            display: block;
            font-family: var(--font-display);
            font-size: 18px;
            font-weight: 600;
            color: var(--ink);
        }

        /* ── Item cards ── */
        .item-card {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            padding: 24px;
            background: var(--paper);
            border: 1px solid var(--line);
            border-radius: var(--radius-lg);
            transition: all .3s ease;
        }

        .item-card:hover {
            border-color: var(--muted-light);
            box-shadow: var(--shadow-sm);
        }

        .item-card .item-icon {
            width: 48px;
            height: 48px;
            flex-shrink: 0;
            display: grid;
            place-items: center;
            border-radius: 12px;
            background: var(--line-soft);
            color: var(--muted);
        }

        .item-card .item-icon svg {
            width: 22px;
            height: 22px;
            stroke-width: 1.7;
        }

        .item-card .item-body {
            flex: 1;
            min-width: 0;
        }

        .item-meta {
            display: block;
            margin-bottom: 4px;
            color: var(--muted);
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .08em;
        }

        .item-card strong {
            display: block;
            font-size: 15px;
            line-height: 1.3;
            color: var(--ink);
        }

        .item-card p {
            margin: 4px 0 0;
            color: var(--muted);
            font-size: 13.5px;
            line-height: 1.5;
        }

        /* ── Default badge ── */
        .default-badge {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            width: fit-content;
            margin-top: 10px;
            border-radius: 999px;
            background: var(--gold-light);
            color: #92400e;
            padding: 4px 12px;
            font-size: 11px;
            font-weight: 800;
            letter-spacing: .04em;
            text-transform: uppercase;
        }

        .default-badge::before {
            content: '★';
            font-size: 10px;
        }

        /* ── Empty state ── */
        .empty-state {
            text-align: center;
            padding: 48px 24px;
            background: var(--paper);
            border: 1px dashed var(--line);
            border-radius: var(--radius-lg);
            color: var(--muted);
            line-height: 1.6;
        }

        .empty-state-icon {
            width: 64px;
            height: 64px;
            margin: 0 auto 16px;
            display: grid;
            place-items: center;
            border-radius: 50%;
            background: var(--line-soft);
            color: var(--muted-light);
        }

        .empty-state-icon svg {
            width: 28px;
            height: 28px;
            stroke-width: 1.5;
        }

        .empty-state h3 {
            font-family: var(--font-display);
            font-size: 18px;
            font-weight: 600;
            color: var(--ink);
            margin-bottom: 8px;
        }

        /* ══════════════════════════════════════════════════
           GRIDS
           ══════════════════════════════════════════════════ */
        .dashboard-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .content-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .content-grid.two {
            grid-template-columns: minmax(320px, .9fr) minmax(0, 1.1fr);
            align-items: start;
        }

        .item-list {
            display: grid;
            gap: 14px;
        }

        /* ══════════════════════════════════════════════════
           AUTH PAGES
           ══════════════════════════════════════════════════ */
        .auth-wrap {
            display: grid;
            grid-template-columns: minmax(0, 1fr) minmax(360px, 480px);
            min-height: calc(100vh - var(--nav-height) - 44px);
        }

        .auth-showcase {
            position: relative;
            display: flex;
            align-items: flex-end;
            overflow: hidden;
            background: var(--ink);
            color: #fff;
            border-radius: 0;
            border: none;
        }

        .auth-showcase::before {
            content: '';
            position: absolute;
            inset: 0;
            background:
                radial-gradient(ellipse at 30% 20%, rgba(190,18,60,.25) 0%, transparent 60%),
                radial-gradient(ellipse at 80% 80%, rgba(184,134,11,.15) 0%, transparent 50%),
                repeating-linear-gradient(90deg, rgba(255,255,255,.03) 0 1px, transparent 1px 80px),
                repeating-linear-gradient(0deg, rgba(255,255,255,.02) 0 1px, transparent 1px 80px);
        }

        .auth-showcase::after {
            content: '';
            position: absolute;
            top: 40px;
            right: 40px;
            width: 200px;
            height: 280px;
            border: 1px solid rgba(255,255,255,.15);
            border-radius: 12px;
            background: linear-gradient(165deg, rgba(255,255,255,.10), transparent 60%);
            box-shadow: -28px 34px 0 rgba(255,255,255,.06);
        }

        .auth-copy {
            position: relative;
            z-index: 1;
            padding: 48px;
            max-width: 520px;
        }

        .auth-copy .eyebrow {
            color: rgba(255,255,255,.6);
            margin-bottom: 16px;
        }

        .auth-copy .eyebrow::before {
            background: rgba(255,255,255,.4);
        }

        .auth-copy h1 {
            font-family: var(--font-display);
            font-size: clamp(32px, 4vw, 48px);
            font-weight: 700;
            line-height: 1.1;
            letter-spacing: -.02em;
            color: #fff;
            margin-bottom: 16px;
        }

        .auth-copy .lead {
            color: rgba(255,255,255,.55);
        }

        .auth-form-section {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 48px;
            background: var(--paper);
        }

        .auth-form-inner {
            width: 100%;
            max-width: 380px;
        }

        /* ══════════════════════════════════════════════════
           FORMS
           ══════════════════════════════════════════════════ */
        .form-grid {
            display: grid;
            gap: 18px;
        }

        .field {
            display: grid;
            gap: 7px;
        }

        label {
            color: var(--ink-soft);
            font-size: 13px;
            font-weight: 700;
            letter-spacing: .02em;
        }

        input, textarea, select {
            width: 100%;
            border: 1.5px solid var(--line);
            border-radius: var(--radius);
            background: var(--paper);
            color: var(--ink);
            font: inherit;
            font-size: 14px;
            padding: 13px 16px;
            outline: none;
            transition: all .2s ease;
        }

        textarea {
            min-height: 110px;
            resize: vertical;
        }

        input:focus, textarea:focus, select:focus {
            border-color: var(--ink);
            box-shadow: 0 0 0 4px rgba(10,10,10,.06);
        }

        input::placeholder, textarea::placeholder {
            color: var(--muted-light);
        }

        /* ── Buttons ── */
        .button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            min-height: 48px;
            border: none;
            border-radius: var(--radius);
            cursor: pointer;
            font: inherit;
            font-size: 13.5px;
            font-weight: 800;
            padding: 13px 24px;
            text-transform: uppercase;
            letter-spacing: .08em;
            transition: all .25s ease;
        }

        .button.primary, .button:not(.secondary):not(.ghost):not(.outline) {
            background: var(--ink);
            color: #fff;
            box-shadow: 0 4px 14px rgba(0,0,0,.15);
        }

        .button.primary:hover, .button:not(.secondary):not(.ghost):not(.outline):hover {
            background: var(--accent);
            box-shadow: 0 8px 24px var(--accent-glow);
            transform: translateY(-1px);
        }

        .button.secondary {
            background: var(--line-soft);
            color: var(--ink);
            box-shadow: none;
        }

        .button.secondary:hover {
            background: var(--line);
        }

        .button.ghost {
            min-height: 40px;
            padding: 8px 16px;
            background: var(--accent-light);
            color: var(--accent);
            box-shadow: none;
            font-size: 12px;
        }

        .button.ghost:hover {
            background: var(--accent);
            color: #fff;
        }

        .button.outline {
            background: transparent;
            color: var(--ink);
            border: 1.5px solid var(--ink);
            box-shadow: none;
        }

        .button.outline:hover {
            background: var(--ink);
            color: #fff;
        }

        .button svg {
            width: 16px;
            height: 16px;
        }

        /* ── Form Footer ── */
        .form-footer {
            margin-top: 20px;
            color: var(--muted);
            font-size: 14px;
            text-align: center;
        }

        .form-footer a {
            color: var(--ink);
            font-weight: 700;
            border-bottom: 1.5px solid var(--ink);
            padding-bottom: 1px;
        }

        .form-footer a:hover {
            color: var(--accent);
            border-color: var(--accent);
        }

        /* ── Alerts ── */
        .alert {
            border-radius: var(--radius);
            margin-bottom: 18px;
            padding: 14px 18px;
            font-size: 13.5px;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .alert::before {
            font-size: 16px;
            flex-shrink: 0;
        }

        .alert.success {
            background: #ecfdf5;
            color: #065f46;
            border: 1px solid #a7f3d0;
        }

        .alert.success::before { content: '✓'; }

        .alert.error {
            background: #fef2f2;
            color: #991b1b;
            border: 1px solid #fecaca;
        }

        .alert.error::before { content: '!'; }

        /* ══════════════════════════════════════════════════
           HERO SECTION
           ══════════════════════════════════════════════════ */
        .hero {
            position: relative;
            min-height: 85vh;
            display: flex;
            align-items: center;
            background: var(--ink);
            color: #fff;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            inset: 0;
            background:
                radial-gradient(ellipse at 25% 30%, rgba(190,18,60,.20) 0%, transparent 55%),
                radial-gradient(ellipse at 75% 70%, rgba(184,134,11,.12) 0%, transparent 50%);
            z-index: 1;
        }

        .hero-grid-pattern {
            position: absolute;
            inset: 0;
            background:
                repeating-linear-gradient(90deg, rgba(255,255,255,.025) 0 1px, transparent 1px 100px),
                repeating-linear-gradient(0deg, rgba(255,255,255,.015) 0 1px, transparent 1px 100px);
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 680px;
            padding: 80px 0;
        }

        .hero .eyebrow {
            color: rgba(255,255,255,.5);
            margin-bottom: 20px;
        }

        .hero .eyebrow::before {
            background: var(--accent);
        }

        .hero h1 {
            font-family: var(--font-display);
            font-size: clamp(44px, 7vw, 80px);
            font-weight: 700;
            line-height: 1;
            letter-spacing: -.03em;
            margin-bottom: 24px;
        }

        .hero h1 em {
            font-style: italic;
            color: var(--accent);
        }

        .hero .lead {
            color: rgba(255,255,255,.5);
            font-size: 16px;
            margin-bottom: 36px;
        }

        .hero-actions {
            display: flex;
            align-items: center;
            gap: 14px;
            flex-wrap: wrap;
        }

        .hero-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 15px 32px;
            font-size: 13px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: .1em;
            border-radius: 999px;
            transition: all .3s ease;
            border: none;
        }

        .hero-btn.filled {
            background: #fff;
            color: var(--ink);
        }

        .hero-btn.filled:hover {
            background: var(--accent);
            color: #fff;
            transform: translateY(-2px);
            box-shadow: 0 12px 32px rgba(190,18,60,.25);
        }

        .hero-btn.outlined {
            background: transparent;
            color: #fff;
            border: 1.5px solid rgba(255,255,255,.3);
        }

        .hero-btn.outlined:hover {
            border-color: #fff;
            background: rgba(255,255,255,.08);
        }

        .hero-shapes {
            position: absolute;
            right: 5%;
            top: 50%;
            transform: translateY(-50%);
            z-index: 1;
            opacity: .7;
        }

        .hero-shape {
            position: absolute;
            border: 1px solid rgba(255,255,255,.12);
            border-radius: 16px;
        }

        .hero-shape:nth-child(1) {
            width: 220px;
            height: 300px;
            top: -150px;
            right: 0;
            background: linear-gradient(165deg, rgba(255,255,255,.06), transparent 55%);
        }

        .hero-shape:nth-child(2) {
            width: 180px;
            height: 250px;
            top: -100px;
            right: 60px;
            background: linear-gradient(165deg, rgba(190,18,60,.08), transparent 55%);
            box-shadow: -24px 28px 0 rgba(255,255,255,.04);
        }

        .hero-shape:nth-child(3) {
            width: 120px;
            height: 170px;
            top: 40px;
            right: 240px;
            background: linear-gradient(165deg, rgba(184,134,11,.08), transparent 55%);
        }

        /* ══════════════════════════════════════════════════
           CATEGORIES SECTION
           ══════════════════════════════════════════════════ */
        .categories-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .category-card {
            position: relative;
            aspect-ratio: 3/4;
            border-radius: var(--radius-xl);
            overflow: hidden;
            cursor: pointer;
            display: flex;
            align-items: flex-end;
        }

        .category-card-bg {
            position: absolute;
            inset: 0;
            transition: transform .6s cubic-bezier(.22,1,.36,1);
        }

        .category-card:nth-child(1) .category-card-bg {
            background: linear-gradient(145deg, #1a1a2e 0%, #16213e 50%, #0f3460 100%);
        }

        .category-card:nth-child(2) .category-card-bg {
            background: linear-gradient(145deg, #2d1b3d 0%, #5c2a5e 50%, #8e3a5e 100%);
        }

        .category-card:nth-child(3) .category-card-bg {
            background: linear-gradient(145deg, #1a1a0e 0%, #3d3520 50%, #6b5b3d 100%);
        }

        .category-card:hover .category-card-bg {
            transform: scale(1.05);
        }

        .category-card-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(0,0,0,.7) 0%, transparent 60%);
            z-index: 1;
        }

        .category-card-content {
            position: relative;
            z-index: 2;
            padding: 28px;
            color: #fff;
            width: 100%;
        }

        .category-card-content .eyebrow {
            color: rgba(255,255,255,.6);
            margin-bottom: 8px;
            font-size: 10px;
        }

        .category-card-content .eyebrow::before {
            background: rgba(255,255,255,.4);
            width: 16px;
        }

        .category-card-content h3 {
            font-family: var(--font-display);
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 4px;
        }

        .category-card-content p {
            font-size: 13px;
            color: rgba(255,255,255,.5);
        }

        .category-card .arrow-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            margin-top: 12px;
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .1em;
            color: #fff;
            transition: gap .3s ease;
        }

        .category-card:hover .arrow-link {
            gap: 14px;
        }

        .arrow-link svg {
            width: 16px;
            height: 16px;
        }

        /* ══════════════════════════════════════════════════
           PRODUCT CARDS
           ══════════════════════════════════════════════════ */
        .products-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        .product-card {
            display: block;
            text-decoration: none;
            border-radius: var(--radius-lg);
            overflow: hidden;
            transition: all .3s ease;
        }

        .product-card:hover {
            transform: translateY(-4px);
        }

        .product-thumb {
            position: relative;
            aspect-ratio: 3/4;
            overflow: hidden;
            border-radius: var(--radius-lg);
        }

        .product-thumb-bg {
            position: absolute;
            inset: 0;
            transition: transform .6s cubic-bezier(.22,1,.36,1);
        }

        .product-card:hover .product-thumb-bg {
            transform: scale(1.06);
        }

        .product-card:nth-child(1) .product-thumb-bg { background: linear-gradient(135deg, #f5e6d3 0%, #e8d5c0 50%, #d4c0a8 100%); }
        .product-card:nth-child(2) .product-thumb-bg { background: linear-gradient(135deg, #d4e4ed 0%, #b8cfe0 50%, #9cb8d0 100%); }
        .product-card:nth-child(3) .product-thumb-bg { background: linear-gradient(135deg, #e8d5e0 0%, #d4b8c8 50%, #c09bb0 100%); }
        .product-card:nth-child(4) .product-thumb-bg { background: linear-gradient(135deg, #d4ddd4 0%, #b8c8b8 50%, #9cb09c 100%); }
        .product-card:nth-child(5) .product-thumb-bg { background: linear-gradient(135deg, #e8e0d0 0%, #d8cbb8 50%, #c8b8a0 100%); }
        .product-card:nth-child(6) .product-thumb-bg { background: linear-gradient(135deg, #d0d4e0 0%, #b8bcd0 50%, #a0a4c0 100%); }
        .product-card:nth-child(7) .product-thumb-bg { background: linear-gradient(135deg, #e0d4d4 0%, #d0b8b8 50%, #c0a0a0 100%); }
        .product-card:nth-child(8) .product-thumb-bg { background: linear-gradient(135deg, #dde8d4 0%, #c8d8b8 50%, #b0c89c 100%); }

        .product-thumb-label {
            position: absolute;
            top: 12px;
            left: 12px;
            z-index: 2;
            padding: 5px 12px;
            font-size: 10px;
            font-weight: 800;
            letter-spacing: .1em;
            text-transform: uppercase;
            border-radius: 999px;
            background: var(--ink);
            color: #fff;
        }

        .product-thumb-label.sale {
            background: var(--accent);
        }

        .product-thumb .wishlist-btn {
            position: absolute;
            top: 12px;
            right: 12px;
            z-index: 2;
            width: 36px;
            height: 36px;
            display: grid;
            place-items: center;
            border-radius: 50%;
            background: rgba(255,255,255,.9);
            border: none;
            cursor: pointer;
            color: var(--muted);
            opacity: 0;
            transform: translateY(6px);
            transition: all .3s ease;
        }

        .product-card:hover .wishlist-btn {
            opacity: 1;
            transform: translateY(0);
        }

        .wishlist-btn:hover {
            color: var(--accent) !important;
            background: #fff !important;
        }

        .wishlist-btn svg {
            width: 18px;
            height: 18px;
        }

        .product-info {
            padding: 14px 4px;
        }

        .product-brand {
            display: block;
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .08em;
            color: var(--muted);
            margin-bottom: 4px;
        }

        .product-name {
            display: block;
            font-size: 14px;
            font-weight: 500;
            color: var(--ink);
            margin-bottom: 6px;
            line-height: 1.4;
        }

        .product-price {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .product-price .current {
            font-size: 15px;
            font-weight: 800;
            color: var(--ink);
        }

        .product-price .original {
            font-size: 13px;
            color: var(--muted-light);
            text-decoration: line-through;
        }

        /* ══════════════════════════════════════════════════
           PROMO BANNER
           ══════════════════════════════════════════════════ */
        .promo-banner {
            position: relative;
            padding: 64px 48px;
            border-radius: var(--radius-xl);
            overflow: hidden;
            background: var(--ink);
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 40px;
        }

        .promo-banner::before {
            content: '';
            position: absolute;
            inset: 0;
            background:
                radial-gradient(ellipse at 0% 0%, rgba(190,18,60,.25) 0%, transparent 55%),
                radial-gradient(ellipse at 100% 100%, rgba(184,134,11,.15) 0%, transparent 50%);
        }

        .promo-content {
            position: relative;
            z-index: 1;
        }

        .promo-content .eyebrow {
            color: var(--gold);
            margin-bottom: 12px;
        }

        .promo-content .eyebrow::before {
            background: var(--gold);
        }

        .promo-content h2 {
            font-family: var(--font-display);
            font-size: clamp(28px, 4vw, 44px);
            font-weight: 700;
            line-height: 1.1;
            letter-spacing: -.02em;
            margin-bottom: 8px;
        }

        .promo-content p {
            color: rgba(255,255,255,.5);
            font-size: 15px;
        }

        .promo-actions {
            position: relative;
            z-index: 1;
            flex-shrink: 0;
        }

        /* ══════════════════════════════════════════════════
           NEWSLETTER
           ══════════════════════════════════════════════════ */
        .newsletter-section {
            text-align: center;
            padding: 72px 0;
        }

        .newsletter-section h2 {
            font-family: var(--font-display);
            font-size: clamp(28px, 4vw, 40px);
            font-weight: 700;
            letter-spacing: -.02em;
            margin-bottom: 12px;
        }

        .newsletter-section .lead {
            margin: 0 auto 28px;
        }

        .newsletter-form {
            display: flex;
            gap: 0;
            max-width: 480px;
            margin: 0 auto;
        }

        .newsletter-form input {
            border-radius: 999px 0 0 999px;
            border-right: none;
            flex: 1;
        }

        .newsletter-form button {
            border-radius: 0 999px 999px 0;
            white-space: nowrap;
        }

        /* ══════════════════════════════════════════════════
           SECTION HEADER
           ══════════════════════════════════════════════════ */
        .section-header {
            display: flex;
            align-items: flex-end;
            justify-content: space-between;
            gap: 20px;
            margin-bottom: 32px;
        }

        .section-header h2 {
            font-family: var(--font-display);
            font-size: clamp(24px, 4vw, 36px);
            font-weight: 700;
            letter-spacing: -.02em;
            line-height: 1.1;
        }

        .section-header .view-all {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            font-size: 13px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .06em;
            color: var(--muted);
            white-space: nowrap;
            padding-bottom: 4px;
            border-bottom: 1.5px solid transparent;
            transition: all .2s ease;
        }

        .section-header .view-all:hover {
            color: var(--ink);
            border-color: var(--ink);
        }

        .section-header .view-all svg {
            width: 14px;
            height: 14px;
        }

        /* ══════════════════════════════════════════════════
           FEATURES BAR
           ══════════════════════════════════════════════════ */
        .features-bar {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1px;
            background: var(--line);
            border-radius: var(--radius-xl);
            overflow: hidden;
        }

        .feature-item {
            display: flex;
            align-items: center;
            gap: 14px;
            padding: 24px;
            background: var(--paper);
        }

        .feature-item .feature-icon {
            width: 44px;
            height: 44px;
            flex-shrink: 0;
            display: grid;
            place-items: center;
            border-radius: 12px;
            background: var(--line-soft);
            color: var(--ink);
        }

        .feature-item .feature-icon svg {
            width: 20px;
            height: 20px;
            stroke-width: 1.7;
        }

        .feature-item h4 {
            font-size: 13px;
            font-weight: 700;
            margin-bottom: 2px;
        }

        .feature-item p {
            font-size: 12px;
            color: var(--muted);
        }

        /* ══════════════════════════════════════════════════
           ACCOUNT SIDEBAR
           ══════════════════════════════════════════════════ */
        .account-layout {
            display: grid;
            grid-template-columns: 240px 1fr;
            gap: 28px;
            align-items: start;
        }

        .account-sidebar {
            position: sticky;
            top: calc(var(--nav-height) + 20px);
        }

        .account-sidebar .panel-body {
            padding: 8px;
        }

        .sidebar-nav {
            list-style: none;
        }

        .sidebar-nav li a {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 12px 16px;
            font-size: 14px;
            font-weight: 500;
            color: var(--muted);
            border-radius: var(--radius);
            transition: all .2s ease;
        }

        .sidebar-nav li a:hover {
            color: var(--ink);
            background: var(--line-soft);
        }

        .sidebar-nav li a.active {
            color: var(--ink);
            background: var(--line-soft);
            font-weight: 700;
        }

        .sidebar-nav li a svg {
            width: 18px;
            height: 18px;
            stroke-width: 1.7;
            flex-shrink: 0;
        }

        .account-main {
            min-width: 0;
        }

        /* ══════════════════════════════════════════════════
           FOOTER
           ══════════════════════════════════════════════════ */
        .site-footer {
            background: var(--ink);
            color: rgba(255,255,255,.65);
            margin-top: 0;
        }

        .footer-main {
            display: grid;
            grid-template-columns: 1.4fr repeat(3, 1fr);
            gap: 48px;
            padding: 72px 0 56px;
        }

        .footer-brand .brand-name {
            color: #fff;
            margin-bottom: 16px;
            display: block;
        }

        .footer-brand p {
            font-size: 14px;
            line-height: 1.7;
            max-width: 280px;
            margin-bottom: 24px;
        }

        .footer-social {
            display: flex;
            gap: 10px;
        }

        .footer-social a {
            width: 38px;
            height: 38px;
            display: grid;
            place-items: center;
            border: 1px solid rgba(255,255,255,.15);
            border-radius: 50%;
            transition: all .25s ease;
        }

        .footer-social a:hover {
            border-color: #fff;
            background: rgba(255,255,255,.1);
            color: #fff;
        }

        .footer-social a svg {
            width: 16px;
            height: 16px;
        }

        .footer-col h4 {
            color: #fff;
            font-size: 12px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: .14em;
            margin-bottom: 20px;
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 12px;
        }

        .footer-links a {
            font-size: 14px;
            transition: color .2s ease;
        }

        .footer-links a:hover {
            color: #fff;
        }

        .footer-bottom {
            border-top: 1px solid rgba(255,255,255,.1);
            padding: 24px 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: 13px;
        }

        .footer-payments {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .footer-payments span {
            padding: 4px 10px;
            border: 1px solid rgba(255,255,255,.15);
            border-radius: 4px;
            font-size: 11px;
            font-weight: 700;
        }

        /* ══════════════════════════════════════════════════
           ANIMATIONS
           ══════════════════════════════════════════════════ */
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .animate-fade-in-up {
            animation: fadeInUp .6s ease both;
        }

        .animate-delay-1 { animation-delay: .1s; }
        .animate-delay-2 { animation-delay: .2s; }
        .animate-delay-3 { animation-delay: .3s; }
        .animate-delay-4 { animation-delay: .4s; }

        /* ══════════════════════════════════════════════════
           RESPONSIVE
           ══════════════════════════════════════════════════ */
        @media (max-width: 1024px) {
            .products-grid {
                grid-template-columns: repeat(3, 1fr);
            }
            .features-bar {
                grid-template-columns: repeat(2, 1fr);
            }
            .footer-main {
                grid-template-columns: repeat(2, 1fr);
                gap: 36px;
            }
            .account-layout {
                grid-template-columns: 1fr;
            }
            .account-sidebar {
                position: static;
            }
        }

        @media (max-width: 860px) {
            :root {
                --nav-height: 64px;
            }

            .container {
                width: calc(100% - 32px);
            }

            .nav-menu {
                display: none;
            }

            .nav-toggle {
                display: grid;
                place-items: center;
            }

            .hero { min-height: 70vh; }
            .hero h1 { font-size: 36px; }
            .hero-shapes { display: none; }

            .categories-grid {
                grid-template-columns: 1fr;
            }

            .category-card {
                aspect-ratio: 16/9;
            }

            .products-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 14px;
            }

            .promo-banner {
                flex-direction: column;
                padding: 40px 28px;
                text-align: center;
            }

            .auth-wrap {
                grid-template-columns: 1fr;
            }

            .auth-showcase {
                min-height: 280px;
            }

            .auth-form-section {
                padding: 32px 24px;
            }

            .content-grid.two {
                grid-template-columns: 1fr;
            }

            .dashboard-grid,
            .content-grid {
                grid-template-columns: 1fr;
            }

            .item-card {
                flex-direction: column;
                align-items: flex-start;
            }

            .features-bar {
                grid-template-columns: 1fr;
            }

            .footer-main {
                grid-template-columns: 1fr;
                gap: 32px;
                padding: 48px 0 32px;
            }

            .footer-bottom {
                flex-direction: column;
                gap: 12px;
                text-align: center;
            }

            .newsletter-form {
                flex-direction: column;
                gap: 10px;
            }

            .newsletter-form input {
                border-radius: 999px;
                border-right: 1.5px solid var(--line);
            }

            .newsletter-form button {
                border-radius: 999px;
            }

            .page-header h1 {
                font-size: 32px;
            }
        }

        @media (max-width: 480px) {
            .products-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 10px;
            }

            .product-info { padding: 10px 2px; }
            .product-name { font-size: 13px; }
            .product-price .current { font-size: 14px; }
        }
    </style>
</head>
<body>

    <!-- ═══ ANNOUNCEMENT BAR ═══ -->
    <div class="announcement-bar">
        Free Shipping untuk pembelian di atas <span>Rp 500.000</span> &mdash; Belanja sekarang!
    </div>

    <!-- ═══ NAVBAR ═══ -->
    <nav class="site-navbar" id="site-navbar">
        <div class="container">
            <div class="navbar-inner">
                <div class="navbar-left">
                    <a class="brand" href="{{ route('home') }}">
                        <span class="brand-logo">FN</span>
                        <span class="brand-name">FashionNova</span>
                    </a>
                    <div class="nav-menu">
                        <a class="nav-item" href="{{ route('home') }}">Home</a>
                        @auth
                            <a class="nav-item" href="{{ route('profile.index') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/></svg>
                                Profil
                            </a>
                            <a class="nav-item" href="{{ route('addresses.index') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/></svg>
                                Alamat
                            </a>
                            <a class="nav-item" href="{{ route('wishlist.index') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/></svg>
                                Wishlist
                            </a>
                        @endauth
                    </div>
                </div>

                <div class="navbar-right">
                    @auth
                        <a class="nav-icon-btn" href="{{ route('wishlist.index') }}" title="Wishlist">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/></svg>
                            <span class="badge-dot"></span>
                        </a>
                        <a class="nav-icon-btn" href="{{ route('profile.index') }}" title="Akun Saya">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/></svg>
                        </a>
                        <div class="nav-divider"></div>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="nav-item" type="submit">Logout</button>
                        </form>
                    @else
                        <a class="nav-item" href="{{ route('login') }}">Login</a>
                        <a class="nav-cta" href="{{ route('register') }}">Daftar</a>
                    @endauth

                    <button class="nav-toggle" aria-label="Menu" onclick="document.querySelector('.nav-menu').style.display = document.querySelector('.nav-menu').style.display === 'flex' ? 'none' : 'flex'">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/></svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- ═══ MAIN CONTENT ═══ -->
    <main class="site-main">
        @yield('content')
    </main>

    <!-- ═══ FOOTER ═══ -->
    <footer class="site-footer">
        <div class="container">
            <div class="footer-main">
                <div class="footer-brand">
                    <span class="brand-name" style="font-family: var(--font-display); font-size: 24px;">FashionNova</span>
                    <p>Temukan gaya terbaikmu bersama FashionNova. Koleksi fashion terkurasi untuk tampil percaya diri setiap hari.</p>
                    <div class="footer-social">
                        <a href="#" aria-label="Instagram">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><rect x="2" y="2" width="20" height="20" rx="5" stroke-width="1.7"/><circle cx="12" cy="12" r="5" stroke-width="1.7"/><circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/></svg>
                        </a>
                        <a href="#" aria-label="Twitter">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.7"><path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z"/></svg>
                        </a>
                        <a href="#" aria-label="Facebook">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.7"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg>
                        </a>
                        <a href="#" aria-label="TikTok">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.7"><path d="M9 12a4 4 0 104 4V4a5 5 0 005 5"/></svg>
                        </a>
                    </div>
                </div>

                <div class="footer-col">
                    <h4>Belanja</h4>
                    <ul class="footer-links">
                        <li><a href="#">New Arrivals</a></li>
                        <li><a href="#">Women</a></li>
                        <li><a href="#">Men</a></li>
                        <li><a href="#">Accessories</a></li>
                        <li><a href="#">Sale</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Bantuan</h4>
                    <ul class="footer-links">
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Pengiriman</a></li>
                        <li><a href="#">Pengembalian</a></li>
                        <li><a href="#">Kontak Kami</a></li>
                        <li><a href="#">Panduan Ukuran</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Informasi</h4>
                    <ul class="footer-links">
                        <li><a href="#">Tentang Kami</a></li>
                        <li><a href="#">Kebijakan Privasi</a></li>
                        <li><a href="#">Syarat & Ketentuan</a></li>
                        <li><a href="#">Karir</a></li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <span>&copy; {{ date('Y') }} FashionNova. All rights reserved.</span>
                <div class="footer-payments">
                    <span>VISA</span>
                    <span>MASTERCARD</span>
                    <span>BCA</span>
                    <span>GOPAY</span>
                    <span>OVO</span>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
