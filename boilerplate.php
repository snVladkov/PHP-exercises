<?php
// boilerplate index
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лаптопи</title>
    <!-- Bootstrap 5.3 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
            <div class="container-fluid">
                <a class="navbar-brand fw-bold" href="#">Лаптопи</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Начало</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Продукти</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Контакти</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="container d-flex align-center py-4" style="min-height:80vh;">

    </main>
    <footer class="bg-dark text-center py-5 mt-auto">
        <div class="container">
            <span class="text-light">© 2024 All rights reserved</span>
        </div>
    </footer>
</body>
</html>

<?php
//страница home
?>
<div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
    <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
        <h1 class="display-4 fw-bold lh-1 text-body-emphasis">Най-добрите оферти за лаптопи!</h1>
        <p class="lead">Изберете от широката ни продуктова гама лаптопи. Богато разнообразие от ценови класове и хардуерни конфигурации. Намерете своя нов лаптоп днес.</p>
    </div>
    <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
        <img class="rounded-lg-3" src="https://cdn.thewirecutter.com/wp-content/media/2024/07/laptopstopicpage-2048px-3685-2x1-1.jpg" alt="" width="720">
    </div>
</div>

<?php
    // страница продукти
    $products = [
        [
            'image' => 'https://ardes.bg/uploads/original/dell-xps-13-plus-9320-393691.jpg',
            'title' => 'Dell XPS 13',
            'price' => '$999.99'
        ],
        [
            'image' => 'https://cdncloudcart.com/25880/products/images/28368/apple-macbook-air-m1-8gb-ddr4x-256gb-ssd-13-3-wqxga-gold-image_61a8cf36e50dc_600x600.jpeg?1638782461',
            'title' => 'Apple MacBook Air',
            'price' => '$1199.99'
        ],
        [
            'image' => 'https://img-cdn.tnwcdn.com/image?fit=1200%2C900&height=900&url=https%3A%2F%2Fcdn0.tnwcdn.com%2Fwp-content%2Fblogs.dir%2F1%2Ffiles%2F2021%2F08%2FHP-Spectre-x360-14-1-of-7.jpg&signature=0d2f21c8c102f0b5f8f935cee9d98ef6',
            'title' => 'HP Spectre x360',
            'price' => '$1099.99'
        ],
        [
            'image' => 'https://cdn.izotcomputers.com/8270-large_default/laptop-vtora-upotreba-lenovo-thinkpad-x1-carbon-gen-9.jpg',
            'title' => 'Lenovo ThinkPad X1 Carbon',
            'price' => '$1299.99'
        ],
        [
            'image' => 'https://laptop.bg/system/images/300015/normal/asus_zenbook_13_oled_ux325eaoledwb503r.jpg',
            'title' => 'Asus ZenBook 13',
            'price' => '$899.99'
        ],
        [
            'image' => 'https://gfx3.senetic.com/akeneo-catalog/7/1/b/9/71b955b8b0f63a78a44c1a6a845adbf09e281afc_1684023_LDH_00031_image1.jpg',
            'title' => 'Microsoft Surface Laptop 4',
            'price' => '$999.99'
        ],
        [
            'image' => 'https://ardes.bg/uploads/p/acer-swift-3-sf314-43-432825.jpg',
            'title' => 'Acer Swift 3',
            'price' => '$699.99'
        ],
        [
            'image' => 'https://ardes.bg/uploads/original/razer-blade-15-rz09-0421-428703.jpg',
            'title' => 'Razer Blade 15',
            'price' => '$1599.99'
        ]
    ];
?>

<div class="row">
    <form class="mb-4">
        <div class="input-group">
            <input type="hidden" name="page" value="products">
            <input type="text" class="form-control" placeholder="Търси продукт">
            <button class="btn btn-primary" type="submit">Търсене</button>
        </div>
    </form>
</div>
<div class="d-flex flex-wrap justify-content-between">
    <div class="card mb-4" style="width: 18rem;">
        <img src="https://ardes.bg/uploads/original/dell-xps-13-plus-9320-393691.jpg" class="card-img-top" alt="Product Image">
        <div class="card-body">
            <h5 class="card-title">Product 1</h5>
            <p class="card-text">$10.00</p>
        </div>
    </div>
    <div class="card mb-4" style="width: 18rem;">
        <img src="https://ardes.bg/uploads/original/dell-xps-13-plus-9320-393691.jpg" class="card-img-top" alt="Product Image">
        <div class="card-body">
            <h5 class="card-title">Product 2</h5>
            <p class="card-text">$20.00</p>
        </div>
    </div>
    <div class="card mb-4" style="width: 18rem;">
        <img src="https://ardes.bg/uploads/original/dell-xps-13-plus-9320-393691.jpg" class="card-img-top" alt="Product Image">
        <div class="card-body">
            <h5 class="card-title">Product 3</h5>
            <p class="card-text">$30.00</p>
        </div>
    </div>
    <div class="card mb-4" style="width: 18rem;">
        <img src="https://ardes.bg/uploads/original/dell-xps-13-plus-9320-393691.jpg" class="card-img-top" alt="Product Image">
        <div class="card-body">
            <h5 class="card-title">Product 4</h5>
            <p class="card-text">$40.00</p>
        </div>
    </div>
</div>

<?php
// страница контакти
?>
<h1>Свържете се с нас</h1>
<form>
    <div class="mb-3">
        <label for="name" class="form-label">Имена</label>
        <input type="text" class="form-control" id="name" placeholder="Your Name">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Имейл</label>
        <input type="email" class="form-control" id="email" placeholder="Your Email">
    </div>
    <div class="mb-3">
        <label for="message" class="form-label">Съобщение</label>
        <textarea class="form-control" id="message" rows="4"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Изпрати</button>
</form>

<?php
// страница 404 not found
http_response_code(404);
?>

<div class="d-flex justify-content-center align-items-center pt-5">
    <div class="text-center">
        <h1 class="display-1">Грешка 404</h1>
        <p class="lead">Страницата не е намерена ;(</p>
    </div>
</div>

