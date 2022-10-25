@extends('layouts.app')

@section('content')
<section class="hero  ">
        <div class="container">
            <div class="hero-body has-text-centered" style="height: 50%;">

                <p class="title">
                    {{__('messages.Category Index page')}}
                </p>
                <p class="subtitle">
                    this is where you will see all categories
                </p>
                <br>
                    <button class="button" class="button is-success"><a href="{{ route('categories.create') }}"><b>{{__('messages.create new category')}}</b></a></button>

                </p>
            </div>
        </div>
    </section>
    <br>
    <section>
        <div class="container">




                <div class="columns  is-multiline">
                  @foreach ($categories as $category)
                    <div class="  column is-centered is-4  ">
                      <p><span class="has-text-weight-semibold">  category name: </span>{{ $category->cate_name }}</p>
                         <br>
                    <p><span class="has-text-weight-semibold">slug: </span> {{ $category->slug }}</p>
                     <br>
                          <button class="button is-info is-light"> <a href="{{ route('categories.edit', ['category' => $category->slug]) }}">edit</a><buton>
                          <button class= "button is-hidden">
                          <form action="{{ route('categories.destroy', ['category' => $category->slug]) }}" method="POST">
                            @CSRF
                            @METHOD('DELETE')

                            <button type="submit" class="button is-danger is-light" type="submit">Delete</button>
                    </div>
                      @endforeach
                    </div>

        </div>
    </section>
@endsection
