{{--@forelse($articles as $article)
<div class="card mb-3">
    <div class="card-header">{{$article->title}}</div>

    <div class="card-body">
        {{ substr($article->body, 0, 250) }}

        <div class="mt-3">
            <a href="{{ route('articles.show', ['article' => $article->id]) }}"
               class="btn btn-info btn-sm">View</a>

            <a href="{{ route('articles.edit', ['article' => $article->id]) }}"
               class="btn btn-success btn-sm">Edit</a>
            <a href="javascript:void(0)" onclick="event.preventDefault();
                                                     document.getElementById('delete-article').submit();"
               class="btn btn-danger btn-sm">Delete</a>
            <form id="delete-article" action="{{ route('articles.destroy', ['article' => $article->id]) }}"
                  method="POST" class="d-none">
                @csrf
                @method('DELETE')
            </form>
        </div>
    </div>
</div>
@empty

@endforelse
<div class="mt-lg-4">
    {{ $articles->links() }}
</div>--}}
