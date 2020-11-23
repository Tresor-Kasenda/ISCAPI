@extends('layouts.home')

@section('title', 'Etudiants inscrits')

@section('backend')
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>LISTE DES ETUDIANTS</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="{{ route('home') }}">Dashboard</a></li>
                                <li><a href="{{ route('student.index') }}">Student</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('includes.session')
    @include('includes.table')
@endsection
