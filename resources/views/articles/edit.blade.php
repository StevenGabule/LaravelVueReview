@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h2>Create a article</h2>
                <div class="card mb-3">
                    <div class="card-body">
                        <form action="{{ route('articles.update', ['article' => $article->id]) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <input type="text"
                                       name="title"
                                       placeholder="Title"
                                       value="{{ old('title', $article->title) }}"
                                       class="form-control">
                            </div>

                            <div class="form-group">
                                <textarea name="body" id="body" cols="30" rows="10" class="form-control">{{old('body', $article->body)}}</textarea>
                            </div>

                            <div class="form-group">
                                <select name="status" id="status" class="custom-select">
                                    <option value="1" {{ $article->status == 1 ? 'selected' : '' }}>Published</option>
                                    <option value="2" {{ $article->status == 2 ? 'selected' : '' }}>Draft</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <button class="btn btn-sm btn-primary" type="submit">
                                    Update
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
