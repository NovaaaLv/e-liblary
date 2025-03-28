@props([
'isSearch' => false,
])

@if ($isSearch)
<div class="flex justify-between">
  {{$slot}}
</div>
@else
<div class="">
  {{$slot}}
</div>
@endif