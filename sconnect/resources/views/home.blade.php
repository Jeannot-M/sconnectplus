@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="mb-0">You are logged in!</p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Section Newsletter -->
    <section class="newsletter-section py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h3 class="mb-4">Restez informé</h3>
                    <p class="mb-4">Abonnez-vous à notre newsletter pour recevoir nos dernières actualités</p>
                    
                    <form action="#" method="POST" class="newsletter-form">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="email" name="email" class="form-control" placeholder="Votre email" required>
                            <button class="btn btn-primary" type="submit">S'abonner</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@stop
