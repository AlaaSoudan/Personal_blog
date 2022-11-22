@extends('layouts.app')

<style>
.column {
  display: flex;

}
</style>


@section('content')
    <section class="hero is-middum">
        <div class="hero-body ">

            <div class="columns">
                <div class="column ">
                    <figure class="image is-180X180">

                        <img class="is-rounded" src="https://media.istockphoto.com/id/182838201/photo/daisy-on-white-with-clipping-path.webp?s=612x612&w=is&k=20&c=dMCJZjqAYx-7_KpEAQEs3PPF2X2mvcboYkaRrTv7Xy8=">
                </div>

                <div class="column ">
                    <br>
                    <br>
                    <br>
                    <div class="title justify-content">
                        <p class=' justify-conten'>{{ __('messages.hello') }}</p>
                        <p>{{ __('messages.welcome') }}</p>
                    </div>
                    <div class="subtitle">
                        welcome to personnal blog
                    </div>
                    <br>
                    <br>
                    <br>
                    <form action="/search" method="GET">
                        <div class="field">
                            <p class="control is-expanded has-icons-right">
                                <input class="input" type="text" placeholder="Search..." name="search" required />
                                <span class="icon is-small is-right"><i class="fas fa-search"></i></span>


                            </p>
                        </div>
                    </form>
                </div>


            </div>
        </div>
    </section>


     <div class="columns  is-multiline">
        @foreach ($article as $article)
            <div class="column is-4 is-centered">
                <div class="card">
                    {{ $article->title_en}}

                    <div class="card-content">
                        <div class="media">

                        </div>
                        <div class="media-content">
                        </div>

                        <div class="content">
                            {{ $article->content_en}}

                            <br>
                            {{__('messages.categories')}}: {{ $article->category->cate_name }}
                            <br>
                            {{__('messages.tags')}}:
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
    </div>

    <div class="column is-12">
        <div class="buttons is-centered">
            <a href="/show" class="button is-info">See all posts</a>
        </div>
    @endsection
<style>

.card {

   height: 100%;
}

</style>
{{--
   <script type="application/javascript">
    $(document).ready(function(){

        $('#txtSearch').on('keyup', function(){

            var text = $('#txtSearch').val();

            $.ajax({

                type:"GET",
                url: '127.0.0.1:8000/search',
                data: {text: $('#txtSearch').val()},
                success: function(data) {

                    console.log(data);

                 }



            });
</script>
 --}}
