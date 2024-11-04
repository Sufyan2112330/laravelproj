<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Marketplace</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('images/mp6.jpeg'); /* Replace with your background image path */
            background-size: cover;
            background-position: center;
            height: 100vh;
            color: white;
            margin: 0; /* Ensure no margin around the body */
            font-family: 'Arial', sans-serif;
        }
        .overlay {
            background-color: rgba(0, 0, 0, 0.7); /* Dark overlay for better text contrast */
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            position: relative; /* Position relative to contain absolute elements */
            text-align: center; /* Center align the text */
        }
        .overlay h1 {
            font-size: 3rem; /* Larger font size for the title */
            margin-bottom: 20px;
            animation: fadeIn 1s; /* Add fade-in animation */
        }
        .overlay p {
            font-size: 1.25rem; /* Slightly larger paragraph font size */
            margin-bottom: 30px;
            animation: fadeIn 1.5s; /* Add fade-in animation */
        }
        .nav-buttons {
            position: absolute; /* Position the buttons absolutely */
            top: 20px; /* Adjust the top position */
            right: 20px; /* Adjust the right position */
        }
        .btn-custom {
            margin-left: 10px;
            transition: background-color 0.3s; /* Smooth transition for button hover */
        }
        .btn-custom:hover {
            background-color: #2d71b9; /* Change button color on hover */
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        /* Additional responsive design */
        @media (max-width: 768px) {
            .overlay h1 {
                font-size: 2.5rem; /* Smaller font size on mobile */
            }
            .overlay p {
                font-size: 1rem; /* Smaller paragraph font size on mobile */
            }
        }
    </style>
</head>
<body>
    <div class="overlay">
        <div class="nav-buttons">
            <a href="{{ route('products') }}" class="btn btn-primary btn-custom">Shop Products</a>
            <a href="{{ route('contact.index') }}" class="btn btn-secondary btn-custom">Contact Us</a>
        </div>
        <div class="container text-center">
            <h1 class="mb-4">Welcome to the Marketplace!</h1>
            <p class="mb-5">Discover a diverse collection of trendy clothes and the latest electronics. Enjoy unbeatable prices and exclusive deals tailored just for you!</p>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
