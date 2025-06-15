<section class="bg-[#121921] py-20" id="contact">
  <div class="container mx-auto px-4">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold mb-4 text-white">
        {{ __('home.contact.title') }}
      </h2>
      <p class="text-lg text-gray-300">
        {{ __('home.contact.subtitle') }}
      </p>
      <div class="w-20 h-1 bg-[#f5b027] mx-auto mt-6"></div>
    </div>

    <div class="max-w-4xl mx-auto bg-[#1a2736] rounded-lg shadow-xl overflow-hidden">
      <div class="p-8">

        @if(session('success'))
          <div class="text-center py-12">
            <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-green-100 text-green-500 mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
              </svg>
            </div>
            <h3 class="text-2xl font-bold text-white mb-2">
              {{ __('home.contact.sent') }}
            </h3>
            <p class="text-gray-300">
              {{ __('home.contact.thank_you') }}
            </p>
          </div>
        @else
          <form method="POST" action="{{ route('contact.store') }}">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
              <div>
                <label for="name" class="block text-sm font-medium text-gray-200 mb-2">
                  {{ __('home.contact.name') }}
                </label>
                <input type="text" name="name" id="name" required value="{{ old('name') }}"
                  class="w-full px-4 py-3 bg-white border border-gray-300 rounded-md text-gray-900 focus:outline-none focus:ring-2 focus:ring-[#f5b027]"
                  placeholder="{{ __('home.contact.name_placeholder') }}"
                  autocomplete="name">
                @error('name') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
              </div>
              <div>
                <label for="email" class="block text-sm font-medium text-gray-200 mb-2">
                  {{ __('home.contact.email') }}
                </label>
                <input type="email" name="email" id="email" required value="{{ old('email') }}"
                  class="w-full px-4 py-3 bg-white border border-gray-300 rounded-md text-gray-900 focus:outline-none focus:ring-2 focus:ring-[#f5b027]"
                  placeholder="{{ __('home.contact.email_placeholder') }}"
                  autocomplete="email">
                @error('email') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
              </div>
            </div>

            <div class="mb-6">
              <label for="phone" class="block text-sm font-medium text-gray-200 mb-2">
                {{ __('home.contact.phone') }}
              </label>
              <input type="tel" name="phone" id="phone" value="{{ old('phone') }}"
                class="w-full px-4 py-3 bg-white border border-gray-300 rounded-md text-gray-900 focus:outline-none focus:ring-2 focus:ring-[#f5b027]"
                placeholder="{{ __('home.contact.phone_placeholder') }}"
                autocomplete="tel">
              @error('phone') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
            </div>

            <div class="mb-6">
              <label for="message" class="block text-sm font-medium text-gray-200 mb-2">
                {{ __('home.contact.message') }}
              </label>
              <textarea name="message" id="message" required rows="4"
                class="w-full px-4 py-3 bg-white border border-gray-300 rounded-md text-gray-900 focus:outline-none focus:ring-2 focus:ring-[#f5b027]">{{ old('message') }}</textarea>
              @error('message') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
            </div>
            <input type="hidden" name="lang" value="{{ __('home.contact.lang') }}" require>
            <div class="text-center">
              <button type="submit"
                class="inline-flex items-center bg-[#f5b027] text-[#0f2d49] px-6 py-3 rounded-md font-medium hover:bg-[#d99c22] transition-colors">
                  {{ __('home.contact.submit') }}
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-send ml-2 h-5 w-5"><path d="M14.536 21.686a.5.5 0 0 0 .937-.024l6.5-19a.496.496 0 0 0-.635-.635l-19 6.5a.5.5 0 0 0-.024.937l7.93 3.18a2 2 0 0 1 1.112 1.11z"></path><path d="m21.854 2.147-10.94 10.939"></path></svg>
              </button>
            </div>
          </form>
        @endif
      </div>
    </div>
  </div>
</section>
<script>
window.addEventListener('load', function () {

  const nameInput = document.getElementById('name');
    const phoneInput = document.getElementById('phone');

    // Validación del nombre
    nameInput.addEventListener('input', function(e) {
        // Eliminar cualquier carácter que no sea letra o espacio
        this.value = this.value.replace(/[^a-zA-ZÀ-ÿ\s]/g, '');
    });

    // Validación del teléfono
    phoneInput.addEventListener('input', function(e) {
        // Eliminar cualquier carácter que no sea número, +, -, espacio o paréntesis
        this.value = this.value.replace(/[^0-9+\-\s()]/g, '');
    });

    // Prevenir pegado de caracteres no permitidos
    nameInput.addEventListener('paste', function(e) {
        e.preventDefault();
        const pastedText = (e.clipboardData || window.clipboardData).getData('text');
        const cleanText = pastedText.replace(/[^a-zA-ZÀ-ÿ\s]/g, '');
        this.value = cleanText;
    });

    phoneInput.addEventListener('paste', function(e) {
        e.preventDefault();
        const pastedText = (e.clipboardData || window.clipboardData).getData('text');
        const cleanText = pastedText.replace(/[^0-9+\-\s()]/g, '');
        this.value = cleanText;
    });

    // Prevenir teclas no permitidas
    nameInput.addEventListener('keypress', function(e) {
        const char = String.fromCharCode(e.which);
        if (!/[a-zA-ZÀ-ÿ\s]/.test(char)) {
            e.preventDefault();
        }
    });

    phoneInput.addEventListener('keypress', function(e) {
        const char = String.fromCharCode(e.which);
        if (!/[0-9+\-\s()]/.test(char)) {
            e.preventDefault();
        }
    });
  });
</script>

@push('scripts')
@endpush
