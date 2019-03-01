@extends('layouts/layout')

@section('title')
Contact
@endsection

@section('content')

    <h1 class="titre-principal">Nous Contacter</h1>


        <div class="container">
            <div class="row">
                    <div class="col">
                        <p>Craft Beers</p>
                        <p> 7 Rue Hoche 38000 Grenoble</p>
                        <p>09 55 98 99 77</p>
                        <p>Craft-Beers@contact.fr</p>



                    </div>

                    <div class="maps col">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2812.08003043456!2d5.725583115875612!3d45.18547617909855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478af48d95de906f%3A0xdce07683d3dcee3f!2s7+Rue+Hoche%2C+38000+Grenoble!5e0!3m2!1sfr!2sfr!4v1551445603669" frameborder="0" style="border:0" allowfullscreen>
                        </iframe>
                    </div>
            </div>
            <hr>
            <div class="contact">
                <form action="#" method="post">
                    <div class="form-check">
                        <input id="gender-monsieur" type="radio" name="civilite" value="Monsieur" class="form-check-input"checked>
                        <label for="gender-monsieur" class="form-check-label">Monsieur</label>
                    </div>
                    <div class="form-check">
                        <input id="gender-madame" type="radio" name="civilite" value="Madame" class="form-check-input">
                        <label for="gender-madame" class="form-check-label">Madame</label>
                    </div>

                    <div class="form-group">
                        <label for="name">Nom - Prénom</label></br>
                        <input type="text" id="name" name="name"  class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="telephone">Téléphone :</label></br>
                        <input  id="telephone" type="tel" name="telephone"  class="form-control">
                    </div>
                    <div class="motif">
                        <label for="objet">Pour quelle raison nous contactez-vous?</label></br>

                        <select name="objet" id="objet">
                            <option value="" disabled selected>Choisir</option>
                            <option value="methode">Methode de fabrication</option>
                            <option value="sav">S.A.V</option>
                            <option value="initiation">Brasse ta bière</option>
                            <option value="Webmaster">Webmaster</option>
                        </select>

                        <div class="formul-email">
                            <label for="email">Email : </label></br>
                            <input type="email" id="email" name="email">
                        </div>
                    </div>

                    <div class="formul-message">
                        <label for="message">Votre message :</label></br>
                        <textarea id="message" name="message" placeholder="Veuillez écrire un message"></textarea>
                    </div>

                    <div class="formul-recontact">Par quel moyen souhaitez-vous être contacté?
                    </div>
                    <div class="form-civilite">
                        <input type="radio" id="contact1" name="contact" value="email" checked>
                        <label for="contact1">Email</label>
                        <input type="radio" id="contact2" name="contact" value="telephone">
                        <label for="contact2">Téléphone</label>
                    </div>
                    <div class="form-smart-recontact">
                        <label for="objet"></label></br>

                        <div>
                            <button type="submit" class="btn btn-mp">Envoyer</button>
                        </div>
                    </div>

                </form>
            </div>



    </div>


@endsection