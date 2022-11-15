@extends('layouts.app')
@section('content')
    <div class="columns  is-multiline">

            <div class="column is-12 ">

               <div class="title"> {{ $article->title }}</div>


                    <div class="card-content">

                            <div class="media">
                                <div class="media">
                                    <img src="{{ asset($article->image) }}" width="200" height="100">
                                </div>
                            </div>

                        <div class="media-content">
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

                            </a> <a href="#"></a>
                            <br>
                            {{ $article->created_at }}
                        </div>
                    </div>
                </div>
            </div>

    </div>
@endsection
