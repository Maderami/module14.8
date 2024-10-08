<footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
    <div class="col mb-3">
        <a href="/" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
            <svg class="bi me-2" width="40" height="32">
                <use xlink:href="#bootstrap"></use>
            </svg>
        </a>
        <p class="text-body-secondary">SPA-salon © 2024</p>
    </div>

    <div class="col mb-3">

    </div>

    <div class="col mb-3">
        <h5>Крата сайта</h5>
        <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Главная</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Наши услуги</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Акции</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Фотогалерея</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Контакты</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">О нас</a></li>
        </ul>
    </div>

    <div class="col mb-3">
        <h5>Основной сервис</h5>
        <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Контакты</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Обратная связь</a></li>
        </ul>
    </div>

    <div class="col mb-3">
        <h5>Быстрая связь</h5>
        <ul class="nav flex-row">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary"><img class="icon-link w-25"
                                                                                                src="/assets/images/vk.png"/></a>
            </li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary"><img class="icon-link w-25"
                                                                                                src="/assets/images/tg.png"/></a>
            </li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary"><img class="icon-link w-25"
                                                                                                src="/assets/images/instlog.png"/></a>
            </li>
        </ul>
    </div>
</footer>
</body>
</html>
<script>
    var countDownTimer = new Date("<?php echo "$getDateTime"; ?>").getTime();
    var interval = setInterval(function () {
        var current = new Date().getTime();
        var diff = countDownTimer - current;
        var days = Math.floor(diff / (1000 * 60 * 60 * 24));
        var hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((diff % (1000 * 60)) / 1000);
        document.getElementById("counter").innerHTML = days + "Day : " + hours + "h " +
            minutes + "m " + seconds + "s ";
        if (diff < 0) {
            clearInterval(interval);
            document.getElementById("counter").innerHTML = "Таймер истек";
        }
    }, 1000);
    var countDownTimerOneDay = new Date("<?php echo "$getDateTimeOneDay"; ?>").getTime();
    var intervalOneDay = setInterval(function () {
        var current = new Date().getTime();
        var diff = countDownTimerOneDay - current;
        var days = Math.floor(diff / (1000 * 60 * 60 * 24));
        var hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((diff % (1000 * 60)) / 1000);
        document.getElementById("counter1").innerHTML = days + "Day : " + hours + "h " +
            minutes + "m " + seconds + "s ";
        if (diff < 0) {
            clearInterval(interval);
            document.getElementById("counter1").innerHTML = "Таймер истек";
        }
    }, 1000);
</script>
