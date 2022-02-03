<!-- Sidebar -->
  <section class="_sidebar-admin">
    <ul>
      <li class="pb-2"><a href="/admin" class="fw-bold text-uppercase">{{ Auth::user()->name }}</a></li>
      <li><a href="{{ route('admin.posts.index') }}">Lista Post</a></li>
      <li><a href="{{ route('admin.posts.create') }}">Crea Post</a></li>
      {{-- <li><a href="{{ route("admin.users.edit", Auth::user()->id) }}">Impostazioni Profilo</a></li> --}}
      <li><a href="{{ route("admin.users.edit") }}">Impostazioni Profilo</a></li>
    </ul>
  </section>