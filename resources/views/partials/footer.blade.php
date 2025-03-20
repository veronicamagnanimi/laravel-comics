<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comics</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<footer>
    <!-- Sezione Blu con Icone -->
    <div class="bg-primary d-flex justify-content-center align-items-center gap-4 py-4">
        <a href="#" class="flex items-center text-white space-x-2">
            <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="Digital Comics" style="width: 30px;">
            <span>Digital Comics</span>
        </a>
        <a href="#" class="flex items-center text-white space-x-2">
            <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="DC Merchandise" style="width: 30px;">
            <span>DC Merchandise</span>
        </a>
        <a href="#" class="flex items-center text-white space-x-2">
            <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="Subscription" style="width: 30px;">
            <span>Subscription</span>
        </a>
        <a href="#" class="flex items-center text-white space-x-2">
            <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="Comic Shop Locator" style="width: 20px;">
            <span>Comic Shop Locator</span>
        </a>
        <a href="#" class="flex items-center text-white space-x-2">
            <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="DC Power Visa" style="width: 30px;">
            <span>DC Power Visa</span>
        </a>
    </div>

    <!-- Sezione Footer con Logo e Link -->
     <div class="">
    <div class="">
        <!-- Sezione Link -->
        <div class="d-flex justify-content-center">
            <div>
                <h4 class="font-bold text-lg mb-2">DC COMICS</h4>
                <ul class="space-y-3 text-gray-400">
                    <li><a href="#">Characters</a></li>
                    <li><a href="#">Comics</a></li>
                    <li><a href="#">Movies</a></li>
                    <li><a href="#">TV</a></li>
                    <li><a href="#">Games</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold text-lg mb-2">DC</h4>
                <ul class="space-y-3 text-gray-400">
                    <li><a href="#">Terms of Use</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Ad Choices</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold text-lg mb-2">SITES</h4>
                <ul class="space-y-3 text-gray-400">
                    <li><a href="#">DC Magazine</a></li>
                    <li><a href="#">DC Kids</a></li>
                    <li><a href="#">DC Universe</a></li>
                </ul>
            </div>
        </div>

        <!-- Logo DC -->
        <div class="opacity-20">
            <img src="{{ Vite::asset('resources/img/dc-logo-bg.png')}}" alt="DC Logo" style="width: 100px;">
        </div>
    </div>
    </div>

    <!-- Pulsante Sign-Up e Social Icons -->
    <div class="final-footer">
        <div class="d-flex justify-content-space-between">
        <button class="bg-blue-600 px-6 py-2 text-white font-bold">SIGN-UP NOW!</button>
        <div class="d-flex gap-3">
            <h5 class="text-primary">FOLLOW US!</h5>
            <a href="#"><img src="{{ Vite::asset('resources/img/footer-facebook.png') }}" alt="Facebook" class="h-8"></a>
            <a href="#"><img src="{{ Vite::asset('resources/img/footer-twitter.png') }}" alt="Twitter" class="h-8"></a>
            <a href="#"><img src="{{ Vite::asset('resources/img/footer-pinterest.png') }}" alt="Pinterest" class="h-8"></a>
            <a href="#"><img src="{{ Vite::asset('resources/img/footer-youtube.png') }}" alt="YouTube" class="h-8"></a>
        </div>
    </div>
    </div>
</footer>

</body>
</html>