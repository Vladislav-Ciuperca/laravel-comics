
<div class="card">
    <img src="{{ $comic['thumb'] }}" alt="">
    <span class="price">{{ $comic['price'] }}</span>
    <span class="date">{{ $comic['sale_date'] }}</span>
    <h2 class="title">{{ $comic['title'] }}</h2>
    <div class="description">
        <span>{{ $comic['description'] }}</span>
    </div>
    <div class="type">{{ $comic['type'] }}</div>
    <div class="series">{{ $comic['series'] }}</div>
</div>
