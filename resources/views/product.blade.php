<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Products - Marketplace</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom CSS for body background */
        body {
            background-image: url('images/mp6.jpeg'); /* Same background as home page */
            background-size: cover;
            background-position: center;
            color: white;
            margin: 0; /* Ensure no margin around the body */
        }
        /* Custom CSS to enforce uniform image size */
        .product-image {
            width: 100%;
            height: 150px; /* Smaller height for the product image */
            object-fit: cover;
        }
        /* Custom CSS for header */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: rgba(248, 249, 250, 0.8); /* Light background with transparency */
            color: black; /* Change text color for visibility */
        }
        .header .marketplace-title {
            font-size: 24px;
            font-weight: bold;
        }
        .header .nav-buttons {
            display: flex;
            gap: 10px;
        }
        /* Custom CSS for product cards */
        .card {
            background-color: rgba(0, 0, 0, 0.6); /* Semi-transparent background for cards */
            border: none; /* Remove card border */
        }
        .card-body {
            padding: 1rem; /* Add padding to card body */
        }
        /* Spacing for product descriptions */
        .product-description {
            margin-top: 10px; /* Space above the description */
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <div class="header">
        <div class="marketplace-title">Marketplace</div>
        <div class="nav-buttons">
            <a href="{{ route('home') }}" class="btn btn-primary">Home</a>
            <a href="{{ route('contact.index') }}" class="btn btn-secondary">Contact</a>
        </div>
    </div>

    <!-- Main Content Section -->
    <div class="container mt-5">
        <h1 class="mb-4">Our Products</h1>
        <div class="row">
            <!-- Product 1 -->
            <div class="col-md-2 mb-4">
                <div class="card">
                    <img src="{{ asset('images/product1.jpg') }}" class="card-img-top product-image" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">Camera</h5>
                        <p class="card-text">Price: $1500</p>
                        <p class="product-description">This is a great product that meets all your needs.</p>
                    </div>
                </div>
            </div>
            <!-- Product 2 -->
            <div class="col-md-2 mb-4">
                <div class="card">
                    <img src="{{ asset('images/product2.jpg') }}" class="card-img-top product-image" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">Smart Phone</h5>
                        <p class="card-text">Price: $300</p>
                        <p class="product-description">High quality and great performance.</p>
                    </div>
                </div>
            </div>
            <!-- Product 3 -->
            <div class="col-md-2 mb-4">
                <div class="card">
                    <img src="{{ asset('images/product3.jpg') }}" class="card-img-top product-image" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">Jacket</h5>
                        <p class="card-text">Price: $60</p>
                        <p class="product-description">Fine Leather</p>
                    </div>
                </div>
            </div>
            <!-- Product 4 -->
            <div class="col-md-2 mb-4">
                <div class="card">
                    <img src="{{ asset('images/product4.jpg') }}" class="card-img-top product-image" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">Headphones</h5>
                        <p class="card-text">Price: $125</p>
                        <p class="product-description">The perfect choice for your needs.</p>
                    </div>
                </div>
            </div>
            <!-- Product 5 -->
            <div class="col-md-2 mb-4">
                <div class="card">
                    <img src="{{ asset('images/product5.jpg') }}" class="card-img-top product-image" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">Laptop</h5>
                        <p class="card-text">Price: $1000</p>
                        <p class="product-description">Get the best value for your money.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
