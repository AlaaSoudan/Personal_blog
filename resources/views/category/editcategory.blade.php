@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="container">

            <form action="/categories/{{ $category->slug }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class='columns '>
                    <div class='card column is-half is-offset-one-quarter  '>
                      <div class="title is-2">Edit {{ $category->cate_name }}</div>
                        <div class="card-body">
                            <input class="input" type="text" placeholder="category" name='cate_name'
                                value="{{ old('cate_name', $category->cate_name) }}">
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

                </div>

        </div>





        </div>
    </section>
@endsection
