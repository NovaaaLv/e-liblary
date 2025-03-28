@props([
'href' => '#',
'label' => ''
])

@php
$isActive = request()->url() === url($href);
@endphp

<div class="relative inline-block group">
  <a href="{{$href}}"
    class="{{$isActive ? 'bg-indigo-200' : ''}} text-slate-800 font-medium transition-all duration-300 px-5 py-1 rounded-md relative overflow-hidden">{{$label}}
    @if (!$isActive)
    <span
      class="absolute bottom-0 left-0 w-0 h-[2px] bg-indigo-500 transition-all duration-300 ease-in-out group-hover:w-[80%] ml-2"></span>
    @endif

  </a>
</div>