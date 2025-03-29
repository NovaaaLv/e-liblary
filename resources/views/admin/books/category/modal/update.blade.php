<!-- Modal -->
<section
  class="fixed z-50 top-0 left-0 right-0 bottom-0 bg-slate-800/50 opacity-0 scale-0 transition-all duration-300 flex justify-center items-center"
  id="container-modal">
  <div class="bg-white p-4 rounded shadow-lg w-1/2 relative">
    <x-modal.text-head label="UPDATE CATEGORY" />

    {{-- Form --}}
    <form id="updateForm" method="POST">
      @csrf
      @method('PUT')
      <x-form.input label="Nama Kategori Baru" value="" id="category_name" name="nama_kategori" />
      <x-form.button.submit />
    </form>

    {{-- Tombol Close --}}
    <button class="bg-red-500 text-white px-4 py-2 rounded absolute -top-3 -right-5" onclick="closeModal()">
      <i class="fa fa-times"></i>
    </button>
  </div>
</section>

@push('script')
<script>
  const container = document.getElementById('container-modal');
  const categoryNameInput = document.getElementById('category_name');
  const updateForm = document.getElementById('updateForm');

  // Function untuk menampilkan modal dengan data dinamis
  function updateModal(button) {
    const categoryName = button.getAttribute('data-category'); // Ambil nama kategori
    const categoryId = button.getAttribute('data-id'); // Ambil ID kategori

    console.log("Nama Kategori:", categoryName);
    console.log("ID Kategori:", categoryId);

    // Update action pada form dengan ID yang sesuai
    updateForm.action = `/admin/books/category/update/${categoryId}`;

    // Isi input field dengan nama kategori
    categoryNameInput.value = categoryName;

    // Tampilkan modal
    container.classList.remove('opacity-0', 'scale-0');
    container.classList.add('opacity-100', 'scale-100');
  }

  // Function untuk menutup modal
  function closeModal() {
    // Sembunyikan modal
    container.classList.remove('opacity-100', 'scale-100');
    container.classList.add('opacity-0', 'scale-0');
  }
</script>
@endpush