@extends('layouts.admin')
@section("page_title", $post->title)


@section('content')
<section class="_admin-home">

  <!-- Sidebar -->
  @include('admin.partials.sidebar')


  <!-- Main section-->
  <section class="_main-admin">
    <div class="container">

      <!-- Hero/Avatar -->
      @include('admin.partials.avatar')

      <!-- Single Post -->
      <section class="pt-5 mt-5">
        <div class="row justify-content-center pt-5">
          <div class="col-9">

            <div class="card mb-3">
              <img src="{{$post->thumb}}" class="card-img-top" style="height: 320px; object-fit: cover" alt="{{$post->title}}">
              <div class="card-body">
                <h5 class="card-title">{{$post->title}}</h5>
                <p class="card-text"><small class="text-muted">{{$post->subtitle}}</small></p>

                <p class="card-text">written by: {{$post->user->name}}</p>
                <p class="card-text">category: {{$post->category->name}}</p>

                <p class="card-text pt-3">{!! $post->text !!}</p>
              </div>
            </div>

          </div>
        </div>

      </section>

    </div>

  </section>

</section>

@endsection