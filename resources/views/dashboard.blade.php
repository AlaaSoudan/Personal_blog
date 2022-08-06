@extends('layouts.app')

<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Dashboard') }}
    </h2>
</x-slot>
@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
    <div class='contanier'>
        <p class="title">
            <button class="button" class="button is-success"><a href="{{ route('articles.index') }}"><b>
                        articles</b></a></button>
            <button class="button" class="button is-success"><a href="{{ route('categories.index') }}"><b>
                        categories</b></a></button>
            <button class="button" class="button is-success"><a href="{{ route('tags.index') }}"><b>
                        Tags</b></a></button>
        </p>
    </div>
@endsection
