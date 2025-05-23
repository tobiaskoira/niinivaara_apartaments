<footer class="bg-[var(--background-dark)] text-white py-10 px-8 rounded">
  <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between gap-12">

    <!-- Left: Contact form -->
    <div class="md:w-1/2">
      <h2 class="text-lg font-semibold mb-6">Contact Me</h2>
      <form class="space-y-4">
        <input
          type="email"
          placeholder="Your email"
          class="w-full rounded-md px-4 py-2 text-gray-900 placeholder-gray-500 focus:outline-none"
          required
        />
        <textarea
          rows="4"
          placeholder="Your message"
          class="w-full rounded-md px-4 py-2 text-gray-900 placeholder-gray-500 focus:outline-none"
          required
        ></textarea>
        <button
          type="submit"
          class="bg-[var(--button-background)] hover:bg-[var(--button-background-hover)] text-white font-semibold px-6 py-2 rounded-md"
        >
          Send
        </button>
      </form>
    </div>

    <!-- Right: Logo and info menu -->
    <div class="md:w-1/2 flex flex-col md:items-end">
      <!-- Logo -->
      <div class="mb-6">
          <!-- Logo  -->
        <a href="<?php echo esc_url(home_url('/')); ?>" class="inline-block">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="Site Logo" class="h-12 w-auto sm:h-16 md:h-20 lg:h-24 xl:h-28 object-contain">
        </a>
      </div>
      <!-- Info list -->
      <ul class="space-y-1 text-sm text-gray-300 text-right">
        <li><a href="<?php echo esc_url(home_url('maksu-ja-varausehdot/#maksutavat')) ;?>">Maksutavat</a></li>
        <li><a href="<?php echo esc_url(home_url('maksu-ja-varausehdot/#varausehdot')) ;?>">Verkkokaupan varausehdot</a></li>
        <li><a href="<?php echo esc_url(home_url('maksu-ja-varausehdot/#maksutavat')) ;?>">Tietosuojaseloste</li>
        <li>Sähköinen laskutus</li>
    

        <li>Joensuu</li>
        <li>+358 10 2070 110</li>
        <li>niinivaaraapartments.fi</li>
      </ul>
    </div>

  </div>
</footer>


 
 <?php wp_footer(); ?>
</body>
</html>
