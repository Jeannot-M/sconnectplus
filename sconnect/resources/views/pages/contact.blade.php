@extends('pages.layout')

@section('pages')
<div class="_container">
    <div class="titre_haut">
         <h4>Besoin d'aide ?</h4>
         <p>Avez-vous un souci ?</p>
    </div>
</div>

   <div class="__content_body">
       <div class="_container">
        <div class="loire">
              <p>
                On est encore là pour vous, bien sûr !<br> Et vous avez plusieurs moyens de nous contacter.
                <a href="mailto:contact@sconnectplus.cd ">contact@sconnectplus.cd </a>
              </p>
        </div>
        @livewire('help-component')

        <div class="mpy" style="text-align: center;">
            <p>Savez-vous que nous pouvons mieux gérer vos besoins  <br> et mieux vous servir, <a style="color: blue;" class="textBold" href="{{ route('register') }}">en créant votre compte d’utilisateur?</a></p>
        </div>
       </div>
   </div>
@endsection