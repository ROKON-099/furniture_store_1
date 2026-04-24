<footer class="bg-gray-900 text-white py-10">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-3 gap-8">

        <!-- About -->
        <div>
            <h3 class="text-xl font-semibold mb-4">About Us</h3>
            <p class="text-gray-400">
                We provide quality services and solutions to grow your business efficiently.
            </p>
        </div>

        <!-- Links -->
        <div>
            <h3 class="text-xl font-semibold mb-4">Quick Links</h3>
            <ul class="space-y-2">
                <li><a href="<?php echo home_url(); ?>" class="hover:text-gray-300">Home</a></li>
                <li><a href="<?php echo site_url('/about'); ?>" class="hover:text-gray-300">About Us</a></li>
                <li><a href="<?php echo site_url('/contact'); ?>" class="hover:text-gray-300">Contact</a></li>
            </ul>
        </div>

        <!-- Social -->
        <div>
            <h3 class="text-xl font-semibold mb-4">Follow Us</h3>
            <div class="flex space-x-4">
                <a href="#" class="hover:text-gray-300">Facebook</a>
                <a href="#" class="hover:text-gray-300">Twitter</a>
                <a href="#" class="hover:text-gray-300">Instagram</a>
            </div>
        </div>

    </div>

    <!-- Bottom -->
    <div class="text-center text-gray-500 mt-8 border-t border-gray-700 pt-4">
        © <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>