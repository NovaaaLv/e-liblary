<x-app-layout>
  <x-common.navbar.sub-navbar>
    <x-common.navbar.item href="{{route('admin.books.index')}}" label="Books Data" />
    <x-common.navbar.item href="{{route('admin.books.category.index')}}" label="Category" />
  </x-common.navbar.sub-navbar>

  <x-common.card.wrapper>
    <x-common.card.head label="Books Data" :isSearch="true">
      <x-common.card.text-heading label="Books Data" />
      <x-common.card.search />
    </x-common.card.head>

    {{-- Action --}}
    <section class="w-full mt-5">
      <a href="{{route('admin.books.create')}}"
        class="bg-indigo-200 text-slate-800 font-semibold border border-indigo-200 hover:bg-transparent hover:text-indigo-500 hover:border-indigo-500 px-6 py-2 rounded-md transition-3s">Add
        Book</a>
    </section>

    {{-- Table --}}
    <section class="mt-5">
      <table class="table-auto w-full bg-white rounded-lg overflow-hidden">
        <thead>
          <tr class="bg-indigo-100 text-slate-700">
            <th class="px-4 py-2">No</th>
            <th class="px-4 py-2">Book Title</th>
            <th class="px-4 py-2">Author</th>
            <th class="px-4 py-2">Category</th>
            <th class="px-4 py-2">Books Available</th>
            <th class="px-4 py-2">Status</th>
            <th class="px-4 py-2">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr class=" hover:bg-slate-100 text-slate-700">
            <td class="px-4 py-2 text-center">1</td>
            <td class="px-4 py-2">The Alchemist</td>
            <td class="px-4 py-2">Paulo Coelho</td>
            <td class="px-4 py-2">Fiction</td>
            <td class="px-4 py-2 text-center">5</td>
            <td class="px-4 py-2 text-center font-semibold">
              <div class="px-4 py-2 rounded text-teal-600 bg-teal-100">Available</div>
            </td>
            <td class="px-4 py-2 text-center">
              <button>
                <i class="fa fa-ellipsis-v"></i>
              </button>
            </td>
          </tr>
          <tr class=" hover:bg-slate-100 text-slate-700">
            <td class="px-4 py-2 text-center">2</td>
            <td class="px-4 py-2">1984</td>
            <td class="px-4 py-2">George Orwell</td>
            <td class="px-4 py-2">Dystopian</td>
            <td class="px-4 py-2 text-center">0</td>
            <td class="px-4 py-2 text-center font-semibold">
              <div class="px-4 py-2 rounded text-red-600 bg-red-100">Out of Stock</div>
            </td>
            <td class="px-4 py-2 text-center">
              <button>
                <i class="fa fa-ellipsis-v"></i>
              </button>
            </td>
          </tr>
        </tbody>
      </table>
    </section>
  </x-common.card.wrapper>
</x-app-layout>