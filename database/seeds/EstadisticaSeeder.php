<?php

use App\Estadistica;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class EstadisticaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('estadisticas')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        Estadistica::create([
            'niveldepoder'=>'1394106',
            'salud'=>'2306821',
            'ataquefisico'=>'233308',
            'ataquedeki'=>'258385',
            'defensafisica'=>'161795',
            'defensadeki'=>'162530',
            'critico'=>'4111',
            'velocidadderecuperaciondeki'=>'2375',
            'ranurasdeequipamiento'=>'3'
        ]);

        Estadistica::create([
            'niveldepoder'=>'1388405',
            'salud'=>'2446872',
            'ataquefisico'=>'253190',
            'ataquedeki'=>'233890',
            'defensafisica'=>'158330',
            'defensadeki'=>'157521',
            'critico'=>'4232',
            'velocidadderecuperaciondeki'=>'2215',
            'ranurasdeequipamiento'=>'3'
        ]);

        Estadistica::create([
            'niveldepoder'=>'1399745',
            'salud'=>'2451059',
            'ataquefisico'=>'236028',
            'ataquedeki'=>'234827',
            'defensafisica'=>'165896',
            'defensadeki'=>'166690',
            'critico'=>'4379',
            'velocidadderecuperaciondeki'=>'2279',
            'ranurasdeequipamiento'=>'3'
        ]);

        Estadistica::create([
            'niveldepoder'=>'1410823',
            'salud'=>'2500424',
            'ataquefisico'=>'242501',
            'ataquedeki'=>'238760',
            'defensafisica'=>'157333',
            'defensadeki'=>'158384',
            'critico'=>'4541',
            'velocidadderecuperaciondeki'=>'2402',
            'ranurasdeequipamiento'=>'3'
        ]);

        Estadistica::create([
            'niveldepoder'=>'1390195',
            'salud'=>'2423944',
            'ataquefisico'=>'240279',
            'ataquedeki'=>'231492',
            'defensafisica'=>'159148',
            'defensadeki'=>'160280',
            'critico'=>'4258',
            'velocidadderecuperaciondeki'=>'2490',
            'ranurasdeequipamiento'=>'3'
        ]);

        Estadistica::create([
            'niveldepoder'=>'1395413',
            'salud'=>'2476284',
            'ataquefisico'=>'231536',
            'ataquedeki'=>'235722',
            'defensafisica'=>'163709',
            'defensadeki'=>'164311',
            'critico'=>'4406',
            'velocidadderecuperaciondeki'=>'2295',
            'ranurasdeequipamiento'=>'3'
        ]);

        Estadistica::create([
            'niveldepoder'=>'1392640',
            'salud'=>'2368224',
            'ataquefisico'=>'242552',
            'ataquedeki'=>'229573',
            'defensafisica'=>'164204',
            'defensadeki'=>'160480',
            'critico'=>'4316',
            'velocidadderecuperaciondeki'=>'2443',
            'ranurasdeequipamiento'=>'3'
        ]);

        Estadistica::create([
            'niveldepoder'=>'1432946',
            'salud'=>'2369559',
            'ataquefisico'=>'233153',
            'ataquedeki'=>'248037',
            'defensafisica'=>'158946',
            'defensadeki'=>'157190',
            'critico'=>'5268',
            'velocidadderecuperaciondeki'=>'2285',
            'ranurasdeequipamiento'=>'3'
        ]);

        Estadistica::create([
            'niveldepoder'=>'1395880',
            'salud'=>'2370394',
            'ataquefisico'=>'233439',
            'ataquedeki'=>'247147',
            'defensafisica'=>'155199',
            'defensadeki'=>'153069',
            'critico'=>'4604',
            'velocidadderecuperaciondeki'=>'2376',
            'ranurasdeequipamiento'=>'3'
        ]);

        Estadistica::create([
            'niveldepoder'=>'1414148',
            'salud'=>'2367659',
            'ataquefisico'=>'234587',
            'ataquedeki'=>'243376',
            'defensafisica'=>'160259',
            'defensadeki'=>'155683',
            'critico'=>'4785',
            'velocidadderecuperaciondeki'=>'2463',
            'ranurasdeequipamiento'=>'3'
        ]);
    }
}
