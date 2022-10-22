@extends('layouts.app')

@section('content')


    <div class="columns is-vcentered is-multiline">

        <div class="column is-12">
            <div class="buttons is-centered">
              video viewer({{$videos->viewer}})
            </div>
<iframe width="560" height="315" src="https://www.youtube.com/embed/GVNDbTwOSiw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        @endsection
