@extends('layouts.home')

@section('title', 'Resultat apres examen d\'admission')

@section('backend')
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Dashboard</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="{{ route('home') }}">Dashboard</a></li>
                                <li><a href="{{ route('result.index') }}">Resultats</a></li>
                                <li class="active">Ajouter</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="animated fadeIn">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div id="pay-invoice">
                            <div class="card-body">
                                <div class="card-title">
                                    <h3 class="text-center">Pay Invoice</h3>
                                </div>
                                <hr>
                                <form action={{ route('result.store') }} method="POST" novalidate="novalidate" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label class="control-label mb-1">Ajouter un fichier excel</label>
                                        <input  name="result" type="file" class="form-control {{ $errors->first('result') ? 'is-invalid' : '' }}" aria-required="true" value="{{ old('result') }}">
                                    </div>

                                    <div>
                                        <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                            Publier
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
