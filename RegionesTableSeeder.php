<?php

use Illuminate\Database\Seeder;

class RegionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $regiones = array(
          array('id' => '1','name' => 'Arica y Parinacota','ordinal' => 'XV'),
          array('id' => '2','name' => 'Tarapacá','ordinal' => 'I'),
          array('id' => '3','name' => 'Antofagasta','ordinal' => 'II'),
          array('id' => '4','name' => 'Atacama','ordinal' => 'III'),
          array('id' => '5','name' => 'Coquimbo','ordinal' => 'IV'),
          array('id' => '6','name' => 'Valparaiso','ordinal' => 'V'),
          array('id' => '7','name' => 'Metropolitana de Santiago','ordinal' => 'RM'),
          array('id' => '8','name' => 'Libertador General Bernardo O\'Higgins','ordinal' => 'VI'),
          array('id' => '9','name' => 'Maule','ordinal' => 'VII'),
          array('id' => '10','name' => 'Biobío','ordinal' => 'VIII'),
          array('id' => '11','name' => 'La Araucanía','ordinal' => 'IX'),
          array('id' => '12','name' => 'Los Ríos','ordinal' => 'XIV'),
          array('id' => '13','name' => 'Los Lagos','ordinal' => 'X'),
          array('id' => '14','name' => 'Aisén del General Carlos Ibáñez del Campo','ordinal' => 'XI'),
          array('id' => '15','name' => 'Magallanes y de la Antártica Chilena','ordinal' => 'XII')
        );
        
        
        foreach($regiones as $region){
            DB::table('regiones')->insert(array(
            	'id' => $region['id'],
                'name' => $region['name'],
                'ordinal' => $region['ordinal'],
            
            ));
        }
    }
}
