@extends('control.layouts.main')

@section('content_text')
    <div class="d-flex justify-center ">
        <div class="bg-white p-4 w-100">
            <div class="text-center">
                <h1 class="text-bold">Namaste {{ auth('admin')->user()->name }}! </h1>
            <p>Ceci est l'espace d'administration du site alors soyez responsable et conséquent des actions que vous allez éffectueés!</p>
            </div>
        </div>
    </div>
@endsection
