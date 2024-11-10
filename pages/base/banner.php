<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<div class="swiper-container banner">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <img style="height: 500px" class="w-100 h-100 d-block object-fit-cover" src="https://theme.hstatic.net/200000845405/1001223012/14/home_slider_image_3.jpg?v=351" alt="banner1" />
        </div>
        <div class="swiper-slide">
            <img style="height: 500px" class="w-100 h-100 d-block object-fit-cover" src="https://theme.hstatic.net/200000845405/1001223012/14/home_slider_image_2.jpg?v=351" alt="banner2" />
        </div>
    </div>
    <!-- Thêm nút điều hướng (nếu cần) -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
        loop: true, // Bật chế độ lặp lại
        autoplay: {
            delay: 3000, // Thời gian chuyển đổi giữa các slide
            disableOnInteraction: false, // Không dừng autoplay khi người dùng tương tác
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>
