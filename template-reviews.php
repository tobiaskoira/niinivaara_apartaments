<?php
/*
Template Name: Reviews Page
*/
get_header();
?>


<!-- Контейнер слайдера -->
<div class="swiper max-w-[1200px] mx-auto px-4 text-[main]">
  <div class="swiper-wrapper">

    <!-- Слайд 1 -->
    <div class="swiper-slide bg-white rounded-lg shadow p-6">
      <h3 class="font-bold text-lg mb-2">Анна</h3>
      <p class=" mb-4">Отдыхали с мужем в сентябре 2023. Остались ОЧЕНЬ довольны. Отличный домик, есть все удобства (туалет, душ, кухня) и даже камин. Территория ухоженная, отличная баня, пруд, куда можно прыгнуть прямо из парилки, есть летняя кухня (не обязательно готовить в своем домике). Сервис на уровне.
Озеро в шаговой доступности с живописными пирсами для рыбалки и отдыха, лодка. Еще два озера неподалеку, лес. Хозяева замечательные и гостеприимные люди! В общем, отдых - сказка, рекомендуем!</p>
      <div class="flex space-x-2">
        <img src="https://cdn.tripvenue.com/sites/default/files/styles/90x90/public/uploads/review/photo_2023-09-25_10-26-54.jpg" alt="Фото отзыва Анна" class="w-20 h-20 rounded object-cover"/>
        <img src="https://cdn.tripvenue.com/sites/default/files/styles/90x90/public/uploads/review/photo_2023-09-25_10-27-03.jpg" alt="" class="w-20 h-20 rounded object-cover"/>
        <img src="https://cdn.tripvenue.com/sites/default/files/styles/90x90/public/uploads/review/photo_2023-09-25_10-27-09.jpg" alt="" class="w-20 h-20 rounded object-cover"/>
      </div>
    </div>

    <!-- Слайд 2 -->
    <div class="swiper-slide bg-white rounded-lg shadow p-6">
      <h3 class="font-bold text-lg mb-2">Ольга</h3>
      <p class=" mb-4">Отдыхали недавно сдесь семьёй, вместе с детьми. И остались очень довольны!!!
Место тихое, спокойное и уютное. Усадьба из срубов. Чистенько, светленько - место для ценителей тихого отдыха в кругу семьи и компании друзей.
На участке шикарный пруд, где бьют источники; мангал, а также для детей бассейн и батут, в 100 метрах от усадьбы озеро с шикарнейшими видами. И самое главное - доступные цены!
Хозяева очень гостеприимные, приятные люди. Очень внимательны.
Мы в восторге от отдыха, очень всё понравилось). При возможности, обязательно ещё сюда приедем!!!</p>
      <!-- Можно добавить фото, если есть -->
    </div>

    <!-- Слайд 3 -->
    <div class="swiper-slide bg-white rounded-lg shadow p-6">
      <h3 class="font-bold text-lg mb-2">Сергей</h3>
      <p class=" mb-4">Замечательно закрыли небольшой мужской компанией сезон зимней рыбалки на озере Ивесь в усадьбе "Жаворонок". Хозяин любезно предложил в наше распоряжение первый этаж гостевого дома.
Всё очень понравилось - тепло, чисто, очень уютно. Для комфортного отдыха есть всё необходимое. Цены на проживание более, чем разумные.
Спасибо огромное! Однозначно заносим усадьбу в наш "золотой фонд".</p>
    </div>

  </div>

  <!-- Навигация -->
  <div class="swiper-button-prev text-[main] hover:text-gray-900"></div>
  <div class="swiper-button-next text-[main] hover:text-gray-900"></div>

  <!-- Пагинация -->
  <div class="swiper-pagination mt-4"></div>
</div>

<!-- Подключи Swiper JS перед закрывающим body -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', () => {
    new Swiper('.swiper', {
      slidesPerView: 1,
      spaceBetween: 16,
      loop: true,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      breakpoints: {
        768: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 24,
        },
      },
    });
  });
</script>


<?php get_footer(); ?>