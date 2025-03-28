<x-app-layout>
  <x-common.navbar.sub-navbar>
    <x-common.navbar.item href="{{route('admin.books.index')}}" label="Books Data" />
    <x-common.navbar.item href="{{route('admin.books.category.index')}}" label="Category" />
  </x-common.navbar.sub-navbar>

  <x-common.card.wrapper>
    <x-common.card.head label="Books Data" :isSearch="true">
      <x-common.card.text-heading label="Category List" />
      <x-common.card.search />
    </x-common.card.head>

    {{-- Action --}}
    <section class="w-full mt-5">
      <a href="{{route('admin.books.category.create')}}"
        class="bg-indigo-200 text-slate-800 font-semibold border border-indigo-200 hover:bg-transparent hover:text-indigo-500 hover:border-indigo-500 px-6 py-2 rounded-md transition-3s">Add
        Category</a>
    </section>

    {{-- Table --}}
    <section class="mt-5">
      <table class="table-auto w-full bg-white rounded-lg overflow-hidden">
        <thead>
          <tr class="bg-indigo-100 text-slate-700">
            <th class="px-4 py-2">No</th>
            <th class="px-4 py-2">Name Category</th>
            <th class="px-4 py-2">Action</th>
          </tr>
        </thead>
        @foreach ($categorys as $category)
        <tbody>
          <tr class=" hover:bg-slate-100 text-slate-700">
            <td class="px-4 py-2 text-center">{{$loop->iteration}}</td>
            <td class="px-4 py-2">{{$category->nama_kategori}}</td>
            <td class="px-4 py-2 text-center">
              <button>
                <i class="fa fa-ellipsis-v"></i>
              </button>
            </td>
          </tr>
        </tbody>
        @endforeach

      </table>
    </section>
  </x-common.card.wrapper>
</x-app-layout>