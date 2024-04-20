<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        Post::create([
            'user_id' => 1,
            'title' => 'El mundo deportivo, sayanda bar colem',
            'short_content' => 'Dopem epsum copento da pingeno, Colomond do palma',
            'contents' => 'Contento el miundo co dol pala somod, Dopem epsum copento da pingeno, La magitos dopum equento pul majrento hos bandje, El mundo deportivo, sayanda bar colem',
            'photo' => null
        ]);

        Post::create([
            'user_id' => 1,
            'title' => 'El mundo deportivo, sayanda bar colem',
            'short_content' => 'Dopem epsum copento da pingeno, Colomond do palma',
            'contents' => 'Contento el miundo co dol pala somod, Dopem epsum copento da pingeno, La magitos dopum equento pul majrento hos bandje, El mundo deportivo, sayanda bar colem',
            'photo' => null
        ]);
    }
}
