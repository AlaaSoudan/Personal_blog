@extends('layouts.app')
@section('content')
    <section class="hero is-small ">
        <div class="container">
            <div class="hero-body has-text-centered" >

                <p class="title">
                    tag Index page
                </p>
                <p class="subtitle">
                    this is where you will see all tag
                </p>
                <br><br>
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

        <div class="columns  is-multiline">
            @foreach ($tags as $tag)
            <div class="column is-4 is-centered">


                        <p>{{ $tag->name }}</p>
                    <button class="button is-info is-light"> <a href="{{ route('tags.edit',  ['tag' => $tag->slug]) }}">edit </a></button>
                    <button class="button is-hidden">
                        <form action="{{ route('tags.destroy', $tag) }}" method="POST">
                            @csrf
                            @METHOD('DELETE')

                            <button class="button is-danger is-light" type="submit">Delete</button>
                        </form>
                    </button>
             </div>

@endforeach


        </div>

        </div>
    </section>
@endsection
<style>
.card {

   height: 100%;
}
</style>




