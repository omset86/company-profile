<?php

namespace Database\Seeders;

use App\Models\CompanyProfile;
use Illuminate\Database\Seeder;

class CompanyProfileSeeder extends Seeder
{
    public function run(): void
    {
        CompanyProfile::updateOrCreate(
            ['id' => 1],
            [
                'name'        => 'PT Nusantara Digital Solusi',
                'tagline'     => 'Membangun Solusi Digital untuk Masa Depan',
                'description' => 'Kami adalah perusahaan teknologi yang berfokus pada pengembangan aplikasi web, mobile, dan sistem enterprise untuk bisnis di seluruh Indonesia.',
                'address'     => 'Jl. Sudirman No. 123, Jakarta Selatan, DKI Jakarta 12190',
                'email'       => 'info@nusantaradigital.id',
                'phone'       => '+62 21 5555 1234',
                'logo'        => null,
                'facebook'    => 'https://facebook.com/nusantaradigital',
                'instagram'   => 'https://instagram.com/nusantaradigital',
                'linkedin'    => 'https://linkedin.com/company/nusantaradigital',
                'twitter'     => 'https://twitter.com/nusantaradigital',
                'youtube'     => 'https://youtube.com/@nusantaradigital',
            ]
        );
    }
}