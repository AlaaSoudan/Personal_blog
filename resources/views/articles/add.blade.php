@extends('layouts.app')

@section('content')
    <div class=container>

            <div class='title has-text-centered '> Add article</div>
            <div class='subtitle has-text-centered'> write your own ideas </div>

    <div class='columns '>
        <div class="card  column is-half is-offset-one-quarter">
            <div class="card-body">

                <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="field">
                        <label class="label">title</label>
                        <div class="control">
                            <input class="input" type="text" placeholder="title" name='title'>
                        </div>
                        @error('title')
                            <p class="help is-danger">>{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label class="label">Category</label>

                        <div class="control is-large">
                            <div class="select">
                                <select name="category_id">


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
                            <div class="control" >
                                <div class="select is-multiple" >
                                    <select name="tags[]" multiple>
                                        @foreach ($tags as $tag)
                                            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                        </div>


                        <div class="field">
                            <label class="label">content</label>

                                <input class="textarea" type="textarea" placeholder="content" name='content' >

                                @error('content')
                                    <p class="help is-danger">h</p>
                                @enderror

                        </div>
                        <footer class="card-footer">
                            <div class="field is-grouped">
                                <div class="control">
                                    <button class="button is-link">Submit</button>
                                </div>
                                <div class="control">
                                    <button class="button is-link is-light">Cancel</button>
                                </div>
                            </div>
                    </div>
                    </footer>


            </div>
        </div>
    </div>
@endsection
