<?php

use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('article')->insert([
            [
                'id' => 1,
                'name' => 'Devil Went Down to Georgia Track 11',
                'description' => 'Une bière vieillie en fûts avec des pêches et du thé noir !',
                'photo' =>'devil_went_down.jpg',
                'price' => 1940,
                'weight' => 200,
                'stock' => 800,
                'id_cat' => 1
            ],
            [
                'id' => 2,
                'name' => 'The Angel\'s Share Bourbon Barrel',
                'description' => 'Une Barley Wine tout simplement sensationnelle, brassée par Lost Abbey',
                'photo' =>'the_angel_share.jpg',
                'price' => 1970,
                'weight' => 200,
                'stock' => 200,
                'id_cat' => 1
            ],
            [
                'id' => 3,
                'name' => 'Serpent\'s Stout',
                'description' => 'Serpent\'s Stout est une bière américaine de style Imperial Stout brassée par The Lost Abbey ! ',
                'photo' =>'serpent_stout.jpg',
                'price' => 1590,
                'weight' => 180,
                'stock' => 150,
                'id_cat' => 1
            ],
            [
                'id' => 4,
                'name' => 'Ten Commandments',
                'description' => 'Un bière Américaine de type Belgian Strong Ale par la brasserie Lost Abbey',
                'photo' =>'ten_commandments.jpg',
                'price' => 1590,
                'weight' => 180,
                'stock' => 900,
                'id_cat' => 1
            ],
            [
                'id' => 5,
                'name' => 'Judgement Day',
                'description' => 'Judgment Day, une quadrupel de Lost Abbey qui se magnifiera en vieillissant quelques années !',
                'photo' =>'judgement_day.jpg',
                'price' => 1380,
                'weight' => 180,
                'stock' => 650,
                'id_cat' => 1
            ],
            [
                'id' => 6,
                'name' => 'Track 8 Number of the beast',
                'description' => 'Un Imperial Stout d\'exception, inspiré et brassé à partir de la recette de la Lost Abbey Judgment Day vieillie en fût de bourbon.',
                'photo' =>'track_8.jpg',
                'price' => 1810,
                'weight' => 180,
                'stock' => 0,
                'id_cat' => 1
            ],
            [
                'id' => 7,
                'name' => 'Old Viscosity',
                'description' => 'Une Imperial Russian Stout présentant un bouquet de  chocolat, vanille, caramel !',
                'photo' =>'old_viscosity.jpg',
                'price' => 1110,
                'weight' => 180,
                'stock' => 640,
                'id_cat' => 2
            ],
            [
                'id' => 8,
                'name' => 'Mongo DIPA',
                'description' => 'Une Port Brewing de style IPA houblonnée et fruitée pour rendre hommage à Columbus, un des chatons de la brasserie américaine.',
                'photo' =>'mongo_dipa.jpg',
                'price' => 1150,
                'weight' => 210,
                'stock' => 440,
                'id_cat' => 2
            ],
            [
                'id' => 9,
                'name' => 'Wipeout IPA',
                'description' => 'Une IPA massivement houblonnée brassée avec des houblons Amarillo, Centennial, Cascade, Simcoe et Summit.',
                'photo' =>'wipeout.jpg',
                'price' => 920,
                'weight' => 210,
                'stock' => 120,
                'id_cat' => 2
            ],
            [
                'id' => 10,
                'name' => 'Hop 15',
                'description' => 'Une Imperial IPA fabuleuse, combinée de 15 houblons ! Floralité assurée !',
                'photo' =>'hop15.jpg',
                'price' => 1350,
                'weight' => 160,
                'stock' => 0,
                'id_cat' => 2
            ],
            [
                'id' => 11,
                'name' => 'Older Viscosity',
                'description' => 'Une américaine de type Strong Ale Bourbon Barrel Aged surprenante.',
                'photo' =>'older_viscosity.jpg',
                'price' => 2150,
                'weight' => 200,
                'stock' => 110,
                'id_cat' => 2
            ],
            [
                'id' => 12,
                'name' => 'Nelson the Greeter',
                'description' => 'Une bière blonde amère et fruitée, qui rend hommage à un célèbre spot de surf de San Diego !',
                'photo' =>'nelson.jpg',
                'price' => 510,
                'weight' => 100,
                'stock' => 800,
                'id_cat' => 2
            ],
            [
                'id' => 13,
                'name' => 'Au Baron',
                'description' => 'Une bière blonde florale et fruitée avec des notes de miel issue de la collaboration entre Jester King et Au Baron.',
                'photo' =>'au_baron.jpg',
                'price' => 790,
                'weight' => 100,
                'stock' => 200,
                'id_cat' => 3
            ],
            [
                'id' => 14,
                'name' => 'Wytchmaker',
                'description' => 'Une bière américine de type Indian Pale Ale, créée au Texas par la brasserie Jester King !',
                'photo' =>'wytchmaker.jpg',
                'price' => 1690,
                'weight' => 100,
                'stock' => 650,
                'id_cat' => 3
            ],
            [
                'id' => 15,
                'name' => 'Das Wunderkind',
                'description' => 'Une Sour Ale vieillie en fûts de vins et de whisky !',
                'photo' =>'wunderkind.jpg',
                'price' => 1990,
                'weight' => 100,
                'stock' => 230,
                'id_cat' => 3
            ],
            [
                'id' => 16,
                'name' => 'RU-55',
                'description' => 'Une Flanders Red Ale vieillie en fûts de chêne avec des levures sauvages.',
                'photo' =>'ru55.jpg',
                'price' => 2090,
                'weight' => 100,
                'stock' => 140,
                'id_cat' => 3
            ],
            [
                'id' => 17,
                'name' => 'Punk IPA',
                'description' => 'Une écossaise aux saveurs fruitées évoquant la pêche et les fruits tropicaux !',
                'photo' =>'punkipa.jpg',
                'price' => 275,
                'weight' => 100,
                'stock' => 800,
                'id_cat' => 4
            ],
            [
                'id' => 18,
                'name' => 'Nanny State',
                'description' => 'Sans alcool ne veut pas dire sans caractère et Brewdog nous le prouve avec cette surprenante Nanny State !',
                'photo' =>'nanny.jpg',
                'price' => 290,
                'weight' => 100,
                'stock' => 200,
                'id_cat' => 4
            ],
            [
                'id' => 19,
                'name' => 'Jack Hammer',
                'description' => 'Une IPA des fous furieux de Brewdog... à déchausser le palais !',
                'photo' =>'jackhammer.jpg',
                'price' => 340,
                'weight' => 100,
                'stock' => 0,
                'id_cat' => 4
            ],
            [
                'id' => 20,
                'name' => 'Tripel Karmeliet',
                'description' => 'Un grand classique des bières Triples Belges !',
                'photo' =>'tripel.jpg',
                'price' => 200,
                'weight' => 100,
                'stock' => 50,
                'id_cat' => 5
            ],
            [
                'id' => 21,
                'name' => 'Kwak',
                'description' => 'Une bière belge qu\'on ne présente plus, à accompagner de son verre du cocher !',
                'photo' =>'kwak.jpg',
                'price' => 230,
                'weight' => 100,
                'stock' => 500,
                'id_cat' => 5
            ],
            [
                'id' => 22,
                'name' => 'Deus Brut des Flandres',
                'description' => 'Un nectar à base d\'orge pour cet apéritif à la fraîcheur d\'une bière et la pétillance d\'un vin.',
                'photo' =>'deusbrut.jpg',
                'price' => 1650,
                'weight' => 300,
                'stock' => 210,
                'id_cat' => 5
            ],


        ]);
    }
}
