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
                            <input class="input" type="text" placeholder="category" name='cate_name'>
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
                </Form>
            </div>
        </div>
    </div>


@endsection
