<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        $articles = [
            [
                'title'        => 'Tren Teknologi 2026 yang Wajib Diketahui',
                'excerpt'      => 'Dari AI generatif hingga quantum computing, inilah teknologi yang akan membentuk masa depan.',
                'content'      => '<p>Di tahun 2026, dunia teknologi terus berkembang pesat...</p><p>AI generatif telah menjadi bagian integral...</p>',
                'thumbnail'    => 'articles/article-1.jpg',
                'published_at' => now()->subDays(2),
                'is_published' => true,
            ],
            [
                'title'        => 'Mengapa Laravel Masih Menjadi Pilihan Utama?',
                'excerpt'      => 'Framework PHP ini terus berevolusi dan tetap relevan di era modern.',
                'content'      => '<p>Laravel telah menjadi framework PHP paling populer selama satu dekade...</p>',
                'thumbnail'    => 'articles/article-2.jpg',
                'published_at' => now()->subDays(7),
                'is_published' => true,
            ],
            [
                'title'        => 'Tips Membangun Startup Teknologi yang Sukses',
                'excerpt'      => 'Pelajari strategi dari para founder yang telah berhasil membangun startup unicorn.',
                'content'      => '<p>Membangun startup bukan hanya tentang ide, tapi juga eksekusi...</p>',
                'thumbnail'    => 'articles/article-3.jpg',
                'published_at' => now()->subDays(14),
                'is_published' => true,
            ],
            [
                'title'        => 'Panduan Lengkap UX Design untuk Pemula',
                'excerpt'      => 'Memahami dasar-dasar UX design yang akan membuat produk Anda lebih diminati.',
                'content'      => '<p>UX design adalah seni menciptakan pengalaman pengguna yang bermakna...</p>',
                'thumbnail'    => 'articles/article-4.jpg',
                'published_at' => now()->subDays(21),
                'is_published' => true,
            ],
        ];

        foreach ($articles as $article) {
            $article['slug'] = Str::slug($article['title']);
            Article::create($article);
        }
    }
}