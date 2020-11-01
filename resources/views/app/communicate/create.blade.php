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
                                <li><a href="{{ route('communiquer.index') }}">Communiquer</a></li>
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
                    <form action="{{ route('communiquer.store') }}" method="post" class="form-horizontal">
                        @csrf
                        <div class="form-group">
                            <label for="text-input" class=" form-label">Text Input</label>
                            <input
                                type="text"
                                id="text-input"
                                name="title"
                                placeholder="Titre du communiquer"
                                class="form-control {{ $errors->first('title') ? 'is-invalid' : '' }}"
                                value="{{ old('title') }}"
                            >
                        </div>
                        <div class="row form-group">
                            <label for="textarea-input" class="form-label">Textarea</label>
                            <textarea
                                name="content"
                                id="textarea-input"
                                rows="6"
                                placeholder="Contennue..."
                                class="form-control {{ $errors->first('result') ? 'is-invalid' : '' }}"
                            >{{ old('content') }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                    </form>
            </div>
        </div>
    </div>
@endsection
