@props([
'status' => null,
'message' => null,
])

@if ($status === session('success'))

<div class="w-full rounded-md px-6 py-3 bg-emerald-600 mt-2">
  <span class="text-white">{{$status}}</span>
</div>

@else

<div class="w-full rounded-md px-6 py-3 bg-red-600 mt-2">
  <span class="text-white">{{$message}}</span>
</div>

@endif