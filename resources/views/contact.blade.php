<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact - My Laravel App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('images/mp6.jpeg'); /* Change to your background image path */
            background-size: cover;
            background-position: center;
            color: white;
            height: 100vh; /* Full height */
            display: flex;
            align-items: center; /* Center vertically */
            justify-content: center; /* Center horizontally */
            position: relative; /* Position for overlay */
        }
        .overlay {
            background-color: rgba(0, 0, 0, 0.6); /* Darker overlay for better contrast */
            width: 100%;
            height: 100%;
            position: absolute; /* Position overlay */
            top: 0;
            left: 0;
            z-index: 1; /* Overlay above background */
        }
        .contact-form {
            max-width: 800px; /* Increased maximum width for a wider form */
            margin: 0 auto; /* Center the form */
            padding: 20px; /* Increased padding */
            background: rgba(30, 30, 30, 0.9); /* Dark background for form */
            border-radius: 10px;
            z-index: 2; /* Form above overlay */
        }
        .form-label {
            font-weight: bold;
        }
        .btn-primary {
            background-color: #007bff; /* Custom primary button color */
            border-color: #007bff; /* Ensure border matches */
        }
        .btn-primary:hover {
            background-color: #0056b3; /* Darker on hover */
            border-color: #0056b3; /* Match border on hover */
        }
        .navbar {
            margin-bottom: 50px; /* Add margin below navbar */
        }
    </style>
</head>
<body>

    <!-- Overlay -->
    <div class="overlay"></div>

    <!-- Navigation Section -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">Marketplace</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                <div class="nav-buttons">
            <a href="{{ route('home') }}" class="btn btn-primary">Home</a>
            <a href="{{ route('products') }}" class="btn btn-secondary">Products</a>
        </div>
                    
                </ul>
            </div>
        </div>
    </nav>

    <div class="contact-form">
        <h1 class="text-center mb-4">Contact Us</h1>
        <form>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" rows="4" required></textarea> <!-- Adjusted rows for better height -->
            </div>
            <button type="submit" class="btn btn-primary w-100">Send Message</button> <!-- Full width button -->
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
