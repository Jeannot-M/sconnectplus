@extends('pages.layout')

@section('pages')
<div class="_container">
    <div class="titre_haut">
         <h4>Signaler un contenu</h4>
         <small>Bienvenue sur la plateforme de
            signalement de contenus
            numériques illicites
            de SCONNECT PLUS
         </small>
    </div>
</div>

   <div class="__content_body">
        <div class="_container bgwhite w60">
            <h4>Signalez un contenu illicite en remplissant ce formulaire.</h4>

            <div class="mpy __rom">
                <div>
                    EN CAS D'URGENCE,
                    CONTACTEZ-NOUS DIRECTEMENT: <br> <a href="mailto:CONTACT@sconnectplus.cd">CONTACT@sconnectplus.cd</a> 
                    SI VOUS AVEZ REÇU UN COURRIEL NON SOLLICITÉ (POURRIEL – SPAM), UTILISEZ
                </div>
                <div class="__imgo">
                    <img src="{{ asset('images/spam.png') }}" alt="">
                </div>
            </div>
            @if (Session::has('signale'))
                <div class="text_success">{{ Session::get('signale') }}</div>
            @endif

            @if ($errors)
                @foreach ($errors->all() as $item)
                    <div class="textDanger mpy">{{ $item }}</div>
                @endforeach
            @endif

            <div class="div_form">
                <form action="{{ route('signaler') }}" method="post">
                    @csrf
                    <div class="form_group grid_ro mpy">
                        <label for="" class="textBold">Quelle est la nature de l’infraction ?</label>
                        <select name="nature" id="" class="form_control" required>
                            <option value="Pornographie enfantine ">Pornographie enfantine </option>
                            <option value="Provocation à la violence à la haine ou à la discrimination">Provocation à la violence à la haine ou à la discrimination</option>
                            <option value="Autres">Autres</option>
                        </select>
                    </div>

                    <div class="form_group grid_ro mpy">
                        <label for="" class="textBold">Sur quel type de support l'infraction a-t-elle été constatée ?</label>
                        <select name="type" id="" class="form_control" required>
                            <option value="site internet">site internet</option>
                            <option value="blog-forum">blog-forum</option>
                            <option value="messagerie">messagerie</option>
                            <option value="Chat-réseau social">Chat-réseau social</option>
                            <option value="logiciel peer-to-peer">logiciel peer-to-peer</option>
                        </select>

                    </div>

                    <div class="form_group grid_ro mpy">
                        <label for="url" class="textBold">Adresse web (URL) de l'infraction constatée</label>
                        <input type="url" class="form_control" name="url" placeholder="Adresse URL" id="" required>
                    </div>

                    <div class="form_group grid_ro mpy">
                        <label for="" class="textBold">Votre adresse e-mail (facultatif)</label>
                        <input type="email" name="email" class="form_control" id="" placeholder="veillez saisir votre adresse e-mail">
                    </div>

                    <div class="form_group grid_ro">
                        <label for="" class="textBold">Description de l’infraction</label>
                        <textarea name="resume" id="" required placeholder="veillez décrire l’infraction constatée" cols="30" rows="10"></textarea>
                    </div>

                    <div class="mpy">
                        <button type="submit" class="btn_submit">Envoyez</button>
                    </div>
                </form>
            </div>
        </div>
   </div>
@endsection