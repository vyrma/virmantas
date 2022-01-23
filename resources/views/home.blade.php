<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>
<body>

    <header class="hero">
        <div class="container spacing">
            <h1 class="primary-title">Virmantas Portfolio</h1>
            <p>
                Simi is everything.
            </p>
            <a href="#" class="btn"></a>
            </div>  
    </header>

    <main>
        <section class="featured">
           <div class="contariner">
               <h2 class="section-title">Featured Products</h2>
                <div class="split">
                    <a href="" class="featured_item">
                        <img src="{{ asset('programming_logo.png') }}" alt="feature_img">
                        <p class="featured_details"><span class="price">test</span>TArkim</p>
                    </a>
                    <a href="" class="featured_item">
                        <img src="{{ asset('programming_logo.png') }}" alt="feature_img">
                        <p class="featured_details"><span class="price">test</span>TArkim</p>
                    </a>
                    <a href="" class="featured_item">
                        <img src="{{ asset('programming_logo.png') }}" alt="feature_img">
                        <p class="featured_details"><span class="price">test</span>TArkim</p>
                    </a>
                    </div>
                </div> 
        </section>
        <section class="our-products">
            <div class="container"></div>
            <h2 class="section-title">Our Products</h2>
            <article class="product pro-red spacing">
                <img src="{{ asset('programming_logo.png') }}" alt="" class="product_image">
                <h3 class="product_title"></h3>
                <div class="production_description"></div>
                <a href="" class="btn">Spausk</a>
            </article>

            <article class="product pro-white spacing">
                <img src="{{ asset('programming_logo.png') }}" alt="" class="product_image">
                <h3 class="product_title"></h3>
                <div class="production_description"></div>
                <a href="" class="btn">Spausk</a>
            </article>

            <article class="product pro-blue spacing">
                <img src="{{ asset('programming_logo.png') }}" alt="" class="product_image">
                <h3 class="product_title"></h3>
                <div class="production_description"></div>
                <a href="" class="btn">Spausk</a>
            </article>
        </section>
    </main>
</body>
</html>