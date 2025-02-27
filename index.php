<?php include "./db.php"; ?>

<!doctype html>
<html class="scroll-smooth ease-in-out duration-500">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Portfolio</title>
</head>

<body class=" text-white ">
  <nav class=" text-white shadow-md sticky bg-gray-950 top-0 w-full z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center py-4">
        <!-- Logo -->
        <a href="#" class="text-xl font-bold text-yellow-400">My Portfolio</a>

        <button id="menu-btn" class="text-white text-2xl md:hidden focus:outline-none">
          ☰
        </button>

        <ul id="menu" class="hidden md:flex space-x-6">
          <li><a href="#home" class="hover:text-yellow-400">Home</a></li>
          <li><a href="#about" class="hover:text-yellow-400">About</a></li>
          <li><a href="#education" class="hover:text-yellow-400">Educational & Skills</a></li>
          <li><a href="#portofolio" class="hover:text-yellow-400">Portofolio</a></li>
          <li><a href="#contact" class="hover:text-yellow-400">Contact</a></li>
        </ul>
      </div>

      <!-- Hp -->
      <ul id="mobile-menu" class="hidden flex-col space-y-4 py-4 text-center border-t border-gray-700 md:hidden">
        <li><a href="#home" class="block hover:text-yellow-400">Home</a></li>
        <li><a href="#about" class="block hover:text-yellow-400">About</a></li>
        <li><a href="#education" class="block hover:text-yellow-400">Educational & Skills</a></li>
        <li><a href="#portofolio" class="block hover:text-yellow-400">Portofolio</a></li>
        <li><a href="#contact" class="block hover:text-yellow-400">Contact</a></li>
      </ul>
    </div>
  </nav>
  <section id="home" class="bg-gray-900 min-h-screen flex items-center justify-center">
    <main class="px-6 py-16 min-h-screen flex flex-col justify-center items-center">
      <div class="bg-gray-900/80 backdrop-blur-lg border border-yellow-400 shadow-2xl rounded-2xl px-12 py-14 w-full max-w-7xl text-center md:text-left">
        <div class="flex flex-col md:flex-row items-center gap-16">
          <div class="relative">
            <img
              src="./img/siam.jpg"
              class="w-48 h-48 md:w-60 md:h-60 rounded-full shadow-lg border-4 border-yellow-300 transform transition-all duration-300 hover:scale-105"
              alt="Profile Picture" />
          </div>

          <div class="max-w-3xl">
            <h1 class="text-4xl font-bold text-yellow-300 mb-2">Siam Al Sobari</h1>
            <h2 class="text-lg text-gray-300 font-medium italic">Pelajar & Calon Fullstack Developer</h2>

            <p class="mt-6 text-gray-300 leading-relaxed">
              Saya siswa kelas 10 SMK Telkom Pwt yang tertarik di dunia pemrograman, terutama
              <span class="text-yellow-300 font-semibold">React.js</span> dan
              <span class="text-yellow-300 font-semibold">Next.js</span>.
              Saya ingin menjadi seorang
              <span class="text-yellow-300 font-semibold">Fullstack Developer</span> dan memahami cara
              <span class="text-yellow-300 font-semibold">deploy aplikasi</span> dengan baik.
            </p>

            <p class="mt-4 text-gray-300 leading-relaxed">
              Saat ini saya sedang fokus belajar tentang
              <span class="text-yellow-300 font-semibold">App Router</span> di Next.js dan bagaimana
              <span class="text-yellow-300 font-semibold">Server-Side Rendering (SSR)</span> serta
              <span class="text-yellow-300 font-semibold">Static Site Generation (SSG)</span>
              dapat meningkatkan performa website. Saya juga ingin memahami lebih dalam tentang
              backend menggunakan <span class="text-yellow-300 font-semibold">ORM</span>.
            </p>
          </div>
        </div>
      </div>
    </main>
  </section>

  <section id="about" class="bg-gray-900 min-h-screen flex items-center justify-center p-6">
    <?php include "./src/components/AboutMe.html"; ?>
  </section>

  <section id="education" class="bg-gray-900 min-h-screen flex items-center justify-center p-6">
    <?php include "./src/components/E&S.html"; ?>
  </section>

  <section id="portofolio" class="bg-gray-900 min-h-screen flex items-center justify-center p-6">
    <div class="min-h-screen flex flex-col items-center justify-center gap-10">
      <h1 class=" text-4xl text-center font-bold text-yellow-300 tracking-wide uppercase">
        Portofolio
        <hr class="w-full">
      <div class="border mt-24 border-yellow-50 bg-gray-900 rounded-2xl shadow-lg shadow-yellow-700 p-8 w-[900px] flex gap-10 ">
        <img class="w-60 h-60 object-cover rounded-lg" src="./img/image.png" alt="">
        <div class="flex flex-col justify-center">
          <h2 class="text-3xl font-bold text-yellow-300">FastStore</h2>
          <p class="text-gray-300 text-lg mt-2">FastStore merupakan website topup yang dibuat menggunakan html, css, dan javascript</p>
        </div>
      </div>
    </div>
  </section>

  <section id="contact" class="bg-gray-900 text-gray-300 py-12">
    <div class="container mx-auto px-6 lg:px-12">
      <div class="grid md:grid-cols-2 gap-12 items-center">

        <div class="space-y-6">
          <div class="flex items-center space-x-4">
            <div class="bg-yellow-300 p-3 rounded-full">
              <svg width="24" height="24" viewBox="0 0 24 24" class="text-gray-900">
                <path d="M12 1c-3.148 0-6 2.553-6 5.702 0 3.148 2.602 6.907 6 12.298 3.398-5.391 6-9.15 6-12.298 0-3.149-2.851-5.702-6-5.702zm0 8c-1.105 0-2-.895-2-2s.895-2 2-2 2 .895 2 2-.895 2-2 2zm12 14h-24l4-8h3.135c.385.641.798 1.309 1.232 2h-3.131l-2 4h17.527l-2-4h-3.131c.435-.691.848-1.359 1.232-2h3.136l4 8z" />
              </svg>
            </div>
            <div>
              <h4 class="text-lg font-semibold">Address</h4>
              <p class="text-gray-400">Kedungwringin, Jatilawang, Banyumas, Jawa Tengah</p>
            </div>
          </div>

          <div class="flex items-center space-x-4">
            <div class="bg-yellow-300 p-3 rounded-full">
              <svg width="24" height="24" viewBox="0 0 24 24" class="text-gray-900">
                <path d="M20 22.621l-3.521-6.795c-.008.004-1.974.97-2.064 1.011-2.24 1.086-6.799-7.82-4.609-8.994l2.083-1.026-3.493-6.817-2.106 1.039c-7.202 3.755 4.233 25.982 11.6 22.615.121-.055 2.102-1.029 2.11-1.033z" />
              </svg>
            </div>
            <div>
              <h4 class="text-lg font-semibold">Phone</h4>
              <p class="text-gray-400">088226545202</p>
            </div>
          </div>

          <div class="flex items-center space-x-4">
            <div class="bg-yellow-300 p-3 rounded-full">
              <svg width="24" height="24" viewBox="0 0 24 24" class="text-gray-900">
                <path d="M0 3v18h24v-18h-24zm21.518 2l-9.518 7.713-9.518-7.713h19.036zm-19.518 14v-11.817l10 8.104 10-8.104v11.817h-20z" />
              </svg>
            </div>
            <div>
              <h4 class="text-lg font-semibold">Email</h4>
              <p class="text-gray-400">siamqueen52@gmail.com</p>
            </div>
          </div>
        </div>

        <!--  Form -->
        <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
          <form method="POST" class="space-y-4">
            <input type="text" placeholder="Name" name="name" class="w-full p-3 bg-gray-700 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-300" />
            <input type="email" placeholder="Email" name="email" class="w-full p-3 bg-gray-700 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-300" />
            <textarea name="message" placeholder="Message" rows="4" class="w-full p-3 bg-gray-700 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-300"></textarea>
            <button type="submit" class="w-full bg-yellow-300 text-gray-900 font-bold py-3 rounded-lg hover:bg-yellow-400 transition">
              Send Message
            </button>
          </form>
        </div>
      </div>
    </div>

  </section>

  <?php include "./src/components/Footer.html"; ?>
  <script src="./src/TogleMenu.js"></script>
</body>

</html>