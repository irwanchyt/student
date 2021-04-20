<?php

use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswas')->insert([
            'nama_depan' =>'irwan',
            'nama_belakang' =>'cahyanto',
            'jenis_kelamin' => 'L',
            'agama' => 'islam',
            'alamat' => 'jl skadron'
            
        ]);
    }
}
