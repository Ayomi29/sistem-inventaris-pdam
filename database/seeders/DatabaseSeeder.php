<?php

namespace Database\Seeders;

use App\Models\Item;
use App\Models\Type;
use App\Models\User;
use App\Models\Brand;
use App\Models\Division;
use App\Models\Employee;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Ayomi Satria Pratama',
            'is_admin' => '1',
            'email' => 'ayomisatria@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('ayomi123')
        ]);
        Employee::create([
            'name' => 'Data1',
            'division_id' => '1',
        ]);
        Employee::create([
            'name' => 'Data2',
            'division_id' => '2',
        ]);
        Division::create([
            'name' => 'Direksi',
            'division_code' => 'A01'
        ]);
        Division::create([
            'name' => 'Bagian Umum',
            'division_code' => 'A10'
        ]);
        Division::create([
            'name' => 'Sub.Bag. Rumah Tangga',
            'division_code' => 'A13'
        ]);
        Division::create([
            'name' => 'Sub.Bag. Pergudangan',
            'division_code' => 'A14'
        ]);
        Type::create([
            'name' => 'Laptop',
            'type_code' => '01'
        ]);
        Type::create([
            'name' => 'CPU',
            'type_code' => '02'
        ]);
        Type::create([
            'name' => 'Monitor',
            'type_code' => '03'
        ]);

        Type::create([
            'name' => 'Printer',
            'type_code' => '04'
        ]);
        Type::create([
            'name' => 'UPS',
            'type_code' => '05'
        ]);
        Brand::create([
            'name' => 'HP',
        ]);
        Brand::create([
            'name' => 'Asus',
        ]);
        Brand::create([
            'name' => 'Dell',
        ]);
        Brand::create([
            'name' => 'Lenovo',
        ]);
        Brand::create([
            'name' => 'Epson',
        ]);
        Brand::create([
            'name' => 'Canon',
        ]);
        Brand::create([
            'name' => 'Toshiba',
        ]);
        Brand::create([
            'name' => 'ICA',
        ]);
        Brand::create([
            'name' => 'BenQ',
        ]);
        Brand::create([
            'name' => 'APC',
        ]);

        Item::create([
            'name' => "Laptop HP Paviliion",
            'item_code' => "01.01",
            'type_id' => 1,
            'brand_id' => 1,
            'serial' => null,
            'purchase_date' => null,
            'mac_address' => null,
            'ip_address' => null,
            'item_state' => "berfungsi",
        ]);
        Item::create([
            'name' => "Monitor Lenovo 4k",
            'item_code' => "03.03",
            'type_id' => 3,
            'brand_id' => 3,
            'serial' => null,
            'purchase_date' => null,
            'mac_address' => null,
            'ip_address' => null,
            'item_state' => "berfungsi",
        ]);
    }
}
