@extends('layouts.admin')
@section("page_title", "Modifica post | ".$post->title)

@section('content')
<section class="_admin-home">

  <!-- Sidebar -->
  @include('admin.partials.sidebar')


  <!-- Main section-->
  <section class="_main-admin">
    <div class="container">

      <!-- Hero/Avatar -->
      @include('admin.partials.avatar')

      <!-- Crea post -->
      <section class="_create pt-5 mt-5">
        <h1 class="text-primary fw-bold texet-center pt-4 pb-5">IMPOSTAZIONI PROFILO</h1>

        @if($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
              <li> {{$error}} </li>
            @endforeach
          </ul>
        </div>
        @endif

        <!-- Form -->
        <form action="{{ route('admin.users.update', $post->id) }}" method="POST">
          @csrf
          @method('PUT')
          {{-- Title --}}
          <div class="mb-3">
            <label for="field_title" class="form-label is-invalid text-primary">Titolo</label>
            <input type="text" name="title" class="form-control" id="field_title" value="{{ $post->title }}">
          </div>
          {{-- Subtitle --}}
          <div class="mb-3">
            <label for="field_subtitle" class="form-label text-primary">Sottotitolo</label>
            <input type="text" name="subtitle" class="form-control" id="field_subtitle" value="{{ $post->subtitle }}">
          </div>
          {{-- Thumb --}}
          <div class="mb-3">
            <label for="field_thumb" class="form-label text-primary">URL Immagine</label>
            <input type="text" name="thumb" class="form-control" id="field_thumb" value="{{ $post->thumb }}">
          </div>
          {{-- Text --}}
          <div class="mb-3">
            <label for="field_text" class="form-label text-primary">Testo</label>
            <textarea rows="7" type="text" name="text" class="form-control" id="exampleFormControlTextarea1">{{ $post->text }}</textarea>
          </div>
          {{-- Category --}}
          <div class="mb-4" style="width: 130px">
            <label for="category_id" class="text-primary pb-2">Categoria</label>
            <select name="category_id" id="category_id" class="form-select">

              @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
              @endforeach
              
            </select>
          </div>
          {{-- Buttons --}}
          <div>
            <button class="btn btn-link" type="reset">Reset</button>
            <button class="btn btn-primary" type="submit">Aggiorna</button>
          </div>
        </form>
        
      </section>

    </div>

  </section>

</section>
@endsection