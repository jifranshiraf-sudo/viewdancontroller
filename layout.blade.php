<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $title ?? 'MyWebsite' }}</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">

  <!-- Navbar -->
  <nav class="bg-blue-600 p-4 text-white flex justify-between items-center">
    <h1 class="text-xl font-bold">MyWebsite</h1>
    <div class="space-x-4">
      <a href="/"
         class="{{ Request::is('/') ? 'underline text-yellow-300' : 'hover:underline' }}">
         Home
      </a>
      <a href="/about"
         class="{{ Request::is('about') ? 'underline text-yellow-300' : 'hover:underline' }}">
         About
      </a>
      <a href="/product"
         class="{{ Request::is('product') ? 'underline text-yellow-300' : 'hover:underline' }}">
         Product
      </a>
      <a href="/service"
         class="{{ Request::is('service') ? 'underline text-yellow-300' : 'hover:underline' }}">
         Service
      </a>
      <a href="/contact"
         class="{{ Request::is('contact') ? 'underline text-yellow-300' : 'hover:underline' }}">
         Contact
      </a>
    </div>
  </nav>

  <!-- Konten halaman -->
  <main class="p-8">
    {{ $slot }}
  </main>

  <!-- Footer -->
  <footer class="bg-blue-600 text-white text-center p-3 mt-10">
    <p>© 2025 MyWebsite. All rights reserved.</p>
  </footer>

</body>
</html>
