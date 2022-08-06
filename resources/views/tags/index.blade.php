@extends('layouts.app')
@section('content')
    <section class="hero is-medium is-info">
        <div class="container">
            <div class="hero-body has-text-centered" style="height: 50%;">

                <p class="title">
                    tag Index page
                </p>
                <p class="subtitle">
                    this is where you will see all tag
                </p>
                <p class="title">
                    <button class="button" class="button is-success"><a href="{{ route('tags.create') }}"><b>Create New
                                Tag</b></a></button>
                </p>
            </div>
        </div>
    </section>
    <br>
    <section>
        <div class="container">


            @foreach ($tags as $tag)
                <div class="columns    ">
                    <div class=" card column is-centered is-8>

                      <div class="columns is-centered">
                        {{ $tag->name }}
                    <a href="{{ route('tags.edit', ['tag' => $tag->id]) }}">edit</a>
                    <form action="{{ route('tags.destroy', ['tag' => $tag->id]) }}" method="POST">
                        @csrf
                        @METHOD('DELETE')

                        <button type="submit">Delete</button>
                    </form>
                    </div>
                </div>

        @endforeach

        </div>
    </section>
@endsection
