
<footer class="bg-[var(--background-dark)] text-white py-10 px-8 rounded">
    
  <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between gap-12">

    <!-- Left: Contact form -->
    <div class="md:w-1/2" id="contactme">
      <h2 class="text-lg font-semibold mb-6 hover:text-[var(--text-hover)] px-2 py-1 rounded" >Ota yhteyttä</h2>
      <form class="space-y-4">
        <input
          type="email"
          placeholder="Kirjoita sähköposti"
          class="w-full rounded-md px-4 py-2 text-gray-900 placeholder-gray-500 focus:outline-none"
          required
        />
        <textarea
          rows="4"
          placeholder="Kirjoita viesti"
          class="w-full rounded-md px-4 py-2 text-gray-900 placeholder-gray-500 focus:outline-none"
          required
        ></textarea>
        <button
          type="submit"
          class="bg-[var(--button-background)] hover:bg-[var(--button-background-hover)] text-white font-semibold px-6 py-2 rounded-md"
        >
          Lähetä
        </button>
      </form>
    </div>

    <!-- Right: Logo and info menu -->
    <div class="md:w-1/2 flex flex-col md:items-end items-start">
      <!-- Logo -->
      <div class="mb-6">
          <!-- Logo  -->
        <a href="<?php echo esc_url(home_url('/')); ?>" class="inline-block">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="Site Logo" class="h-12 w-auto sm:h-16 md:h-20 lg:h-24 xl:h-28 object-contain">
        </a>
      </div>
      <!-- Info list -->
      <ul class="space-y-1 text-sm text-gray-300  md:text-right flex flex-col">
        <li><a href="<?php echo esc_url(home_url('maksu-ja-varausehdot/#maksutavat')) ;?>" class= "hover:text-[var(--text-hover)]  rounded">Maksutavat</a></li>
        <li><a href="<?php echo esc_url(home_url('maksu-ja-varausehdot/#varausehdot')) ;?>"class= "hover:text-[var(--text-hover)] rounded">Verkkokaupan varausehdot</a></li>
        <li><a href="<?php echo esc_url(home_url('tietosuojaseloste')) ;?>"class= "hover:text-[var(--text-hover)] rounded">Tietosuojaseloste</a></li>
        <li><a href="<?php echo esc_url(home_url('maksu-ja-varausehdot/#laskutus')) ;?>"class= "hover:text-[var(--text-hover)] rounded">Sähköinen laskutus</a></li>
    
        <li>Joensuu</li>
        <li>+358 45 1090 490</li>
        <li>niinivaaraapartments.fi</li>
      </ul>
    </div>

  </div>
    <!-- Scroll to Top Button -->
  <button id="scrollToTopBtn" class="fixed bottom-8 right-8 p-4 bg-[var(--button-background)] text-white rounded-full shadow-lg opacity-0 hover:opacity-100 transition-opacity duration-300">
    ↑
  </button>
</footer>


 
 <?php wp_footer(); ?>
</body>
</html>
