<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::query()->create([
            'id' => 1,
            'name' => 'Administrador',
            'email' => null,
            'password' => Hash::make('admin'),
            'username' => 'admin',
            'remember_token' => 'admin'
        ])->assignRole('Administrador');

        User::query()->create([
            'id' => 2,
            'name' => 'Vicuña Flormila',
            'persona_id' => 1,
            'email' => 'fvicunap@unasam.edu.pe',
            'password' => Hash::make('17937577'),
            'username' => '17937577',
            'remember_token' => '17937577'
        ])->assignRole('Docente');

        User::query()->create([
            'id' => 3,
            'name' => 'Monzon Eli',
            'persona_id' => 2,
            'email' => 'emonzonb@unasam.edu.pe',
            'password' => Hash::make('18887375'),
            'username' => '18887375',
            'remember_token' => '18887375'
        ])->assignRole('Docente');

        /*
   User::query()->create([
      'id' => 4,
      'name' => 'Camacho Wilson',
      'persona_id' => 3,
      'email' => 'wcamachom@unasam.edu.pe',
      'password' => Hash::make('18028023'),
      'username' => '18028023',
      'remember_token' => '18028023'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 5,
      'name' => 'Vega Hernan',
      'persona_id' => 4,
      'email' => 'hvegam@unasam.edu.pe',
      'password' => Hash::make('31676331'),
      'username' => '31676331',
      'remember_token' => '31676331'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 6,
      'name' => 'Aponte Edinson',
      'persona_id' => 5,
      'email' => '',
      'password' => Hash::make('43800905'),
      'username' => '43800905',
      'remember_token' => '43800905'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 7,
      'name' => 'Enriquez Julio',
      'persona_id' => 6,
      'email' => 'cenriqueza@unasam.edu.pe',
      'password' => Hash::make('41249451'),
      'username' => '41249451',
      'remember_token' => '41249451'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 8,
      'name' => 'Narro Cesar',
      'persona_id' => 7,
      'email' => 'cnarroc@unasam.edu.pe',
      'password' => Hash::make('31626286'),
      'username' => '31626286',
      'remember_token' => '31626286'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 9,
      'name' => 'Leiva Jorge',
      'persona_id' => 8,
      'email' => 'jleivag@unasam.edu.pe',
      'password' => Hash::make('18164314'),
      'username' => '18164314',
      'remember_token' => '18164314'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 10,
      'name' => 'Alvarado Luis',
      'persona_id' => 9,
      'email' => 'lalvaradoc@unasam.edu.pe',
      'password' => Hash::make('07587674'),
      'username' => '07587674',
      'remember_token' => '07587674'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 11,
      'name' => 'Jamanca Marco',
      'persona_id' => 10,
      'email' => 'ajamancar@unasam.edu.pe',
      'password' => Hash::make('09745771'),
      'username' => '09745771',
      'remember_token' => '09745771'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 12,
      'name' => 'Yupanqui Edson',
      'persona_id' => 11,
      'email' => 'eyupanquit@unasam.edu.pe',
      'password' => Hash::make('31660089'),
      'username' => '31660089',
      'remember_token' => '31660089'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 13,
      'name' => 'Villanueva Franz',
      'persona_id' => 12,
      'email' => 'fvillanuevac@unasam.edu.pe',
      'password' => Hash::make('45956828'),
      'username' => '45956828',
      'remember_token' => '45956828'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 14,
      'name' => 'Maldonado Hugo',
      'persona_id' => 13,
      'email' => 'hmaldonadol@unasam.edu.pe',
      'password' => Hash::make('31659531'),
      'username' => '31659531',
      'remember_token' => '31659531'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 15,
      'name' => 'Castillo Nemecio',
      'persona_id' => 14,
      'email' => 'ncastillot@unasam.edu.pe',
      'password' => Hash::make('32646765'),
      'username' => '32646765',
      'remember_token' => '32646765'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 16,
      'name' => 'Valdivia Wilfredo',
      'persona_id' => 15,
      'email' => 'wvaldiviar@unasam.edu.pe',
      'password' => Hash::make('18888601'),
      'username' => '18888601',
      'remember_token' => '18888601'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 17,
      'name' => 'Martinez Victor',
      'persona_id' => 16,
      'email' => 'vmartinezm@unasam.edu.pe',
      'password' => Hash::make('32641515'),
      'username' => '32641515',
      'remember_token' => '32641515'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 18,
      'name' => 'Garrido Henry',
      'persona_id' => 17,
      'email' => 'hgarridoa@unasam.edu.pe',
      'password' => Hash::make('32800493'),
      'username' => '32800493',
      'remember_token' => '32800493'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 19,
      'name' => 'Silva Miguel',
      'persona_id' => 18,
      'email' => 'msilvaz@unasam.edu.pe',
      'password' => Hash::make('03664700'),
      'username' => '03664700',
      'remember_token' => '03664700'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 20,
      'name' => 'Alvarado Joseph',
      'persona_id' => 19,
      'email' => 'jalvaradot@unasam.edu.pe',
      'password' => Hash::make('46022813'),
      'username' => '46022813',
      'remember_token' => '46022813'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 21,
      'name' => 'Leiva Ruben',
      'persona_id' => 20,
      'email' => 'rleiva@unasam.edu.pe',
      'password' => Hash::make('40563862'),
      'username' => '40563862',
      'remember_token' => '40563862'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 22,
      'name' => 'Nuñez Pilar',
      'persona_id' => 21,
      'email' => 'pnunezb@unasam.edu.pe',
      'password' => Hash::make('17870805'),
      'username' => '17870805',
      'remember_token' => '17870805'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 23,
      'name' => 'Pari Andrea',
      'persona_id' => 22,
      'email' => 'aparis@unasam.edu.pe',
      'password' => Hash::make('29551778'),
      'username' => '29551778',
      'remember_token' => '29551778'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 24,
      'name' => 'Pocoy Victor',
      'persona_id' => 23,
      'email' => 'vpocoyy@unasam.edu.pe',
      'password' => Hash::make('41231912'),
      'username' => '41231912',
      'remember_token' => '41231912'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 25,
      'name' => 'Maguiña Miguel',
      'persona_id' => 24,
      'email' => '',
      'password' => Hash::make('41465442'),
      'username' => '41465442',
      'remember_token' => '41465442'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 26,
      'name' => 'Guzman Ruben',
      'persona_id' => 25,
      'email' => 'rguzmana@unasam.edu.pe',
      'password' => Hash::make('17976305'),
      'username' => '17976305',
      'remember_token' => '17976305'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 27,
      'name' => 'Rodriguez Vladimir',
      'persona_id' => 26,
      'email' => 'vrodriguezs@unasam.edu.pe',
      'password' => Hash::make('40223139'),
      'username' => '40223139',
      'remember_token' => '40223139'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 28,
      'name' => 'Anaya Marco',
      'persona_id' => 27,
      'email' => '',
      'password' => Hash::make('43952472'),
      'username' => '43952472',
      'remember_token' => '43952472'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 29,
      'name' => 'Rodriguez Rocio',
      'persona_id' => 28,
      'email' => '',
      'password' => Hash::make('44395919'),
      'username' => '44395919',
      'remember_token' => '44395919'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 30,
      'name' => 'Romero Dante',
      'persona_id' => 29,
      'email' => 'dromeroa@unasam.edu.pe',
      'password' => Hash::make('07765726'),
      'username' => '07765726',
      'remember_token' => '07765726'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 31,
      'name' => 'Salazar Jaime',
      'persona_id' => 30,
      'email' => 'jsalazarv@unasam.edu.pe',
      'password' => Hash::make('31631824'),
      'username' => '31631824',
      'remember_token' => '31631824'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 32,
      'name' => 'Maguiña Luis',
      'persona_id' => 31,
      'email' => None,
      'password' => Hash::make('32403508'),
      'username' => '32403508',
      'remember_token' => '32403508'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 33,
      'name' => 'Vargas Robby',
      'persona_id' => 32,
      'email' => 'rvargasl@unasam.edu.pe',
      'password' => Hash::make('40030436'),
      'username' => '40030436',
      'remember_token' => '40030436'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 34,
      'name' => 'Cerna Bibiano',
      'persona_id' => 33,
      'email' => 'bcernam@unasam.edu.pe',
      'password' => Hash::make('06908215'),
      'username' => '06908215',
      'remember_token' => '06908215'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 35,
      'name' => 'Varela Walter',
      'persona_id' => 34,
      'email' => 'wvarelar@unasam.edu.pe',
      'password' => Hash::make('18117012'),
      'username' => '18117012',
      'remember_token' => '18117012'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 36,
      'name' => 'Bedon Mariano',
      'persona_id' => 35,
      'email' => 'mbedons@unasam.edu.pe',
      'password' => Hash::make('32805212'),
      'username' => '32805212',
      'remember_token' => '32805212'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 37,
      'name' => 'Cabrera Julio',
      'persona_id' => 36,
      'email' => 'jcabreras@unasam.edu.pe',
      'password' => Hash::make('18037851'),
      'username' => '18037851',
      'remember_token' => '18037851'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 38,
      'name' => 'Asis Maximiliano',
      'persona_id' => 37,
      'email' => 'masisl@unasam.edu.pe',
      'password' => Hash::make('10763091'),
      'username' => '10763091',
      'remember_token' => '10763091'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 39,
      'name' => 'Trejo Wilfredo',
      'persona_id' => 38,
      'email' => 'wtrejof@unasam.edu.pe',
      'password' => Hash::make('70115549'),
      'username' => '70115549',
      'remember_token' => '70115549'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 40,
      'name' => 'Valdivia Jose',
      'persona_id' => 39,
      'email' => 'jvaldiviaf@unasam.edu.pe',
      'password' => Hash::make('31672707'),
      'username' => '31672707',
      'remember_token' => '31672707'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 41,
      'name' => 'Valderrama Jonhson',
      'persona_id' => 40,
      'email' => 'jvalderramaa@unasam.edu.pe',
      'password' => Hash::make('18033644'),
      'username' => '18033644',
      'remember_token' => '18033644'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 42,
      'name' => 'Medina Alberto',
      'persona_id' => 41,
      'email' => 'amedinav@unasam.edu.pe',
      'password' => Hash::make('31608116'),
      'username' => '31608116',
      'remember_token' => '31608116'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 43,
      'name' => 'Gomez Brander',
      'persona_id' => 42,
      'email' => 'bgomezl@unasam.edu.pe',
      'password' => Hash::make('32934418'),
      'username' => '32934418',
      'remember_token' => '32934418'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 44,
      'name' => 'Hinostroza Hever',
      'persona_id' => 43,
      'email' => 'hhinostrozae@unasam.edu.pe',
      'password' => Hash::make('32126034'),
      'username' => '32126034',
      'remember_token' => '32126034'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 45,
      'name' => 'Figueroa Myriam',
      'persona_id' => 44,
      'email' => 'mfigueroac@unasam.edu.pe',
      'password' => Hash::make('31649342'),
      'username' => '31649342',
      'remember_token' => '31649342'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 46,
      'name' => 'Alvarez Segundo',
      'persona_id' => 45,
      'email' => 'salvarezc@unasam.edu.pe',
      'password' => Hash::make('17931157'),
      'username' => '17931157',
      'remember_token' => '17931157'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 47,
      'name' => 'Arias Elizabeth',
      'persona_id' => 46,
      'email' => 'eariasl@unasam.edu.pe',
      'password' => Hash::make('31618744'),
      'username' => '31618744',
      'remember_token' => '31618744'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 48,
      'name' => 'Llanos Jorge',
      'persona_id' => 47,
      'email' => 'jllanost@unasam.edu.pe',
      'password' => Hash::make('17848381'),
      'username' => '17848381',
      'remember_token' => '17848381'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 49,
      'name' => 'Trinidad Kleber',
      'persona_id' => 48,
      'email' => 'ktrinidadg@unasam.edu.pe',
      'password' => Hash::make('31678338'),
      'username' => '31678338',
      'remember_token' => '31678338'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 50,
      'name' => 'Zambrano Elizabeth',
      'persona_id' => 49,
      'email' => 'ezambranol@unasam.edu.pe',
      'password' => Hash::make('45877543'),
      'username' => '45877543',
      'remember_token' => '45877543'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 51,
      'name' => 'Pari Andrea',
      'persona_id' => 50,
      'email' => 'arparisoto@unasam.edu.pe',
      'password' => Hash::make('29551777'),
      'username' => '29551777',
      'remember_token' => '29551777'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 52,
      'name' => 'Angulo Luis',
      'persona_id' => 51,
      'email' => 'languloc@unasam.edu.pe',
      'password' => Hash::make('17877521'),
      'username' => '17877521',
      'remember_token' => '17877521'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 53,
      'name' => 'Olivera Edgar',
      'persona_id' => 52,
      'email' => 'eoliverac@unasam.edu.pe',
      'password' => Hash::make('06159567'),
      'username' => '06159567',
      'remember_token' => '06159567'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 54,
      'name' => 'Niquin Esmelin',
      'persona_id' => 53,
      'email' => 'eniquin@unasam.edu.pe',
      'password' => Hash::make('18883920'),
      'username' => '18883920',
      'remember_token' => '18883920'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 55,
      'name' => 'Tamariz Carmen',
      'persona_id' => 54,
      'email' => 'ctamariz@unasam.edu.pe',
      'password' => Hash::make('33343198'),
      'username' => '33343198',
      'remember_token' => '33343198'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 56,
      'name' => 'Atoche Lorenzo',
      'persona_id' => 55,
      'email' => 'atochec@unasam.edu.pe',
      'password' => Hash::make('18056493'),
      'username' => '18056493',
      'remember_token' => '18056493'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 57,
      'name' => 'Flores Francisco',
      'persona_id' => 56,
      'email' => '',
      'password' => Hash::make('17831938'),
      'username' => '17831938',
      'remember_token' => '17831938'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 58,
      'name' => 'Ninaquispe Mario',
      'persona_id' => 57,
      'email' => 'mninaquispec@unasam.edu.pe',
      'password' => Hash::make('31629062'),
      'username' => '31629062',
      'remember_token' => '31629062'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 59,
      'name' => 'Gonzales Cesar',
      'persona_id' => 58,
      'email' => 'cgonzalesc@unasam.edu.pe',
      'password' => Hash::make('16407673'),
      'username' => '16407673',
      'remember_token' => '16407673'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 60,
      'name' => 'Giraldo Walter',
      'persona_id' => 59,
      'email' => 'wgiraldor@unasam.edu.pe',
      'password' => Hash::make('31637915'),
      'username' => '31637915',
      'remember_token' => '31637915'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 61,
      'name' => 'Asnate Edwin',
      'persona_id' => 60,
      'email' => 'edwin_johny@unasam.edu.pe',
      'password' => Hash::make('80194557'),
      'username' => '80194557',
      'remember_token' => '80194557'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 62,
      'name' => 'Ramirez Saul',
      'persona_id' => 61,
      'email' => 'sramirezh@unasam.edu.pe',
      'password' => Hash::make('46871908'),
      'username' => '46871908',
      'remember_token' => '46871908'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 63,
      'name' => 'Barra Rosario',
      'persona_id' => 62,
      'email' => 'tbarraz@unasam.edu.pe',
      'password' => Hash::make('31619483'),
      'username' => '31619483',
      'remember_token' => '31619483'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 64,
      'name' => 'Rosales Lilian',
      'persona_id' => 63,
      'email' => ' lrosalesm@unasam.edu.pe',
      'password' => Hash::make('41302797'),
      'username' => '41302797',
      'remember_token' => '41302797'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 65,
      'name' => 'Garay Jonhy',
      'persona_id' => 64,
      'email' => 'jgarays@unasam.edu.pe',
      'password' => Hash::make('42682732'),
      'username' => '42682732',
      'remember_token' => '42682732'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 66,
      'name' => 'Puelles Franklin',
      'persona_id' => 65,
      'email' => 'fpuellesg@unasam.edu.pe',
      'password' => Hash::make('16492448'),
      'username' => '16492448',
      'remember_token' => '16492448'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 67,
      'name' => 'Briceño Veronica',
      'persona_id' => 66,
      'email' => 'vbricenol@unasam.edu.pe',
      'password' => Hash::make('41829056'),
      'username' => '41829056',
      'remember_token' => '41829056'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 68,
      'name' => 'Espinoza Einer',
      'persona_id' => 67,
      'email' => 'eespinozam@unasam.edu.pe',
      'password' => Hash::make('17872527'),
      'username' => '17872527',
      'remember_token' => '17872527'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 69,
      'name' => 'Arce Fernando',
      'persona_id' => 68,
      'email' => 'farcez@unasam.edu.pe',
      'password' => Hash::make('07350313'),
      'username' => '07350313',
      'remember_token' => '07350313'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 70,
      'name' => 'Huaman Lourdes',
      'persona_id' => 69,
      'email' => 'lhuamanr@unasam.edu.pe',
      'password' => Hash::make('41155549'),
      'username' => '41155549',
      'remember_token' => '41155549'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 71,
      'name' => 'Mandujano Irma',
      'persona_id' => 70,
      'email' => 'imandujanoa@unasam.edu.pe',
      'password' => Hash::make('31663747'),
      'username' => '31663747',
      'remember_token' => '31663747'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 72,
      'name' => ' Salcedo Martin',
      'persona_id' => 71,
      'email' => '',
      'password' => Hash::make('18010218'),
      'username' => '18010218',
      'remember_token' => '18010218'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 73,
      'name' => 'Medina Maria',
      'persona_id' => 72,
      'email' => 'mmedinag@unasam.edu.pe',
      'password' => Hash::make('18106108'),
      'username' => '18106108',
      'remember_token' => '18106108'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 74,
      'name' => 'Villanueva Manuel',
      'persona_id' => 73,
      'email' => 'mvillanuevac@unasam.edu.pe',
      'password' => Hash::make('41982355'),
      'username' => '41982355',
      'remember_token' => '41982355'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 75,
      'name' => 'Medina Esteban',
      'persona_id' => 74,
      'email' => 'emedinar@unasam.edu.pe',
      'password' => Hash::make('33263751'),
      'username' => '33263751',
      'remember_token' => '33263751'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 76,
      'name' => 'Cahuana Jaime',
      'persona_id' => 75,
      'email' => 'jcahuanaf@unasam.edu.pe',
      'password' => Hash::make('29349919'),
      'username' => '29349919',
      'remember_token' => '29349919'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 77,
      'name' => 'Salazar Rolando',
      'persona_id' => 76,
      'email' => 'rsalazarc@unasam.edu.pe',
      'password' => Hash::make('31663343'),
      'username' => '31663343',
      'remember_token' => '31663343'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 78,
      'name' => 'Bustamante Nelida',
      'persona_id' => 77,
      'email' => 'nbustamantem@unasam.edu.pe',
      'password' => Hash::make('08578145'),
      'username' => '08578145',
      'remember_token' => '08578145'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 79,
      'name' => 'Vasquez Noe',
      'persona_id' => 78,
      'email' => 'nvasquezr@unasam.edu.pe',
      'password' => Hash::make('41669511'),
      'username' => '41669511',
      'remember_token' => '41669511'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 80,
      'name' => 'Blas Elmer',
      'persona_id' => 79,
      'email' => '',
      'password' => Hash::make('44982614'),
      'username' => '44982614',
      'remember_token' => '44982614'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 81,
      'name' => 'Huaman Patricia',
      'persona_id' => 80,
      'email' => 'phuamanr@unasam.edu.pe',
      'password' => Hash::make('40558464'),
      'username' => '40558464',
      'remember_token' => '40558464'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 82,
      'name' => 'Ramirez Eleuterio',
      'persona_id' => 81,
      'email' => 'eramireza@unasam.edu.pe',
      'password' => Hash::make('32888980'),
      'username' => '32888980',
      'remember_token' => '32888980'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 83,
      'name' => 'Garcia Jakson',
      'persona_id' => 82,
      'email' => 'jgarciam@unasam.edu.pe',
      'password' => Hash::make('32958759'),
      'username' => '32958759',
      'remember_token' => '32958759'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 84,
      'name' => 'Soto Abencia',
      'persona_id' => 83,
      'email' => 'asotog@unasam.edu.pe',
      'password' => Hash::make('31627082'),
      'username' => '31627082',
      'remember_token' => '31627082'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 85,
      'name' => 'Minaya Segundo',
      'persona_id' => 84,
      'email' => 'sminayas@unasam.edu.pe',
      'password' => Hash::make('41175727'),
      'username' => '41175727',
      'remember_token' => '41175727'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 86,
      'name' => 'Hernandez Edgar',
      'persona_id' => 85,
      'email' => 'ehernandezm@unasam.edu.pe',
      'password' => Hash::make('32904225'),
      'username' => '32904225',
      'remember_token' => '32904225'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 87,
      'name' => 'Choy Maximiliano',
      'persona_id' => 86,
      'email' => 'mchoyw@unasam.edu.pe',
      'password' => Hash::make('31633209'),
      'username' => '31633209',
      'remember_token' => '31633209'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 88,
      'name' => 'Romero Nivardo',
      'persona_id' => 87,
      'email' => '',
      'password' => Hash::make('31941026'),
      'username' => '31941026',
      'remember_token' => '31941026'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 89,
      'name' => 'Barba Alejandro',
      'persona_id' => 88,
      'email' => '',
      'password' => Hash::make('31672437'),
      'username' => '31672437',
      'remember_token' => '31672437'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 90,
      'name' => 'Mendoza Angel',
      'persona_id' => 89,
      'email' => 'amendozal@unasam.edu.pe',
      'password' => Hash::make('17824554'),
      'username' => '17824554',
      'remember_token' => '17824554'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 91,
      'name' => 'Alayo Perpetua',
      'persona_id' => 90,
      'email' => 'palayod@unasam.edu.pe',
      'password' => Hash::make('31674688'),
      'username' => '31674688',
      'remember_token' => '31674688'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 92,
      'name' => 'Medina Walter',
      'persona_id' => 91,
      'email' => 'wmedinal@unasam.edu.pe',
      'password' => Hash::make('42953649'),
      'username' => '42953649',
      'remember_token' => '42953649'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 93,
      'name' => 'Gonzales Angel',
      'persona_id' => 92,
      'email' => 'agonzalesc@unasam.edu.pe',
      'password' => Hash::make('31680888'),
      'username' => '31680888',
      'remember_token' => '31680888'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 94,
      'name' => 'Villafuerte Mario',
      'persona_id' => 93,
      'email' => 'mvillafuertev@unasam.edu.pe',
      'password' => Hash::make('31605888'),
      'username' => '31605888',
      'remember_token' => '31605888'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 95,
      'name' => 'Norabuena Emerson',
      'persona_id' => 94,
      'email' => 'enorabuenaf@unasam.edu.pe',
      'password' => Hash::make('45259683'),
      'username' => '45259683',
      'remember_token' => '45259683'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 96,
      'name' => 'Norabuena Roger',
      'persona_id' => 95,
      'email' => 'rnorabuenaf@unasam.edu.pe',
      'password' => Hash::make('41493243'),
      'username' => '41493243',
      'remember_token' => '41493243'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 97,
      'name' => 'Pacheco Alexander',
      'persona_id' => 96,
      'email' => 'apachecoc@unasam.edu.pe',
      'password' => Hash::make('18092381'),
      'username' => '18092381',
      'remember_token' => '18092381'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 98,
      'name' => 'Moreno Luis',
      'persona_id' => 97,
      'email' => 'lmorenor@unasam.edu.pe',
      'password' => Hash::make('17876092'),
      'username' => '17876092',
      'remember_token' => '17876092'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 99,
      'name' => 'Flores Erick',
      'persona_id' => 98,
      'email' => 'efloresc@unasam.edu.pe',
      'password' => Hash::make('07964931'),
      'username' => '07964931',
      'remember_token' => '07964931'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 100,
      'name' => 'Zelada Olenka',
      'persona_id' => 99,
      'email' => '',
      'password' => Hash::make('73761610'),
      'username' => '73761610',
      'remember_token' => '73761610'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 101,
      'name' => 'Gutierrez Elmer',
      'persona_id' => 100,
      'email' => 'egutierrezl@unasam.edu.pe',
      'password' => Hash::make('17817265'),
      'username' => '17817265',
      'remember_token' => '17817265'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 102,
      'name' => 'Urquiaga Ausberto',
      'persona_id' => 101,
      'email' => 'aurquiagav@unasam.edu.pe',
      'password' => Hash::make('18118654'),
      'username' => '18118654',
      'remember_token' => '18118654'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 103,
      'name' => 'Zavaleta Merlyng',
      'persona_id' => 102,
      'email' => 'mzavaletam@unasam.edu.pe',
      'password' => Hash::make('32968629'),
      'username' => '32968629',
      'remember_token' => '32968629'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 104,
      'name' => 'Coral Giovanna',
      'persona_id' => 103,
      'email' => 'gcorals@unasam.edu.pe',
      'password' => Hash::make('40358097'),
      'username' => '40358097',
      'remember_token' => '40358097'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 105,
      'name' => 'Aliaga Edell',
      'persona_id' => 104,
      'email' => 'ealiagaz@unasam.edu.pe',
      'password' => Hash::make('31660225'),
      'username' => '31660225',
      'remember_token' => '31660225'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 106,
      'name' => 'Olivera Juan',
      'persona_id' => 105,
      'email' => 'joliveras@unasam.edu.pe',
      'password' => Hash::make('31605186'),
      'username' => '31605186',
      'remember_token' => '31605186'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 107,
      'name' => 'Chanducas Heber',
      'persona_id' => 106,
      'email' => 'hchanducast@unasam.edu.pe',
      'password' => Hash::make('18037620'),
      'username' => '18037620',
      'remember_token' => '18037620'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 108,
      'name' => 'Ramirez Miguel',
      'persona_id' => 107,
      'email' => 'mramirezg@unasam.edu.pe',
      'password' => Hash::make('31663062'),
      'username' => '31663062',
      'remember_token' => '31663062'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 109,
      'name' => 'Javier Orlando',
      'persona_id' => 108,
      'email' => 'ojavierr@unasam.edu.pe',
      'password' => Hash::make('42213770'),
      'username' => '42213770',
      'remember_token' => '42213770'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 110,
      'name' => 'Sanchez Dante',
      'persona_id' => 109,
      'email' => 'dsanchezr@unasam.edu.pe',
      'password' => Hash::make('17851842'),
      'username' => '17851842',
      'remember_token' => '17851842'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 111,
      'name' => 'Garcia Jose',
      'persona_id' => 110,
      'email' => 'jgarciap@unasam.edu.pe',
      'password' => Hash::make('17815436'),
      'username' => '17815436',
      'remember_token' => '17815436'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 112,
      'name' => 'Gonzales Gissela',
      'persona_id' => 111,
      'email' => 'cgonzalesp@unasam.edu.pe',
      'password' => Hash::make('41504819'),
      'username' => '41504819',
      'remember_token' => '41504819'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 113,
      'name' => 'Vilchez Rosa',
      'persona_id' => 112,
      'email' => 'rvilchezv@unasam.edu.pe',
      'password' => Hash::make('18879677'),
      'username' => '18879677',
      'remember_token' => '18879677'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 114,
      'name' => 'Palma Lucio',
      'persona_id' => 113,
      'email' => 'lpalmal@unasam.edu.pe',
      'password' => Hash::make('42747811'),
      'username' => '42747811',
      'remember_token' => '42747811'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 115,
      'name' => 'Olivera Percy',
      'persona_id' => 114,
      'email' => 'poliverag@unasam.edu.pe',
      'password' => Hash::make('31651043'),
      'username' => '31651043',
      'remember_token' => '31651043'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 116,
      'name' => 'Florian Roger',
      'persona_id' => 115,
      'email' => 'rflorians@unasam.edu.pe',
      'password' => Hash::make('17981051'),
      'username' => '17981051',
      'remember_token' => '17981051'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 117,
      'name' => 'Lujerio Dik',
      'persona_id' => 116,
      'email' => 'dlujeriog@unasam.edu.pe',
      'password' => Hash::make('43706582'),
      'username' => '43706582',
      'remember_token' => '43706582'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 118,
      'name' => 'Minaya Jaime',
      'persona_id' => 117,
      'email' => 'jminayag@unasam.edu.pe',
      'password' => Hash::make('10312182'),
      'username' => '10312182',
      'remember_token' => '10312182'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 119,
      'name' => 'Mendoza Denis',
      'persona_id' => 118,
      'email' => 'dmendozar@unasam.edu.pe',
      'password' => Hash::make('42289816'),
      'username' => '42289816',
      'remember_token' => '42289816'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 120,
      'name' => 'Rosales Miguel',
      'persona_id' => 119,
      'email' => 'mrosalesa@unasam.edu.pe',
      'password' => Hash::make('32035016'),
      'username' => '32035016',
      'remember_token' => '32035016'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 121,
      'name' => 'Carbonel Ana',
      'persona_id' => 120,
      'email' => 'acarboneln@unasam.edu.pe',
      'password' => Hash::make('16502484'),
      'username' => '16502484',
      'remember_token' => '16502484'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 122,
      'name' => 'Liñan Jose',
      'persona_id' => 121,
      'email' => 'jlinanh@unasam.edu.pe',
      'password' => Hash::make('41268400'),
      'username' => '41268400',
      'remember_token' => '41268400'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 123,
      'name' => 'Portalatino Jube',
      'persona_id' => 122,
      'email' => 'jportalatinoz@unasam.edu.pe',
      'password' => Hash::make('31672257'),
      'username' => '31672257',
      'remember_token' => '31672257'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 124,
      'name' => 'Sabino Javier',
      'persona_id' => 123,
      'email' => 'jsabinon@unasam.edu.pe',
      'password' => Hash::make('44872754'),
      'username' => '44872754',
      'remember_token' => '44872754'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 125,
      'name' => 'Cabello Pablo',
      'persona_id' => 124,
      'email' => 'pcabelloc@unasam.edu.pe',
      'password' => Hash::make('31649411'),
      'username' => '31649411',
      'remember_token' => '31649411'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 126,
      'name' => 'Regalado Manuel',
      'persona_id' => 125,
      'email' => '',
      'password' => Hash::make('21434540'),
      'username' => '21434540',
      'remember_token' => '21434540'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 127,
      'name' => 'Tinoco Pedro',
      'persona_id' => 126,
      'email' => 'ptinocog@unasam.edu.pe',
      'password' => Hash::make('31655520'),
      'username' => '31655520',
      'remember_token' => '31655520'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 128,
      'name' => 'Mejia Eugenio',
      'persona_id' => 127,
      'email' => ' emejiaz@unasam.edu.pe',
      'password' => Hash::make('31650585'),
      'username' => '31650585',
      'remember_token' => '31650585'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 129,
      'name' => 'Colonia Pedro',
      'persona_id' => 128,
      'email' => 'pcoloniac@unasam.edu.pe',
      'password' => Hash::make('32030567'),
      'username' => '32030567',
      'remember_token' => '32030567'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 130,
      'name' => 'Mendoza Hugo',
      'persona_id' => 129,
      'email' => 'hmendozav@unasam.edu.pe',
      'password' => Hash::make('31624565'),
      'username' => '31624565',
      'remember_token' => '31624565'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 131,
      'name' => 'Reyes Toribio',
      'persona_id' => 130,
      'email' => 'treyesr@unasam.edu.pe',
      'password' => Hash::make('31609928'),
      'username' => '31609928',
      'remember_token' => '31609928'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 132,
      'name' => 'Bayona Remo',
      'persona_id' => 131,
      'email' => 'rbayonaa@unasam.edu.pe',
      'password' => Hash::make('31680721'),
      'username' => '31680721',
      'remember_token' => '31680721'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 133,
      'name' => 'Aparicio Fidel',
      'persona_id' => 132,
      'email' => '',
      'password' => Hash::make('31672306'),
      'username' => '31672306',
      'remember_token' => '31672306'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 134,
      'name' => 'Reyes Eusebio',
      'persona_id' => 133,
      'email' => 'ereyesh@unasam.edu.pe',
      'password' => Hash::make('09002072'),
      'username' => '09002072',
      'remember_token' => '09002072'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 135,
      'name' => 'Diaz Abelardo',
      'persona_id' => 134,
      'email' => 'abelardo@unasam.edu.pe',
      'password' => Hash::make('31609342'),
      'username' => '31609342',
      'remember_token' => '31609342'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 136,
      'name' => 'Barreto Juan',
      'persona_id' => 135,
      'email' => 'jbarretor@unasam.edu.pe',
      'password' => Hash::make('31622892'),
      'username' => '31622892',
      'remember_token' => '31622892'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 137,
      'name' => 'Revelo Gerardo',
      'persona_id' => 136,
      'email' => 'grevelos@unasam.edu.pe',
      'password' => Hash::make('46513585'),
      'username' => '46513585',
      'remember_token' => '46513585'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 138,
      'name' => 'Pachac Yenica',
      'persona_id' => 137,
      'email' => 'ypachach@unasam.edu.pe',
      'password' => Hash::make('70009225'),
      'username' => '70009225',
      'remember_token' => '70009225'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 139,
      'name' => 'Espiritu Hiber',
      'persona_id' => 138,
      'email' => '',
      'password' => Hash::make('41421201'),
      'username' => '41421201',
      'remember_token' => '41421201'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 140,
      'name' => 'Vilca Karina',
      'persona_id' => 139,
      'email' => 'kvilcam@unasam.edu.pe',
      'password' => Hash::make('31663774'),
      'username' => '31663774',
      'remember_token' => '31663774'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 141,
      'name' => 'Hurtado Segundo',
      'persona_id' => 140,
      'email' => 'shurtador@unasam.edu.pe',
      'password' => Hash::make('16531729'),
      'username' => '16531729',
      'remember_token' => '16531729'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 142,
      'name' => 'Vasquez Walter',
      'persona_id' => 141,
      'email' => 'wvasquezc@unasam.edu.pe',
      'password' => Hash::make('31663683'),
      'username' => '31663683',
      'remember_token' => '31663683'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 143,
      'name' => 'Pajuelo Clay',
      'persona_id' => 142,
      'email' => 'cpajueloro@unasam.edu.pe',
      'password' => Hash::make('32046488'),
      'username' => '32046488',
      'remember_token' => '32046488'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 144,
      'name' => 'Roque Juan',
      'persona_id' => 143,
      'email' => 'jroqueg@unasam.edu.pe',
      'password' => Hash::make('08432055'),
      'username' => '08432055',
      'remember_token' => '08432055'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 145,
      'name' => 'Mejia Teofanes',
      'persona_id' => 144,
      'email' => 'tmejiaa@unasam.edu.pe',
      'password' => Hash::make('31613572'),
      'username' => '31613572',
      'remember_token' => '31613572'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 146,
      'name' => 'Saavedra Xandra',
      'persona_id' => 145,
      'email' => 'xsaavedrac@unasam.edu.pe',
      'password' => Hash::make('31665424'),
      'username' => '31665424',
      'remember_token' => '31665424'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 147,
      'name' => 'Toscano Alejandro',
      'persona_id' => 146,
      'email' => 'atoscanol@unasam.edu.pe',
      'password' => Hash::make('32037289'),
      'username' => '32037289',
      'remember_token' => '32037289'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 148,
      'name' => 'Anaya Nells',
      'persona_id' => 147,
      'email' => 'nanayac@unasam.edu.pe',
      'password' => Hash::make('41899529'),
      'username' => '41899529',
      'remember_token' => '41899529'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 149,
      'name' => 'Castillo Guillermo',
      'persona_id' => 148,
      'email' => 'gcastillor@unasam.edu.pe',
      'password' => Hash::make('31629724'),
      'username' => '31629724',
      'remember_token' => '31629724'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 150,
      'name' => 'Cotos Javier',
      'persona_id' => 149,
      'email' => 'jcotosv@unasam.edu.pe',
      'password' => Hash::make('31612286'),
      'username' => '31612286',
      'remember_token' => '31612286'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 151,
      'name' => 'Ayora Lorenzo',
      'persona_id' => 150,
      'email' => 'layorag@unasam.edu.pe',
      'password' => Hash::make('31678002'),
      'username' => '31678002',
      'remember_token' => '31678002'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 152,
      'name' => 'Soria Sandra',
      'persona_id' => 151,
      'email' => 'ssoriaa@unasam.edu.pe',
      'password' => Hash::make('45894502'),
      'username' => '45894502',
      'remember_token' => '45894502'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 153,
      'name' => 'Camones Raymundo',
      'persona_id' => 152,
      'email' => 'rcamonesc@unasam.edu.pe',
      'password' => Hash::make('31626134'),
      'username' => '31626134',
      'remember_token' => '31626134'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 154,
      'name' => 'Oscanoa Luis',
      'persona_id' => 153,
      'email' => 'loscanoag@unasam.edu.pe',
      'password' => Hash::make('07332264'),
      'username' => '07332264',
      'remember_token' => '07332264'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 155,
      'name' => 'Toro Andres',
      'persona_id' => 154,
      'email' => '',
      'password' => Hash::make('32041044'),
      'username' => '32041044',
      'remember_token' => '32041044'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 156,
      'name' => 'Espinoza Francisco',
      'persona_id' => 155,
      'email' => 'fespinozama@unasam.edu.pe',
      'password' => Hash::make('31673428'),
      'username' => '31673428',
      'remember_token' => '31673428'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 157,
      'name' => 'Tinoco Tito',
      'persona_id' => 156,
      'email' => 'ttinocom@unasam.edu.pe',
      'password' => Hash::make('31648615'),
      'username' => '31648615',
      'remember_token' => '31648615'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 158,
      'name' => 'Maza Arturo',
      'persona_id' => 157,
      'email' => 'amazar@unasam.edu.pe',
      'password' => Hash::make('31663077'),
      'username' => '31663077',
      'remember_token' => '31663077'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 159,
      'name' => 'Caycho Nelly',
      'persona_id' => 158,
      'email' => 'ncaychom@unasam.edu.pe',
      'password' => Hash::make('09177702'),
      'username' => '09177702',
      'remember_token' => '09177702'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 160,
      'name' => 'Llana Cesar',
      'persona_id' => 159,
      'email' => 'cllanay@unasam.edu.pe',
      'password' => Hash::make('09897355'),
      'username' => '09897355',
      'remember_token' => '09897355'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 161,
      'name' => 'Laos Carlos',
      'persona_id' => 160,
      'email' => 'claoso@unasam.edu.pe',
      'password' => Hash::make('15967865'),
      'username' => '15967865',
      'remember_token' => '15967865'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 162,
      'name' => 'Menacho Victor',
      'persona_id' => 161,
      'email' => 'vmenachol@unasam.edu.pe',
      'password' => Hash::make('31620358'),
      'username' => '31620358',
      'remember_token' => '31620358'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 163,
      'name' => 'Jara Flor',
      'persona_id' => 162,
      'email' => 'fjarar@unasam.edu.pe',
      'password' => Hash::make('40732347'),
      'username' => '40732347',
      'remember_token' => '40732347'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 164,
      'name' => 'Reyes Esteban',
      'persona_id' => 163,
      'email' => 'ereyesr@unasam.edu.pe',
      'password' => Hash::make('31608095'),
      'username' => '31608095',
      'remember_token' => '31608095'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 165,
      'name' => 'Chunga Carlos',
      'persona_id' => 164,
      'email' => 'cchungaa@unasam.edu.pe',
      'password' => Hash::make('17863438'),
      'username' => '17863438',
      'remember_token' => '17863438'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 166,
      'name' => 'Gonzales Doris',
      'persona_id' => 165,
      'email' => 'dgonzalesy@unasam.edu.pe',
      'password' => Hash::make('43225206'),
      'username' => '43225206',
      'remember_token' => '43225206'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 167,
      'name' => 'Robles Reyna',
      'persona_id' => 166,
      'email' => 'rroblese@unasam.edu.pe',
      'password' => Hash::make('44304901'),
      'username' => '44304901',
      'remember_token' => '44304901'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 168,
      'name' => 'Loli Telmo',
      'persona_id' => 167,
      'email' => '',
      'password' => Hash::make('42142705'),
      'username' => '42142705',
      'remember_token' => '42142705'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 169,
      'name' => 'Pelaez Guillermo',
      'persona_id' => 168,
      'email' => 'gpelaezd@unasam.edu.pe',
      'password' => Hash::make('31934852'),
      'username' => '31934852',
      'remember_token' => '31934852'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 170,
      'name' => 'Dextre William',
      'persona_id' => 169,
      'email' => 'wdextrem@unasam.edu.pe',
      'password' => Hash::make('40138473'),
      'username' => '40138473',
      'remember_token' => '40138473'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 171,
      'name' => 'Fernandez Willian',
      'persona_id' => 170,
      'email' => 'wfernandezc@unasam.edu.pe',
      'password' => Hash::make('41401992'),
      'username' => '41401992',
      'remember_token' => '41401992'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 172,
      'name' => 'Valderrama Lorenzo',
      'persona_id' => 171,
      'email' => 'lvalderramap@unasam.edu.pe',
      'password' => Hash::make('17977591'),
      'username' => '17977591',
      'remember_token' => '17977591'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 173,
      'name' => 'Ramirez Edwin',
      'persona_id' => 172,
      'email' => 'ehramireza@unasam.edu.pe',
      'password' => Hash::make('31668274'),
      'username' => '31668274',
      'remember_token' => '31668274'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 174,
      'name' => 'Romero Demetrio',
      'persona_id' => 173,
      'email' => 'dromerot@unasam.edu.pe',
      'password' => Hash::make('17867018'),
      'username' => '17867018',
      'remember_token' => '17867018'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 175,
      'name' => 'Uribe Lilia',
      'persona_id' => 174,
      'email' => 'luribep@unasam.edu.pe',
      'password' => Hash::make('08583186'),
      'username' => '08583186',
      'remember_token' => '08583186'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 176,
      'name' => 'Rondon Arturo',
      'persona_id' => 175,
      'email' => 'arondonn@unasam.edu.pe',
      'password' => Hash::make('31670761'),
      'username' => '31670761',
      'remember_token' => '31670761'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 177,
      'name' => 'Carbajulca Milady',
      'persona_id' => 176,
      'email' => 'mcarbajulcam@unasam.edu.pe',
      'password' => Hash::make('07252582'),
      'username' => '07252582',
      'remember_token' => '07252582'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 178,
      'name' => 'Espinoza Marcos',
      'persona_id' => 177,
      'email' => 'mespinozam@unasam.edu.pe',
      'password' => Hash::make('31615303'),
      'username' => '31615303',
      'remember_token' => '31615303'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 179,
      'name' => 'Vilchez Juan',
      'persona_id' => 178,
      'email' => 'jvilchezc@unasam.edu.pe',
      'password' => Hash::make('31676818'),
      'username' => '31676818',
      'remember_token' => '31676818'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 180,
      'name' => 'Anaya Cecilia',
      'persona_id' => 179,
      'email' => 'canayal@unasam.edu.pe',
      'password' => Hash::make('31677232'),
      'username' => '31677232',
      'remember_token' => '31677232'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 181,
      'name' => 'Blacido Luz',
      'persona_id' => 180,
      'email' => 'lblacidoa@unasam.edu.pe',
      'password' => Hash::make('31674656'),
      'username' => '31674656',
      'remember_token' => '31674656'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 182,
      'name' => 'Neglia Leopoldo',
      'persona_id' => 181,
      'email' => 'lnegliav@unasam.edu.pe',
      'password' => Hash::make('31667280'),
      'username' => '31667280',
      'remember_token' => '31667280'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 183,
      'name' => 'Zarzosa Eva',
      'persona_id' => 182,
      'email' => 'ezarzosam@unasam.edu.pe',
      'password' => Hash::make('31632085'),
      'username' => '31632085',
      'remember_token' => '31632085'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 184,
      'name' => 'Trujillo Nathaly',
      'persona_id' => 183,
      'email' => '',
      'password' => Hash::make('43633450'),
      'username' => '43633450',
      'remember_token' => '43633450'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 185,
      'name' => 'Flores Milagros',
      'persona_id' => 184,
      'email' => '',
      'password' => Hash::make('41764739'),
      'username' => '41764739',
      'remember_token' => '41764739'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 186,
      'name' => 'Lazaro Juan',
      'persona_id' => 185,
      'email' => '',
      'password' => Hash::make('31680471'),
      'username' => '31680471',
      'remember_token' => '31680471'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 187,
      'name' => 'Sabbagg Jorge',
      'persona_id' => 186,
      'email' => '',
      'password' => Hash::make('09527825'),
      'username' => '09527825',
      'remember_token' => '09527825'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 188,
      'name' => 'Villanueva Luis',
      'persona_id' => 187,
      'email' => 'lvillanuevab@unasam.edu.pe',
      'password' => Hash::make('17993162'),
      'username' => '17993162',
      'remember_token' => '17993162'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 189,
      'name' => 'Vigo Jorge',
      'persona_id' => 188,
      'email' => 'jvigom@unasam.edu.pe',
      'password' => Hash::make('17917872'),
      'username' => '17917872',
      'remember_token' => '17917872'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 190,
      'name' => 'Tandaypan Jorge',
      'persona_id' => 189,
      'email' => 'jtandaypans@unasam.edu.pe',
      'password' => Hash::make('17977546'),
      'username' => '17977546',
      'remember_token' => '17977546'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 191,
      'name' => 'Herrera Antonio',
      'persona_id' => 190,
      'email' => 'aherreras@unasam.edu.pe',
      'password' => Hash::make('31614989'),
      'username' => '31614989',
      'remember_token' => '31614989'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 192,
      'name' => 'Lirio Felix',
      'persona_id' => 191,
      'email' => 'aliriol@unasam.edu.pe',
      'password' => Hash::make('31629391'),
      'username' => '31629391',
      'remember_token' => '31629391'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 193,
      'name' => 'Garcia Maria',
      'persona_id' => 192,
      'email' => 'mgarciaf@unasam.edu.pe',
      'password' => Hash::make('31672467'),
      'username' => '31672467',
      'remember_token' => '31672467'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 194,
      'name' => 'Gonzalez Juan',
      'persona_id' => 193,
      'email' => 'jgonzalezl@unasam.edu.pe',
      'password' => Hash::make('31666798'),
      'username' => '31666798',
      'remember_token' => '31666798'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 195,
      'name' => 'Figueroa Silvia',
      'persona_id' => 194,
      'email' => 'sfigueroaq@unasam.edu.pe',
      'password' => Hash::make('32035078'),
      'username' => '32035078',
      'remember_token' => '32035078'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 196,
      'name' => 'Diaz John',
      'persona_id' => 195,
      'email' => 'jdiazl@unasam.edu.pe',
      'password' => Hash::make('17856598'),
      'username' => '17856598',
      'remember_token' => '17856598'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 197,
      'name' => 'Del Carpio Jose',
      'persona_id' => 196,
      'email' => 'jdelcarpiog@unasam.edu.pe',
      'password' => Hash::make('06025539'),
      'username' => '06025539',
      'remember_token' => '06025539'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 198,
      'name' => 'Leiva Orlando',
      'persona_id' => 197,
      'email' => 'oleivac@unasam.edu.pe',
      'password' => Hash::make('31680944'),
      'username' => '31680944',
      'remember_token' => '31680944'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 199,
      'name' => 'Norabuena Cesar',
      'persona_id' => 198,
      'email' => '',
      'password' => Hash::make('43278157'),
      'username' => '43278157',
      'remember_token' => '43278157'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 200,
      'name' => 'Jamanca Robert',
      'persona_id' => 199,
      'email' => 'ejamancaa@unasam.edu.pe',
      'password' => Hash::make('31667593'),
      'username' => '31667593',
      'remember_token' => '31667593'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 201,
      'name' => 'Leon Maritza',
      'persona_id' => 200,
      'email' => '',
      'password' => Hash::make('18858304'),
      'username' => '18858304',
      'remember_token' => '18858304'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 202,
      'name' => 'Alvarado Fredy',
      'persona_id' => 201,
      'email' => 'falvaradoz@unasam.edu.pe',
      'password' => Hash::make('25813874'),
      'username' => '25813874',
      'remember_token' => '25813874'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 203,
      'name' => 'Henostroza Julio',
      'persona_id' => 202,
      'email' => 'jhenostrozat@unasam.edu.pe',
      'password' => Hash::make('31610576'),
      'username' => '31610576',
      'remember_token' => '31610576'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 204,
      'name' => 'Castro Rafael',
      'persona_id' => 203,
      'email' => 'rcastror@unasam.edu.pe',
      'password' => Hash::make('31651901'),
      'username' => '31651901',
      'remember_token' => '31651901'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 205,
      'name' => 'Gamarra Norma',
      'persona_id' => 204,
      'email' => 'ngamarrar@unasam.edu.pe',
      'password' => Hash::make('31620604'),
      'username' => '31620604',
      'remember_token' => '31620604'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 206,
      'name' => 'Natividad Juan',
      'persona_id' => 205,
      'email' => 'jnatividadc@unasam.edu.pe',
      'password' => Hash::make('31671895'),
      'username' => '31671895',
      'remember_token' => '31671895'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 207,
      'name' => 'Tarazona Rosario',
      'persona_id' => 206,
      'email' => 'etarazonam@unasam.edu.pe',
      'password' => Hash::make('31662856'),
      'username' => '31662856',
      'remember_token' => '31662856'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 208,
      'name' => ' Rosa',
      'persona_id' => 207,
      'email' => 'raraujo@unasam.edu.pe',
      'password' => Hash::make('31628842'),
      'username' => '31628842',
      'remember_token' => '31628842'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 209,
      'name' => 'Ruiz Oscar',
      'persona_id' => 208,
      'email' => 'oruizc@unasam.edu.pe',
      'password' => Hash::make('31651246'),
      'username' => '31651246',
      'remember_token' => '31651246'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 210,
      'name' => 'Mantilla Jorge',
      'persona_id' => 209,
      'email' => 'jmantillaf@unasam.edu.pe',
      'password' => Hash::make('32738332'),
      'username' => '32738332',
      'remember_token' => '32738332'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 211,
      'name' => 'Espinoza Ydania',
      'persona_id' => 210,
      'email' => 'yespinozab@unasam.edu.pe',
      'password' => Hash::make('08455274'),
      'username' => '08455274',
      'remember_token' => '08455274'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 212,
      'name' => 'Castro Nelly',
      'persona_id' => 211,
      'email' => 'ncastrov@unasam.edu.pe',
      'password' => Hash::make('31677906'),
      'username' => '31677906',
      'remember_token' => '31677906'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 213,
      'name' => 'Falcon Paula',
      'persona_id' => 212,
      'email' => 'pfalconr@unasam.edu.pe',
      'password' => Hash::make('31615053'),
      'username' => '31615053',
      'remember_token' => '31615053'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 214,
      'name' => 'Solorzano Lisset',
      'persona_id' => 213,
      'email' => 'lsolorzanol@unasam.edu.pe',
      'password' => Hash::make('42016089'),
      'username' => '42016089',
      'remember_token' => '42016089'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 215,
      'name' => 'Rosales Edith',
      'persona_id' => 214,
      'email' => 'erosalesc@unasam.edu.pe',
      'password' => Hash::make('31629485'),
      'username' => '31629485',
      'remember_token' => '31629485'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 216,
      'name' => 'Mendez Eleodoro',
      'persona_id' => 215,
      'email' => 'emendezt@unasam.edu.pe',
      'password' => Hash::make('32405873'),
      'username' => '32405873',
      'remember_token' => '32405873'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 217,
      'name' => 'Ramirez Jorge',
      'persona_id' => 216,
      'email' => 'jramirezr@unasam.edu.pe',
      'password' => Hash::make('31633795'),
      'username' => '31633795',
      'remember_token' => '31633795'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 218,
      'name' => 'Quispe Angel',
      'persona_id' => 217,
      'email' => 'aquispet@unasam.edu.pe',
      'password' => Hash::make('31677905'),
      'username' => '31677905',
      'remember_token' => '31677905'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 219,
      'name' => 'Tolentino Alipio',
      'persona_id' => 218,
      'email' => 'atolentinog@unasam.edu.pe',
      'password' => Hash::make('31673299'),
      'username' => '31673299',
      'remember_token' => '31673299'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 220,
      'name' => 'Gonzalez Maria',
      'persona_id' => 219,
      'email' => 'sgonzalesl@unasam.edu.pe',
      'password' => Hash::make('10521345'),
      'username' => '10521345',
      'remember_token' => '10521345'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 221,
      'name' => 'Inti Julio',
      'persona_id' => 220,
      'email' => 'jintib@unasam.edu.pe',
      'password' => Hash::make('31673966'),
      'username' => '31673966',
      'remember_token' => '31673966'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 222,
      'name' => 'Leon Francisco',
      'persona_id' => 221,
      'email' => 'fleonh@unasam.edu.pe',
      'password' => Hash::make('32647148'),
      'username' => '32647148',
      'remember_token' => '32647148'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 223,
      'name' => 'Araujo Nino',
      'persona_id' => 222,
      'email' => 'naraujoj@unasam.edu.pe',
      'password' => Hash::make('43848700'),
      'username' => '43848700',
      'remember_token' => '43848700'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 224,
      'name' => 'Hidalgo Prudencio',
      'persona_id' => 223,
      'email' => 'phidalgoc@unasam.edu.pe',
      'password' => Hash::make('31671118'),
      'username' => '31671118',
      'remember_token' => '31671118'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 225,
      'name' => 'Macedo Yolaina',
      'persona_id' => 224,
      'email' => 'ymacedor@unasam.edu.pe',
      'password' => Hash::make('31679040'),
      'username' => '31679040',
      'remember_token' => '31679040'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 226,
      'name' => 'Alegre Silvia',
      'persona_id' => 225,
      'email' => 'salegrem@unasam.edu.pe',
      'password' => Hash::make('40800312'),
      'username' => '40800312',
      'remember_token' => '40800312'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 227,
      'name' => 'Reyes Alfredo',
      'persona_id' => 226,
      'email' => 'areyesnq@unasam.edu.pe',
      'password' => Hash::make('08297522'),
      'username' => '08297522',
      'remember_token' => '08297522'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 228,
      'name' => 'Jara Ivan',
      'persona_id' => 227,
      'email' => 'ijarae@unasam.edu.pe',
      'password' => Hash::make('44511931'),
      'username' => '44511931',
      'remember_token' => '44511931'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 229,
      'name' => 'Caballero Frida',
      'persona_id' => 228,
      'email' => 'fcaballerob@unasam.edu.pe',
      'password' => Hash::make('31633755'),
      'username' => '31633755',
      'remember_token' => '31633755'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 230,
      'name' => 'Minaya Yrma',
      'persona_id' => 229,
      'email' => 'yminayas@unasam.edu.pe',
      'password' => Hash::make('31662708'),
      'username' => '31662708',
      'remember_token' => '31662708'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 231,
      'name' => 'Durand Mildreth',
      'persona_id' => 230,
      'email' => '',
      'password' => Hash::make('71397499'),
      'username' => '71397499',
      'remember_token' => '71397499'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 232,
      'name' => 'Saenz Gregorio',
      'persona_id' => 231,
      'email' => 'gsaenzp@unasam.edu.pe',
      'password' => Hash::make('31650831'),
      'username' => '31650831',
      'remember_token' => '31650831'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 233,
      'name' => 'Loarte Edwin',
      'persona_id' => 232,
      'email' => '',
      'password' => Hash::make('44909386'),
      'username' => '44909386',
      'remember_token' => '44909386'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 234,
      'name' => 'Castillo Heraclio',
      'persona_id' => 233,
      'email' => 'fcastillp@unasam.edu.pe',
      'password' => Hash::make('32043297'),
      'username' => '32043297',
      'remember_token' => '32043297'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 235,
      'name' => 'Leon Vladimir',
      'persona_id' => 234,
      'email' => 'vladimir.leon@unasam.edu.pe',
      'password' => Hash::make('72513051'),
      'username' => '72513051',
      'remember_token' => '72513051'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 236,
      'name' => 'Poma Carlos',
      'persona_id' => 235,
      'email' => 'cpomav@unasam.edu.pe',
      'password' => Hash::make('31656793'),
      'username' => '31656793',
      'remember_token' => '31656793'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 237,
      'name' => 'Ragas Johnny',
      'persona_id' => 236,
      'email' => 'jragasd@unasam.edu.pe',
      'password' => Hash::make('41484544'),
      'username' => '41484544',
      'remember_token' => '41484544'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 238,
      'name' => 'Huaman Martin',
      'persona_id' => 237,
      'email' => 'mhuamanc@unasam.edu.pe',
      'password' => Hash::make('44779016'),
      'username' => '44779016',
      'remember_token' => '44779016'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 239,
      'name' => 'Loarte Maximiliano',
      'persona_id' => 238,
      'email' => 'mloarter@unasam.edu.pe',
      'password' => Hash::make('32295136'),
      'username' => '32295136',
      'remember_token' => '32295136'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 240,
      'name' => 'Norabuena Gerardo',
      'persona_id' => 239,
      'email' => '',
      'password' => Hash::make('31625862'),
      'username' => '31625862',
      'remember_token' => '31625862'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 241,
      'name' => 'Leyva Mario',
      'persona_id' => 240,
      'email' => 'mleyvac@unasam.edu.pe',
      'password' => Hash::make('06269590'),
      'username' => '06269590',
      'remember_token' => '06269590'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 242,
      'name' => 'Polo Rosario',
      'persona_id' => 241,
      'email' => '',
      'password' => Hash::make('31662349'),
      'username' => '31662349',
      'remember_token' => '31662349'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 243,
      'name' => 'Tuya Bheny',
      'persona_id' => 242,
      'email' => 'btuyac@unasam.edu.pe',
      'password' => Hash::make('31661054'),
      'username' => '31661054',
      'remember_token' => '31661054'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 244,
      'name' => 'Giraldo Cecilia',
      'persona_id' => 243,
      'email' => '',
      'password' => Hash::make('47651596'),
      'username' => '47651596',
      'remember_token' => '47651596'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 245,
      'name' => 'Tuya Eladio',
      'persona_id' => 244,
      'email' => 'etuyac@unasam.edu.pe',
      'password' => Hash::make('32646306'),
      'username' => '32646306',
      'remember_token' => '32646306'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 246,
      'name' => 'Manrique Victor',
      'persona_id' => 245,
      'email' => 'gvictorm@unasam.edu.pe',
      'password' => Hash::make('31656292'),
      'username' => '31656292',
      'remember_token' => '31656292'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 247,
      'name' => 'Palomino Edwin',
      'persona_id' => 246,
      'email' => 'epalominoc@unasam.edu.pe',
      'password' => Hash::make('31674598'),
      'username' => '31674598',
      'remember_token' => '31674598'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 248,
      'name' => 'Duran Christie',
      'persona_id' => 247,
      'email' => 'cdurang@unasam.edu.pe',
      'password' => Hash::make('73143722'),
      'username' => '73143722',
      'remember_token' => '73143722'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 249,
      'name' => 'Espiritu Elvis',
      'persona_id' => 248,
      'email' => 'eespiritu@unasam.edu.pe',
      'password' => Hash::make('32661682'),
      'username' => '32661682',
      'remember_token' => '32661682'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 250,
      'name' => 'Villanueva Ricardo',
      'persona_id' => 249,
      'email' => 'rvillanuevar@unasam.edu.pe',
      'password' => Hash::make('31670461'),
      'username' => '31670461',
      'remember_token' => '31670461'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 251,
      'name' => 'Serna Arnulfo',
      'persona_id' => 250,
      'email' => 'asernar@unasam.edu.pe',
      'password' => Hash::make('31612011'),
      'username' => '31612011',
      'remember_token' => '31612011'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 252,
      'name' => 'Flores Judith',
      'persona_id' => 251,
      'email' => 'jfloresa@unasam.edu.pe',
      'password' => Hash::make('40034758'),
      'username' => '40034758',
      'remember_token' => '40034758'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 253,
      'name' => 'Gamarra Patricia',
      'persona_id' => 252,
      'email' => 'pgamarrat@unasam.edu.pe',
      'password' => Hash::make('40252305'),
      'username' => '40252305',
      'remember_token' => '40252305'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 254,
      'name' => 'Depaz Kiko',
      'persona_id' => 253,
      'email' => 'kdepazc@unasam.edu.pe',
      'password' => Hash::make('31663735'),
      'username' => '31663735',
      'remember_token' => '31663735'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 255,
      'name' => 'Davila Cesar',
      'persona_id' => 254,
      'email' => 'cdavilap@unasam.edu.pe',
      'password' => Hash::make('31631504'),
      'username' => '31631504',
      'remember_token' => '31631504'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 256,
      'name' => 'Rodriguez Yony',
      'persona_id' => 255,
      'email' => 'yrodriguezm@unasam.edu.pe',
      'password' => Hash::make('44720968'),
      'username' => '44720968',
      'remember_token' => '44720968'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 257,
      'name' => 'Medina Katy',
      'persona_id' => 256,
      'email' => 'kmedinam@unasam.edu.pe',
      'password' => Hash::make('44752984'),
      'username' => '44752984',
      'remember_token' => '44752984'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 258,
      'name' => 'Dominguez Antonio',
      'persona_id' => 257,
      'email' => 'adominguezf@unasam.edu.pe',
      'password' => Hash::make('31637904'),
      'username' => '31637904',
      'remember_token' => '31637904'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 259,
      'name' => 'Villarreal Juan',
      'persona_id' => 258,
      'email' => 'jvillarreals@unasam.edu.pe',
      'password' => Hash::make('32653972'),
      'username' => '32653972',
      'remember_token' => '32653972'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 260,
      'name' => 'Castillejo Ricardo',
      'persona_id' => 259,
      'email' => 'rcastillejom@unasam.edu.pe',
      'password' => Hash::make('31660457'),
      'username' => '31660457',
      'remember_token' => '31660457'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 261,
      'name' => 'Torres Luis',
      'persona_id' => 260,
      'email' => 'ltorresy@unasam.edu.pe',
      'password' => Hash::make('08085204'),
      'username' => '08085204',
      'remember_token' => '08085204'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 262,
      'name' => 'Ramos Flavio',
      'persona_id' => 261,
      'email' => 'framosa@unasam.edu.pe',
      'password' => Hash::make('31678801'),
      'username' => '31678801',
      'remember_token' => '31678801'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 263,
      'name' => 'Ruiz Arnaldo',
      'persona_id' => 262,
      'email' => 'aruic@unasam.edu.pe',
      'password' => Hash::make('31672592'),
      'username' => '31672592',
      'remember_token' => '31672592'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 264,
      'name' => 'Isidro Jacinto',
      'persona_id' => 263,
      'email' => 'jisidrog@unasam.edu.pe',
      'password' => Hash::make('31672151'),
      'username' => '31672151',
      'remember_token' => '31672151'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 265,
      'name' => 'Perez Julian',
      'persona_id' => 264,
      'email' => 'jperezf@unasam.edu.pe',
      'password' => Hash::make('10117064'),
      'username' => '10117064',
      'remember_token' => '10117064'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 266,
      'name' => 'Rashta Manuel',
      'persona_id' => 265,
      'email' => 'mrashtal@unasam.edu.pe',
      'password' => Hash::make('31605733'),
      'username' => '31605733',
      'remember_token' => '31605733'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 267,
      'name' => 'Bojorquez Gustavo',
      'persona_id' => 266,
      'email' => 'gbojorquezh@unasam.edu.pe',
      'password' => Hash::make('32645242'),
      'username' => '32645242',
      'remember_token' => '32645242'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 268,
      'name' => 'Romero Walter',
      'persona_id' => 267,
      'email' => 'wromerov@unasam.edu.pe',
      'password' => Hash::make('32040772'),
      'username' => '32040772',
      'remember_token' => '32040772'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 269,
      'name' => 'Quiñones Juan',
      'persona_id' => 268,
      'email' => 'jquinonesp@unasam.edu.pe',
      'password' => Hash::make('32642091'),
      'username' => '32642091',
      'remember_token' => '32642091'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 270,
      'name' => 'Sotelo Javier',
      'persona_id' => 269,
      'email' => 'jsotelom@unasam.edu.pe',
      'password' => Hash::make('31601882'),
      'username' => '31601882',
      'remember_token' => '31601882'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 271,
      'name' => 'Tarazona Aldo',
      'persona_id' => 270,
      'email' => 'atarazonam@unasam.edu.pe',
      'password' => Hash::make('31605756'),
      'username' => '31605756',
      'remember_token' => '31605756'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 272,
      'name' => 'Poterico Julio',
      'persona_id' => 271,
      'email' => 'juliopoterico@unasam.edu.pe',
      'password' => Hash::make('31674354'),
      'username' => '31674354',
      'remember_token' => '31674354'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 273,
      'name' => 'Vizcarra Jesus',
      'persona_id' => 272,
      'email' => 'jvizcarraa@unasam.edu.pe',
      'password' => Hash::make('31603054'),
      'username' => '31603054',
      'remember_token' => '31603054'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 274,
      'name' => 'Tejada Miguel',
      'persona_id' => 273,
      'email' => 'mtejadaz@unasam.edu.pe',
      'password' => Hash::make('07208374'),
      'username' => '07208374',
      'remember_token' => '07208374'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 275,
      'name' => 'Vasquez Victor',
      'persona_id' => 274,
      'email' => 'vvasquezn@unasam.edu.pe',
      'password' => Hash::make('16568826'),
      'username' => '16568826',
      'remember_token' => '16568826'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 276,
      'name' => 'Barreto John',
      'persona_id' => 275,
      'email' => 'jbarretop@unasam.edu.pe',
      'password' => Hash::make('31628965'),
      'username' => '31628965',
      'remember_token' => '31628965'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 277,
      'name' => 'Ramirez Raul',
      'persona_id' => 276,
      'email' => '',
      'password' => Hash::make('31654231'),
      'username' => '31654231',
      'remember_token' => '31654231'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 278,
      'name' => 'De La Cruz Gustavo',
      'persona_id' => 277,
      'email' => 'gdelacruzd@unasam.edu.pe',
      'password' => Hash::make('31677309'),
      'username' => '31677309',
      'remember_token' => '31677309'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 279,
      'name' => 'Rosas Hanna',
      'persona_id' => 278,
      'email' => 'hrosasb@unasam.edu.pe',
      'password' => Hash::make('46413585'),
      'username' => '46413585',
      'remember_token' => '46413585'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 280,
      'name' => 'Mendoza Anibal',
      'persona_id' => 279,
      'email' => '',
      'password' => Hash::make('41163464'),
      'username' => '41163464',
      'remember_token' => '41163464'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 281,
      'name' => 'Loli Richard',
      'persona_id' => 280,
      'email' => 'rlolig@unasam.edu.pe',
      'password' => Hash::make('47208128'),
      'username' => '47208128',
      'remember_token' => '47208128'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 282,
      'name' => 'Dolores Dante',
      'persona_id' => 281,
      'email' => 'ddoloresa@unasam.edu.pe',
      'password' => Hash::make('31656954'),
      'username' => '31656954',
      'remember_token' => '31656954'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 283,
      'name' => 'Panana Elizabeth',
      'persona_id' => 282,
      'email' => 'epananah@unasam.edu.pe',
      'password' => Hash::make('07439492'),
      'username' => '07439492',
      'remember_token' => '07439492'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 284,
      'name' => 'Reyes Reynaldo',
      'persona_id' => 283,
      'email' => 'rreyesr@unasam.edu.pe',
      'password' => Hash::make('31658163'),
      'username' => '31658163',
      'remember_token' => '31658163'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 285,
      'name' => 'Giron Carolina',
      'persona_id' => 284,
      'email' => 'cgironm@unasam.edu.pe',
      'password' => Hash::make('45832225'),
      'username' => '45832225',
      'remember_token' => '45832225'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 286,
      'name' => 'Aranda Ruben',
      'persona_id' => 285,
      'email' => 'darandal@unasam.edu.pe',
      'password' => Hash::make('45589645'),
      'username' => '45589645',
      'remember_token' => '45589645'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 287,
      'name' => 'Terry Luis',
      'persona_id' => 286,
      'email' => 'lterryv@unasam.edu.pe',
      'password' => Hash::make('31649695'),
      'username' => '31649695',
      'remember_token' => '31649695'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 288,
      'name' => 'Olaza Carlos',
      'persona_id' => 287,
      'email' => 'colazah@unasam.edu.pe',
      'password' => Hash::make('31633291'),
      'username' => '31633291',
      'remember_token' => '31633291'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 289,
      'name' => 'Depaz Richard',
      'persona_id' => 288,
      'email' => 'rdepazb@unasam.edu.pe',
      'password' => Hash::make('31671951'),
      'username' => '31671951',
      'remember_token' => '31671951'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 290,
      'name' => 'De La Cruz Cinthia',
      'persona_id' => 289,
      'email' => 'cdelacruzp@unasam.edu.pe',
      'password' => Hash::make('47143389'),
      'username' => '47143389',
      'remember_token' => '47143389'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 291,
      'name' => 'Leon Carolina',
      'persona_id' => 290,
      'email' => 'cleono@unasam.edu.pe',
      'password' => Hash::make('71592601'),
      'username' => '71592601',
      'remember_token' => '71592601'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 292,
      'name' => 'Montoro Danilo',
      'persona_id' => 291,
      'email' => 'dmontorov@unasam.edu.pe',
      'password' => Hash::make('31671051'),
      'username' => '31671051',
      'remember_token' => '31671051'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 293,
      'name' => 'Solorzano Christian',
      'persona_id' => 292,
      'email' => 'csolorzanom@unasam.edu.pe',
      'password' => Hash::make('72323093'),
      'username' => '72323093',
      'remember_token' => '72323093'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 294,
      'name' => 'Depaz Fernando',
      'persona_id' => 293,
      'email' => 'fdepazh@unasam.edu.pe',
      'password' => Hash::make('45996001'),
      'username' => '45996001',
      'remember_token' => '45996001'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 295,
      'name' => 'Maza David',
      'persona_id' => 294,
      'email' => 'dmazar@unasam.edu.pe',
      'password' => Hash::make('31658177'),
      'username' => '31658177',
      'remember_token' => '31658177'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 296,
      'name' => 'Del Castillo Beatriz',
      'persona_id' => 295,
      'email' => '',
      'password' => Hash::make('70809553'),
      'username' => '70809553',
      'remember_token' => '70809553'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 297,
      'name' => 'Poma Carla',
      'persona_id' => 296,
      'email' => 'cpomag@unasam.edu.pe',
      'password' => Hash::make('41342758'),
      'username' => '41342758',
      'remember_token' => '41342758'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 298,
      'name' => 'Ita Luis',
      'persona_id' => 297,
      'email' => 'litar@unasam.edu.pe',
      'password' => Hash::make('31617642'),
      'username' => '31617642',
      'remember_token' => '31617642'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 299,
      'name' => 'Samane Estela',
      'persona_id' => 298,
      'email' => ' esamamez@unasam.edu.pe',
      'password' => Hash::make('42159232'),
      'username' => '42159232',
      'remember_token' => '42159232'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 300,
      'name' => 'Maguiña Walther',
      'persona_id' => 299,
      'email' => 'wmaguinas@unasam.edu.pe',
      'password' => Hash::make('31605837'),
      'username' => '31605837',
      'remember_token' => '31605837'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 301,
      'name' => 'Cuentas Maria',
      'persona_id' => 300,
      'email' => '',
      'password' => Hash::make('72522979'),
      'username' => '72522979',
      'remember_token' => '72522979'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 302,
      'name' => 'Rosales Calancio',
      'persona_id' => 301,
      'email' => 'crosaless@unasam.edu.pe',
      'password' => Hash::make('31666463'),
      'username' => '31666463',
      'remember_token' => '31666463'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 303,
      'name' => 'Coral Luis',
      'persona_id' => 302,
      'email' => 'lcoralj@unasam.edu.pe',
      'password' => Hash::make('31618255'),
      'username' => '31618255',
      'remember_token' => '31618255'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 304,
      'name' => 'Mejia Elencio',
      'persona_id' => 303,
      'email' => 'emejiao@unasam.edu.pe',
      'password' => Hash::make('17935160'),
      'username' => '17935160',
      'remember_token' => '17935160'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 305,
      'name' => 'Vega Mateo',
      'persona_id' => 304,
      'email' => '',
      'password' => Hash::make('31680024'),
      'username' => '31680024',
      'remember_token' => '31680024'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 306,
      'name' => 'Urtecho Ramon',
      'persona_id' => 305,
      'email' => 'rurtechoc@unasam.edu.pe',
      'password' => Hash::make('07416950'),
      'username' => '07416950',
      'remember_token' => '07416950'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 307,
      'name' => 'Zamora Leydy',
      'persona_id' => 306,
      'email' => 'lzamorat@unasam.edu.pe',
      'password' => Hash::make('44755316'),
      'username' => '44755316',
      'remember_token' => '44755316'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 308,
      'name' => 'Alva Oscar',
      'persona_id' => 307,
      'email' => 'oalvav@unasam.edu.pe',
      'password' => Hash::make('31633343'),
      'username' => '31633343',
      'remember_token' => '31633343'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 309,
      'name' => 'Nuñez Raul',
      'persona_id' => 308,
      'email' => 'rnunezv@unasam.edu.pe',
      'password' => Hash::make('06407853'),
      'username' => '06407853',
      'remember_token' => '06407853'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 310,
      'name' => 'Tamara Joaquin',
      'persona_id' => 309,
      'email' => 'jtamarar@unasam.edu.pe',
      'password' => Hash::make('31615059'),
      'username' => '31615059',
      'remember_token' => '31615059'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 311,
      'name' => 'Adams Victor',
      'persona_id' => 310,
      'email' => '',
      'password' => Hash::make('06776691'),
      'username' => '06776691',
      'remember_token' => '06776691'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 312,
      'name' => 'Salinas Felismero',
      'persona_id' => 311,
      'email' => 'fsalinasf@unasam.edu.pe',
      'password' => Hash::make('31632120'),
      'username' => '31632120',
      'remember_token' => '31632120'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 313,
      'name' => 'Minaya David',
      'persona_id' => 312,
      'email' => 'dminayah@unasam.edu.pe',
      'password' => Hash::make('42722601'),
      'username' => '42722601',
      'remember_token' => '42722601'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 314,
      'name' => 'Blas Jaime',
      'persona_id' => 313,
      'email' => '',
      'password' => Hash::make('80121835'),
      'username' => '80121835',
      'remember_token' => '80121835'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 315,
      'name' => 'Gomez Allende',
      'persona_id' => 314,
      'email' => 'agomezr@unasam.edu.pe',
      'password' => Hash::make('41621293'),
      'username' => '41621293',
      'remember_token' => '41621293'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 316,
      'name' => 'Huaney Jesus',
      'persona_id' => 315,
      'email' => 'jhuaneyc@unasam.edu.pe',
      'password' => Hash::make('44010778'),
      'username' => '44010778',
      'remember_token' => '44010778'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 317,
      'name' => 'Castillo Katya',
      'persona_id' => 316,
      'email' => 'kcastillot@unasam.edu.pe',
      'password' => Hash::make('73888207'),
      'username' => '73888207',
      'remember_token' => '73888207'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 318,
      'name' => 'Arteaga Renato',
      'persona_id' => 317,
      'email' => '',
      'password' => Hash::make('42654869'),
      'username' => '42654869',
      'remember_token' => '42654869'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 319,
      'name' => 'Javier Luis',
      'persona_id' => 318,
      'email' => 'ljavierc@unasam.edu.pe',
      'password' => Hash::make('31635025'),
      'username' => '31635025',
      'remember_token' => '31635025'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 320,
      'name' => 'Coral Julio',
      'persona_id' => 319,
      'email' => 'jcoralj@unasam.edu.pe',
      'password' => Hash::make('31650233'),
      'username' => '31650233',
      'remember_token' => '31650233'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 321,
      'name' => 'Castillejo Raul',
      'persona_id' => 320,
      'email' => 'rcastilllejom@unasam.edu.pe',
      'password' => Hash::make('31613150'),
      'username' => '31613150',
      'remember_token' => '31613150'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 322,
      'name' => 'Corrales Miguel',
      'persona_id' => 321,
      'email' => 'mcorralesp@unasam.edu.pe',
      'password' => Hash::make('31666048'),
      'username' => '31666048',
      'remember_token' => '31666048'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 323,
      'name' => 'Montañez Alvaro',
      'persona_id' => 322,
      'email' => '',
      'password' => Hash::make('74124170'),
      'username' => '74124170',
      'remember_token' => '74124170'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 324,
      'name' => 'Milla Elio',
      'persona_id' => 323,
      'email' => 'emillav@unasam.edu.pe',
      'password' => Hash::make('31666219'),
      'username' => '31666219',
      'remember_token' => '31666219'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 325,
      'name' => 'Duarte Marilia',
      'persona_id' => 324,
      'email' => 'mduarteg@unasam.edu.pe',
      'password' => Hash::make('72020228'),
      'username' => '72020228',
      'remember_token' => '72020228'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 326,
      'name' => 'Mora Luis',
      'persona_id' => 325,
      'email' => '',
      'password' => Hash::make('31852654'),
      'username' => '31852654',
      'remember_token' => '31852654'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 327,
      'name' => 'Loli Marco',
      'persona_id' => 326,
      'email' => 'mlolis@unasam.edu.pe',
      'password' => Hash::make('31626594'),
      'username' => '31626594',
      'remember_token' => '31626594'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 328,
      'name' => 'Pazos Kelly',
      'persona_id' => 327,
      'email' => 'kpazoss@unasam.edu.pe',
      'password' => Hash::make('45768987'),
      'username' => '45768987',
      'remember_token' => '45768987'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 329,
      'name' => 'Torres Cinthia',
      'persona_id' => 328,
      'email' => '',
      'password' => Hash::make('44088274'),
      'username' => '44088274',
      'remember_token' => '44088274'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 330,
      'name' => 'Vidal Gissela',
      'persona_id' => 329,
      'email' => 'gvidalca@unasam.edu.pe',
      'password' => Hash::make('46284218'),
      'username' => '46284218',
      'remember_token' => '46284218'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 331,
      'name' => 'Peche Gonzalo',
      'persona_id' => 330,
      'email' => 'gpechev@unasam.edu.pe',
      'password' => Hash::make('31674261'),
      'username' => '31674261',
      'remember_token' => '31674261'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 332,
      'name' => 'Vargas Jorge',
      'persona_id' => 331,
      'email' => 'jvargasga@unasam.edu.pe',
      'password' => Hash::make('31680387'),
      'username' => '31680387',
      'remember_token' => '31680387'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 333,
      'name' => 'Cantu Victor',
      'persona_id' => 332,
      'email' => 'vcantup@unasam.edu.pe',
      'password' => Hash::make('31669858'),
      'username' => '31669858',
      'remember_token' => '31669858'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 334,
      'name' => 'Salas Julio',
      'persona_id' => 333,
      'email' => 'jsalasc@unasam.edu.pe',
      'password' => Hash::make('31676521'),
      'username' => '31676521',
      'remember_token' => '31676521'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 335,
      'name' => 'Olaza Augusto',
      'persona_id' => 334,
      'email' => 'aolazam@unasam.edu.pe',
      'password' => Hash::make('31674147'),
      'username' => '31674147',
      'remember_token' => '31674147'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 336,
      'name' => 'Quispe Maximiliana',
      'persona_id' => 335,
      'email' => 'mquispeg@unasam.edu.pe',
      'password' => Hash::make('31673977'),
      'username' => '31673977',
      'remember_token' => '31673977'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 337,
      'name' => 'De La Cruz Liliana',
      'persona_id' => 336,
      'email' => 'ldelacruzd@unasam.edu.pe',
      'password' => Hash::make('31661950'),
      'username' => '31661950',
      'remember_token' => '31661950'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 338,
      'name' => 'Olivares Jovanna',
      'persona_id' => 337,
      'email' => 'jolivaresc@unasam.edu.pe',
      'password' => Hash::make('41618489'),
      'username' => '41618489',
      'remember_token' => '41618489'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 339,
      'name' => 'Julca Martina',
      'persona_id' => 338,
      'email' => 'mjulcal@unasam.edu.pe',
      'password' => Hash::make('15676817'),
      'username' => '15676817',
      'remember_token' => '15676817'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 340,
      'name' => 'Nuñez Llerme',
      'persona_id' => 339,
      'email' => 'llnunezz@unasam.edu.pe',
      'password' => Hash::make('08675980'),
      'username' => '08675980',
      'remember_token' => '08675980'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 341,
      'name' => 'Menacho Ruth',
      'persona_id' => 340,
      'email' => 'rmenachoz@unasam.edu.pe',
      'password' => Hash::make('43536106'),
      'username' => '43536106',
      'remember_token' => '43536106'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 342,
      'name' => 'Rojas Gilma',
      'persona_id' => 341,
      'email' => 'grojast@unasam.edu.pe',
      'password' => Hash::make('31672767'),
      'username' => '31672767',
      'remember_token' => '31672767'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 343,
      'name' => 'Zambrano Julia',
      'persona_id' => 342,
      'email' => 'jzambranog@unasam.edu.pe',
      'password' => Hash::make('31620546'),
      'username' => '31620546',
      'remember_token' => '31620546'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 344,
      'name' => 'Arotoma Marcelo',
      'persona_id' => 343,
      'email' => 'marotomao@unasam.edu.pe',
      'password' => Hash::make('07285410'),
      'username' => '07285410',
      'remember_token' => '07285410'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 345,
      'name' => 'Valentin Herlinda',
      'persona_id' => 344,
      'email' => '',
      'password' => Hash::make('40365123'),
      'username' => '40365123',
      'remember_token' => '40365123'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 346,
      'name' => 'Lezameta Ursula',
      'persona_id' => 345,
      'email' => 'ulezametab@unasam.edu.pe',
      'password' => Hash::make('15643170'),
      'username' => '15643170',
      'remember_token' => '15643170'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 347,
      'name' => 'Yslado Rosario',
      'persona_id' => 346,
      'email' => 'rysladom@unasam.edu.pe',
      'password' => Hash::make('07926508'),
      'username' => '07926508',
      'remember_token' => '07926508'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 348,
      'name' => 'Cruz Sandra',
      'persona_id' => 347,
      'email' => '',
      'password' => Hash::make('42410733'),
      'username' => '42410733',
      'remember_token' => '42410733'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 349,
      'name' => 'Reyes Silvia',
      'persona_id' => 348,
      'email' => 'sreyesn@unasam.edu.pe',
      'password' => Hash::make('17917008'),
      'username' => '17917008',
      'remember_token' => '17917008'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 350,
      'name' => 'Diaz Leydi',
      'persona_id' => 349,
      'email' => '',
      'password' => Hash::make('45615587'),
      'username' => '45615587',
      'remember_token' => '45615587'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 351,
      'name' => 'Alberto Veronica',
      'persona_id' => 350,
      'email' => 'valbertov@unasam.edu.pe',
      'password' => Hash::make('31678229'),
      'username' => '31678229',
      'remember_token' => '31678229'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 352,
      'name' => 'Menacho Julio',
      'persona_id' => 351,
      'email' => 'jmenachol@unasam.edu.pe',
      'password' => Hash::make('08607324'),
      'username' => '08607324',
      'remember_token' => '08607324'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 353,
      'name' => 'De La Cruz Yuliana',
      'persona_id' => 352,
      'email' => 'ydelacruzr@unasam.edu.pe',
      'password' => Hash::make('40731520'),
      'username' => '40731520',
      'remember_token' => '40731520'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 354,
      'name' => 'Quillatupa Rosa',
      'persona_id' => 353,
      'email' => '',
      'password' => Hash::make('44489209'),
      'username' => '44489209',
      'remember_token' => '44489209'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 355,
      'name' => 'Alvarado Ruth',
      'persona_id' => 354,
      'email' => '',
      'password' => Hash::make('41291861'),
      'username' => '41291861',
      'remember_token' => '41291861'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 356,
      'name' => 'Gallardo Virginia',
      'persona_id' => 355,
      'email' => 'vgallardog@unasam.edu.pe',
      'password' => Hash::make('26690330'),
      'username' => '26690330',
      'remember_token' => '26690330'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 357,
      'name' => 'Tuya Arturo',
      'persona_id' => 356,
      'email' => 'atuyao@unasam.edu.pe',
      'password' => Hash::make('31678998'),
      'username' => '31678998',
      'remember_token' => '31678998'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 358,
      'name' => 'Regalado Neli',
      'persona_id' => 357,
      'email' => 'nregaladoo@unasam.edu.pe',
      'password' => Hash::make('09902720'),
      'username' => '09902720',
      'remember_token' => '09902720'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 359,
      'name' => 'Palma Vanessa',
      'persona_id' => 358,
      'email' => '',
      'password' => Hash::make('44911841'),
      'username' => '44911841',
      'remember_token' => '44911841'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 360,
      'name' => 'Guillermo Emilio',
      'persona_id' => 359,
      'email' => 'eguillermof@unasam.edu.pe',
      'password' => Hash::make('26678730'),
      'username' => '26678730',
      'remember_token' => '26678730'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 361,
      'name' => 'Diaz Celedonia',
      'persona_id' => 360,
      'email' => 'cdiazr@unasam.edu.pe',
      'password' => Hash::make('28223999'),
      'username' => '28223999',
      'remember_token' => '28223999'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 362,
      'name' => 'Huallpa Dina',
      'persona_id' => 361,
      'email' => '',
      'password' => Hash::make('70439752'),
      'username' => '70439752',
      'remember_token' => '70439752'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 363,
      'name' => 'Flores Flora',
      'persona_id' => 362,
      'email' => 'ffloresd@unasam.edu.pe',
      'password' => Hash::make('32043531'),
      'username' => '32043531',
      'remember_token' => '32043531'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 364,
      'name' => 'Lugo Ruth',
      'persona_id' => 363,
      'email' => '',
      'password' => Hash::make('31655871'),
      'username' => '31655871',
      'remember_token' => '31655871'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 365,
      'name' => 'Cano Alejandro',
      'persona_id' => 364,
      'email' => '',
      'password' => Hash::make('32903585'),
      'username' => '32903585',
      'remember_token' => '32903585'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 366,
      'name' => 'Guzman Magna',
      'persona_id' => 365,
      'email' => 'mguzmana@unasam.edu.pe',
      'password' => Hash::make('32855895'),
      'username' => '32855895',
      'remember_token' => '32855895'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 367,
      'name' => 'Rosas Nelly',
      'persona_id' => 366,
      'email' => '',
      'password' => Hash::make('31678589'),
      'username' => '31678589',
      'remember_token' => '31678589'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 368,
      'name' => 'Gomez Josianne',
      'persona_id' => 367,
      'email' => '',
      'password' => Hash::make('32983947'),
      'username' => '32983947',
      'remember_token' => '32983947'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 369,
      'name' => 'Mendoza Marilyn',
      'persona_id' => 368,
      'email' => '',
      'password' => Hash::make('43416157'),
      'username' => '43416157',
      'remember_token' => '43416157'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 370,
      'name' => 'Velasquez Maria',
      'persona_id' => 369,
      'email' => 'mvelasquezo@unasam.edu.pe',
      'password' => Hash::make('31619295'),
      'username' => '31619295',
      'remember_token' => '31619295'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 371,
      'name' => 'Sanchez Luis',
      'persona_id' => 370,
      'email' => '',
      'password' => Hash::make('32981915'),
      'username' => '32981915',
      'remember_token' => '32981915'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 372,
      'name' => 'Velez Elizabeth',
      'persona_id' => 371,
      'email' => 'evelezs@unasam.edu.pe',
      'password' => Hash::make('33243411'),
      'username' => '33243411',
      'remember_token' => '33243411'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 373,
      'name' => 'Mendoza Irma',
      'persona_id' => 372,
      'email' => 'imendozaa@unasam.edu.pe',
      'password' => Hash::make('42296587'),
      'username' => '42296587',
      'remember_token' => '42296587'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 374,
      'name' => 'Oblitas Silvia',
      'persona_id' => 373,
      'email' => '',
      'password' => Hash::make('40076735'),
      'username' => '40076735',
      'remember_token' => '40076735'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 375,
      'name' => 'Montane Leila',
      'persona_id' => 374,
      'email' => 'lmontanel@unasam.edu.pe',
      'password' => Hash::make('15956778'),
      'username' => '15956778',
      'remember_token' => '15956778'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 376,
      'name' => 'Rupay Olga',
      'persona_id' => 375,
      'email' => 'orupayn@unasam.edu.pe',
      'password' => Hash::make('43725102'),
      'username' => '43725102',
      'remember_token' => '43725102'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 377,
      'name' => 'Ramos Soledad',
      'persona_id' => 376,
      'email' => 'sramoss@unasam.edu.pe',
      'password' => Hash::make('31629117'),
      'username' => '31629117',
      'remember_token' => '31629117'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 378,
      'name' => 'Norabuena Rafael',
      'persona_id' => 377,
      'email' => 'rnorabuenap@unasam.edu.pe',
      'password' => Hash::make('31650309'),
      'username' => '31650309',
      'remember_token' => '31650309'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 379,
      'name' => 'Quito Elizabeth',
      'persona_id' => 378,
      'email' => 'equitol@unasam.edu.pe',
      'password' => Hash::make('44770722'),
      'username' => '44770722',
      'remember_token' => '44770722'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 380,
      'name' => 'Hinostroza Erick',
      'persona_id' => 379,
      'email' => '',
      'password' => Hash::make('45995149'),
      'username' => '45995149',
      'remember_token' => '45995149'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 381,
      'name' => 'Minaya Anibal',
      'persona_id' => 380,
      'email' => 'aminayas@unasam.edu.pe',
      'password' => Hash::make('31682699'),
      'username' => '31682699',
      'remember_token' => '31682699'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 382,
      'name' => 'Oriundo Eufrasia',
      'persona_id' => 381,
      'email' => 'eoriundor@unasam.edu.pe',
      'password' => Hash::make('08498044'),
      'username' => '08498044',
      'remember_token' => '08498044'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 383,
      'name' => 'Gonzales Elsa',
      'persona_id' => 382,
      'email' => 'egonzalest@unasam.edu.pe',
      'password' => Hash::make('22243915'),
      'username' => '22243915',
      'remember_token' => '22243915'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 384,
      'name' => 'Mendoza Gina',
      'persona_id' => 383,
      'email' => 'gmendozar@unasam.edu.pe',
      'password' => Hash::make('40033774'),
      'username' => '40033774',
      'remember_token' => '40033774'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 385,
      'name' => 'Pajuelo Rocio',
      'persona_id' => 384,
      'email' => 'rpajuelov@unasam.edu.pe',
      'password' => Hash::make('40206523'),
      'username' => '40206523',
      'remember_token' => '40206523'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 386,
      'name' => 'Nuñez Laura',
      'persona_id' => 385,
      'email' => '',
      'password' => Hash::make('31672208'),
      'username' => '31672208',
      'remember_token' => '31672208'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 387,
      'name' => 'Rodriguez Ada',
      'persona_id' => 386,
      'email' => 'arodriguezf@unasam.edu.pe',
      'password' => Hash::make('06905249'),
      'username' => '06905249',
      'remember_token' => '06905249'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 388,
      'name' => 'Zuñiga Jesus',
      'persona_id' => 387,
      'email' => 'jzunigah@unasam.edu.pe',
      'password' => Hash::make('32404125'),
      'username' => '32404125',
      'remember_token' => '32404125'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 389,
      'name' => 'Bobadilla Richard',
      'persona_id' => 388,
      'email' => 'rbobadillac@unasam.edu.pe',
      'password' => Hash::make('18828272'),
      'username' => '18828272',
      'remember_token' => '18828272'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 390,
      'name' => 'Leon Bibiana',
      'persona_id' => 389,
      'email' => 'bleonh@unasam.edu.pe',
      'password' => Hash::make('31674771'),
      'username' => '31674771',
      'remember_token' => '31674771'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 391,
      'name' => 'Camones Mary',
      'persona_id' => 390,
      'email' => '',
      'password' => Hash::make('00000000'),
      'username' => '00000000',
      'remember_token' => '00000000'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 392,
      'name' => 'Castillo Cesibel',
      'persona_id' => 391,
      'email' => '',
      'password' => Hash::make('40656466'),
      'username' => '40656466',
      'remember_token' => '40656466'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 393,
      'name' => 'Cordova Willy',
      'persona_id' => 392,
      'email' => 'wcordovac@unasam.edu.pe',
      'password' => Hash::make('19912041'),
      'username' => '19912041',
      'remember_token' => '19912041'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 394,
      'name' => 'Patricio Soledad',
      'persona_id' => 393,
      'email' => 'spatricioa@unasam.edu.pe',
      'password' => Hash::make('42796261'),
      'username' => '42796261',
      'remember_token' => '42796261'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 395,
      'name' => 'Atoche Rosa',
      'persona_id' => 394,
      'email' => 'ratocheb@unasam.edu.pe',
      'password' => Hash::make('31673035'),
      'username' => '31673035',
      'remember_token' => '31673035'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 396,
      'name' => 'Jaimes Karinn',
      'persona_id' => 395,
      'email' => 'kjaimesn@unasam.edu.pe',
      'password' => Hash::make('40471447'),
      'username' => '40471447',
      'remember_token' => '40471447'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 397,
      'name' => 'Salazar Mercedes',
      'persona_id' => 396,
      'email' => '',
      'password' => Hash::make('00000000'),
      'username' => '00000000',
      'remember_token' => '00000000'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 398,
      'name' => 'Huaman Carmen',
      'persona_id' => 397,
      'email' => ' chuamano@unasam.edu.pe',
      'password' => Hash::make('40497876'),
      'username' => '40497876',
      'remember_token' => '40497876'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 399,
      'name' => 'Rios Rosa',
      'persona_id' => 398,
      'email' => 'rrioss@unasam.edu.pe',
      'password' => Hash::make('40324426'),
      'username' => '40324426',
      'remember_token' => '40324426'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 400,
      'name' => 'Sanchez Junior',
      'persona_id' => 399,
      'email' => 'jsanchezb@unasam.edu.pe',
      'password' => Hash::make('45816858'),
      'username' => '45816858',
      'remember_token' => '45816858'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 401,
      'name' => 'Pajuelo Margarita',
      'persona_id' => 400,
      'email' => 'mpajuelov@unasam.edu.pe',
      'password' => Hash::make('31673337'),
      'username' => '31673337',
      'remember_token' => '31673337'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 402,
      'name' => 'Aniceto Ursula',
      'persona_id' => 401,
      'email' => 'uaniceton@unasam.edu.pe',
      'password' => Hash::make('40055999'),
      'username' => '40055999',
      'remember_token' => '40055999'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 403,
      'name' => 'Rosales Serapio',
      'persona_id' => 402,
      'email' => 'srosalesl@unasam.edu.pe',
      'password' => Hash::make('31657673'),
      'username' => '31657673',
      'remember_token' => '31657673'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 404,
      'name' => 'Cristobal Tamara Claudio',
      'persona_id' => 403,
      'email' => '',
      'password' => Hash::make('47329135'),
      'username' => '47329135',
      'remember_token' => '47329135'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 405,
      'name' => 'Robles Luis',
      'persona_id' => 404,
      'email' => 'lrobles@unasam.edu.pe',
      'password' => Hash::make('31658643'),
      'username' => '31658643',
      'remember_token' => '31658643'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 406,
      'name' => 'Coral Armando',
      'persona_id' => 405,
      'email' => 'acoralr@unasam.edu.pe',
      'password' => Hash::make('42724409'),
      'username' => '42724409',
      'remember_token' => '42724409'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 407,
      'name' => 'Gonzales Mariela',
      'persona_id' => 406,
      'email' => '',
      'password' => Hash::make('43153909'),
      'username' => '43153909',
      'remember_token' => '43153909'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 408,
      'name' => 'Neire Yul',
      'persona_id' => 407,
      'email' => 'yneirer@unasam.edu.pe',
      'password' => Hash::make('41127687'),
      'username' => '41127687',
      'remember_token' => '41127687'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 409,
      'name' => 'Otarola Fredy',
      'persona_id' => 408,
      'email' => 'fotarolap@unasam.edu.pe',
      'password' => Hash::make('31604376'),
      'username' => '31604376',
      'remember_token' => '31604376'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 410,
      'name' => 'Rimac Pedro',
      'persona_id' => 409,
      'email' => 'primacm@unasam.edu.pe',
      'password' => Hash::make('42946564'),
      'username' => '42946564',
      'remember_token' => '42946564'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 411,
      'name' => 'Gonzales Gina',
      'persona_id' => 410,
      'email' => 'ggonzalesl@unasam.edu.pe',
      'password' => Hash::make('31664942'),
      'username' => '31664942',
      'remember_token' => '31664942'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 412,
      'name' => 'Ordeano Demetrio',
      'persona_id' => 411,
      'email' => 'dordeanov@unasam.edu.pe',
      'password' => Hash::make('31667497'),
      'username' => '31667497',
      'remember_token' => '31667497'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 413,
      'name' => 'Espinoza Urpy',
      'persona_id' => 412,
      'email' => '',
      'password' => Hash::make('40693219'),
      'username' => '40693219',
      'remember_token' => '40693219'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 414,
      'name' => 'Buleje Lucia',
      'persona_id' => 413,
      'email' => 'lbulejea@unasam.edu.pe',
      'password' => Hash::make('31612177'),
      'username' => '31612177',
      'remember_token' => '31612177'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 415,
      'name' => 'Henostroza Jesus',
      'persona_id' => 414,
      'email' => 'rrosarior@unasam.edu.pe',
      'password' => Hash::make('31649098'),
      'username' => '31649098',
      'remember_token' => '31649098'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 416,
      'name' => 'Henostroza Jesus',
      'persona_id' => 415,
      'email' => 'jhenostrozas@unasam.edu.pe',
      'password' => Hash::make('31608353'),
      'username' => '31608353',
      'remember_token' => '31608353'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 417,
      'name' => 'Sanchez Ricardo',
      'persona_id' => 416,
      'email' => 'rsanchezesp@unasam.edu.pe',
      'password' => Hash::make('31653214'),
      'username' => '31653214',
      'remember_token' => '31653214'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 418,
      'name' => 'Castro Katherine',
      'persona_id' => 417,
      'email' => 'kcastrom@unasam.edu.pe',
      'password' => Hash::make('43525613'),
      'username' => '43525613',
      'remember_token' => '43525613'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 419,
      'name' => 'Coral Armando',
      'persona_id' => 418,
      'email' => 'acorala@unasam.edu.pe',
      'password' => Hash::make('31624792'),
      'username' => '31624792',
      'remember_token' => '31624792'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 420,
      'name' => 'Segura Maria',
      'persona_id' => 419,
      'email' => '',
      'password' => Hash::make('10550467'),
      'username' => '10550467',
      'remember_token' => '10550467'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 421,
      'name' => 'Solorzano Lola',
      'persona_id' => 420,
      'email' => 'lsolorzanov@unasam.edu.pe',
      'password' => Hash::make('31652633'),
      'username' => '31652633',
      'remember_token' => '31652633'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 422,
      'name' => 'Reyes Fidel',
      'persona_id' => 421,
      'email' => 'freyesn@unasam.edu.pe',
      'password' => Hash::make('31672889'),
      'username' => '31672889',
      'remember_token' => '31672889'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 423,
      'name' => 'Robles Fabel',
      'persona_id' => 422,
      'email' => 'froblese@unasam.edu.pe',
      'password' => Hash::make('70119403'),
      'username' => '70119403',
      'remember_token' => '70119403'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 424,
      'name' => 'Melgarejo Pepe',
      'persona_id' => 423,
      'email' => 'pmelgarejob@unasam.edu.pe',
      'password' => Hash::make('08539143'),
      'username' => '08539143',
      'remember_token' => '08539143'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 425,
      'name' => 'Vera Fany',
      'persona_id' => 424,
      'email' => 'fverag@unasam.edu.pe',
      'password' => Hash::make('18147605'),
      'username' => '18147605',
      'remember_token' => '18147605'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 426,
      'name' => 'Pala Julio',
      'persona_id' => 425,
      'email' => 'jpalag@unasam.edu.pe',
      'password' => Hash::make('32040402'),
      'username' => '32040402',
      'remember_token' => '32040402'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 427,
      'name' => 'Robles Elmer',
      'persona_id' => 426,
      'email' => 'eroblesb@unasam.edu.pe',
      'password' => Hash::make('31674266'),
      'username' => '31674266',
      'remember_token' => '31674266'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 428,
      'name' => 'Espinoza Eleazar',
      'persona_id' => 427,
      'email' => 'eespinozav@unasam.edu.pe',
      'password' => Hash::make('08606896'),
      'username' => '08606896',
      'remember_token' => '08606896'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 429,
      'name' => 'Solorzano Dante',
      'persona_id' => 428,
      'email' => 'dsolorzanoh@unasam.edu.pe',
      'password' => Hash::make('44812496'),
      'username' => '44812496',
      'remember_token' => '44812496'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 430,
      'name' => 'Obregon Florentino',
      'persona_id' => 429,
      'email' => 'fobregono@unasam.edu.pe',
      'password' => Hash::make('31632815'),
      'username' => '31632815',
      'remember_token' => '31632815'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 431,
      'name' => 'Gamarra Patricia',
      'persona_id' => 430,
      'email' => 'pgamarrab@unasam.edu.pe',
      'password' => Hash::make('31673831'),
      'username' => '31673831',
      'remember_token' => '31673831'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 432,
      'name' => 'Julca Felix',
      'persona_id' => 431,
      'email' => 'fjulca@unasam.edu.pe',
      'password' => Hash::make('31672735'),
      'username' => '31672735',
      'remember_token' => '31672735'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 433,
      'name' => 'Camones Iris',
      'persona_id' => 432,
      'email' => '',
      'password' => Hash::make('44644652'),
      'username' => '44644652',
      'remember_token' => '44644652'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 434,
      'name' => 'De La Cruz Carlos',
      'persona_id' => 433,
      'email' => 'cdelacruzm@unasam.edu.pe',
      'password' => Hash::make('31674583'),
      'username' => '31674583',
      'remember_token' => '31674583'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 435,
      'name' => 'Yañac Betsabe',
      'persona_id' => 434,
      'email' => 'byanach@unasam.edu.pe',
      'password' => Hash::make('43020912'),
      'username' => '43020912',
      'remember_token' => '43020912'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 436,
      'name' => 'Vasquez Juan',
      'persona_id' => 435,
      'email' => 'jvasquezn@unasam.edu.pe',
      'password' => Hash::make('18160672'),
      'username' => '18160672',
      'remember_token' => '18160672'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 437,
      'name' => 'Menacho Noe',
      'persona_id' => 436,
      'email' => 'nmenachoj@unasam.edu.pe',
      'password' => Hash::make('31661584'),
      'username' => '31661584',
      'remember_token' => '31661584'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 438,
      'name' => 'Gonzales Yvett',
      'persona_id' => 437,
      'email' => 'ygonzaleso@unasam.edu.pe',
      'password' => Hash::make('40544154'),
      'username' => '40544154',
      'remember_token' => '40544154'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 439,
      'name' => 'Gomero Guillermo',
      'persona_id' => 438,
      'email' => 'ggomeroc@unasam.edu.pe',
      'password' => Hash::make('31672274'),
      'username' => '31672274',
      'remember_token' => '31672274'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 440,
      'name' => 'Rosales Alex',
      'persona_id' => 439,
      'email' => 'arosalesb@unasam.edu.pe',
      'password' => Hash::make('42234160'),
      'username' => '42234160',
      'remember_token' => '42234160'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 441,
      'name' => 'Brito Cesar',
      'persona_id' => 440,
      'email' => 'cbritom@unasam.edu.pe',
      'password' => Hash::make('31760096'),
      'username' => '31760096',
      'remember_token' => '31760096'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 442,
      'name' => 'Paucar Manuel',
      'persona_id' => 441,
      'email' => '',
      'password' => Hash::make('42371320'),
      'username' => '42371320',
      'remember_token' => '42371320'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 443,
      'name' => 'Diana Del Carmen Diana',
      'persona_id' => 442,
      'email' => 'dcramirezp@unasam.edu.pe',
      'password' => Hash::make('45620291'),
      'username' => '45620291',
      'remember_token' => '45620291'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 444,
      'name' => 'Machaca Violeta',
      'persona_id' => 443,
      'email' => '',
      'password' => Hash::make('42325352'),
      'username' => '42325352',
      'remember_token' => '42325352'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 445,
      'name' => 'Kaqui Madeley',
      'persona_id' => 444,
      'email' => 'mkaquiv@unasam.edu.pe',
      'password' => Hash::make('44601011'),
      'username' => '44601011',
      'remember_token' => '44601011'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 446,
      'name' => 'Huamani Alberto',
      'persona_id' => 445,
      'email' => ' ahuamanig@unasam.edu.pe',
      'password' => Hash::make('31652707'),
      'username' => '31652707',
      'remember_token' => '31652707'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 447,
      'name' => 'Norabuena Misael',
      'persona_id' => 446,
      'email' => '',
      'password' => Hash::make('25488902'),
      'username' => '25488902',
      'remember_token' => '25488902'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 448,
      'name' => 'Mendez Maria',
      'persona_id' => 447,
      'email' => 'mmendeze@unasam.edu.pe',
      'password' => Hash::make('22505255'),
      'username' => '22505255',
      'remember_token' => '22505255'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 449,
      'name' => 'Guerrero Vidal',
      'persona_id' => 448,
      'email' => 'vguerrerot@unasam.edu.pe',
      'password' => Hash::make('31657994'),
      'username' => '31657994',
      'remember_token' => '31657994'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 450,
      'name' => 'Lezama Manuel',
      'persona_id' => 449,
      'email' => 'mlezamal@unasam.edu.pe',
      'password' => Hash::make('17825952'),
      'username' => '17825952',
      'remember_token' => '17825952'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 451,
      'name' => 'Castro Gloria',
      'persona_id' => 450,
      'email' => 'gcastrop@unasam.edu.pe',
      'password' => Hash::make('31674517'),
      'username' => '31674517',
      'remember_token' => '31674517'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 452,
      'name' => 'Herrera Edgar',
      'persona_id' => 451,
      'email' => 'eherrerat@unasam.edu.pe',
      'password' => Hash::make('40015014'),
      'username' => '40015014',
      'remember_token' => '40015014'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 453,
      'name' => 'Huerta Timoteo',
      'persona_id' => 452,
      'email' => 'thuertab@unasam.edu.pe',
      'password' => Hash::make('32647927'),
      'username' => '32647927',
      'remember_token' => '32647927'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 454,
      'name' => 'Narvaez Ernesto',
      'persona_id' => 453,
      'email' => 'enarvaezp@unasam.edu.pe',
      'password' => Hash::make('31612747'),
      'username' => '31612747',
      'remember_token' => '31612747'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 455,
      'name' => 'Del Castillo Fiorella',
      'persona_id' => 454,
      'email' => 'fdelcastillop@unasam.edu.pe',
      'password' => Hash::make('31668523'),
      'username' => '31668523',
      'remember_token' => '31668523'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 456,
      'name' => 'Loli Fredy',
      'persona_id' => 455,
      'email' => 'flolin@unasam.edu.pe',
      'password' => Hash::make('40855791'),
      'username' => '40855791',
      'remember_token' => '40855791'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 457,
      'name' => 'Rodriguez Eli',
      'persona_id' => 456,
      'email' => 'brodriguezv@unasam.edu.pe',
      'password' => Hash::make('18141305'),
      'username' => '18141305',
      'remember_token' => '18141305'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 458,
      'name' => 'Milla Felix',
      'persona_id' => 457,
      'email' => 'fmillah@unasam.edu.pe',
      'password' => Hash::make('31605447'),
      'username' => '31605447',
      'remember_token' => '31605447'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 459,
      'name' => 'Bustamante Julio',
      'persona_id' => 458,
      'email' => 'jcbustamantec@unasam.edu.pe',
      'password' => Hash::make('31662476'),
      'username' => '31662476',
      'remember_token' => '31662476'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 460,
      'name' => 'Roca Rolando',
      'persona_id' => 459,
      'email' => 'rrocaz@unasam.edu.pe',
      'password' => Hash::make('31673912'),
      'username' => '31673912',
      'remember_token' => '31673912'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 461,
      'name' => 'Toledo Carlos',
      'persona_id' => 460,
      'email' => 'ctoledoq@unasam.edu.pe',
      'password' => Hash::make('31618186'),
      'username' => '31618186',
      'remember_token' => '31618186'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 462,
      'name' => 'Dextre Jaime',
      'persona_id' => 461,
      'email' => 'jdextrer@unasam.edu.pe',
      'password' => Hash::make('31654941'),
      'username' => '31654941',
      'remember_token' => '31654941'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 463,
      'name' => 'Cordova Vicente',
      'persona_id' => 462,
      'email' => '',
      'password' => Hash::make('31620278'),
      'username' => '31620278',
      'remember_token' => '31620278'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 464,
      'name' => 'Pineda Luis',
      'persona_id' => 463,
      'email' => '',
      'password' => Hash::make('31682794'),
      'username' => '31682794',
      'remember_token' => '31682794'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 465,
      'name' => 'Nivin Laura',
      'persona_id' => 464,
      'email' => 'lnivin@unasam.edu.pe',
      'password' => Hash::make('31676536'),
      'username' => '31676536',
      'remember_token' => '31676536'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 466,
      'name' => 'Chavez Sally',
      'persona_id' => 465,
      'email' => 'scchavezg@unasam.edu.pe',
      'password' => Hash::make('41172013'),
      'username' => '41172013',
      'remember_token' => '41172013'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 467,
      'name' => 'Gamboa Jorge',
      'persona_id' => 466,
      'email' => 'jgamboav@unasam.edu.pe',
      'password' => Hash::make('18220262'),
      'username' => '18220262',
      'remember_token' => '18220262'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 468,
      'name' => 'Penadillo Rudecindo',
      'persona_id' => 467,
      'email' => 'rpenadillol@unasam.edu.pe',
      'password' => Hash::make('31678144'),
      'username' => '31678144',
      'remember_token' => '31678144'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 469,
      'name' => 'Rosales Yocet',
      'persona_id' => 468,
      'email' => 'yrosales@unasam.edu.pe',
      'password' => Hash::make('80307490'),
      'username' => '80307490',
      'remember_token' => '80307490'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 470,
      'name' => 'Yovera Jose',
      'persona_id' => 469,
      'email' => 'jyoveras@unasam.edu.pe',
      'password' => Hash::make('32972750'),
      'username' => '32972750',
      'remember_token' => '32972750'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 471,
      'name' => 'Briceño Aldo',
      'persona_id' => 470,
      'email' => '',
      'password' => Hash::make('32658316'),
      'username' => '32658316',
      'remember_token' => '32658316'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 472,
      'name' => 'Valenzuela Elias',
      'persona_id' => 471,
      'email' => '',
      'password' => Hash::make('31624141'),
      'username' => '31624141',
      'remember_token' => '31624141'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 473,
      'name' => 'Mautino Alejandro',
      'persona_id' => 472,
      'email' => 'amautinog@unasam.edu.pe',
      'password' => Hash::make('45028012'),
      'username' => '45028012',
      'remember_token' => '45028012'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 474,
      'name' => 'Valerio Felix',
      'persona_id' => 473,
      'email' => 'fvalerioh@unasam.edu.pe',
      'password' => Hash::make('17867114'),
      'username' => '17867114',
      'remember_token' => '17867114'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 475,
      'name' => 'Rodriguez Dennis',
      'persona_id' => 474,
      'email' => 'drofriguezc@unasam.edu.pe',
      'password' => Hash::make('41431641'),
      'username' => '41431641',
      'remember_token' => '41431641'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 476,
      'name' => 'Huerta Ruby',
      'persona_id' => 475,
      'email' => 'rhuertag@unasam.edu.pe',
      'password' => Hash::make('31622977'),
      'username' => '31622977',
      'remember_token' => '31622977'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 477,
      'name' => 'Medina Rudy',
      'persona_id' => 476,
      'email' => 'rmedinabe@unasam.edu.pe',
      'password' => Hash::make('16174469'),
      'username' => '16174469',
      'remember_token' => '16174469'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 478,
      'name' => 'Rimac Gladis',
      'persona_id' => 477,
      'email' => '',
      'password' => Hash::make('31652608'),
      'username' => '31652608',
      'remember_token' => '31652608'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 479,
      'name' => 'Barraza Dante',
      'persona_id' => 478,
      'email' => 'dbarrazau@unasam.edu.pe',
      'password' => Hash::make('43902755'),
      'username' => '43902755',
      'remember_token' => '43902755'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 480,
      'name' => 'Neglia Irina',
      'persona_id' => 479,
      'email' => '',
      'password' => Hash::make('40083000'),
      'username' => '40083000',
      'remember_token' => '40083000'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 481,
      'name' => 'Marquez Edinson',
      'persona_id' => 480,
      'email' => 'emarquezt@unasam.edu.pe',
      'password' => Hash::make('09606017'),
      'username' => '09606017',
      'remember_token' => '09606017'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 482,
      'name' => 'Neyra Francisco',
      'persona_id' => 481,
      'email' => 'fneyrar@unasam.edu.pe',
      'password' => Hash::make('31611924'),
      'username' => '31611924',
      'remember_token' => '31611924'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 483,
      'name' => 'Rodriguez Jose',
      'persona_id' => 482,
      'email' => '',
      'password' => Hash::make('41175132'),
      'username' => '41175132',
      'remember_token' => '41175132'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 484,
      'name' => 'De La Cruz Merlin',
      'persona_id' => 483,
      'email' => 'mdelacruzh@unasam.edu.pe',
      'password' => Hash::make('44655181'),
      'username' => '44655181',
      'remember_token' => '44655181'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 485,
      'name' => 'Mendoza Maria',
      'persona_id' => 484,
      'email' => 'rmendozaa@unasam.edu.pe',
      'password' => Hash::make('31667800'),
      'username' => '31667800',
      'remember_token' => '31667800'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 486,
      'name' => 'Zegarra Victor',
      'persona_id' => 485,
      'email' => 'vzegarrac@unasam.edu.pe',
      'password' => Hash::make('32762465'),
      'username' => '32762465',
      'remember_token' => '32762465'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 487,
      'name' => 'Montalvo Jim',
      'persona_id' => 486,
      'email' => 'jmontalvoc@unasam.edu.pe',
      'password' => Hash::make('31681128'),
      'username' => '31681128',
      'remember_token' => '31681128'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 488,
      'name' => 'Caururo Wilder',
      'persona_id' => 487,
      'email' => 'wcaururos@unasam.edu.pe',
      'password' => Hash::make('31674253'),
      'username' => '31674253',
      'remember_token' => '31674253'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 489,
      'name' => 'Morales Isaac',
      'persona_id' => 488,
      'email' => 'imoralesc@unasam.edu.pe',
      'password' => Hash::make('31656844'),
      'username' => '31656844',
      'remember_token' => '31656844'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 490,
      'name' => 'Menacho Leonel',
      'persona_id' => 489,
      'email' => '',
      'password' => Hash::make('31632610'),
      'username' => '31632610',
      'remember_token' => '31632610'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 491,
      'name' => 'Castro Segundo',
      'persona_id' => 490,
      'email' => 'scastrog@unasam.edu.pe',
      'password' => Hash::make('17997596'),
      'username' => '17997596',
      'remember_token' => '17997596'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 492,
      'name' => 'Cruz Ilder',
      'persona_id' => 491,
      'email' => 'icruzm@unasam.edu.pe',
      'password' => Hash::make('42211756'),
      'username' => '42211756',
      'remember_token' => '42211756'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 493,
      'name' => 'Vidal Efrain',
      'persona_id' => 492,
      'email' => 'evidale@unasam.edu.pe',
      'password' => Hash::make('43626476'),
      'username' => '43626476',
      'remember_token' => '43626476'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 494,
      'name' => 'Castillo Arnaldo',
      'persona_id' => 493,
      'email' => 'jcastillog@unasam.edu.pe',
      'password' => Hash::make('32805955'),
      'username' => '32805955',
      'remember_token' => '32805955'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 495,
      'name' => 'Diestra Fortunato',
      'persona_id' => 494,
      'email' => '',
      'password' => Hash::make('06813515'),
      'username' => '06813515',
      'remember_token' => '06813515'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 496,
      'name' => 'Serna Cesar',
      'persona_id' => 495,
      'email' => 'csernal@unasam.edu.pe',
      'password' => Hash::make('17811356'),
      'username' => '17811356',
      'remember_token' => '17811356'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 497,
      'name' => 'Leiva Medalit',
      'persona_id' => 496,
      'email' => '',
      'password' => Hash::make('44825376'),
      'username' => '44825376',
      'remember_token' => '44825376'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 498,
      'name' => 'Urbano Jorge',
      'persona_id' => 497,
      'email' => '',
      'password' => Hash::make('45059189'),
      'username' => '45059189',
      'remember_token' => '45059189'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 499,
      'name' => 'Roldan Oscar',
      'persona_id' => 498,
      'email' => 'oroldanr@unasam.edu.pe',
      'password' => Hash::make('31619094'),
      'username' => '31619094',
      'remember_token' => '31619094'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 500,
      'name' => 'Camones Eling',
      'persona_id' => 499,
      'email' => 'ecamonesb@unasam.edu.pe',
      'password' => Hash::make('40718549'),
      'username' => '40718549',
      'remember_token' => '40718549'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 501,
      'name' => 'Oncoy Virgilio',
      'persona_id' => 500,
      'email' => 'voncoyl@unasam.edu.pe',
      'password' => Hash::make('31768910'),
      'username' => '31768910',
      'remember_token' => '31768910'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 502,
      'name' => 'Paredes Dany',
      'persona_id' => 501,
      'email' => 'dparedesa@unasam.edu.pe',
      'password' => Hash::make('31612440'),
      'username' => '31612440',
      'remember_token' => '31612440'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 503,
      'name' => 'Tarazona Lidia',
      'persona_id' => 502,
      'email' => '',
      'password' => Hash::make('31608039'),
      'username' => '31608039',
      'remember_token' => '31608039'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 504,
      'name' => 'Castillo Miriam',
      'persona_id' => 503,
      'email' => '',
      'password' => Hash::make('31680890'),
      'username' => '31680890',
      'remember_token' => '31680890'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 505,
      'name' => 'Castañeda Segundo',
      'persona_id' => 504,
      'email' => 'sarmasc@unasam.edu.pe',
      'password' => Hash::make('10268692'),
      'username' => '10268692',
      'remember_token' => '10268692'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 506,
      'name' => 'Olortegui Rufa',
      'persona_id' => 505,
      'email' => 'rolorteguim@unasam.edu.pe',
      'password' => Hash::make('17906039'),
      'username' => '17906039',
      'remember_token' => '17906039'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 507,
      'name' => 'Morachimo Luis',
      'persona_id' => 506,
      'email' => 'lmorachimom@unasam.edu.pe',
      'password' => Hash::make('40322672'),
      'username' => '40322672',
      'remember_token' => '40322672'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 508,
      'name' => 'Koochoi Carmen',
      'persona_id' => 507,
      'email' => '',
      'password' => Hash::make('19842269'),
      'username' => '19842269',
      'remember_token' => '19842269'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 509,
      'name' => 'Villafan Macedonio',
      'persona_id' => 508,
      'email' => 'mvillafanb@unasam.edu.pe',
      'password' => Hash::make('31630894'),
      'username' => '31630894',
      'remember_token' => '31630894'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 510,
      'name' => 'Flores Jose',
      'persona_id' => 509,
      'email' => 'jofloresh@unasam.edu.pe',
      'password' => Hash::make('26717731'),
      'username' => '26717731',
      'remember_token' => '26717731'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 511,
      'name' => 'Espinoza Julie',
      'persona_id' => 510,
      'email' => 'jcespinozac@unasam.edu.pe',
      'password' => Hash::make('31677327'),
      'username' => '31677327',
      'remember_token' => '31677327'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 512,
      'name' => 'Huanri Josmell',
      'persona_id' => 511,
      'email' => 'jhuanrip@unasam.edu.pe',
      'password' => Hash::make('42120030'),
      'username' => '42120030',
      'remember_token' => '42120030'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 513,
      'name' => 'More Jesus',
      'persona_id' => 512,
      'email' => 'jmorel@unasam.edu.pe',
      'password' => Hash::make('15845434'),
      'username' => '15845434',
      'remember_token' => '15845434'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 514,
      'name' => 'Huaman Vilma',
      'persona_id' => 513,
      'email' => 'vhuamanj@unasam.edu.pe',
      'password' => Hash::make('27249209'),
      'username' => '27249209',
      'remember_token' => '27249209'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 515,
      'name' => 'Guzman Bertha',
      'persona_id' => 514,
      'email' => 'bguzmana@unasam.edu.pe',
      'password' => Hash::make('33264294'),
      'username' => '33264294',
      'remember_token' => '33264294'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 516,
      'name' => 'Zanabria Walter',
      'persona_id' => 515,
      'email' => 'wzanabriap@unasam.edu.pe',
      'password' => Hash::make('31675145'),
      'username' => '31675145',
      'remember_token' => '31675145'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 517,
      'name' => 'Mena Edgar',
      'persona_id' => 516,
      'email' => 'emenas@unasam.edu.pe',
      'password' => Hash::make('31663640'),
      'username' => '31663640',
      'remember_token' => '31663640'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 518,
      'name' => 'Lopez Bertha',
      'persona_id' => 517,
      'email' => 'blopeza@unasam.edu.pe',
      'password' => Hash::make('31628429'),
      'username' => '31628429',
      'remember_token' => '31628429'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 519,
      'name' => 'Macedo Gerardo',
      'persona_id' => 518,
      'email' => 'gmacedoj@unasam.edu.pe',
      'password' => Hash::make('41719692'),
      'username' => '41719692',
      'remember_token' => '41719692'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 520,
      'name' => 'Villar Adib',
      'persona_id' => 519,
      'email' => '',
      'password' => Hash::make('40779126'),
      'username' => '40779126',
      'remember_token' => '40779126'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 521,
      'name' => 'Huaman Enrique',
      'persona_id' => 520,
      'email' => 'ehuamanc@unasam.edu.pe',
      'password' => Hash::make('31678789'),
      'username' => '31678789',
      'remember_token' => '31678789'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 522,
      'name' => 'Suarez Juan',
      'persona_id' => 521,
      'email' => '',
      'password' => Hash::make('31661351'),
      'username' => '31661351',
      'remember_token' => '31661351'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 523,
      'name' => 'Rojas Jorge',
      'persona_id' => 522,
      'email' => 'jrojas@unasam.edu.pe',
      'password' => Hash::make('31604193'),
      'username' => '31604193',
      'remember_token' => '31604193'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 524,
      'name' => 'Neira Wualter',
      'persona_id' => 523,
      'email' => 'wneiraj@unasam.edu.pe',
      'password' => Hash::make('40659884'),
      'username' => '40659884',
      'remember_token' => '40659884'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 525,
      'name' => 'Tinoco Luciano',
      'persona_id' => 524,
      'email' => 'ltinocop@unasam.edu.pe',
      'password' => Hash::make('32641486'),
      'username' => '32641486',
      'remember_token' => '32641486'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 526,
      'name' => 'Rodriguez Rosa',
      'persona_id' => 525,
      'email' => 'rrodriguezr@unasam.edu.pe',
      'password' => Hash::make('32128791'),
      'username' => '32128791',
      'remember_token' => '32128791'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 527,
      'name' => 'Ayvar Dominga',
      'persona_id' => 526,
      'email' => 'dayvarc@unasam.edu.pe',
      'password' => Hash::make('31614557'),
      'username' => '31614557',
      'remember_token' => '31614557'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 528,
      'name' => 'Fernandez Carlos',
      'persona_id' => 527,
      'email' => 'cfernandezl@unasam.edu.pe',
      'password' => Hash::make('31672815'),
      'username' => '31672815',
      'remember_token' => '31672815'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 529,
      'name' => 'Dextre Oscar',
      'persona_id' => 528,
      'email' => 'odextrea@unasam.edu.pe',
      'password' => Hash::make('32645194'),
      'username' => '32645194',
      'remember_token' => '32645194'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 530,
      'name' => 'Salvatierra Jose',
      'persona_id' => 529,
      'email' => 'jsalvatierrar@unasam.edu.pe',
      'password' => Hash::make('15676742'),
      'username' => '15676742',
      'remember_token' => '15676742'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 531,
      'name' => 'Manrique Jorge',
      'persona_id' => 530,
      'email' => 'jmanriquec@unasam.edu.pe',
      'password' => Hash::make('31605570'),
      'username' => '31605570',
      'remember_token' => '31605570'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 532,
      'name' => 'Minaya Saturnino',
      'persona_id' => 531,
      'email' => 'sminayac@unasam.edu.pe',
      'password' => Hash::make('31650730'),
      'username' => '31650730',
      'remember_token' => '31650730'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 533,
      'name' => 'Toledo Cerafin',
      'persona_id' => 532,
      'email' => 'ctoledoc@unasam.edu.pe',
      'password' => Hash::make('31624699'),
      'username' => '31624699',
      'remember_token' => '31624699'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 534,
      'name' => 'Saenz Justina',
      'persona_id' => 533,
      'email' => 'msaenzm@unasam.edu.pe',
      'password' => Hash::make('40581758'),
      'username' => '40581758',
      'remember_token' => '40581758'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 535,
      'name' => 'Vargas Dario',
      'persona_id' => 534,
      'email' => 'tvargasa@unasam.edu.pe',
      'password' => Hash::make('07241747'),
      'username' => '07241747',
      'remember_token' => '07241747'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 536,
      'name' => 'Pelaez Angel',
      'persona_id' => 535,
      'email' => 'angelpc@unasam.edu.pe',
      'password' => Hash::make('17998368'),
      'username' => '17998368',
      'remember_token' => '17998368'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 537,
      'name' => 'Macedo Alejandro',
      'persona_id' => 536,
      'email' => 'amacedoh@unasam.edu.pe',
      'password' => Hash::make('31657913'),
      'username' => '31657913',
      'remember_token' => '31657913'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 538,
      'name' => 'Barzola Edgar',
      'persona_id' => 537,
      'email' => 'ebarzolac@unasam.edu.pe',
      'password' => Hash::make('15735435'),
      'username' => '15735435',
      'remember_token' => '15735435'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 539,
      'name' => 'Ellacuriaga Oscar',
      'persona_id' => 538,
      'email' => 'oellacuriagasam@unasam.edu.pe',
      'password' => Hash::make('40526835'),
      'username' => '40526835',
      'remember_token' => '40526835'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 540,
      'name' => 'Beltran Karina',
      'persona_id' => 539,
      'email' => 'kbeltranc@unasam.edu.pe',
      'password' => Hash::make('41309454'),
      'username' => '41309454',
      'remember_token' => '41309454'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 541,
      'name' => 'Medina Rocio',
      'persona_id' => 540,
      'email' => '',
      'password' => Hash::make('44511778'),
      'username' => '44511778',
      'remember_token' => '44511778'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 542,
      'name' => 'Camones Oscar',
      'persona_id' => 541,
      'email' => 'ocamonesr@unasam.edu.pe',
      'password' => Hash::make('31621889'),
      'username' => '31621889',
      'remember_token' => '31621889'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 543,
      'name' => 'Vigo Ronald',
      'persona_id' => 542,
      'email' => '',
      'password' => Hash::make('17939428'),
      'username' => '17939428',
      'remember_token' => '17939428'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 544,
      'name' => 'Castro Jose',
      'persona_id' => 543,
      'email' => 'jcastrop@unasam.edu.pe',
      'password' => Hash::make('31621322'),
      'username' => '31621322',
      'remember_token' => '31621322'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 545,
      'name' => 'Huaman Antonio',
      'persona_id' => 544,
      'email' => 'ahuamano@unasam.edu.pe',
      'password' => Hash::make('31653568'),
      'username' => '31653568',
      'remember_token' => '31653568'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 546,
      'name' => 'Ayala Sebastian',
      'persona_id' => 545,
      'email' => '',
      'password' => Hash::make('45748572'),
      'username' => '45748572',
      'remember_token' => '45748572'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 547,
      'name' => 'Caque Walter',
      'persona_id' => 546,
      'email' => '',
      'password' => Hash::make('32039623'),
      'username' => '32039623',
      'remember_token' => '32039623'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 548,
      'name' => 'Natividad Luis',
      'persona_id' => 547,
      'email' => 'lnatividadc@unasam.edu.pe',
      'password' => Hash::make('31677424'),
      'username' => '31677424',
      'remember_token' => '31677424'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 549,
      'name' => 'Pasco Armando',
      'persona_id' => 548,
      'email' => 'apascoa@unasam.edu.pe',
      'password' => Hash::make('31605727'),
      'username' => '31605727',
      'remember_token' => '31605727'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 550,
      'name' => 'Murga Juan',
      'persona_id' => 549,
      'email' => 'jmurgao@unasam.edu.pe',
      'password' => Hash::make('15853797'),
      'username' => '15853797',
      'remember_token' => '15853797'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 551,
      'name' => 'Hidalgo Javier',
      'persona_id' => 550,
      'email' => 'jhidalgom@unasam.edu.pe',
      'password' => Hash::make('32387892'),
      'username' => '32387892',
      'remember_token' => '32387892'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 552,
      'name' => 'Ruiz Jose',
      'persona_id' => 551,
      'email' => '',
      'password' => Hash::make('08696327'),
      'username' => '08696327',
      'remember_token' => '08696327'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 553,
      'name' => 'Huerta Rosario',
      'persona_id' => 552,
      'email' => '',
      'password' => Hash::make('40257333'),
      'username' => '40257333',
      'remember_token' => '40257333'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 554,
      'name' => 'Gonzales Carlos',
      'persona_id' => 553,
      'email' => '',
      'password' => Hash::make('08619959'),
      'username' => '08619959',
      'remember_token' => '08619959'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 555,
      'name' => 'Castillo Abrahan',
      'persona_id' => 554,
      'email' => 'acastillor@unasam.edu.pe',
      'password' => Hash::make('31624938'),
      'username' => '31624938',
      'remember_token' => '31624938'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 556,
      'name' => 'Ojeda William',
      'persona_id' => 555,
      'email' => 'wojedap@unasam.edu.pe',
      'password' => Hash::make('17828605'),
      'username' => '17828605',
      'remember_token' => '17828605'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 557,
      'name' => 'Castro Juan',
      'persona_id' => 556,
      'email' => 'jcastros@unasam.edu.pe',
      'password' => Hash::make('31602879'),
      'username' => '31602879',
      'remember_token' => '31602879'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 558,
      'name' => 'Maury Victor',
      'persona_id' => 557,
      'email' => '',
      'password' => Hash::make('42342670'),
      'username' => '42342670',
      'remember_token' => '42342670'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 559,
      'name' => 'Araucano Ruth',
      'persona_id' => 558,
      'email' => '',
      'password' => Hash::make('40438775'),
      'username' => '40438775',
      'remember_token' => '40438775'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 560,
      'name' => 'Giraldo Milton',
      'persona_id' => 559,
      'email' => 'mgiraldom@unasam.edu.pe',
      'password' => Hash::make('31663393'),
      'username' => '31663393',
      'remember_token' => '31663393'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 561,
      'name' => 'Tarazona John',
      'persona_id' => 560,
      'email' => 'jtarazonaj@unasam.edu.pe',
      'password' => Hash::make('41092036'),
      'username' => '41092036',
      'remember_token' => '41092036'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 562,
      'name' => 'Medrano Walter',
      'persona_id' => 561,
      'email' => 'wmedranoa@unasam.edu.pe',
      'password' => Hash::make('31673265'),
      'username' => '31673265',
      'remember_token' => '31673265'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 563,
      'name' => 'Huerta Francisco',
      'persona_id' => 562,
      'email' => 'fhuertab@unasam.edu.pe',
      'password' => Hash::make('31615317'),
      'username' => '31615317',
      'remember_token' => '31615317'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 564,
      'name' => 'Cacha Mirko',
      'persona_id' => 563,
      'email' => 'mcachaa@unasam.edu.pe',
      'password' => Hash::make('31675474'),
      'username' => '31675474',
      'remember_token' => '31675474'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 565,
      'name' => 'Cochachin Leoncio',
      'persona_id' => 564,
      'email' => 'lcochachins@unasam.edu.pe',
      'password' => Hash::make('31601913'),
      'username' => '31601913',
      'remember_token' => '31601913'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 566,
      'name' => 'Castillo Yeng',
      'persona_id' => 565,
      'email' => 'ycastillot@unasam.edu.pe',
      'password' => Hash::make('41163457'),
      'username' => '41163457',
      'remember_token' => '41163457'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 567,
      'name' => 'Huaman Lalo',
      'persona_id' => 566,
      'email' => 'lhuamanm@unasam.edu.pe',
      'password' => Hash::make('31682533'),
      'username' => '31682533',
      'remember_token' => '31682533'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 568,
      'name' => 'Rodriguez Jose',
      'persona_id' => 567,
      'email' => 'jrodriguezh@unasam.edu.pe',
      'password' => Hash::make('17808985'),
      'username' => '17808985',
      'remember_token' => '17808985'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 569,
      'name' => 'Narvaez Sandra',
      'persona_id' => 568,
      'email' => '',
      'password' => Hash::make('42398601'),
      'username' => '42398601',
      'remember_token' => '42398601'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 570,
      'name' => 'Castillo Jorge',
      'persona_id' => 569,
      'email' => 'jcastillop@unasam.edu.pe',
      'password' => Hash::make('32021885'),
      'username' => '32021885',
      'remember_token' => '32021885'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 571,
      'name' => 'Sifuentes Jose',
      'persona_id' => 570,
      'email' => 'jsifuentess@unasam.edu.pe',
      'password' => Hash::make('31615750'),
      'username' => '31615750',
      'remember_token' => '31615750'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 572,
      'name' => 'Leon Marlon',
      'persona_id' => 571,
      'email' => '',
      'password' => Hash::make('41458498'),
      'username' => '41458498',
      'remember_token' => '41458498'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 573,
      'name' => 'Tarazona Rosmel',
      'persona_id' => 572,
      'email' => '',
      'password' => Hash::make('45949775'),
      'username' => '45949775',
      'remember_token' => '45949775'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 574,
      'name' => 'Pasco Richard',
      'persona_id' => 573,
      'email' => 'rpascoa@unasam.edu.pe',
      'password' => Hash::make('31674254'),
      'username' => '31674254',
      'remember_token' => '31674254'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 575,
      'name' => 'Allauca Wendy',
      'persona_id' => 574,
      'email' => 'wallaucac@unasam.edu.pe',
      'password' => Hash::make('41082001'),
      'username' => '41082001',
      'remember_token' => '41082001'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 576,
      'name' => 'Norabuena Pierina',
      'persona_id' => 575,
      'email' => 'pnorabuenat@unasam.edu.pe',
      'password' => Hash::make('47651769'),
      'username' => '47651769',
      'remember_token' => '47651769'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 577,
      'name' => 'Figueroa Ingrid',
      'persona_id' => 576,
      'email' => 'ifigueroad@unasam.edu.pe',
      'password' => Hash::make('70115588'),
      'username' => '70115588',
      'remember_token' => '70115588'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 578,
      'name' => 'Rurush Roger',
      'persona_id' => 577,
      'email' => 'rrurusha@unasam.edu.pe',
      'password' => Hash::make('31656388'),
      'username' => '31656388',
      'remember_token' => '31656388'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 579,
      'name' => 'Rojas Romel',
      'persona_id' => 578,
      'email' => 'rrojasm@unasam.edu.pe',
      'password' => Hash::make('00120205'),
      'username' => '00120205',
      'remember_token' => '00120205'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 580,
      'name' => 'De La Cruz Gesella',
      'persona_id' => 579,
      'email' => '',
      'password' => Hash::make('41035111'),
      'username' => '41035111',
      'remember_token' => '41035111'
   ])->assignRole('Docente');
   User::query()->create([
      'id' => 581,
      'name' => 'Flores Victor',
      'persona_id' => 580,
      'email' => 'vfloresv@unasam.edu.pe',
      'password' => Hash::make('17828136'),
      'username' => '17828136',
      'remember_token' => '17828136'
   ])->assignRole('Docente');
        */
    }
}
