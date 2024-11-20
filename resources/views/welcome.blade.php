<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #f3f4f6;
            font-family: 'Arial', sans-serif;
        }
        .splash-container {
            text-align: center;
            animation: fadeIn 2s ease-in;
        }
        .welcome-text {
            font-size: 2.5rem;
            color: #1a1a1a;
            margin-bottom: 1rem;
        }
        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }
    </style>
</head>
<body>
    <div class="splash-container">
        <h1 class="welcome-text">Welcome to {{ config('app.name') }}</h1>
    </div>

    <script>
        // Redirect after 3 seconds
        setTimeout(function() {
            window.location.href = "{{ url('/auth/login') }}";
        }, 3000);
    </script>
</body>
</html>
