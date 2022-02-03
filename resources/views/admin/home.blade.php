@extends('layouts.admin')
@section("page_title", "Benvenuto ".Auth::user()->name)


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
        <h1 class="text-primary fw-bold texet-center pt-4 pb-5 text-uppercase">BENVENUTO {{Auth::user()->name}}</h1>




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