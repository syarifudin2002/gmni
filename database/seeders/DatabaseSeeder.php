<?php

namespace Database\Seeders;

use App\Models\Berita;
use App\Models\Kategori;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Berita::factory(10)->create();

        // Berita::factory()->create([
        //     'title' => 'Test User',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, inventore?',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad fugiat natus sunt perspiciatis id ducimus dolorem esse repellendus exercitationem velit, libero recusandae aut temporibus distinctio dignissimos a vero, repellat pariatur nulla architecto ex reprehenderit molestias officiis nobis! Itaque neque minima dignissimos at consectetur, sequi, quisquam tempore cumque cum autem repellendus ratione fugiat, consequatur voluptas excepturi nemo quaerat totam animi praesentium. Ipsa laboriosam, odio inventore corrupti qui similique nemo, nesciunt dolorum sit quaerat dignissimos, quibusdam cumque quis consectetur autem saepe laborum eaque aliquam. Debitis dolorum dolores harum. Perferendis laboriosam vel doloribus voluptate saepe, quam eius illo minima molestias voluptates incidunt, temporibus id ipsam consequuntur numquam suscipit ea. Iusto et excepturi animi, nesciunt cupiditate facere deserunt eius, ex suscipit aliquam tempore facilis? Commodi dolor ipsum omnis, quidem beatae, ut reprehenderit magnam error laboriosam aperiam atque nulla perferendis, vel aliquid optio explicabo hic. Repellat culpa optio dicta corporis voluptatum, atque sint iusto tempora molestiae exercitationem earum itaque! Delectus quos dicta, sit amet, itaque tenetur, modi accusantium corrupti vitae distinctio aut ullam quae facilis quo eveniet pariatur consequuntur. Beatae, voluptas. Maiores dolore in soluta, unde, provident ut dolores delectus libero animi, accusantium aliquam. Harum et nobis eum tempore doloribus, obcaecati at ad animi illum!', 
        // ]);
        // Berita::create([
        //     'title' => 'Halaman Pertama',
        //     'kategori_id' => 1,
        //     'slug' => 'halaman-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, inventore?',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad fugiat natus sunt perspiciatis id ducimus dolorem esse repellendus exercitationem velit, libero recusandae aut temporibus distinctio dignissimos a vero, repellat pariatur nulla architecto ex reprehenderit molestias officiis nobis! Itaque neque minima dignissimos at consectetur, sequi, quisquam tempore cumque cum autem repellendus ratione fugiat, consequatur voluptas excepturi nemo quaerat totam animi praesentium. Ipsa laboriosam, odio inventore corrupti qui similique nemo, nesciunt dolorum sit quaerat dignissimos, quibusdam cumque quis consectetur autem saepe laborum eaque aliquam. Debitis dolorum dolores harum. Perferendis laboriosam vel doloribus voluptate saepe, quam eius illo minima molestias voluptates incidunt, temporibus id ipsam consequuntur numquam suscipit ea. Iusto et excepturi animi, nesciunt cupiditate facere deserunt eius, ex suscipit aliquam tempore facilis? Commodi dolor ipsum omnis, quidem beatae, ut reprehenderit magnam error laboriosam aperiam atque nulla perferendis, vel aliquid optio explicabo hic. Repellat culpa optio dicta corporis voluptatum, atque sint iusto tempora molestiae exercitationem earum itaque! Delectus quos dicta, sit amet, itaque tenetur, modi accusantium corrupti vitae distinctio aut ullam quae facilis quo eveniet pariatur consequuntur. Beatae, voluptas. Maiores dolore in soluta, unde, provident ut dolores delectus libero animi, accusantium aliquam. Harum et nobis eum tempore doloribus, obcaecati at ad animi illum!', 
        // ]);


        Kategori::create([
            'name' => 'Pendidikan',
            'slug' => 'pendidikan', 
        ]);
        Kategori::create([
            'name' => 'Sosial',
            'slug' => 'sosial', 
        ]);
        Kategori::create([
            'name' => 'Politik',
            'slug' => 'politik', 
        ]);


    }
}
