<?php

namespace Database\Seeders;

use App\Models\Jobs;
use App\Models\Tag;
use Illuminate\Contracts\Queue\Job;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class JobsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tag = Tag::factory(3)->create();
        Jobs::factory(10)->hasAttached($tag)->create(new Sequence(['featured' => true, 'schedule' => 'full-time'], ['featured' => false, 'schedule' => 'part-time']));
    }
}
