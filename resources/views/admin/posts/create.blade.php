@extends('layouts.admin')
@section("page_title", "Crea nuovo post")


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
      <section class="pt-5 mt-5">
        <h1 class="text-primary fw-bold texet-center pt-4 pb-5">CREA NUOVO POST</h1>

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
        <form action="{{ route('admin.posts.store') }}" method="POST">
          @csrf
          {{-- Title --}}
          <div class="mb-3">
            <label for="field_title" class="form-label is-invalid text-primary">Titolo</label>
            <input type="text" name="title" class="form-control" id="field_title">
          </div>
          {{-- Subtitle --}}
          <div class="mb-3">
            <label for="field_subtitle" class="form-label text-primary">Sottotitolo</label>
            <input type="text" name="subtitle" class="form-control" id="field_subtitle">
          </div>
          {{-- Thumb --}}
          <div class="mb-3">
            <label for="field_thumb" class="form-label text-primary">URL Immagine</label>
            <input type="text" name="thumb" class="form-control" id="field_thumb">
          </div>
          {{-- Text --}}
          <div class="mb-3">
            <label for="field_text" class="form-label text-primary">Testo</label>
            <textarea rows="5" type="text" name="text" class="form-control" id="exampleFormControlTextarea1"></textarea>
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
            <button class="btn btn-primary" type="submit">Crea</button>
          </div>
        </form>
      </section>

    </div>

  </section>

</section>


<script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript">
</script>
<script type="text/javascript">
  bkLib.onDomLoaded(nicEditors.allTextAreas);
</script>
@endsection