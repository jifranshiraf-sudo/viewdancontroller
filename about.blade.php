<x-layout title="About">
  <section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6 lg:px-20 space-y-16">
      <div class="text-center">
        <h2 class="text-3xl font-bold mb-2">Tentang Kami</h2>
        <p class="text-gray-600">Kami berdedikasi memberikan layanan terbaik - Bersih, rapi, Cepat dan dapat diandalkan.</p>
      </div>

      <!-- Block 1: Image left, text right -->
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
        <div class="h-80 lg:h-96 w-full rounded-xl overflow-hidden shadow-lg bg-gray-200">
          <!-- gunakan gambar di public/images/about-1.jpg -->
          <div class="w-full h-full bg-cover bg-center" style="background-image: url('/images/about-1.jpg')"></div>
        </div>

        <div class="space-y-4">
          <h3 class="text-2xl font-semibold">Visi & Misi</h3>
          <p class="text-gray-700">Visi kami adalah menjadi pilihan utama untuk layanan laundry dengan kualitas terbaik dan pengalaman pelanggan yang mudah. Misi kami meliputi: pelayanan cepat, penanganan profesional, dan layanan jemput-antar yang handal.</p>
          <ul class="mt-4 space-y-2 text-gray-700">
            <li class="flex items-start gap-3"><span class="inline-block mt-1 w-2 h-2 rounded-full bg-teal-500"></span>Standar kualitas terjamin untuk setiap jenis Sepatu, Tas, Helm.</li>
            <li class="flex items-start gap-3"><span class="inline-block mt-1 w-2 h-2 rounded-full bg-teal-500"></span>Proses mudah dan transparan bagi pelanggan.</li>
            <li class="flex items-start gap-3"><span class="inline-block mt-1 w-2 h-2 rounded-full bg-teal-500"></span>Inovasi layanan untuk kenyamanan pengguna.</li>
          </ul>
        </div>
      </div>


      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
        <div class="order-2 lg:order-1 space-y-4">
          <h3 class="text-2xl font-semibold">Tim & Nilai Kami</h3>
          <p class="text-gray-700">Tim kami terdiri dari profesional yang berpengalaman di bidang perawatan tekstil dan layanan pelanggan. Kami menjunjung tinggi integritas, kecepatan, dan kepuasan pelanggan.</p>
          <p class="text-gray-700">Nilai-nilai inti kami: kepercayaan, kualitas, dan inovasi. Kami terus meningkatkan proses agar setiap pakaian kembali ke tangan pelanggan dalam kondisi terbaik.</p>
        </div>

        <div class="order-1 lg:order-2 h-80 lg:h-96 w-full rounded-xl overflow-hidden shadow-lg bg-gray-200">

          <div class="w-full h-full bg-cover bg-center" style="c:\Users\Lenovo\Downloads\images1.jpg"></div>
        </div>
      </div>


      <div class="text-center">
        <a href="/service" class="inline-block px-6 py-3 rounded-md bg-teal-500 text-white font-semibold shadow hover:bg-teal-600 transition">Lihat Paket Layanan</a>
      </div>
    </div>
  </section>
</x-layout>
