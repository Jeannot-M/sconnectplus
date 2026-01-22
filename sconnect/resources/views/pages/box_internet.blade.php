@extends('pages.layout')

@section('pages')
<div class="_container">
    <div class="titre_haut text_center">
         <h4>Changer de box internet</h4>
         <p>La connexion coupée ? C'est du passé !</p>
    </div>
</div>

   <div class="__content_body bgwhite">
    <div class="_container">
        <div class="text_center">
            <img src="{{ asset('images/gran.png') }}" alt="">
           <div>
           <b> Prêt d'une clé 4G ou 100Go de recharge sur votre forfait mobile*</b>
           <p> *Dès la souscription ou en cas de panne. Inclus dans toutes nos offres internet</p>
           </div>


           <div class="mpy">
                    <h5>LES GRANDS JOURS• JUSQU'AU 09/10</h5>
                    <div class="mpy">
                        1 an d'abonnement box ou mobile offert toutes les heures* <br>
                    
                        <p>
                            Une nouvelle box, c'est bien.
                        Avec une nouvelle TV, c'est encore mieux !
                        </p>
                        
                        <p>Avec votre box internet Sconnect Plus, vous avez tout à gagner...</p>
                    </div>
           </div>
        </div>

        <hr>

        <div class="grd_card mt_2">
            <img src="{{ asset('images/12.jpg') }}" class="w100" alt="">

            <div class="mt_2">
               <p> <b>Engagement n°1 :</b> vous offrir le meilleur des services
                Internet garanti dès le 1er jour avec une clé 4G et 100 Go à votre disposition dès la souscription de votre box internet. <br>
                </p>
                <p>Installation de la fibre gratuite
                    et jusqu’à 203$ remboursés sur vos frais de résiliation.</p> <br>

                Couverture WiFi et débit au top
                grâce au diagnostic WiFi de Sconnect Plus. <br>

            </div>
        </div>

        <div class="grd_card mt_2">
            <div class="mt_2">
                <p><b>Engagement n°2 </b>: vous accompagner à chaque instant</p> <br>
                On est à vos côtés 7j/7, même le dimanche <br>
                Besoin d’une aide technique pour votre Svobox ? Nos équipes sont disponibles 7j/7 par téléphone au +24382188 7423
                
                <p>
                    On s’occupe de votre résiliation
                Conservez votre numéro : on s’occupe de toutes les démarches auprès de votre opérateur actuel !
                
                Piloter votre WiFi, suivre vos factures, accéder à l’assistance... Notre service client répond à tous vos besoins.
                </p>
                

            </div>
            <img src="{{ asset('images/13.jpg') }}" class="w100" alt="">

        </div>

        <div class="mpy ">
            <h4 class="mpy">Des questions sur nos box internet ? C’est par ici !</h4>
                <h4>FAQ</h4>
                <b class="mbottom">Quelle box internet choisir ?</b> <br>

                Voilà une question que l’on se pose tous lorsqu’on veut changer d’offre ! Pour savoir quelle box internet choisir, il faut d’abord identifier vos besoins et votre budget. Un étudiant vivant seul dans un petit appartement n’aura pas forcément besoin de la même offre qu’une famille nombreuse vivant dans un grand logement ou qu’un couple de retraités dans sa maison secondaire. Fibre, ADSL ou 4G box : il faut également savoir quelles sont les technologies disponibles à votre adresse. C’est en fonction de votre éligibilité que nous vous proposerons différentes offres adaptées à vos besoins.  
                <br>
                <b class="mbottom">Quelle offre internet chez moi ?</b><br>
                Vous vous demandez comment savoir si on a la fibre chez soi ? C’est simple : En renseignant votre adresse ou votre numéro de ligne, vous saurez instantanément quelles sont les offres internet disponibles chez vous. Et si la fibre n’est malheureusement pas encore déployée à votre adresse, vous pourrez peut-être choisir notre 4G box, qui permet de surfer jusqu’à 10 fois plus vite qu’en ADSL !<br>

                <b class="mbottom">Quelles différences entre la fibre, la 4G box et l’ADSL ?</b> <br>
                La fibre optique, l’ADSL ou la box 4G sont trois moyens différents d’avoir internet chez soi. Commençons par les deux premiers. La principale différence entre l’ADSL ou la fibre, outre la technologie utilisée, c’est bien sûr le débit. Il est jusqu’à 60 fois supérieur avec la fibre optique ! De plus, la qualité de votre connexion ne dépend plus de la distance entre votre logement et l’armoire de raccordement, ni du nombre d’appareils connectés en même temps dans votre logement. En un mot, la fibre est beaucoup plus puissante que l’ADSL. Quant à la 4G box, il s’agit d’un petit boîtier capable de se connecter au réseau 4G à l’aide d’une carte SIM. Une fois connectée, la 4G box émet un réseau WiFi dans votre maison, auquel il suffit de connecter vos appareils en illimité. Son point fort ? Un débit jusqu’à 10 fois plus rapide que l’ADSL. <br>

                <b class="mbottom">Quelle est la box internet la moins chère ? </b><br>
                Vous êtes à la recherche d’une box internet pas chère ? Chez Sconnect Plus, notre box internet à petit prix est la Scobox fit. Elle permet d’avoir l’essentiel pour une bonne connexion internet. Avec la fibre, elle offre un confortable débit jusqu’à 400 Mb/s en réception et jusqu'à 400 Mb/s en envoi de données. <br>

                <b class="mbottom">Comment changer d’opérateur internet ?</b> <br>
              <p>
                Si vous vous demandez comment changer d’opérateur internet pour nous rejoindre, sachez que cela ne prend que quelques minutes ! Au moment de la souscription dans l’un de nos bureaux.
              </p>

                <b class="mbottom">Comment résilier mon contrat internet actuel ?</b> <br>

                Si vous voulez résilier votre box internet actuelle pour nous rejoindre, vous n’avez rien à faire. Comme indiqué plus haut, veillez tout simplement passer dans l’une de nos agences. Vous n’aurez alors aucune lettre à envoyer à votre opérateur actuel : nous nous en occupons à votre place ! <br>

                Fibre, ADSL, 4G ou 5G box... <br>
                On regarde les offres disponibles chez vous ? <br>

        </div>

    </div>
   </div>
@endsection