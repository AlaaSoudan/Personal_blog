@extends('layouts.app')

@section('content')
  <section class="section">
    <div class="container">
      <div class="title is-2">Edit {{ $tag->name }}</div>
      <form action="/tags/{{ $tag->slug }}" method="POST">
       @method('PUT')
        @csrf
        @method('PUT')
        <div class="field">
          <label class="label">Tag Name</label>
          <div class="control">
            <input class="input" name="name" type="text" value="{{ old('name') ?? $tag->name }}" placeholder="name">
          </div>




        <div class="field is-grouped">
          <div class="control">
            <button class="button is-link">Update Tag</button>
          </div>
          <div class="control">
            <button class="button is-link is-light">Cancel</button>
          </div>
        </div>
      </form>
    </div>
  </section>

@endsection
