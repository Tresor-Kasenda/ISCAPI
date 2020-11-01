@extends('layouts.home')

@section('title', 'Communiquer publier')

@section('backend')
    <div class="content">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="stat-widget-five">
                                        <div class="stat-content">
                                            <div class="text-left dib">
                                                <div class="stat-text"><span class="count">{{ DB::table('communicates')->count() ?? '0' }}</span></div>
                                                <div class="stat-heading">Resultat</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 text-right">
                                    <a class="btn btn-outline-success" href="{{ route('communiquer.create') }}">Publier un communiquer</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('includes.resultCommuniquer')
        </div>
    </div>
@endsection
