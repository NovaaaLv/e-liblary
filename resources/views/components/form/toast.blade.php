@props([
'status' => null,
'message' => null,
])

@if ($status === session('success'))

<div class="fixed top-5 right-5 z-50 opacity-0" id="toast">
  <div class="flex items-center gap-3 bg-green-500 text-white px-4 py-3 rounded-lg shadow-lg animate-slide-in">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
      class="w-6 h-6">
      <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2l4 -4" />
    </svg>
    <span id="toast-message" class="font-semibold">{{ $status }}</span>
  </div>
</div>

@else

<div class="fixed top-5 right-5 z-50 opacity-0" id="toast-error">
  <div class="flex items-center gap-3 bg-red-500 text-white px-4 py-3 rounded-lg shadow-lg animate-slide-in">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
      class="w-6 h-6">
      <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
    </svg>
    <span class="font-semibold">{{ $message }}</span>
  </div>
</div>

@endif


@push('css')
<style>
  @keyframes slide-in {
    0% {
      transform: translateX(100%);
      opacity: 0;
    }

    100% {
      transform: translateX(0);
      opacity: 1;
    }
  }

  .animate-slide-in {
    animation: slide-in 0.3s ease-out;
  }
</style>
@endpush

@push('script')
<script>
  document.addEventListener('DOMContentLoaded', function() {
        const toast = document.getElementById('toast');
        if (toast) {
            toast.classList.remove('opacity-0');
            setTimeout(() => toast.classList.add('opacity-0'), 3000);
        }
    });
</script>
@endpush