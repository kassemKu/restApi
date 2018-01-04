<?php

use Illuminate\Database\Seeder;
use App\Model\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(App\Model\Product::class, 50)->create();
        factory(App\Model\Preview::class, 300)->create();
    }
}
