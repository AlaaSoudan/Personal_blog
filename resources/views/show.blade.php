@extends('layouts.app')
@section('content')
<div class="columns is-vcentered is-multiline">
            <form action="{{ route('filter') }}" method="GET">
                        <div class="control">
            <div class="select">
              <select name="category_id" >
                @foreach ($categories as $category)
                  <option value="{{ $category->id }}">{{ $category->cate_name }}</option>
                @endforeach
              </select>
            </div>
                <button type="submit">Search</button>
            </form>


@foreach ($article as $article)
            <div class="column is-4  ">
                <div class="card">
                    {{ $article->title }}

                    <div class="card-content">
                        <div class="media">

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
                </div>
                </div>
        @endforeach
  @endsection
