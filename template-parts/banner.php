<section class="relative w-full overflow-hidden">

    <!-- Slides -->
    <div id="slider" class="flex transition-transform duration-500 ease-in-out">
        
        <!-- Slide 1 -->
        <div class="min-w-full h-[400px] bg-cover bg-center flex items-center justify-center text-white text-3xl font-bold"
             style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/banner-1.png');">
            
        </div>

        <!-- Slide 2 -->
        <div class="min-w-full h-[400px] bg-cover bg-center flex items-center justify-center text-white text-3xl font-bold"
             style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/banner-2.png');">
            
        </div>

        <!-- Slide 3 -->
        <div class="min-w-full h-[400px] bg-cover bg-center flex items-center justify-center text-white text-3xl font-bold"
             style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/banner-3.png');">
            
        </div>

        <!-- Slide 4 -->
        <div class="min-w-full h-[400px] bg-cover bg-center flex items-center justify-center text-white text-3xl font-bold"
             style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/banner-4.png');">
    
        </div>

    </div>

    <!-- Buttons -->
    <button id="prev" class="absolute left-4 top-1/2 -translate-y-1/2 bg-black/50 text-white px-3 py-2">‹</button>
    <button id="next" class="absolute right-4 top-1/2 -translate-y-1/2 bg-black/50 text-white px-3 py-2">›</button>

</section>

<!-- JS -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const slider = document.getElementById('slider');
    const slides = slider.children;
    const totalSlides = slides.length;

    let index = 0;

    function updateSlider() {
        slider.style.transform = `translateX(-${index * 100}%)`;
    }

    document.getElementById('next').addEventListener('click', () => {
        index = (index + 1) % totalSlides;
        updateSlider();
    });

    document.getElementById('prev').addEventListener('click', () => {
        index = (index - 1 + totalSlides) % totalSlides;
        updateSlider();
    });

    // Auto slide
    setInterval(() => {
        index = (index + 1) % totalSlides;
        updateSlider();
    }, 4000);
});
</script>