<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio Alya Farahus Shadiqah — System Analyst, Web Developer, dan UI/UX Enthusiast.">
    <title>Alya Farahus Shadiqah — System Analyst</title>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <link rel="stylesheet" href="{{ asset('portfolio.css') }}">
    @endif
    <style>
        .site-header { position: sticky; top: 0; z-index: 100; background: rgba(245, 243, 238, .92); backdrop-filter: blur(14px); -webkit-backdrop-filter: blur(14px); }
        .project-year { color: var(--muted); font-size: 10px !important; margin-top: 10px !important; }
        .project-meta > p strong { display: block; color: var(--ink); font-weight: 500; margin-top: 12px; }
        .skills { border-top: 1px solid var(--line); padding-top: 24px; }
        .skill-list { display: flex; flex-wrap: wrap; gap: 10px; margin-top: 18px; }
        .skill-list span { border: 1px solid var(--line); border-radius: 999px; padding: 7px 13px; color: var(--muted); font-size: 11px; }
        .experience { border-top: 1px solid var(--line); padding: 28px 0 140px; }
        .experience-list { margin-top: 65px; }
        .experience-list article { display: grid; grid-template-columns: 1fr 1.1fr 70px; gap: 10%; padding: 27px 0; border-top: 1px solid var(--line); align-items: start; }
        .experience-list article:last-child { border-bottom: 1px solid var(--line); }
        .experience-list h3 { font-size: 25px; font-weight: 500; letter-spacing: -.05em; margin: 6px 0 0; }
        .experience-list article > p { color: var(--muted); font-size: 13px; margin: 0; max-width: 430px; }
        .experience-list article > span { color: var(--muted); font-size: 11px; text-align: right; }
        .social-links { display: flex; gap: 28px; margin-top: 30px; color: #afbbb5; font-size: 12px; }
        .social-links a:hover { color: var(--paper); }
        @media (max-width: 700px) { .experience { padding-bottom: 90px; } .experience-list { margin-top: 50px; } .experience-list article { display: block; } .experience-list article > p { margin-top: 18px; } .experience-list article > span { display: block; text-align: left; margin-top: 15px; } .social-links { gap: 20px; flex-wrap: wrap; } }
    </style>
</head>
<body>
    <header class="site-header">
        <a class="brand" href="#top" aria-label="Kembali ke beranda">AF<span>.</span></a>
        <nav class="nav-links" aria-label="Navigasi utama"><a href="#work">Projects</a><a href="#about">About</a><a href="#experience">Experience</a><a href="#contact">Contact</a></nav>
        <a class="availability" href="mailto:afshadiqah@gmail.com"><span></span> Open to opportunities</a>
    </header>
    <main id="top">
        <section class="hero shell"><div class="hero-copy"><p class="eyebrow">System analyst · Web developer · Bandung</p><h1>Systems with<br><em>clear purpose.</em></h1><p class="hero-intro">Fresh graduate Teknik Informatika yang mengubah kebutuhan pengguna menjadi requirement, alur sistem, dan solusi digital yang terarah.</p><a class="text-link" href="#work">Lihat project <span>↘</span></a></div><div class="hero-visual"><div class="portrait-frame"><img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?auto=format&fit=crop&w=1100&q=85" alt="Kolaborasi tim dalam proses analisis sistem"><span class="image-note">Portfolio<br>2024 — 2026</span></div><div class="hero-stamp">AF<br><span>↗</span></div></div></section>
        <section class="marquee" aria-label="Keahlian"><div class="marquee-inner"><span>System analysis</span><i>✳</i><span>Web development</span><i>✳</i><span>UI/UX design</span><i>✳</i><span>Requirement analysis</span><i>✳</i></div></section>
        <section class="work shell" id="work"><div class="section-heading"><p class="eyebrow">01 — Selected projects</p><p class="section-count">( 05 projects )</p></div><div class="work-intro"><h2>From needs to<br><em>working systems.</em></h2><p>Project yang memperlihatkan cara saya menganalisis masalah, menyusun kebutuhan, dan berkolaborasi untuk membangun solusi digital.</p></div><div class="project-grid">@foreach ($projects as $project)<article class="project-card {{ $project['class'] }}"><a href="#contact" class="project-image"><img src="{{ $project['image'] }}" alt="{{ $project['title'] }} project" loading="lazy"><span class="project-arrow">↗</span></a><div class="project-meta"><div><p class="project-type">{{ $project['type'] }}</p><h3>{{ $project['title'] }}</h3><p class="project-year">{{ $project['year'] }} · {{ $project['link'] }}</p></div><p>{{ $project['description'] }}<br><strong>{{ $project['technology'] }}</strong></p></div></article>@endforeach</div></section>
        <section class="about shell" id="about"><div class="section-heading"><p class="eyebrow">02 — About Alya</p><p class="section-count">Bandung, Indonesia</p></div><div class="about-content"><h2>Analysis with<br><em>empathy.</em></h2><div><p class="large-copy">Saya Alya, System Analyst dengan pengalaman di Web Development, UI/UX, dan pengembangan solusi digital.</p><p>Saya terbiasa menganalisis kebutuhan pengguna, menyusun requirement, membuat backlog dan Product Backlog Item, merancang flow, mendokumentasikan sistem, serta berkoordinasi dengan tim Frontend dan Backend.</p><a class="text-link" href="mailto:afshadiqah@gmail.com">Hubungi saya <span>↗</span></a></div></div><div class="stats"><div><strong>05</strong><span>Selected<br>projects</span></div><div><strong>03</strong><span>Core<br>disciplines</span></div><div><strong>26</strong><span>Graduated<br>year</span></div></div><div class="skills"><p class="eyebrow">Core skills</p><div class="skill-list"><span>System Analysis</span><span>Requirement Analysis</span><span>System Design</span><span>Laravel & PHP</span><span>MySQL & SQL</span><span>JavaScript</span><span>Figma</span><span>Software Testing</span><span>Documentation</span><span>Problem Solving</span></div></div></section>
        <section class="experience shell" id="experience"><div class="section-heading"><p class="eyebrow">03 — Experience</p></div><div class="experience-list"><article><div><p class="project-type">System Analyst · PT Cerebrum Edukanesia Nusantara</p><h3>SIMarsel</h3></div><p>Menganalisis sistem lama dan kebutuhan pengembangan sistem baru, menyusun backlog, PBI, user story, acceptance criteria, dependency, flow, serta dokumentasi untuk tim developer.</p><span>2026</span></article><article><div><p class="project-type">Web Developer · BBSPJIS</p><h3>Document Management System</h3></div><p>Mengembangkan file manager, autentikasi, OTP login, role-based access, dashboard administrasi, dan pengelolaan pengguna menggunakan Laravel, PHP, MySQL, JavaScript, dan Tailwind CSS.</p><span>2025</span></article></div></section>
        <section class="contact shell" id="contact"><div class="contact-top"><p class="eyebrow">04 — Start a conversation</p><span>Let’s connect</span></div><h2>Let’s build something<br><em>useful.</em></h2><a class="contact-email" href="mailto:afshadiqah@gmail.com">afshadiqah@gmail.com <span>↗</span></a><div class="social-links"><a href="https://www.linkedin.com/in/alfarasha77" target="_blank" rel="noreferrer">LinkedIn ↗</a><a href="https://instagram.com/frshaa77" target="_blank" rel="noreferrer">Instagram ↗</a></div></section>
    </main>
    <footer class="site-footer shell"><span>© {{ date('Y') }} Alya Farahus Shadiqah</span><span>Jl. Sukamanah, Bandung</span><a href="#top">Back to top ↑</a></footer>
</body>
</html>