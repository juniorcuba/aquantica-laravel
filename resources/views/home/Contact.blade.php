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
          <form method="POST" action="">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
              <div>
                <label for="name" class="block text-sm font-medium text-gray-200 mb-2">
                  {{ __('home.contact.name') }}
                </label>
                <input type="text" name="name" id="name" required value="{{ old('name') }}"
                  class="w-full px-4 py-3 bg-white border border-gray-300 rounded-md text-gray-900 focus:outline-none focus:ring-2 focus:ring-[#f5b027]">
                @error('name') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
              </div>
              <div>
                <label for="email" class="block text-sm font-medium text-gray-200 mb-2">
                  {{ __('home.contact.email') }}
                </label>
                <input type="email" name="email" id="email" required value="{{ old('email') }}"
                  class="w-full px-4 py-3 bg-white border border-gray-300 rounded-md text-gray-900 focus:outline-none focus:ring-2 focus:ring-[#f5b027]">
                @error('email') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
              </div>
            </div>

            <div class="mb-6">
              <label for="phone" class="block text-sm font-medium text-gray-200 mb-2">
                {{ __('home.contact.phone') }}
              </label>
              <input type="tel" name="phone" id="phone" value="{{ old('phone') }}"
                class="w-full px-4 py-3 bg-white border border-gray-300 rounded-md text-gray-900 focus:outline-none focus:ring-2 focus:ring-[#f5b027]">
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

            <div class="text-center">
              <button type="submit"
                class="inline-flex items-center bg-[#f5b027] text-[#0f2d49] px-6 py-3 rounded-md font-medium hover:bg-[#d99c22] transition-colors">
                  {{ __('home.contact.submit') }}
                <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
              </button>
            </div>
          </form>
        @endif
      </div>
    </div>
  </div>
</section>
