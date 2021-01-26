@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h2>{{ __($article->title) }}</h2>
                <div class="card mb-3">
                    <div class="card-body">
                        {!! $article->body !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
