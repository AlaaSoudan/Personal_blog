@extends('layouts.app')
@section('content')
@foreach ($article as $article)
            <div class="column is-4  ">
                <div class="card">
                    {{ $article->title }}

                    <div class="card-content">
                        <div class="media">

                        </div>
                        <div class="media-content">
                        </div>

                        <div class="content">
                            {{ $article->content }}
                            Phasellus nec iaculis mauris. <a>@bulmaio</a>.
                            <br>
                            Category: {{ $article->category->cate_name }}
                            <br>
                            Tags:
                             @foreach ($article->tags as $tag)
                                <span class="tag is-warning">{{ $tag->name }}</span>
                            @endforeach

                            </a> <a href="#"></a>
                            <br>
                            {{ $article->created_at }}
                        </div>
                    </div>
                </div>
                </div>
        @endforeach
  @endsection


