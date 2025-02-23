<?php include "./db.php"; ?>

<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Portfolio</title>
</head>

<body class="bg-gray-950 text-white">
  <nav class="container mx-auto py-4 px-6 flex justify-between items-center">
    <h2 class="text-3xl font-bold tracking-wide">
      PORTO<span class="text-yellow-300">..</span>
    </h2>

    <ul class="flex space-x-6 text-lg font-semibold border-b-2 border-yellow-300">
      <li><a href="#home" class="hover:text-yellow-300 transition duration-300">Home</a></li>
      <li><a href="#about" class="hover:text-yellow-300 transition duration-300">About</a></li>
      <li><a href="#education" class="hover:text-yellow-300 transition duration-300">Educational & Skills</a></li>
      <li><a href="#contact" class="hover:text-yellow-300 transition duration-300">Contact</a></li>
    </ul>
  </nav>

  <section id="home" class="bg-gray-900 min-h-screen flex items-center justify-center">
    <?php include "./src/components/Home.html"; ?>
  </section>

  <section id="about" class="bg-gray-900 min-h-screen flex items-center justify-center p-6">
    <?php include "./src/components/AboutMe.html"; ?>
  </section>

  <section id="education" class="bg-gray-900 min-h-screen flex items-center justify-center p-6">
    <?php include "./src/components/E&S.html"; ?>
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
              <p class="text-gray-400">Kedungwringin, Jilawang, Banyumas, Jawa Tengah</p>
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

        <!-- Contact Form -->
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
</body>

</html>