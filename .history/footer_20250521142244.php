<footer class="bg-[var()] text-gray-300 py-12 px-6">
  <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-8">
    <!-- Column 1: Logo + Newsletter -->
    <div>
      <h2 class="text-white text-2xl font-bold mb-4">Hotel Logo</h2>
      <p class="mb-4">Newsletter & Special Promo</p>
      <form class="flex flex-col sm:flex-row gap-2">
        <input type="email" placeholder="Enter your email here" 
               class="px-3 py-2 rounded-md text-black flex-grow" />
        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md">Subscribe</button>
      </form>
    </div>

    <!-- Column 2: About and FAQ -->
    <div>
      <h3 class="text-white font-semibold mb-3">About us</h3>
      <ul class="space-y-2">
        <li><a href="#" class="hover:text-white transition">FAQ</a></li>
        <li><a href="#" class="hover:text-white transition">Services & Facilities</a></li>
        <li><a href="#" class="hover:text-white transition">How to book</a></li>
      </ul>
    </div>

    <!-- Column 3: Contact and Careers -->
    <div>
      <h3 class="text-white font-semibold mb-3">Contact</h3>
      <ul class="space-y-2">
        <li><a href="#" class="hover:text-white transition">Term of Use</a></li>
        <li><a href="#" class="hover:text-white transition">Careers</a></li>
        <li><a href="#" class="hover:text-white transition">Location</a></li>
        <li><a href="#" class="hover:text-white transition">Privacy Policy</a></li>
      </ul>
    </div>

    <!-- Column 4: Copyright -->
    <div class="flex flex-col justify-end text-sm text-gray-500">
      <p>© Copyright Booking Hotels. All rights reserved.</p>
    </div>
  </div>
</footer>

 
 <?php wp_footer(); ?>
</body>
</html>
