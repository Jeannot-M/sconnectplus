@extends('pages.layout')

@section('pages')
<div class="_container">
    <div class="titre_haut">
         <h4>Formulaire d'inscription</h4>
    </div>
</div>

   <div class="__content_body bgwhite">
    <div class="_container">
        @livewire('candidat-component')
        

    </div>
   </div>
@endsection