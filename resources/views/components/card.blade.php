@props(['comic'])

<div class="series">
    <div class="comic">
        <div class="thumb">
            <img src="{{ $comic['thumb'] }}" alt="">
        </div>
        <p class="uppercase">
            {{ $comic['series'] }}
        </p>
    </div>
   </div>