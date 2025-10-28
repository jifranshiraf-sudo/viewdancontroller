<x-layout title="Home">
  <!-- Hero: full screen, new color palette (indigo -> teal) -->
  <section class="min-h-screen flex items-center bg-gradient-to-br from-indigo-900 via-indigo-600 to-teal-500 text-white">
    <div class="container mx-auto px-6 lg:px-20">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        <div class="space-y-6">
          <h1 class="text-5xl lg:text-6xl font-extrabold leading-tight">Selamat datang di <span class="text-yellow-300">3INWASH</span></h1>
          <p class="text-lg lg:text-xl text-indigo-100/90">Layanan cepat, bersih, dan dapat diandalkan. Temukan paket layanan kami, lokasi, dan cara pemesanan dengan pengalaman yang lebih baik.</p>

          <div class="flex flex-col sm:flex-row gap-4 mt-6">
            <a href="/service" class="inline-block px-6 py-3 rounded-md bg-yellow-300 text-indigo-900 font-semibold shadow hover:scale-[1.02] transition">Lihat Layanan</a>
            <a href="/contact" class="inline-block px-6 py-3 rounded-md border border-indigo-100/40 text-indigo-50 hover:bg-indigo-800/40 transition">Hubungi Kami</a>
          </div>

          <div class="mt-8 text-sm text-indigo-100/80">
            <strong>Promo:</strong> Diskon 20% untuk pelanggan baru. Gunakan kode <span class="font-mono bg-indigo-800/40 px-2 py-0.5 rounded">NEW20</span>
          </div>
        </div>

        <div class="relative">
          <!-- visual card / mockup -->
          <div class="w-full max-w-md mx-auto bg-white/10 backdrop-blur-sm rounded-2xl p-6 shadow-2xl border border-white/10">
            <div class="h-48 rounded-lg bg-gradient-to-r from-yellow-200/30 via-white/10 to-white/5 flex items-center justify-center text-indigo-50">
              <div class="text-center">
                <div class="text-sm uppercase tracking-wider text-yellow-200">Aplikasi 3INWASH</div>
                <div class="mt-4 text-2xl font-bold">Cepat • Rapi • Terpercaya</div>
              </div>
            </div>
            <ul class="mt-6 space-y-3 text-indigo-100/90">
              <li class="flex items-center gap-3"><span class="w-2 h-2 rounded-full bg-yellow-300"></span> Penjemputan & pengantaran</li>
              <li class="flex items-center gap-3"><span class="w-2 h-2 rounded-full bg-yellow-300"></span> Pengerjaan cepat & aman</li>
              <li class="flex items-center gap-3"><span class="w-2 h-2 rounded-full bg-yellow-300"></span> Lacak pesanan secara real-time</li>
            </ul>
          </div>

          <!-- subtle decorative circle -->
          <div class="hidden lg:block absolute -right-10 top-8 w-40 h-40 rounded-full bg-white/5 border border-white/5 blur-lg"></div>
        </div>
      </div>
    </div>
  </section>

  <!-- Features section with contrasting colors -->
  <section class="bg-white text-gray-800 py-12">
    <div class="container mx-auto px-6 lg:px-20">
      <div class="text-center mb-10">
        <h2 class="text-3xl font-bold">Kenapa memilih kami?</h2>
        <p class="text-gray-600 mt-2">Pelayanan pelanggan yang ramah, kualitas cucian terjamin, dan proses mudah.</p>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="p-6 rounded-lg shadow hover:shadow-lg transition bg-gradient-to-br from-indigo-50 to-white">
          <h3 class="font-semibold text-indigo-900">Kecepatan</h3>
          <p class="text-sm text-gray-600 mt-2">Proses cepat tanpa mengorbankan kualitas.</p>
        </div>

        <div class="p-6 rounded-lg shadow hover:shadow-lg transition bg-gradient-to-br from-teal-50 to-white">
          <h3 class="font-semibold text-teal-800">Kenyamanan</h3>
          <p class="text-sm text-gray-600 mt-2">Penjemputan & pengantaran fleksibel sesuai kebutuhanmu.</p>
        </div>

        <div class="p-6 rounded-lg shadow hover:shadow-lg transition bg-gradient-to-br from-yellow-50 to-white">
          <h3 class="font-semibold text-yellow-700">Keamanan</h3>
          <p class="text-sm text-gray-600 mt-2">Perawatan pakaian profesional dengan standar tinggi.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-gray-900 text-gray-300 py-8">
    <div class="container mx-auto px-6 lg:px-20 text-center">
      <div class="mb-2">© {{ date('Y') }} 3INWASH. Semua hak dilindungi.</div>
      <div class="text-sm">Alamat Toko, Batoh Pride, Kota-Banda Aceh</div>
    </div>
  </footer>

</x-layout>
