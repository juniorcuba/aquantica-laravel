<section 
    class="relative py-12 border-y-4 border-blue-400 shadow-lg overflow-hidden"
    style="background-image: url('https://images.pexels.com/photos/4254555/pexels-photo-4254555.jpeg?auto=compress&fit=crop&w=1200&q=80'); background-size: cover; background-position: center;"
>
    <div class="absolute inset-0 bg-[#121921] opacity-50"></div>
    <div class="relative max-w-3xl mx-auto text-center">
        <h2 class="text-2xl font-bold mb-4 text-white">{{ __("home.downloads.title") }}</h2>
        <p class="mb-8 text-white">{{ __("home.downloads.description") }}</p>
        <div class="flex flex-col md:flex-row gap-6 justify-center">
            <a href="/downloads/anticipacion-preparacion-seguimiento.pdf" download class="text-white font-semibold py-3 px-6 rounded shadow transition bg-[#f5b027] hover:bg-[#d99c22]">{{ __("home.downloads.anticipacion") }}</a>
            <a href="/downloads/plan-emergencia-huracanes.pdf" download class="bg-green-600 hover:bg-green-700 text-white font-semibold py-3 px-6 rounded shadow transition">{{ __("home.downloads.plan") }}</a>
            <a href="/downloads/info-empresa.pdf" download class="bg-gray-700 hover:bg-gray-800 text-white font-semibold py-3 px-6 rounded shadow transition">{{ __("home.downloads.empresa") }}</a>
        </div>
        <div id="download-message" class="mt-6 text-green-300 font-medium hidden"></div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const links = document.querySelectorAll('a[download]');
            const message = document.getElementById('download-message');
            links.forEach(link => {
                link.addEventListener('click', function() {
                    message.textContent = `Descargando: ${this.textContent}`;
                    message.classList.remove('hidden');
                    setTimeout(() => message.classList.add('hidden'), 3000);
                });
            });
        });
    </script>
</section> 