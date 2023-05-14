<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\OrderNote;
use App\Models\Product;
use App\Models\Role;
use App\Models\Supplier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            StaffSeeder::class,
            LanguageSeeder::class,
            ProductSeeder::class,
            RoleSeeder::class
        ]);

        User::factory(10)->create();
        Brand::factory(20)->create();
        Supplier::factory(20)->create();
        Category::factory(10)->create();
        Customer::factory(50)->create();
        //Product::factory(100)->create();
        //Order::factory(50)->create();
        //OrderNote::factory(20)->create();
        //OrderItem::factory(100)->create();
    }
}
