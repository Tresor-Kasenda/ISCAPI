@extends('layouts.home')

@section('title', 'Resultat apres examen d\'admission')

@section('backend')
    <div class="content">
        <div class="animated fadeIn">
            @include('includes.resultTable')
        </div>
    </div>

@endsection
