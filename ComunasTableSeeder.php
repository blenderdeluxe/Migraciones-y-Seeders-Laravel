<?php

use Illuminate\Database\Seeder;

class ComunasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comunas = array(
          array('id' => '1','name' => 'Arica','provincia_id' => '1'),
          array('id' => '2','name' => 'Camarones','provincia_id' => '1'),
          array('id' => '3','name' => 'General Lagos','provincia_id' => '2'),
          array('id' => '4','name' => 'Putre','provincia_id' => '2'),
          array('id' => '5','name' => 'Alto Hospicio','provincia_id' => '3'),
          array('id' => '6','name' => 'Iquique','provincia_id' => '3'),
          array('id' => '7','name' => 'Camiña','provincia_id' => '4'),
          array('id' => '8','name' => 'Colchane','provincia_id' => '4'),
          array('id' => '9','name' => 'Huara','provincia_id' => '4'),
          array('id' => '10','name' => 'Pica','provincia_id' => '4'),
          array('id' => '11','name' => 'Pozo Almonte','provincia_id' => '4'),
          array('id' => '12','name' => 'Antofagasta','provincia_id' => '5'),
          array('id' => '13','name' => 'Mejillones','provincia_id' => '5'),
          array('id' => '14','name' => 'Sierra Gorda','provincia_id' => '5'),
          array('id' => '15','name' => 'Taltal','provincia_id' => '5'),
          array('id' => '16','name' => 'Calama','provincia_id' => '6'),
          array('id' => '17','name' => 'Ollague','provincia_id' => '6'),
          array('id' => '18','name' => 'San Pedro de Atacama','provincia_id' => '6'),
          array('id' => '19','name' => 'María Elena','provincia_id' => '7'),
          array('id' => '20','name' => 'Tocopilla','provincia_id' => '7'),
          array('id' => '21','name' => 'Chañaral','provincia_id' => '8'),
          array('id' => '22','name' => 'Diego de Almagro','provincia_id' => '8'),
          array('id' => '23','name' => 'Caldera','provincia_id' => '9'),
          array('id' => '24','name' => 'Copiapó','provincia_id' => '9'),
          array('id' => '25','name' => 'Tierra Amarilla','provincia_id' => '9'),
          array('id' => '26','name' => 'Alto del Carmen','provincia_id' => '10'),
          array('id' => '27','name' => 'Freirina','provincia_id' => '10'),
          array('id' => '28','name' => 'Huasco','provincia_id' => '10'),
          array('id' => '29','name' => 'Vallenar','provincia_id' => '10'),
          array('id' => '30','name' => 'Canela','provincia_id' => '11'),
          array('id' => '31','name' => 'Illapel','provincia_id' => '11'),
          array('id' => '32','name' => 'Los Vilos','provincia_id' => '11'),
          array('id' => '33','name' => 'Salamanca','provincia_id' => '11'),
          array('id' => '34','name' => 'Andacollo','provincia_id' => '12'),
          array('id' => '35','name' => 'Coquimbo','provincia_id' => '12'),
          array('id' => '36','name' => 'La Higuera','provincia_id' => '12'),
          array('id' => '37','name' => 'La Serena','provincia_id' => '12'),
          array('id' => '38','name' => 'Paihuaco','provincia_id' => '12'),
          array('id' => '39','name' => 'Vicuña','provincia_id' => '12'),
          array('id' => '40','name' => 'Combarbalá','provincia_id' => '13'),
          array('id' => '41','name' => 'Monte Patria','provincia_id' => '13'),
          array('id' => '42','name' => 'Ovalle','provincia_id' => '13'),
          array('id' => '43','name' => 'Punitaqui','provincia_id' => '13'),
          array('id' => '44','name' => 'Río Hurtado','provincia_id' => '13'),
          array('id' => '45','name' => 'Isla de Pascua','provincia_id' => '14'),
          array('id' => '46','name' => 'Calle Larga','provincia_id' => '15'),
          array('id' => '47','name' => 'Los Andes','provincia_id' => '15'),
          array('id' => '48','name' => 'Rinconada','provincia_id' => '15'),
          array('id' => '49','name' => 'San Esteban','provincia_id' => '15'),
          array('id' => '50','name' => 'La Ligua','provincia_id' => '16'),
          array('id' => '51','name' => 'Papudo','provincia_id' => '16'),
          array('id' => '52','name' => 'Petorca','provincia_id' => '16'),
          array('id' => '53','name' => 'Zapallar','provincia_id' => '16'),
          array('id' => '54','name' => 'Hijuelas','provincia_id' => '17'),
          array('id' => '55','name' => 'La Calera','provincia_id' => '17'),
          array('id' => '56','name' => 'La Cruz','provincia_id' => '17'),
          array('id' => '57','name' => 'Limache','provincia_id' => '17'),
          array('id' => '58','name' => 'Nogales','provincia_id' => '17'),
          array('id' => '59','name' => 'Olmué','provincia_id' => '17'),
          array('id' => '60','name' => 'Quillota','provincia_id' => '17'),
          array('id' => '61','name' => 'Algarrobo','provincia_id' => '18'),
          array('id' => '62','name' => 'Cartagena','provincia_id' => '18'),
          array('id' => '63','name' => 'El Quisco','provincia_id' => '18'),
          array('id' => '64','name' => 'El Tabo','provincia_id' => '18'),
          array('id' => '65','name' => 'San Antonio','provincia_id' => '18'),
          array('id' => '66','name' => 'Santo Domingo','provincia_id' => '18'),
          array('id' => '67','name' => 'Catemu','provincia_id' => '19'),
          array('id' => '68','name' => 'Llaillay','provincia_id' => '19'),
          array('id' => '69','name' => 'Panquehue','provincia_id' => '19'),
          array('id' => '70','name' => 'Putaendo','provincia_id' => '19'),
          array('id' => '71','name' => 'San Felipe','provincia_id' => '19'),
          array('id' => '72','name' => 'Santa María','provincia_id' => '19'),
          array('id' => '73','name' => 'Casablanca','provincia_id' => '20'),
          array('id' => '74','name' => 'Concón','provincia_id' => '20'),
          array('id' => '75','name' => 'Juan Fernández','provincia_id' => '20'),
          array('id' => '76','name' => 'Puchuncaví','provincia_id' => '20'),
          array('id' => '77','name' => 'Quilpué','provincia_id' => '20'),
          array('id' => '78','name' => 'Quintero','provincia_id' => '20'),
          array('id' => '79','name' => 'Valparaíso','provincia_id' => '20'),
          array('id' => '80','name' => 'Villa Alemana','provincia_id' => '20'),
          array('id' => '81','name' => 'Viña del Mar','provincia_id' => '20'),
          array('id' => '82','name' => 'Colina','provincia_id' => '21'),
          array('id' => '83','name' => 'Lampa','provincia_id' => '21'),
          array('id' => '84','name' => 'Tiltil','provincia_id' => '21'),
          array('id' => '85','name' => 'Pirque','provincia_id' => '22'),
          array('id' => '86','name' => 'Puente Alto','provincia_id' => '22'),
          array('id' => '87','name' => 'San José de Maipo','provincia_id' => '22'),
          array('id' => '88','name' => 'Buin','provincia_id' => '23'),
          array('id' => '89','name' => 'Calera de Tango','provincia_id' => '23'),
          array('id' => '90','name' => 'Paine','provincia_id' => '23'),
          array('id' => '91','name' => 'San Bernardo','provincia_id' => '23'),
          array('id' => '92','name' => 'Alhué','provincia_id' => '24'),
          array('id' => '93','name' => 'Curacaví','provincia_id' => '24'),
          array('id' => '94','name' => 'María Pinto','provincia_id' => '24'),
          array('id' => '95','name' => 'Melipilla','provincia_id' => '24'),
          array('id' => '96','name' => 'San Pedro','provincia_id' => '24'),
          array('id' => '97','name' => 'Cerrillos','provincia_id' => '25'),
          array('id' => '98','name' => 'Cerro Navia','provincia_id' => '25'),
          array('id' => '99','name' => 'Conchalí','provincia_id' => '25'),
          array('id' => '100','name' => 'El Bosque','provincia_id' => '25'),
          array('id' => '101','name' => 'Estación Central','provincia_id' => '25'),
          array('id' => '102','name' => 'Huechuraba','provincia_id' => '25'),
          array('id' => '103','name' => 'Independencia','provincia_id' => '25'),
          array('id' => '104','name' => 'La Cisterna','provincia_id' => '25'),
          array('id' => '105','name' => 'La Granja','provincia_id' => '25'),
          array('id' => '106','name' => 'La Florida','provincia_id' => '25'),
          array('id' => '107','name' => 'La Pintana','provincia_id' => '25'),
          array('id' => '108','name' => 'La Reina','provincia_id' => '25'),
          array('id' => '109','name' => 'Las Condes','provincia_id' => '25'),
          array('id' => '110','name' => 'Lo Barnechea','provincia_id' => '25'),
          array('id' => '111','name' => 'Lo Espejo','provincia_id' => '25'),
          array('id' => '112','name' => 'Lo Prado','provincia_id' => '25'),
          array('id' => '113','name' => 'Macul','provincia_id' => '25'),
          array('id' => '114','name' => 'Maipú','provincia_id' => '25'),
          array('id' => '115','name' => 'Ñuñoa','provincia_id' => '25'),
          array('id' => '116','name' => 'Pedro Aguirre Cerda','provincia_id' => '25'),
          array('id' => '117','name' => 'Peñalolén','provincia_id' => '25'),
          array('id' => '118','name' => 'Providencia','provincia_id' => '25'),
          array('id' => '119','name' => 'Pudahuel','provincia_id' => '25'),
          array('id' => '120','name' => 'Quilicura','provincia_id' => '25'),
          array('id' => '121','name' => 'Quinta Normal','provincia_id' => '25'),
          array('id' => '122','name' => 'Recoleta','provincia_id' => '25'),
          array('id' => '123','name' => 'Renca','provincia_id' => '25'),
          array('id' => '124','name' => 'San Miguel','provincia_id' => '25'),
          array('id' => '125','name' => 'San Joaquín','provincia_id' => '25'),
          array('id' => '126','name' => 'San Ramón','provincia_id' => '25'),
          array('id' => '127','name' => 'Santiago','provincia_id' => '25'),
          array('id' => '128','name' => 'Vitacura','provincia_id' => '25'),
          array('id' => '129','name' => 'El Monte','provincia_id' => '26'),
          array('id' => '130','name' => 'Isla de Maipo','provincia_id' => '26'),
          array('id' => '131','name' => 'Padre Hurtado','provincia_id' => '26'),
          array('id' => '132','name' => 'Peñaflor','provincia_id' => '26'),
          array('id' => '133','name' => 'Talagante','provincia_id' => '26'),
          array('id' => '134','name' => 'Codegua','provincia_id' => '27'),
          array('id' => '135','name' => 'Coínco','provincia_id' => '27'),
          array('id' => '136','name' => 'Coltauco','provincia_id' => '27'),
          array('id' => '137','name' => 'Doñihue','provincia_id' => '27'),
          array('id' => '138','name' => 'Graneros','provincia_id' => '27'),
          array('id' => '139','name' => 'Las Cabras','provincia_id' => '27'),
          array('id' => '140','name' => 'Machalí','provincia_id' => '27'),
          array('id' => '141','name' => 'Malloa','provincia_id' => '27'),
          array('id' => '142','name' => 'Mostazal','provincia_id' => '27'),
          array('id' => '143','name' => 'Olivar','provincia_id' => '27'),
          array('id' => '144','name' => 'Peumo','provincia_id' => '27'),
          array('id' => '145','name' => 'Pichidegua','provincia_id' => '27'),
          array('id' => '146','name' => 'Quinta de Tilcoco','provincia_id' => '27'),
          array('id' => '147','name' => 'Rancagua','provincia_id' => '27'),
          array('id' => '148','name' => 'Rengo','provincia_id' => '27'),
          array('id' => '149','name' => 'Requínoa','provincia_id' => '27'),
          array('id' => '150','name' => 'San Vicente de Tagua Tagua','provincia_id' => '27'),
          array('id' => '151','name' => 'La Estrella','provincia_id' => '28'),
          array('id' => '152','name' => 'Litueche','provincia_id' => '28'),
          array('id' => '153','name' => 'Marchihue','provincia_id' => '28'),
          array('id' => '154','name' => 'Navidad','provincia_id' => '28'),
          array('id' => '155','name' => 'Peredones','provincia_id' => '28'),
          array('id' => '156','name' => 'Pichilemu','provincia_id' => '28'),
          array('id' => '157','name' => 'Chépica','provincia_id' => '29'),
          array('id' => '158','name' => 'Chimbarongo','provincia_id' => '29'),
          array('id' => '159','name' => 'Lolol','provincia_id' => '29'),
          array('id' => '160','name' => 'Nancagua','provincia_id' => '29'),
          array('id' => '161','name' => 'Palmilla','provincia_id' => '29'),
          array('id' => '162','name' => 'Peralillo','provincia_id' => '29'),
          array('id' => '163','name' => 'Placilla','provincia_id' => '29'),
          array('id' => '164','name' => 'Pumanque','provincia_id' => '29'),
          array('id' => '165','name' => 'San Fernando','provincia_id' => '29'),
          array('id' => '166','name' => 'Santa Cruz','provincia_id' => '29'),
          array('id' => '167','name' => 'Cauquenes','provincia_id' => '30'),
          array('id' => '168','name' => 'Chanco','provincia_id' => '30'),
          array('id' => '169','name' => 'Pelluhue','provincia_id' => '30'),
          array('id' => '170','name' => 'Curicó','provincia_id' => '31'),
          array('id' => '171','name' => 'Hualañé','provincia_id' => '31'),
          array('id' => '172','name' => 'Licantén','provincia_id' => '31'),
          array('id' => '173','name' => 'Molina','provincia_id' => '31'),
          array('id' => '174','name' => 'Rauco','provincia_id' => '31'),
          array('id' => '175','name' => 'Romeral','provincia_id' => '31'),
          array('id' => '176','name' => 'Sagrada Familia','provincia_id' => '31'),
          array('id' => '177','name' => 'Teno','provincia_id' => '31'),
          array('id' => '178','name' => 'Vichuquén','provincia_id' => '31'),
          array('id' => '179','name' => 'Colbún','provincia_id' => '32'),
          array('id' => '180','name' => 'Linares','provincia_id' => '32'),
          array('id' => '181','name' => 'Longaví','provincia_id' => '32'),
          array('id' => '182','name' => 'Parral','provincia_id' => '32'),
          array('id' => '183','name' => 'Retiro','provincia_id' => '32'),
          array('id' => '184','name' => 'San Javier','provincia_id' => '32'),
          array('id' => '185','name' => 'Villa Alegre','provincia_id' => '32'),
          array('id' => '186','name' => 'Yerbas Buenas','provincia_id' => '32'),
          array('id' => '187','name' => 'Constitución','provincia_id' => '33'),
          array('id' => '188','name' => 'Curepto','provincia_id' => '33'),
          array('id' => '189','name' => 'Empedrado','provincia_id' => '33'),
          array('id' => '190','name' => 'Maule','provincia_id' => '33'),
          array('id' => '191','name' => 'Pelarco','provincia_id' => '33'),
          array('id' => '192','name' => 'Pencahue','provincia_id' => '33'),
          array('id' => '193','name' => 'Río Claro','provincia_id' => '33'),
          array('id' => '194','name' => 'San Clemente','provincia_id' => '33'),
          array('id' => '195','name' => 'San Rafael','provincia_id' => '33'),
          array('id' => '196','name' => 'Talca','provincia_id' => '33'),
          array('id' => '197','name' => 'Arauco','provincia_id' => '34'),
          array('id' => '198','name' => 'Cañete','provincia_id' => '34'),
          array('id' => '199','name' => 'Contulmo','provincia_id' => '34'),
          array('id' => '200','name' => 'Curanilahue','provincia_id' => '34'),
          array('id' => '201','name' => 'Lebu','provincia_id' => '34'),
          array('id' => '202','name' => 'Los Álamos','provincia_id' => '34'),
          array('id' => '203','name' => 'Tirúa','provincia_id' => '34'),
          array('id' => '204','name' => 'Alto Biobío','provincia_id' => '35'),
          array('id' => '205','name' => 'Antuco','provincia_id' => '35'),
          array('id' => '206','name' => 'Cabrero','provincia_id' => '35'),
          array('id' => '207','name' => 'Laja','provincia_id' => '35'),
          array('id' => '208','name' => 'Los Ángeles','provincia_id' => '35'),
          array('id' => '209','name' => 'Mulchén','provincia_id' => '35'),
          array('id' => '210','name' => 'Nacimiento','provincia_id' => '35'),
          array('id' => '211','name' => 'Negrete','provincia_id' => '35'),
          array('id' => '212','name' => 'Quilaco','provincia_id' => '35'),
          array('id' => '213','name' => 'Quilleco','provincia_id' => '35'),
          array('id' => '214','name' => 'San Rosendo','provincia_id' => '35'),
          array('id' => '215','name' => 'Santa Bárbara','provincia_id' => '35'),
          array('id' => '216','name' => 'Tucapel','provincia_id' => '35'),
          array('id' => '217','name' => 'Yumbel','provincia_id' => '35'),
          array('id' => '218','name' => 'Chiguayante','provincia_id' => '36'),
          array('id' => '219','name' => 'Concepción','provincia_id' => '36'),
          array('id' => '220','name' => 'Coronel','provincia_id' => '36'),
          array('id' => '221','name' => 'Florida','provincia_id' => '36'),
          array('id' => '222','name' => 'Hualpén','provincia_id' => '36'),
          array('id' => '223','name' => 'Hualqui','provincia_id' => '36'),
          array('id' => '224','name' => 'Lota','provincia_id' => '36'),
          array('id' => '225','name' => 'Penco','provincia_id' => '36'),
          array('id' => '226','name' => 'San Pedro de La Paz','provincia_id' => '36'),
          array('id' => '227','name' => 'Santa Juana','provincia_id' => '36'),
          array('id' => '228','name' => 'Talcahuano','provincia_id' => '36'),
          array('id' => '229','name' => 'Tomé','provincia_id' => '36'),
          array('id' => '230','name' => 'Bulnes','provincia_id' => '37'),
          array('id' => '231','name' => 'Chillán','provincia_id' => '37'),
          array('id' => '232','name' => 'Chillán Viejo','provincia_id' => '37'),
          array('id' => '233','name' => 'Cobquecura','provincia_id' => '37'),
          array('id' => '234','name' => 'Coelemu','provincia_id' => '37'),
          array('id' => '235','name' => 'Coihueco','provincia_id' => '37'),
          array('id' => '236','name' => 'El Carmen','provincia_id' => '37'),
          array('id' => '237','name' => 'Ninhue','provincia_id' => '37'),
          array('id' => '238','name' => 'Ñiquen','provincia_id' => '37'),
          array('id' => '239','name' => 'Pemuco','provincia_id' => '37'),
          array('id' => '240','name' => 'Pinto','provincia_id' => '37'),
          array('id' => '241','name' => 'Portezuelo','provincia_id' => '37'),
          array('id' => '242','name' => 'Quillón','provincia_id' => '37'),
          array('id' => '243','name' => 'Quirihue','provincia_id' => '37'),
          array('id' => '244','name' => 'Ránquil','provincia_id' => '37'),
          array('id' => '245','name' => 'San Carlos','provincia_id' => '37'),
          array('id' => '246','name' => 'San Fabián','provincia_id' => '37'),
          array('id' => '247','name' => 'San Ignacio','provincia_id' => '37'),
          array('id' => '248','name' => 'San Nicolás','provincia_id' => '37'),
          array('id' => '249','name' => 'Treguaco','provincia_id' => '37'),
          array('id' => '250','name' => 'Yungay','provincia_id' => '37'),
          array('id' => '251','name' => 'Carahue','provincia_id' => '38'),
          array('id' => '252','name' => 'Cholchol','provincia_id' => '38'),
          array('id' => '253','name' => 'Cunco','provincia_id' => '38'),
          array('id' => '254','name' => 'Curarrehue','provincia_id' => '38'),
          array('id' => '255','name' => 'Freire','provincia_id' => '38'),
          array('id' => '256','name' => 'Galvarino','provincia_id' => '38'),
          array('id' => '257','name' => 'Gorbea','provincia_id' => '38'),
          array('id' => '258','name' => 'Lautaro','provincia_id' => '38'),
          array('id' => '259','name' => 'Loncoche','provincia_id' => '38'),
          array('id' => '260','name' => 'Melipeuco','provincia_id' => '38'),
          array('id' => '261','name' => 'Nueva Imperial','provincia_id' => '38'),
          array('id' => '262','name' => 'Padre Las Casas','provincia_id' => '38'),
          array('id' => '263','name' => 'Perquenco','provincia_id' => '38'),
          array('id' => '264','name' => 'Pitrufquén','provincia_id' => '38'),
          array('id' => '265','name' => 'Pucón','provincia_id' => '38'),
          array('id' => '266','name' => 'Saavedra','provincia_id' => '38'),
          array('id' => '267','name' => 'Temuco','provincia_id' => '38'),
          array('id' => '268','name' => 'Teodoro Schmidt','provincia_id' => '38'),
          array('id' => '269','name' => 'Toltén','provincia_id' => '38'),
          array('id' => '270','name' => 'Vilcún','provincia_id' => '38'),
          array('id' => '271','name' => 'Villarrica','provincia_id' => '38'),
          array('id' => '272','name' => 'Angol','provincia_id' => '39'),
          array('id' => '273','name' => 'Collipulli','provincia_id' => '39'),
          array('id' => '274','name' => 'Curacautín','provincia_id' => '39'),
          array('id' => '275','name' => 'Ercilla','provincia_id' => '39'),
          array('id' => '276','name' => 'Lonquimay','provincia_id' => '39'),
          array('id' => '277','name' => 'Los Sauces','provincia_id' => '39'),
          array('id' => '278','name' => 'Lumaco','provincia_id' => '39'),
          array('id' => '279','name' => 'Purén','provincia_id' => '39'),
          array('id' => '280','name' => 'Renaico','provincia_id' => '39'),
          array('id' => '281','name' => 'Traiguén','provincia_id' => '39'),
          array('id' => '282','name' => 'Victoria','provincia_id' => '39'),
          array('id' => '283','name' => 'Corral','provincia_id' => '40'),
          array('id' => '284','name' => 'Lanco','provincia_id' => '40'),
          array('id' => '285','name' => 'Los Lagos','provincia_id' => '40'),
          array('id' => '286','name' => 'Máfil','provincia_id' => '40'),
          array('id' => '287','name' => 'Mariquina','provincia_id' => '40'),
          array('id' => '288','name' => 'Paillaco','provincia_id' => '40'),
          array('id' => '289','name' => 'Panguipulli','provincia_id' => '40'),
          array('id' => '290','name' => 'Valdivia','provincia_id' => '40'),
          array('id' => '291','name' => 'Futrono','provincia_id' => '41'),
          array('id' => '292','name' => 'La Unión','provincia_id' => '41'),
          array('id' => '293','name' => 'Lago Ranco','provincia_id' => '41'),
          array('id' => '294','name' => 'Río Bueno','provincia_id' => '41'),
          array('id' => '295','name' => 'Ancud','provincia_id' => '42'),
          array('id' => '296','name' => 'Castro','provincia_id' => '42'),
          array('id' => '297','name' => 'Chonchi','provincia_id' => '42'),
          array('id' => '298','name' => 'Curaco de Vélez','provincia_id' => '42'),
          array('id' => '299','name' => 'Dalcahue','provincia_id' => '42'),
          array('id' => '300','name' => 'Puqueldón','provincia_id' => '42'),
          array('id' => '301','name' => 'Queilén','provincia_id' => '42'),
          array('id' => '302','name' => 'Quemchi','provincia_id' => '42'),
          array('id' => '303','name' => 'Quellón','provincia_id' => '42'),
          array('id' => '304','name' => 'Quinchao','provincia_id' => '42'),
          array('id' => '305','name' => 'Calbuco','provincia_id' => '43'),
          array('id' => '306','name' => 'Cochamó','provincia_id' => '43'),
          array('id' => '307','name' => 'Fresia','provincia_id' => '43'),
          array('id' => '308','name' => 'Frutillar','provincia_id' => '43'),
          array('id' => '309','name' => 'Llanquihue','provincia_id' => '43'),
          array('id' => '310','name' => 'Los Muermos','provincia_id' => '43'),
          array('id' => '311','name' => 'Maullín','provincia_id' => '43'),
          array('id' => '312','name' => 'Puerto Montt','provincia_id' => '43'),
          array('id' => '313','name' => 'Puerto Varas','provincia_id' => '43'),
          array('id' => '314','name' => 'Osorno','provincia_id' => '44'),
          array('id' => '315','name' => 'Puero Octay','provincia_id' => '44'),
          array('id' => '316','name' => 'Purranque','provincia_id' => '44'),
          array('id' => '317','name' => 'Puyehue','provincia_id' => '44'),
          array('id' => '318','name' => 'Río Negro','provincia_id' => '44'),
          array('id' => '319','name' => 'San Juan de la Costa','provincia_id' => '44'),
          array('id' => '320','name' => 'San Pablo','provincia_id' => '44'),
          array('id' => '321','name' => 'Chaitén','provincia_id' => '45'),
          array('id' => '322','name' => 'Futaleufú','provincia_id' => '45'),
          array('id' => '323','name' => 'Hualaihué','provincia_id' => '45'),
          array('id' => '324','name' => 'Palena','provincia_id' => '45'),
          array('id' => '325','name' => 'Aisén','provincia_id' => '46'),
          array('id' => '326','name' => 'Cisnes','provincia_id' => '46'),
          array('id' => '327','name' => 'Guaitecas','provincia_id' => '46'),
          array('id' => '328','name' => 'Cochrane','provincia_id' => '47'),
          array('id' => '329','name' => 'O\'higgins','provincia_id' => '47'),
          array('id' => '330','name' => 'Tortel','provincia_id' => '47'),
          array('id' => '331','name' => 'Coihaique','provincia_id' => '48'),
          array('id' => '332','name' => 'Lago Verde','provincia_id' => '48'),
          array('id' => '333','name' => 'Chile Chico','provincia_id' => '49'),
          array('id' => '334','name' => 'Río Ibáñez','provincia_id' => '49'),
          array('id' => '335','name' => 'Antártica','provincia_id' => '50'),
          array('id' => '336','name' => 'Cabo de Hornos','provincia_id' => '50'),
          array('id' => '337','name' => 'Laguna Blanca','provincia_id' => '51'),
          array('id' => '338','name' => 'Punta Arenas','provincia_id' => '51'),
          array('id' => '339','name' => 'Río Verde','provincia_id' => '51'),
          array('id' => '340','name' => 'San Gregorio','provincia_id' => '51'),
          array('id' => '341','name' => 'Porvenir','provincia_id' => '52'),
          array('id' => '342','name' => 'Primavera','provincia_id' => '52'),
          array('id' => '343','name' => 'Timaukel','provincia_id' => '52'),
          array('id' => '344','name' => 'Natales','provincia_id' => '53'),
          array('id' => '345','name' => 'Torres del Paine','provincia_id' => '53')
        );
        
        
        foreach($comunas as $comuna){
            DB::table('comunas')->insert(array(
            	'id' => $comuna['id'],
              'name' => $comuna['name'],
              'provincia_id' => $comuna['provincia_id'],
            
            ));
        }
    }
}
