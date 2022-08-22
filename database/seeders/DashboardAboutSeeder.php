<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DashboardAbout;

class DashboardAboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DashboardAbout::create([
            'title' => ' Lazuardi<i class="bi bi-activity"></i>Code',
            'smallTitle' => 'Web Development Program System',
            'descriptions1' =>
                'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore recusandae tempore voluptate, perspiciatis sapiente voluptates, voluptas itaque possimus assumenda veniam vitae alias molestias excepturi aspernatur quo commodi deserunt amet consequatur accusantium eveniet harum? Cupiditate cum dolores quisquam deleniti libero necessitatibus assumenda sapiente eum praesentium? Sequi, eum?',
            'descriptions2' =>
                'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore recusandae tempore voluptate, perspiciatis sapiente voluptates, voluptas itaque possimus assumenda veniam vitae alias molestias excepturi aspernatur quo commodi deserunt amet consequatur accusantium eveniet harum? Cupiditate cum dolores quisquam deleniti libero necessitatibus assumenda sapiente eum praesentium? Sequi, eum?',
            'fb' => 'https://web.facebook.com/lazuardiReznnov',
            'ln' =>
                'https://www.linkedin.com/in/mohamad-lazuardi-noor-041aa28b/',
            'ins' => 'https://www.instagram.com/imlazuardy',
        ]);
    }
}
