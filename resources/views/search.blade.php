@extends('layouts.app')
@section('content')

@if($article->isNotEmpty())
        @foreach ($article as $article)
            <div class="column is-4  ">
                <div class="card">
                    {{ $article->title }}

                    <div class="card-content">
                        <div class="media">

                        </div>
                        <div class="media-content">
                            <img>
                            <{{ $article->image }}
                        </div>
                        <div class="content">
                            {{ $article->content }}
                            <br>

                            Category: {{ $article->category->cate_name }}

                            <br>
                            Tags:
                             @foreach ($article->tags as $tag)
                                <span class="tag is-warning">{{ $tag->name }}</span>
                            @endforeach

                            <br>
                            {{ $article->created_at }}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
@else
    <div>
        <h2>No posts found</h2>
    </div>
@endif
@endsection
