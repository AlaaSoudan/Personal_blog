@extends('layouts.app')

@section('content')

  <section class="section">
    <div class="container">
      <div class="title is-2">Edit {{ $category->cate_name }}</div>
    <form action="/categories/{{ $category->slug }}" method="POST" enctype="multipart/form-data">
     @method('PUT')
        @csrf

    <div class="field">
  <label class="label">category</label>
  <div class="control">
    <input class="input" type="text" placeholder="category" name='cate_name' value="{{ old('cate_name',$category->cate_name) }}" >
  </div>
</div>




<div class="field is-grouped">
  <div class="control">
    <button class="button is-link">Submit</button>
  </div>
  <div class="control">
    <button class="button is-link is-light">Cancel</button>
  </div>
</div>
      </form>
    </div>
  </section>
 @endsection

