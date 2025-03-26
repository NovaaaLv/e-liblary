<aside id="logo-sidebar"
  class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 "
  aria-label="Sidebar">
  <div class="h-full px-3 pb-4 overflow-y-auto bg-white ">
    <ul class="space-y-2 font-medium">
      <x-common.sidebar.item href="{{route('admin.dashboard')}}" label="Dashboard" icon="fa-chart-line" />
      <x-common.sidebar.item href="#" label="Users" icon="fa-users" />
      <x-common.sidebar.item href="#" label="Books" icon="fa-book" />
    </ul>
  </div>
</aside>