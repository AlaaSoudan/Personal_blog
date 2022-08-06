@extends('layouts.app')

@section('content')
<section class="hero is-medium is-info">
        <div class="container">
            <div class="hero-body has-text-centered" style="height: 50%;">

                <p class="title">
                    Category Index page
                </p>
                <p class="subtitle">
                    this is where you will see all categories
                </p>
                <p class="title">
                    <button class="button" class="button is-success"><a href="{{ route('categories.create') }}"><b>Create New
                                Category</b></a></button>
                </p>
            </div>
        </div>
    </section>
    <br>
    <section>
        <div class="container">



            @foreach ($categories as $category)
                <div class="columns    ">
                    <div class=" card column is-centered is-8 ">
                      <p><span class="has-text-weight-semibold">  category name: </span>{{ $category->cate_name }}</p>
                         <br>
                    <p><span class="has-text-weight-semibold">slug: </span> {{ $category->slug }}</p>
                     <br>
                         <button > <a href="{{ route('categories.edit', ['category' => $category->id]) }}">edit</a><buton>
                        <form action="{{ route('categories.destroy', ['category' => $category->id]) }}" method="POST">
                            @CSRF
                            @METHOD('DELETE')

                            <button type="submit">Delete</button>
                    </div>
                    </div>
            @endforeach
        </div>
    </section>
@endsection
