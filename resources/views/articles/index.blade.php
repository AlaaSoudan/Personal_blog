@extends('layouts.app')
<style>

.card {

   height: 100%;
}

</style>
@section('content')
    <section class="hero is-mideum ">
        <div class="container">
            <div class="hero-body has-text-centered" style="height: 50%;">

                <p class="title">
                    Sanabel Blog
                </p>
                <p class="subtitle">
                    Welcome to our Blog, here you will learn about Laravel
                </p>

                <br>
                <br>
                <div class="title is-3 has-text-centered">
                    <p class="title">
                        <button class="button" class="button is-success"><a href="{{ route('articles.create') }}"><b>Create
                                    New Articles</b></a></button>
                    </p>
                </div>
    </section>
    <section>
        <div class="columns  is-multiline">
            @foreach ($article as $article)
                <div class="column is-4 is-centered">
                    <div class="card">


                        <div class="card-content">
                            <p class="title is-4">{{ $article->title }}</p>
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
                                <span class="has-text-link has-text-weight-semibold"> {{__('messages.categories')}}:</span>
                                {{ $article->category->cate_name }} <br>
                                <span class="has-text-link has-text-weight-semibold"> {{__('messages.tags')}}:</span>
                                @foreach ($article->tags as $tag)
                                    <span class="tag is-warning">{{ $tag->name }}</span>
                                @endforeach

                                </a>
                                <br>
                                created:{{ $article->created_at }}
                            </div>
                          <a class=" button is-info is-light" href="{{ route('articles.edit', ['article' => $article->id]) }}">edit</a>
                          <button class= "button is-hidden">

                                 <form action="{{ route('articles.destroy', ['article' => $article->id]) }}" method="POST">
                            @CSRF
                            @METHOD('DELETE')

                            <button type="submit" class="button is-danger is-light" type="submit">Delete</button>


                        </div>
                    </div>
                </div>
            @endforeach
        </div>



        </div>

        </div>


        </div>
        </div>
    @endsection
    @section('script')
        <script>
            $(document).ready(function() {

                        $('.addtocartbtn').click,
                            function(e) {
                                e.preventDefault();

                                prod_qty = $(this).closest('.product_data').find('input[id="qty-input"]').val();
                                alert("prod_qty ")


                                $.ajaxSetup({
                                    headers: {
                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                    }
                                });
                            @endsection
</script>

