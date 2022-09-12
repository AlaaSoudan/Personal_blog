@extends('layouts.app')

@section('content')
  <section class="section">
    <div class="container">
      <div class="title is-2">Create New Tag</div>
      <form action="{{ route('tags.store') }}" method="POST">
        @csrf
            <div class="field">
              <label class="label">Tag Name</label>
              <div class="control">
                <input class="input " name="name" type="text"  placeholder="name">
              </div>

            </div>



        <div class="field is-grouped">
          <div class="control">
            <button class="button is-link">submit</button>
          </div>
          <div class="control">
            <button class="button is-link is-light">Cancel</button>
          </div>
        </div>
      </form>
    </div>
  </section>
@endsection
