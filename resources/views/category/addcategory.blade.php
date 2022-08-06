@extends('layouts.app')

@section('content')
    <div class='columns '>
        <div class='card column is-half is-offset-one-quarter  '>
        <label class="label"> Add category</label>
            <div class="card-body">

                <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="field">
                        <label class="label">category</label>
                        <div class="control">
                            <input class="input" type="text" placeholder="category" name='cate_name' value="{{ old('cate_name') }}">
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">slug</label>
                        <div class="control has-icons-left has-icons-right">
                            <input class="input" type="text" placeholder="slug" name='slug' value="{{ old('slug') }}">
                            <span class="icon is-small is-left">
                                <i class="fas fa-user"></i>
                            </span>

                        </div>
                        <div class="file has-name">
                            <label class="file-label">
                                <input class="file-input" type="file" name="image" value="{{ old('image') }}">
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
                </Form>
            </div>
        </div>
    </div>

    </div>
@endsection
