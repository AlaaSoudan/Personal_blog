@extends('layouts.app')

@section('content')
    <section class="hero is-large is-info">
        <div class="container">
            <div class="hero-body has-text-centered" style="height: 50%;">

                <p class="title">
                    Sanabel Blog
                </p>
                <p class="subtitle">
                    Welcome to our Blog, here you will learn about Laravel
                </p>
                <div class="title is-3 has-text-centered">
                    <p class="title">
                        <button class="button" class="button is-success"><a href="{{ route('articles.create') }}"><b>Create
                                    New Articles</b></a></button>
                    </p>
                </div>
    </section>
    <section>
        <div class="columns ">
            @foreach ($article as $article)
                <div class="column is-8  ">
                    <div class="card">
                        {{ $article->title }}

                        <div class="card-content">
                            <div class="media">
                                         <img src="{{asset($article->image)}}" width="200" height="100" >
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



                        <a href="{{ route('articles.edit', ['article' => $article->id]) }}">edit</a>
                        <form action="{{ route('articles.destroy', ['article' => $article->id]) }}" method="POST">
                            @CSRF
                            @METHOD('DELETE')

                            <button type="submit">Delete</button>
                        </form>
                    </div>

                </div>


        </div>
        </div>
        @endforeach
    @endsection
