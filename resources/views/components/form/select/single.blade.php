@props([
'datas' => null,
'data_field' => '',
'name' => '',
'id' => '',
])


<select name="{{$name}}" id="{{$id}}"
  class="rounded-md w-full h-[45px] mt-[2px] px-3 text-slate-700 focus:border-slate-600 focus:ring-0 focus:shadow-primary transition-3s outline-0 focus:outline-0">
  @foreach ($datas as $data)
  <option value="{{$data->$id}}">{{$data->$data_field}}</option>
  @endforeach
</select>