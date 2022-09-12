@extends('layouts.app')

  @section('content')
  <section class="hero is-medium is-info">
{{--   <div class="hero-body">
    <p class="title">
      hello
    </p>

    <p class="subtitle">
      welcome to personal blog
    </p>
    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsu
  </div>


</div> --}}

<div class="container my-5">
    <div class="row text-center">
        <div class="col-12">
        {{-- Splitting url so that locale can be set to url and    after redirection stays on the same page --}}
        @php
          $url = url()->full();
          $pos = strpos($url, app()->getLocale());
        @endphp
        <a href="{{ substr_replace($url,"en",$pos,2) }}" class="btn btn-info"> English</a>
        <a href="{{ substr_replace($url,"ar",$pos,2) }}" class="btn btn-primary"> Arabic</a>
        </div>
        <div class="col-12 mt-5">
            <h1>{{ __('aboutme.title') }}</h1>
            <p>{{ __('aboutme.subtitle') }}</p>
        </div>
    </div>
</div>


</section>
<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-linkedin"></a>
<a href="#" class="fa fa-youtube"></a>
<a href="#" class="fa fa-instagram"></a>
  @endsection


<style>
.fa {
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}



.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}


</style>
