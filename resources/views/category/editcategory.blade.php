@extends('layouts.app')

@section('content')

  <section class="section">
    <div class="container">
      <div class="title is-2">Edit {{ $category->cate_name }}</div>
    <form action="/categories/{{ $category->id }}" method="POST" enctype="multipart/form-data">
     @method('PUT')
        @csrf

    <div class="field">
  <label class="label">category</label>
  <div class="control">
    <input class="input" type="text" placeholder="category" name='cate_name' value="{{ old('cate_name',$category->cate_name) }}" >
  </div>
</div>

<div class="field">
  <label class="label">slug</label>
  <div class="control has-icons-left has-icons-right">
    <input class="input" type="text" placeholder="slug" name='slug' value="{{ old('slug',$category->slug) }}">
    <span class="icon is-small is-left">
      <i class="fas fa-user"></i>
    </span>

  </div>
<div class="file has-name">
  <label class="file-label">
    <input class="file-input" type="file" name="image" value="{{ old('image',$category->image) }}">
    <span class="file-cta">
      <span class="file-icon">
        <i class="fas fa-upload"></i>
      </span>
      <span class="file-label">
        Choose a file…
      </span>
    </span>

  </label>
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

