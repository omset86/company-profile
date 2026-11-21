<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            [
                'title'       => 'Web Development',
                'description' => 'Pengembangan website profesional, mulai dari company profile hingga aplikasi web kompleks berbasis Laravel dan React.',
                'icon'        => 'heroicon-o-globe-alt',
                'sort_order'  => 1,
            ],
            [
                'title'       => 'Mobile App Development',
                'description' => 'Aplikasi mobile native (iOS & Android) maupun cross-platform menggunakan Flutter dan React Native.',
                'icon'        => 'heroicon-o-device-phone-mobile',
                'sort_order'  => 2,
            ],
            [
                'title'       => 'UI/UX Design',
                'description' => 'Desain antarmuka yang modern, intuitif, dan berorientasi pada pengalaman pengguna terbaik.',
                'icon'        => 'heroicon-o-paint-brush',
                'sort_order'  => 3,
            ],
            [
                'title'       => 'Cloud & DevOps',
                'description' => 'Setup infrastruktur cloud, CI/CD pipeline, dan manajemen server untuk aplikasi yang scalable.',
                'icon'        => 'heroicon-o-cloud',
                'sort_order'  => 4,
            ],
            [
                'title'       => 'Konsultasi IT',
                'description' => 'Layanan konsultasi strategis untuk transformasi digital bisnis Anda.',
                'icon'        => 'heroicon-o-light-bulb',
                'sort_order'  => 5,
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}