@extends('pages.layout')

@section('pages')
<div class="_container">
    <div class="titre_haut">
         <h4>Formation Professionnelle</h4>
    </div>
</div>

   <div class="__content_body  __formation">
            <div class="_container">
                <div class="__forma">
                    <div class="_cgd">
                        <a href="{{ route('page.detail') }}" class="text_center text_uppercase">formations <i class="fab fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                    <div class="_cgd">
                        <a href="{{ route('page.candidat') }}" class="text_center text_uppercase">candidatures <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
   </div>
@endsection