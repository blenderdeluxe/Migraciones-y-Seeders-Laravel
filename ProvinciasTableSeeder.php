<?php

use Illuminate\Database\Seeder;

class ProvinciasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $provincias = array(
          array('id' => '1','name' => 'Arica','region_id' => '1'),
          array('id' => '2','name' => 'Parinacota','region_id' => '1'),
          array('id' => '3','name' => 'Iquique','region_id' => '2'),
          array('id' => '4','name' => 'El Tamarugal','region_id' => '2'),
          array('id' => '5','name' => 'Antofagasta','region_id' => '3'),
          array('id' => '6','name' => 'El Loa','region_id' => '3'),
          array('id' => '7','name' => 'Tocopilla','region_id' => '3'),
          array('id' => '8','name' => 'Chañaral','region_id' => '4'),
          array('id' => '9','name' => 'Copiapó','region_id' => '4'),
          array('id' => '10','name' => 'Huasco','region_id' => '4'),
          array('id' => '11','name' => 'Choapa','region_id' => '5'),
          array('id' => '12','name' => 'Elqui','region_id' => '5'),
          array('id' => '13','name' => 'Limarí','region_id' => '5'),
          array('id' => '14','name' => 'Isla de Pascua','region_id' => '6'),
          array('id' => '15','name' => 'Los Andes','region_id' => '6'),
          array('id' => '16','name' => 'Petorca','region_id' => '6'),
          array('id' => '17','name' => 'Quillota','region_id' => '6'),
          array('id' => '18','name' => 'San Antonio','region_id' => '6'),
          array('id' => '19','name' => 'San Felipe de Aconcagua','region_id' => '6'),
          array('id' => '20','name' => 'Valparaiso','region_id' => '6'),
          array('id' => '21','name' => 'Chacabuco','region_id' => '7'),
          array('id' => '22','name' => 'Cordillera','region_id' => '7'),
          array('id' => '23','name' => 'Maipo','region_id' => '7'),
          array('id' => '24','name' => 'Melipilla','region_id' => '7'),
          array('id' => '25','name' => 'Santiago','region_id' => '7'),
          array('id' => '26','name' => 'Talagante','region_id' => '7'),
          array('id' => '27','name' => 'Cachapoal','region_id' => '8'),
          array('id' => '28','name' => 'Cardenal Caro','region_id' => '8'),
          array('id' => '29','name' => 'Colchagua','region_id' => '8'),
          array('id' => '30','name' => 'Cauquenes','region_id' => '9'),
          array('id' => '31','name' => 'Curicó','region_id' => '9'),
          array('id' => '32','name' => 'Linares','region_id' => '9'),
          array('id' => '33','name' => 'Talca','region_id' => '9'),
          array('id' => '34','name' => 'Arauco','region_id' => '10'),
          array('id' => '35','name' => 'Bio Bío','region_id' => '10'),
          array('id' => '36','name' => 'Concepción','region_id' => '10'),
          array('id' => '37','name' => 'Ñuble','region_id' => '10'),
          array('id' => '38','name' => 'Cautín','region_id' => '11'),
          array('id' => '39','name' => 'Malleco','region_id' => '11'),
          array('id' => '40','name' => 'Valdivia','region_id' => '12'),
          array('id' => '41','name' => 'Ranco','region_id' => '12'),
          array('id' => '42','name' => 'Chiloé','region_id' => '13'),
          array('id' => '43','name' => 'Llanquihue','region_id' => '13'),
          array('id' => '44','name' => 'Osorno','region_id' => '13'),
          array('id' => '45','name' => 'Palena','region_id' => '13'),
          array('id' => '46','name' => 'Aisén','region_id' => '14'),
          array('id' => '47','name' => 'Capitán Prat','region_id' => '14'),
          array('id' => '48','name' => 'Coihaique','region_id' => '14'),
          array('id' => '49','name' => 'General Carrera','region_id' => '14'),
          array('id' => '50','name' => 'Antártica Chilena','region_id' => '15'),
          array('id' => '51','name' => 'Magallanes','region_id' => '15'),
          array('id' => '52','name' => 'Tierra del Fuego','region_id' => '15'),
          array('id' => '53','name' => 'Última Esperanza','region_id' => '15')
        );
        
        
        foreach($provincias as $provincia){
            DB::table('provincias')->insert(array(
            	'id' => $provincia['id'],
              'name' => $provincia['name'],
              'region_id' => $provincia['region_id'],
            
            ));
        }
    }
}
