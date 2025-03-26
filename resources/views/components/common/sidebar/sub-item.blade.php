@props([
'href' => '#',
'icon' => '',
'label' => '',
])

@php
$isActive = request()->url() === url($href);
@endphp

<li>
  <a href="{{ $href }}" class="flex items-center p-2 rounded-lg transition-all group 
     {{ $isActive ? 'bg-cyan-50 text-indigo-600' : 'text-gray-900 hover:bg-cyan-50' }}">
    <i class="w-4 h-4 fa-solid {{ $icon }} 
       {{ $isActive ? 'text-indigo-600' : 'text-gray-500 group-hover:text-indigo-800' }} transition-all"></i>
    <span class="text-sm ms-3">{{ $label }}</span>
  </a>
</li>