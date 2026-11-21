<?php

namespace Database\Seeders;

use App\Models\Portfolio;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PortfolioSeeder extends Seeder
{
    public function run(): void
    {
        $portfolios = [
            [
                'title'       => 'E-Commerce Fashion Brand',
                'description' => 'Platform e-commerce lengkap dengan sistem pembayaran, manajemen stok, dan dashboard admin untuk brand fashion lokal.',
                'image'       => 'portfolios/portfolio-1.jpg',
                'client'      => 'PT Batik Nusantara',
                'project_url' => 'https://example.com/batik-nusantara',
                'category'    => 'E-Commerce',
                'sort_order'  => 1,
            ],
            [
                'title'       => 'Aplikasi Manajemen Rumah Sakit',
                'description' => 'Sistem informasi rumah sakit terintegrasi: rekam medis elektronik, jadwal dokter, dan antrian online.',
                'image'       => 'portfolios/portfolio-2.jpg',
                'client'      => 'RS Harapan Sehat',
                'project_url' => null,
                'category'    => 'Healthcare',
                'sort_order'  => 2,
            ],
            [
                'title'       => 'Mobile App Delivery',
                'description' => 'Aplikasi delivery makanan dengan real-time tracking, multi-payment, dan rating system.',
                'image'       => 'portfolios/portfolio-3.jpg',
                'client'      => 'StartupFood ID',
                'project_url' => 'https://example.com/startupfood',
                'category'    => 'Mobile App',
                'sort_order'  => 3,
            ],
            [
                'title'       => 'Dashboard Analytics',
                'description' => 'Dashboard analitik real-time untuk memantau performa marketing digital klien enterprise.',
                'image'       => 'portfolios/portfolio-4.jpg',
                'client'      => 'Digital Agency Corp',
                'project_url' => null,
                'category'    => 'Dashboard',
                'sort_order'  => 4,
            ],
        ];

        foreach ($portfolios as $portfolio) {
            $portfolio['slug'] = Str::slug($portfolio['title']);
            Portfolio::create($portfolio);
        }
    }
}