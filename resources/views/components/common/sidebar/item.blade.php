@props([
'isDropdown' => false,
'href' => '#',
'icon' => '',
'label' => '',
'dropdown_id' => '',
'dropdown_menu_id' => '',
])

@php
// Cek apakah link aktif
$isActive = request()->url() === url($href);
@endphp

@if ($isDropdown)
<li class="w-full">
  <button type="button" class="flex items-center justify-between w-full p-2 rounded-lg transition-all group
    {{ $isActive ? 'bg-cyan-50 text-indigo-600' : 'text-gray-900 hover:bg-cyan-50' }}" id="{{ $dropdown_id }}">

    <div class="flex items-center">
      <i class="w-5 h-5 fa-solid {{ $icon }} 
         {{ $isActive ? 'text-indigo-600' : 'text-gray-500 group-hover:text-indigo-800' }} transition-all"></i>
      <span class="ms-3">{{ $label }}</span>
    </div>

    <i id="dropdown_icon" class="text-[15px] text-right fa-solid fa-chevron-down 
      {{ $isActive ? 'text-indigo-600' : 'text-gray-500 group-hover:text-indigo-800' }} transition-all"></i>
  </button>

  <div class="hidden mt-2" id="{{ $dropdown_menu_id }}">
    <ul class="pl-4 space-y-2">
      {{ $slot }}
    </ul>
  </div>
</li>
@else
<li>
  <a href="{{ $href }}" class="flex items-center p-2 rounded-lg transition-all group 
     {{ $isActive ? 'bg-cyan-50 text-indigo-600' : 'text-gray-900 hover:bg-cyan-50' }}">
    <i class="w-5 h-5 fa-solid {{ $icon }} 
       {{ $isActive ? 'text-indigo-600' : 'text-gray-500 group-hover:text-indigo-800' }} transition-all"></i>
    <span class="ms-3">{{ $label }}</span>
  </a>
</li>
@endif

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const dropdownButton = document.getElementById("{{ $dropdown_id }}");
    const dropdownMenu = document.getElementById("{{ $dropdown_menu_id }}");
    const dropdownIcon = document.getElementById('dropdown_icon');

    if (dropdownButton && dropdownMenu) {
      // Toggle visibility on button click
      dropdownButton.addEventListener('click', (e) => {
        e.stopPropagation();
        dropdownMenu.classList.toggle('hidden');
        dropdownIcon.classList.toggle('rotate-180');
      });
    }
  });
</script>