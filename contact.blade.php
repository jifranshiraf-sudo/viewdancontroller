<x-layout title="Contact">
  <div class="bg-gray-50 min-h-screen">
    <!-- Hero Section -->
    <section class="bg-gradient-to-br from-teal-600 to-teal-700 text-white py-16">
      <div class="container mx-auto px-6 lg:px-20">
        <div class="text-center">
          <h1 class="text-4xl font-bold mb-4">Hubungi Customer Service</h1>
          <p class="text-lg text-teal-100">Kami siap membantu Anda 24/7. Pilih cara yang paling nyaman untuk menghubungi kami.</p>
        </div>
      </div>
    </section>

    <!-- Contact Options -->
    <section class="py-12">
      <div class="container mx-auto px-6 lg:px-20">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <!-- WhatsApp -->
          <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition">
            <div class="w-12 h-12 bg-green-500 text-white rounded-full flex items-center justify-center mb-4">
              <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
              </svg>
            </div>
            <h3 class="text-xl font-semibold mb-2">WhatsApp</h3>
            <p class="text-gray-600 mb-4">Respon cepat melalui chat WhatsApp</p>
            <a href="https://wa.me/6285123456789" target="_blank" class="inline-flex items-center text-green-600 hover:text-green-700">
              <span class="font-medium">Chat Sekarang</span>
              <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
              </svg>
            </a>
          </div>

          <!-- Phone -->
          <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition">
            <div class="w-12 h-12 bg-indigo-500 text-white rounded-full flex items-center justify-center mb-4">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
              </svg>
            </div>
            <h3 class="text-xl font-semibold mb-2">Telepon</h3>
            <p class="text-gray-600 mb-4">Bicara langsung dengan customer service</p>
            <a href="tel:+6285123456789" class="inline-flex items-center text-indigo-600 hover:text-indigo-700">
              <span class="font-medium">Hubungi (0851) 2345-6789</span>
              <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
              </svg>
            </a>
          </div>

          <!-- Email -->
          <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition">
            <div class="w-12 h-12 bg-yellow-500 text-white rounded-full flex items-center justify-center mb-4">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
              </svg>
            </div>
            <h3 class="text-xl font-semibold mb-2">Email</h3>
            <p class="text-gray-600 mb-4">Kirim pertanyaan detail via email</p>
            <a href="mailto:cs@3inwash.com" class="inline-flex items-center text-yellow-600 hover:text-yellow-700">
              <span class="font-medium">cs@3inwash.com</span>
              <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Form -->
    <section class="py-12 bg-white">
      <div class="container mx-auto px-6 lg:px-20">
        <div class="max-w-3xl mx-auto">
          <div class="text-center mb-10">
            <h2 class="text-3xl font-bold mb-2">Kirim Pesan</h2>
            <p class="text-gray-600">Ada pertanyaan atau masukan? Isi form di bawah ini dan kami akan meresponnya segera.</p>
          </div>

          <form action="/contact" method="POST" class="space-y-6">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-2" for="name">
                  Nama Lengkap
                </label>
                <input type="text" name="name" id="name" required 
                  class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent">
              </div>
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-2" for="phone">
                  Nomor Telepon
                </label>
                <input type="tel" name="phone" id="phone" required 
                  class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent">
              </div>
            </div>

            <div>
              <label class="block text-sm font-medium text-gray-700 mb-2" for="email">
                Email
              </label>
              <input type="email" name="email" id="email" required 
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent">
            </div>

            <div>
              <label class="block text-sm font-medium text-gray-700 mb-2" for="message">
                Pesan
              </label>
              <textarea name="message" id="message" rows="5" required 
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent"></textarea>
            </div>

            <div class="text-right">
              <button type="submit" 
                class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-teal-600 hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500">
                Kirim Pesan
                <svg class="ml-2 -mr-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                </svg>
              </button>
            </div>
          </form>
        </div>
      </div>
    </section>

    <!-- Map atau Info Tambahan -->
    <section class="py-12 bg-gray-50">
      <div class="container mx-auto px-6 lg:px-20">
        <div class="text-center">
          <h3 class="text-2xl font-bold mb-2">Jam Operasional</h3>
          <p class="text-gray-600">Senin - Minggu: 08.00 - 20.00 WIB</p>
          <p class="text-gray-600">Customer Service: 24/7</p>
        </div>
      </div>
    </section>
  </div>
</x-layout>
