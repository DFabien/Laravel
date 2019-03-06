@extends('layouts/layout')

@section('title')
Accueil
@endsection

@section('content')

<div class="container-fluid">
        
    <div class="home">
            <h1 class="titre-principal">Bienvenue</h1>
        <p>Pensez-vous vraiment que vous pouvez porter vos collants de running à vos cours de 
        Pilates ? <br> Lorsqu'il s'agit de sport, il est important de choisir vos vêtements selon 
        vos activités. <br> Que préferez-vous le Yoga ou le CrossFit? <br> Vous avez besoin de bas qui vous 
        aideront à dépasser vos objectifs. <br> Voici quelques conseils pour choisir les leggings parfaits, 
        qui sublimeront votre silhouette et s'adapteront à vos activités. <br>
        Profitez-en !</p>
    </div>
    <hr class="separation">
    <div class="row yoga">
        <div class="container col-lg-6">
            <img class="posture" src="/images/yoga.jpg" alt="Photo de posture yoga"/>
        </div>
        <div class="info col-lg-6">
            <h3>COMMENT CHOISIR LES LEGGINGS ADAPTÉS À VOTRE SILHOUETTE ET À VOS ACTIVITÉS</h3>
            <p>
                    <strong>MATIÈRES & CARACTÉRISTIQUES </strong> <br>
                Tous nos leggings sont créés dans une matière confortable, anti-transpirante, anti-frottement et extensible.  <br> 
                Nous nous assurons également que nos vêtements ne sont pas transparents, afin que vous soyez à l'aise <br> lors de vos entraînements. <br>
            </p>             
            <p>              
                    <strong>SILHOUETTE/LONGUEUR </strong> <br>
                Que vous soyez petite ou grande, avec une silhouette athlétique ou pulpeuse, nous avons le legging parfait <br>pour vous ! Luttez contre la chaleur avec un legging 3/4 ou couvrez-vous avec un legging long. <br> Peu rassurée à l'idée de montrer votre ventre ? Optez pour l'un de nos leggings taille haute et prenez <br> confiance en vous ! <br>
                Conseil mode : si vous avez une silhouette en 8, préférez les leggings courts noirs ou de couleurs foncées. <br>
            </p>                
            <p>              
                    <strong>COULEUR/DESIGN </strong> <br>
            Gagnez en motivation avec nos tenues colorées ou attirez tous les regards avec nos imprimés aussi tendance qu'élégants. Tons clairs aux foncés, imprimés géométriques ou floraux, nous vous aidons à créer une garde-robe <br> de sport unique et personnalisée.<br>
            Conseil mode : Si vous êtes pulpeuse et adorez les imprimés, sublimez votre silhouette avec un legging imprimé <br>et un débardeur de couleur neutre.
            </p> 
        </div>
    </div>
    <hr class="separation">
    <div class="row sports">
            <div class="text col-lg-6">
                    <p>
                            <strong>LEGGINGS DE FITNESS & TRAINNING </strong> <br>
                            Que vous soyez adepte des poids ou des séances de cardio, vous avez besoin de leggings confortables et qui s'adaptent à votre corps. Optez pour des bas créés dans des matières élastiques et anti-transpirantes afin de rester au frais, quelle que soit l'intensité de vos séances. Choisissez un modèle de moyenne compression et taille haute, avec une ceinture large, pour bénéficier d'un maintien optimal.
                    </p>             
                    <p>              
                            <strong>LEGGINGS DE YOGA </strong> <br>
                            Lorsqu'il s'agit de leggings de yoga, préférez des modèles confortables avec une ceinture large pour être à l'aise dans vos postures. Choisissez une compression légère qui associe idéalement élasticité, douceur et anti-dérapant. N'hésitez pas à oser les couleurs vives et imprimés audacieux ! Les leggings de yoga sont faits pour être portés avant, pendant et après vos séances.
                    </p>                
                    <p>              
                            <strong>LEGGINGS DE CROSSFIT </strong> <br>
                            Addict au crossfit ? Choisissez des leggings à effet seconde peau, de haute compression, anti-transpirants et respirables. Vous pourrez ainsi vous entraîner été comme hiver ! Oubliez complètement les leggings taille haute, peu confortables pour le running, et optez plutôt pour une ceinture fine et au maintien optimal.
                    </p> 
                </div>
            <div class="container col-lg-6">
                <img class="poids" src="/images/img.jpg" alt="Photo de posture yoga"/>
            </div>
        </div>


    
    </div>
</div>
@endsection