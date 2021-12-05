@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header"><h2>Liste des Personelles</h2></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <div class="container">

                            <a href="http://127.0.0.1:8000/societe" class="btn btn-primary btn-block" role="button">Providence Verte</a>
                            <a href="http://127.0.0.1:8000/societe" class="btn btn-primary btn-block" role="button">SCA Louata</a>
                            <a href="#" class="btn btn-info" role="button">SCA Chlihat 1</a>
                            
                            


                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
