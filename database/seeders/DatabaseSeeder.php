<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

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
        $this->call(CategorySeeder::class);

        Storage::deleteDirectory('public/categories');
        Storage::makeDirectory('public/categories');

        Storage::deleteDirectory('public/brands');
        Storage::makeDirectory('public/brands');

        Storage::deleteDirectory('public/products');
        Storage::makeDirectory('public/products');

        // \App\Models\User::factory(10)->create();

        //\App\Models\Category::factory(20)->create();
        \App\Models\Brand::factory(10)->create();
        \App\Models\Modelo::factory(10)->create();
        
        $this->call(ModeloSeeder::class); 

        $this->call(ConfigurationSeeder::class);
        $this->call(CurrencySeeder::class);
        $this->call(CtacteSeeder::class);

        $this->call(TaxSeeder::class); 
        $this->call(UmSeeder::class);   
        
        \App\Models\Product::factory(10)->create();
        $this->call(UserSeeder::class); 
        $this->call(LocalSeeder::class); 

        $this->call(TipocomprobanteSeeder::class); 
        $this->call(TipodocumentoSeeder::class); 


        \App\Models\Customer::factory(10)->create();

        $this->call(LocalTipocomprobanteSeeder::class); 


    }
}
