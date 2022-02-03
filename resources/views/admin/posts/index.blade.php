@extends('layouts.admin')
@section("page_title", "Sezione Post")


@section('content')
<section class="_admin-home">

  <!-- Sidebar -->
  @include('admin.partials.sidebar')


  <!-- Main section-->
  <section class="_main-admin">
    <div class="container">

      <!-- Hero/Avatar -->
      @include('admin.partials.avatar')

      <section class="_create pt-5 mt-5">
        <h1 class="text-primary fw-bold texet-center pt-4 pb-5">LISTA POST</h1>

        @foreach ($posts as $post)
        <ul class="list-group">
          <li class="list-group-item list-group-item-action d-flex flex-nowrap justify-content-between align-items-center">
            <a href="{{ route('admin.posts.show', $post->id) }}" class="text-black">{{$post->title}} - written by {{$post->user->name}}</a>
            {{-- Btn Edit --}}
            <div>
              <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-sm btn-primary"><i class="far fa-edit"></i></a>
              {{-- Btn Delete --}}
              <form action="{{ route('admin.posts.destroy', $post->id) }}" method="post" class="ps-2 d-inline-block">
                @csrf
                @method('DELETE')
                <input type="submit" id="field_x" class="btn btn-sm btn-danger fw-bold" value=" X ">
              </form>
            </div>
          </li>

        </ul>
        @endforeach

      </section>

    </div>

  </section>

</section>




{{-- <div class="container pt-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Dashboard') }}</div>

        <div class="card-body">
          @if (session('status'))
          <div class="alert alert-success" role="alert">
            {{ session('status') }}
          </div>
          @endif

          {{ __('You are logged in!') }}

        </div>
      </div>
    </div>
  </div>
</div> --}}

@endsection