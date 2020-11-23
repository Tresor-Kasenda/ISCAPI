@extends('layouts.home')

@section('title', 'Resultat apres examen d\'admission')

@section('backend')
    <div class="content">
        @include('includes.session')
        <div class="animated fadeIn">
            @include('includes.resultTable')
        </div>
    </div>

@endsection
