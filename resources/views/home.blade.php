@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="d-flex justify-content-between">
                    <div>
                        <h2>{{ __('All Articles') }}</h2>
                    </div>
                    <div>
                        <a href="{{ route('articles.create') }}" class="btn btn-sm btn-primary">New</a>
                    </div>
                </div>
                <articles-page :articles="{{ $articles }}"></articles-page>
            </div>
        </div>
    </div>
@endsection
