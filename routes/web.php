<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', ['projects' => [
        ['title' => 'Document Management System', 'type' => 'Web development · Laravel', 'description' => 'Sistem manajemen dokumen dengan file manager, autentikasi, OTP, role-based access, dashboard, dan administrasi pengguna.', 'technology' => 'Laravel 11 · PHP · MySQL · Tailwind CSS', 'year' => '2025', 'link' => 'Notion — Portfolio / DMS Project', 'image' => 'https://images.unsplash.com/photo-1554224155-6726b3ff858f?auto=format&fit=crop&w=1200&q=85', 'class' => 'project-wide'],
        ['title' => 'Random Forest Classification', 'type' => 'Data mining · Machine learning', 'description' => 'Monitoring aktivitas pengguna pada Document Management System untuk mengklasifikasikan aktivitas normal dan anomali.', 'technology' => 'Laravel 11 · PHP · MySQL · Random Forest', 'year' => '2025–2026', 'link' => 'Notion — Random Forest Project', 'image' => 'https://images.unsplash.com/photo-1556761175-b413da4baf72?auto=format&fit=crop&w=1200&q=85', 'class' => 'project-wide'],
        ['title' => 'Derma Ceria', 'type' => 'UI/UX design · Donation platform', 'description' => 'Konsep platform donasi online yang transparan dengan fitur pencarian program, tracking, riwayat donasi, dan informasi pengelolaan dana.', 'technology' => 'Figma · ReactJS · ExpressJS · MySQL', 'year' => '2024', 'link' => 'Notion — Derma Ceria', 'image' => 'https://images.unsplash.com/photo-1559028012-481c04fa702d?auto=format&fit=crop&w=1200&q=85', 'class' => 'project-tall'],
        ['title' => 'Litera Life', 'type' => 'UI/UX design · Health community', 'description' => 'Konsep platform literasi kesehatan untuk membaca, menulis, dan berdiskusi berdasarkan kategori kesehatan.', 'technology' => 'Figma · Website design', 'year' => '2024', 'link' => 'Notion — Litera Life', 'image' => 'https://images.unsplash.com/photo-1505751172876-fa1923c5c528?auto=format&fit=crop&w=1200&q=85', 'class' => 'project-wide'],
    ]]);
});
