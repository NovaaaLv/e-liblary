@props([
'label' => '',
'datas' => null,
'data_field' => '',
'name' => '',
'id' => '',
'value' => ''
])

<div class="w-full flex flex-col" id="container">
  <label for="{{$id}}" class="text-slate-600">{{$label}}</label>
  <div class="w-full flex gap-2 items-center">
    <select name="{{$name}}" id="{{$id}}"
      class="rounded-md w-[80%] h-[45px] mt-[2px] px-3 text-slate-700 focus:border-slate-600 focus:ring-0 focus:shadow-primary transition-3s outline-0 focus:outline-0">
      @foreach ($datas as $data)
      <option value="{{$data->$value}}">{{$data->$data_field}}</option>
      @endforeach
    </select>

    <button onclick="addSelect()" type="button"
      class="w-[20%] bg-teal-600 text-white border border-teal-600 hover:bg-white hover:text-teal-600 px-8 rounded-md mt-[2px] transition-3s py-2">Add</button>
  </div>
</div>

<script>
  function addSelect() {
    const container = document.getElementById('container');
    const additionalSelect = `
    <div class="w-full flex gap-2 items-center mt-2">
      <select name="{{$name}}" 
        class="rounded-md w-[80%] h-[45px] px-3 text-slate-700 focus:border-slate-600 focus:ring-0 focus:shadow-primary transition-3s outline-0 focus:outline-0">
        @foreach ($datas as $data)
        <option value="{{$data->$value}}">{{$data->$data_field}}</option>
        @endforeach
      </select>
    
      <button onclick="removeAdditionalSelect(this)" type="button"
        class="w-[20%] bg-red-600 text-white border border-red-600 hover:bg-white hover:text-red-600 rounded-md transition-3s py-2">Remove</button>
    </div>`;
    container.insertAdjacentHTML('beforeend', additionalSelect);
  }

  function removeAdditionalSelect(element) {
    element.parentElement.remove();
  }
</script>