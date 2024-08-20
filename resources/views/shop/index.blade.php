<!DOCTYPE html>
<html>
<head>
    <title>Все товары</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <div class="shop-container">
        <div class="shop-header">
            <h1>Все товары</h1>
            <a href="/">Главня страница </a>
        </div>
        <div class="product-list">
            @foreach ($products as $product)
                <div class="product-item">
                    <h2>{{ $product->name }}</h2>
                    <p>{{ $product->summary }}</p>
                    <p class="price">Цена: {{ $product->price }} грн.</p>
                    <a href="{{ url('/shop/' . $product->id) }}">Подробнее</a>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
