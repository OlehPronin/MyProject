<!DOCTYPE html>
<html>
<head>
    <title>{{ $product->name }}</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <div class="shop-container">
        <div class="product-item">
            <h2>{{ $product->name }}</h2>
            <p>{{ $product->summary }}</p>
            <p class="price">Цена: {{ $product->price }} грн.</p>
            <p>Категория: {{ $product->category }}</p>
            <a href="{{ url('/shop') }}">Назад к списку товаров</a>
        </div>
    </div>
</body>
</html>
