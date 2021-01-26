@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h2>Create a article</h2>
                <div class="card mb-3">
                    <div class="card-body">
                        <form action="{{ route('articles.store') }}" method="post">
                            @csrf

                            <div class="form-group">
                                <input type="text"
                                       name="title"
                                       placeholder="Title"
                                       value="{{ old('title') }}"
                                       class="form-control">
                            </div>

                            <div class="form-group">
                                <textarea name="body" id="body" cols="30" rows="10" class="form-control">{{old('body')}}</textarea>
                            </div>

                            <div class="form-group">
                                <select name="status" id="status" class="custom-select">
                                    <option value="1">Published</option>
                                    <option value="2">Draft</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <button class="btn btn-sm btn-primary" type="submit">
                                    Submit
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
