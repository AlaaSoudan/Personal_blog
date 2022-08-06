@extends('layouts.app')

@section('content')
    <section class="hero container">
        <div class="hero-body">
            <img
                src='https://img.freepik.com/free-vector/dark-hexagonal-background-with-gradient-color_79603-1410.jpg?w=2600'>
            <div class=" title text-block">
                <h4>welcome to personnal blog</h4>
                <p>read more and more </p>
            </div>
        </div>


    </section>

    <div class="columns is-vcentered is-multiline">
        @foreach ($article as $article)
            <div class="column is-4  ">
                <div class="card">
                    {{ $article->title }}

                    <div class="card-content">
                        <div class="media">

                        </div>
                        <div class="media-content">
                            <img>
                            <{{ $article->image }}< /img>
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
        <div class="column is-12">
            <div class="buttons is-centered">
                <a href="/show" class="button is-info">See all posts</a>
            </div>
        @endsection


        <style>
            .container {
                position: relative;
                text-align: center;
                color: white;
            }

            .text-block {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);

            }
        </style>
