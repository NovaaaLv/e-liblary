@props([
'name' => '',
'id' => '',
'placeholder' => 'Search'
])

<div class="border border-slate-500 rounded-md flex overflow-hidden h-10 items-center ">
  <input type="text" name="" id="search" placeholder="{{$placeholder}}"
    class="border-none outline-none shadow-none focus:ring-0 focus:outline-none text-sm text-slate-600">
  <label for="search" class="cursor-pointer">
    <i class="fa fa-search text-slate-500 px-2"></i>
  </label>
</div>