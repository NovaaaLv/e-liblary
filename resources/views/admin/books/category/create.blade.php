<x-app-layout>
  <x-common.navbar.sub-navbar>
    <x-common.navbar.item href="{{route('admin.books.index')}}" label="Books Data" />
    <x-common.navbar.item href="{{route('admin.books.category.index')}}" label="Category" />
  </x-common.navbar.sub-navbar>

  <x-common.card.wrapper>
    <x-common.card.head label="Books Data" :isSearch="false">
      <x-common.card.text-heading label="Add Category" />
    </x-common.card.head>

    @if(session('success'))
    <x-form.dialog :status="session('success')" />
    @endif

    @error('nama_kategori')
    <x-form.dialog status="error" :message="$message" />
    @enderror

    <section class="w-full mt-5">
      <form action="{{route('admin.books.category.store')}}" method="POST">
        @csrf
        <x-form.input label="Category Name" id="category_name" name="nama_kategori" />
        <x-form.button.submit />
    </section>
  </x-common.card.wrapper>
</x-app-layout>