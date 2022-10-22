@extends('layouts.app')
@section('content')

@if($article->isNotEmpty())
    <div class="columns  is-multiline">
        @foreach ($article as $article)
            <div class="column is-4 is-centered">
                <div class="card">


                    <div class="card-content">
                     <p class="title is-4">{{ $article->title }}</p>
                        <div class="media">
                            <div class="media">
                                <img src="{{asset($article->image)}}" width="200" height="100" >
                            </div>
                        </div>
                        <div class="media-content">
                        </div>

                        <div class="content">
                            {{ $article->content }}

                            <br>
                            <span class="has-text-link has-text-weight-semibold">  Category:</span>   {{ $article->category->cate_name }}                          <br>
                           <span class="has-text-link has-text-weight-semibold"> Tags:</span>
                            @foreach ($article->tags as $tag)
                                <span class="tag is-warning">{{ $tag->name }}</span>
                            @endforeach

                            </a>
                            <br>
                            created:{{ $article->created_at }}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@else
    <div>
        <h2>No posts found</h2>
    </div>
@endif
@endsection
