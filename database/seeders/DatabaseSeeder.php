<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $categories = [
            'Fantasy', 
            'Biografia',
            'Giallo',
            'Thriller',
            'Avventura',
            'Horror',
            'Rosa',
            'Fumetto',
            'Manga',
            'Classico',
            'Azione',
            'Noir',
            'Formazione',
            'Didattica',
            'Bambini',
            'Storico',
            'Umoristico',
            'Adulti',
            'Enciclopedie',
            'Saggio',
            'Romanzo',
           
            
        ];

        foreach($categories as $category){

            DB::table('categories')->insert(
                [
                'name'=>$category,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),

                ]
            );
        }
    }
}
