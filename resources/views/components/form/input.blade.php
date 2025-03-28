@props([
'label' => '',
'name' => '',
'id' => '',
'type' => 'text'
])

<div class="flex flex-col w-full">
  <label for="{{$id}}" class="text-slate-600">{{$label}}</label>
  <input type="{{$type}}" name="{{$name}}" id="{{$id}}"
    class="rounded-md mt-1 text-slate-700 focus:border-slate-600 focus:ring-0 focus:shadow-primary transition-3s outline-0 focus:outline-0">
</div>