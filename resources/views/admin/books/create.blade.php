<x-app-layout>
  <x-common.navbar.sub-navbar>
    <x-common.navbar.item href="{{route('admin.books.index')}}" label="Books Data" />
    <x-common.navbar.item href="{{route('admin.books.category.index')}}" label="Category" />
  </x-common.navbar.sub-navbar>

  <x-common.card.wrapper>
    <x-common.card.head label="Books Data" :isSearch="false">
      <x-common.card.text-heading label="Add Book" />
    </x-common.card.head>

    @if(session('success'))
    <x-form.dialog :status="session('success')" />
    @endif

    @if ($errors->any())
    @foreach ($errors->all() as $error)
    <x-form.dialog status="error" :message="$error" />
    @endforeach
    @endif

    <section class="w-full mt-5">
      <form action="{{route('admin.books.store')}}" method="POST">
        @csrf
        <div class="flex gap-5 w-full items-start">
          <x-form.input label="Name Of Book" id="judul_buku" name="judul_buku" />
          <x-form.select.multiple label="Category" id="category_name" name="kategori_ids[]" :datas="$categorys"
            data_field="nama_kategori" value="id" />
        </div>
        <div class="flex gap-5 w-full items-start mt-5">
          <x-form.input label="Author" id="penulis" name="penulis" />
          <x-form.input label="Ammount Of Books" id="jumlah_buku" name="jumlah_buku" />
        </div>
        <x-form.button.submit />
    </section>
  </x-common.card.wrapper>
</x-app-layout>