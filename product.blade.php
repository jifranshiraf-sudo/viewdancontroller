<x-layout title="Products">
  <!-- Header -->
  <section class="bg-white py-12">
    <div class="container mx-auto px-6">
      <h1 class="text-3xl font-bold text-center mb-2">Paket Laundry</h1>
      <p class="text-gray-600 text-center">Pilih paket yang sesuai dengan kebutuhan Anda</p>
    </div>
  </section>

  <!-- Products Grid -->
  <section class="bg-gray-50 py-12">
    <div class="container mx-auto px-6">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

        <!-- Paket Cuci Setrika -->
        <div class="bg-white rounded-lg shadow-sm hover:shadow-md transition p-6">
          <div class="text-teal-600 text-xl font-semibold mb-2">Cuci Sepatu</div>
          <div class="text-3xl font-bold mb-4">Rp 7.000<span class="text-sm text-gray-600 font-normal">/kg</span></div>
          <ul class="text-gray-600 space-y-2 mb-6">
            <li>✓ Cuci dengan sabun premium</li>
            <li>✓ Setrika rapi</li>
            <li>✓ Pengharum ekstra</li>
            <li>✓ Selesai dalam 3 hari</li>
          </ul>
          <a href="/contact" class="block text-center py-2 px-4 bg-teal-600 text-white rounded-lg hover:bg-teal-700 transition">
            Pesan Sekarang
          </a>
        </div>

        <!-- Paket Cuci Lipat -->
        <div class="bg-white rounded-lg shadow-sm hover:shadow-md transition p-6">
          <div class="text-teal-600 text-xl font-semibold mb-2">Cuci Tas</div>
          <div class="text-3xl font-bold mb-4">Rp 5.000<span class="text-sm text-gray-600 font-normal">/kg</span></div>
          <ul class="text-gray-600 space-y-2 mb-6">
            <li>✓ Cuci dengan Sabun premium</li>
            <li>✓ Lipat rapi</li>
            <li>✓ Pengharum standar</li>
            <li>✓ Selesai dalam 2 hari</li>
          </ul>
          <a href="/contact" class="block text-center py-2 px-4 bg-teal-600 text-white rounded-lg hover:bg-teal-700 transition">
            Pesan Sekarang
          </a>
        </div>

        <!-- Paket Express -->
        <div class="bg-white rounded-lg shadow-sm hover:shadow-md transition p-6">
          <div class="text-teal-600 text-xl font-semibold mb-2">Cuci Helm</div>
          <div class="text-3xl font-bold mb-4">Rp 10.000<span class="text-sm text-gray-600 font-normal">/kg</span></div>
          <ul class="text-gray-600 space-y-2 mb-6">
            <li>✓ Cuci dengan sabun premium</li>
            <li>✓ Setrika rapi</li>
            <li>✓ Pengharum ekstra</li>
            <li>✓ Selesai dalam 1 hari</li>
          </ul>
          <a href="/contact" class="block text-center py-2 px-4 bg-teal-600 text-white rounded-lg hover:bg-teal-700 transition">
            Pesan Sekarang
          </a>
        </div>

      </div>
    </div>
  </section>

  <!-- Simple CTA -->
  <section class="bg-white py-12">
    <div class="container mx-auto px-6 text-center">
      <p class="text-gray-600 mb-4">Butuh paket khusus atau ada pertanyaan?</p>
      <a href="/contact" class="inline-block py-2 px-6 bg-gray-800 text-white rounded-lg hover:bg-gray-900 transition">
        Hubungi Kami
      </a>
    </div>
  </section>
</x-layout>
