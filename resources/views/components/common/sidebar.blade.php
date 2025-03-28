<aside id="logo-sidebar" class="w-72  bg-white " aria-label="Sidebar">
  <div class="h-full px-3 pb-4 overflow-y-auto">
    <ul class="space-y-2 font-medium sticky top-0">
      <x-common.sidebar.item href="{{route('admin.dashboard')}}" label="Dashboard" icon="fa-chart-line" />
      <x-common.sidebar.item href="{{route('admin.users.index')}}" label="Users" icon="fa-users" />
      <x-common.sidebar.item href="{{route('admin.books.index')}}" label="Books" icon="fa-book" />
    </ul>
  </div>
</aside>