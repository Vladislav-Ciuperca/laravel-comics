<div class="card">
        <img src="{{ $fumetto['thumb'] }}" alt="">
        <span class="price">{{ $fumetto['price'] }}</span>
        <span class="date">{{ $fumetto['sale_date'] }}</span>
        <h2 class="title">{{ $fumetto['title'] }}</h2>
        <div class="description">
            <span>{{ $fumetto['description'] }}</span>
        </div>
        <div class="type">{{ $fumetto['type'] }}</div>
        <div class="series">{{ $fumetto['series'] }}</div>
</div>
