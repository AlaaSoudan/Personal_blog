@extends('layouts.app')

@section('content')

<div class=container>
<h1>add articles</h1>
<div class=card>
     <div class="card-body">

<form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
 <div class="field">
  <label class="label">title</label>
  <div class="control">
    <input class="input" type="text" placeholder="title" name='title' >
  </div>
{{--             @error('title')
            <p class="help is-danger">required</p>
          @enderror --}}
</div>


        <div class="field">
          <label class="label">Category</label>

          <div class="control">
            <div class="select">
              <select name="category_id" >
                @foreach ($categories as $category)
                  <option value="{{ $category->id }}">{{ $category->cate_name }}</option>
                @endforeach
              </select>
            </div>
          </div>
          @error('category_id')
            <p class="help is-danger">{{ $message }}</p>
          @enderror
        </div>

        <div class="field">
          <label class="label">Tags</label>

          <div class="control">
             <div class="control">
                <div class="select is-multiple ">
                    <select name="tags[]" multiple>
                        @foreach ($tags as $tag)
                            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                        @endforeach
                    </select>
                </div>
          </div>

        </div>


<div class="file has-name">
  <label class="file-label">
    <input class="file-input"   type="file" name="image">
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
<div class="field">
  <label class="label">content</label>
  <div class="control has-icons-left has-icons-right">
    <input class="textarea" type="textarea" placeholder="content" name='content'>
    <span class="icon is-small is-left">
      <i class="fas fa-user"></i>
    </span>
          @error('content')
            <p class="help is-danger">h</p>
          @enderror
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
<from>

</div>
@endsection
