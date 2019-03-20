@extends('layouts/layout')

@section('title')
    Contact
@endsection

@section('content')

    <div class="container">
        <h1 class="titre-principal">Nous Contacter</h1>
        <div class="row">
            <div class="col col-lg-6">php
                <p><strong>SquirrelBeers</strong></p>
                <p> 7 Rue Hoche 38000 Grenoble</p>
                <p>09 55 98 99 77</p>
                <p>squirrelbeers@contact.fr</p>
            </div>

            <div class="maps col-lg-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2812.08003043456!2d5.725583115875612!3d45.18547617909855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478af48d95de906f%3A0xdce07683d3dcee3f!2s7+Rue+Hoche%2C+38000+Grenoble!5e0!3m2!1sfr!2sfr!4v1551445603669"
                        frameborder="0" style="border:0" allowfullscreen>
                </iframe>
            </div>
        </div>
    </div>

    <div class="container">
        <hr class="haut">

        <div class="contact">
            <div class="container">
                <form action="#" method="post">
                    <div class="form-civilite">
                        <input id="gender-madame" type="radio" name="civilite" value="madame" checked>
                        <label for="gender-madame">Madame</label>
                        <input id="gender-monsieur" type="radio" name="civilite" value="monsieur">
                        <label for="gender-monsieur">Monsieur</label>
                    </div>

                    <div class="form-group">
                        <label for="name">Nom - Prénom</label><br>
                        <input type="text" id="name" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="telephone">Téléphone</label><br>
                        <input id="telephone" type="tel" name="telephone" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="mail">Adresse mail</label><br>
                        <input id="mail" type="mail" name="mail" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="objet">Pour quelle raison nous contactez-vous?</label><br>
                        <select name="objet" id="objet" class="form-control">
                            <option value="" disabled selected>Choisir</option>
                            <option value="methode">Methode de fabrication</option>
                            <option value="sav">S.A.V</option>
                            <option value="initiation">Brasse ta bière</option>
                            <option value="Webmaster">Webmaster</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <div class="formul-message">
                            <label for="message">Votre message :</label><br>
                            <textarea id="message" name="message" placeholder="Veuillez écrire un message" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="formul-recontact">
                        Par quel moyen souhaitez-vous être contacté?
                    </div>
                    <div class="form-civilite">
                        <input type="radio" id="contact1" name="contact" value="email" checked>
                        <label for="contact1">Email</label>
                        <input type="radio" id="contact2" name="contact" value="telephone">
                        <label for="contact2">Téléphone</label>
                    </div>

                    <div>
                        <button type="submit" class="btn-ico btn-ico-blue">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>

        <hr class="bas">
    </div>

@endsection