<?php

use Illuminate\Database\Seeder;

class nomorlomba_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nomorLomba = [
        	['gaya' => 'GAYA BEBAS', 'jarak' => 50, 'kelompokumur' => 'I'],
        	['gaya' => 'GAYA BEBAS', 'jarak' => 100, 'kelompokumur' => 'I'],
        	['gaya' => 'GAYA BEBAS', 'jarak' => 200, 'kelompokumur' => 'I'],
        	['gaya' => 'GAYA DADA', 'jarak' => 50, 'kelompokumur' => 'I'],
        	['gaya' => 'GAYA DADA', 'jarak' => 100, 'kelompokumur' => 'I'],
        	['gaya' => 'GAYA DADA', 'jarak' => 200, 'kelompokumur' => 'I'],
        	['gaya' => 'GAYA PUNGGUNG', 'jarak' => 50, 'kelompokumur' => 'I'],
        	['gaya' => 'GAYA PUNGGUNG', 'jarak' => 100, 'kelompokumur' => 'I'],
        	['gaya' => 'GAYA KUPU-KUPU', 'jarak' => 50, 'kelompokumur' => 'I'],

        	['gaya' => 'GAYA BEBAS', 'jarak' => 50, 'kelompokumur' => 'II'],
        	['gaya' => 'GAYA BEBAS', 'jarak' => 100, 'kelompokumur' => 'II'],
        	['gaya' => 'GAYA BEBAS', 'jarak' => 200, 'kelompokumur' => 'II'],
        	['gaya' => 'GAYA DADA', 'jarak' => 50, 'kelompokumur' => 'II'],
        	['gaya' => 'GAYA DADA', 'jarak' => 100, 'kelompokumur' => 'II'],
        	['gaya' => 'GAYA DADA', 'jarak' => 200, 'kelompokumur' => 'II'],
        	['gaya' => 'GAYA PUNGGUNG', 'jarak' => 50, 'kelompokumur' => 'II'],
        	['gaya' => 'GAYA PUNGGUNG', 'jarak' => 100, 'kelompokumur' => 'II'],
        	['gaya' => 'GAYA KUPU-KUPU', 'jarak' => 50, 'kelompokumur' => 'II'],

        	['gaya' => 'GAYA BEBAS', 'jarak' => 50, 'kelompokumur' => 'III'],
        	['gaya' => 'GAYA BEBAS', 'jarak' => 100, 'kelompokumur' => 'III'],        	
        	['gaya' => 'GAYA DADA', 'jarak' => 50, 'kelompokumur' => 'III'],
        	['gaya' => 'GAYA DADA', 'jarak' => 100, 'kelompokumur' => 'III'],        	
        	['gaya' => 'GAYA PUNGGUNG', 'jarak' => 50, 'kelompokumur' => 'III'],
        	['gaya' => 'GAYA PUNGGUNG', 'jarak' => 100, 'kelompokumur' => 'III'],
        	['gaya' => 'GAYA KUPU-KUPU', 'jarak' => 50, 'kelompokumur' => 'III'], 

        	['gaya' => 'GAYA BEBAS', 'jarak' => 50, 'kelompokumur' => 'IV'],
        	['gaya' => 'GAYA BEBAS', 'jarak' => 100, 'kelompokumur' => 'IV'],        	
        	['gaya' => 'GAYA DADA', 'jarak' => 50, 'kelompokumur' => 'IV'],
        	['gaya' => 'GAYA DADA', 'jarak' => 100, 'kelompokumur' => 'IV'],        	
        	['gaya' => 'GAYA PUNGGUNG', 'jarak' => 50, 'kelompokumur' => 'IV'],
        	['gaya' => 'GAYA PUNGGUNG', 'jarak' => 100, 'kelompokumur' => 'IV'],
        	['gaya' => 'GAYA KUPU-KUPU', 'jarak' => 50, 'kelompokumur' => 'IV'], 

        	['gaya' => 'GAYA BEBAS', 'jarak' => 50, 'kelompokumur' => 'V'],        	        	
        	['gaya' => 'GAYA DADA', 'jarak' => 50, 'kelompokumur' => 'V'],        	        	
        	['gaya' => 'GAYA PUNGGUNG', 'jarak' => 50, 'kelompokumur' => 'V'],        	
        	['gaya' => 'GAYA KUPU-KUPU', 'jarak' => 50, 'kelompokumur' => 'V'],  

        	['gaya' => 'GAYA BEBAS', 'jarak' => 25, 'kelompokumur' => 'P'],        	        	
        	['gaya' => 'GAYA DADA', 'jarak' => 25, 'kelompokumur' => 'P'],        	        	
        	['gaya' => 'GAYA PUNGGUNG', 'jarak' => 25, 'kelompokumur' => 'P'],        	
        	['gaya' => 'GAYA KUPU-KUPU', 'jarak' => 25, 'kelompokumur' => 'P']    	
    	];

    	DB::table('nomorlomba')->insert($nomorLomba);
    }
}
