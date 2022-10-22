@extends('layouts.app')
@section('content')
    <section class="hero is-small is-info">
        <div class="container">
            <div class="hero-body has-text-centered" >

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
                <li>{{ $tag->name }}
                    <button class="button is-info is-light"> <a href="{{ route('tags.edit',  ['tag' => $tag->slug]) }}">edit </a></button>
                    <button class="button is-hidden">
                        <form action="{{ route('tags.destroy', $tag) }}" method="POST">
                            @csrf
                            @METHOD('DELETE')

                            <button class="button is-danger is-light" type="submit">Delete</button>
                        </form>
                    </button>


                </li>



        </div>
        @endforeach

        </div>
    </section>
@endsection
<style>
.card {

   height: 100%;
}
</style>
