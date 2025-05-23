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
        <h1 class="text-3xl font-bold leading-none text-right">Hotel<br />Logo</h1>
      </div>
      <!-- Info list -->
      <ul class="space-y-1 text-sm text-gray-300 text-right">
        <li>Maksutavat</li>
        <li>Verkkokaupan varausehdot</li>
        <li>Tietosuojaseloste</li>
        <li>Sähköinen laskutus</li>
        <li>Avoinna</li>
        <li>Ruokkeentie 58, 59800</li>
        <li>Kesälahti</li>
        <li>+358 10 2070 110</li>
        <li>niiniva.fi</li>
      </ul>
    </div>

  </div>
</footer>


 
 <?php wp_footer(); ?>
</body>
</html>
