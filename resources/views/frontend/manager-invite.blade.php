<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xush kelibsiz, Manager!</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'Arial', sans-serif;
        }
        .welcome-card {
            background-color: white;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
            max-width: 700px;
            width: 100%;
        }
        .welcome-card h1 {
            font-size: 28px;
            margin-bottom: 20px;
            color: #007bff;
            text-align: center;
        }
        .welcome-card p {
            font-size: 18px;
            margin-bottom: 20px;
            color: #333;
            text-align: center;
        }
        .provider-logo {
            display: block;
            max-width: 150px;
            margin: 0 auto 20px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }
        .form-register {
            margin-top: 20px;
        }
        .form-register .form-group {
            margin-bottom: 20px;
        }
        .form-register label {
            font-weight: bold;
            color: #333;
        }
        .form-register input {
            height: 45px;
            font-size: 16px;
        }
        .form-register .btn-rounded {
            padding: 10px 30px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 50px;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }
        .form-register .btn-rounded:hover {
            background-color: #0056b3;
        }
        .alert {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="welcome-card">
        <!-- Provider Logotipi -->
        <img src="{{ asset('storage/' . $provider->logo) }}" alt="Provider Logo" class="provider-logo">
        
        <h1>Xush kelibsiz, Manager!</h1>
        <p>Provider nomi: {{ $provider->name }}</p>
        <p>Email: {{ $email }}</p>
        <p>Sizni providerga qo'shilishingiz uchun taklif qildik.</p>

        <!-- Error xabarlarini ko'rsatish -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Manager uchun ro'yxatdan o'tish formasi -->
        <form class="form-register row" method="POST" action="{{ route('mangager.store.provider') }}">
            @csrf
            <div class="form-group col-lg-6 col-sm-12">
                <label>Manager's name<span class="brand-1">*</span></label>
                <input type="text" name="name" class="form-control text-center"
                    placeholder="Enter manager's name" required value="{{ old('name') }}">
            </div>
            <div class="form-group col-lg-6 col-sm-12">
                <label>Manager's email<span class="brand-1">*</span></label>
                <input type="email" name="email" class="form-control text-center"
                    placeholder="Enter manager's email" required value="{{$email}}">
            </div>
            <div class="form-group col-lg-6 col-sm-12">
                <label>Manager's password<span class="brand-1">*</span></label>
                <input type="password" name="password" class="form-control text-center"
                    placeholder="Enter manager's password" required>
            </div>
            <div class="form-group col-lg-6 col-sm-12">
                <label>Confirm Manager's password<span class="brand-1">*</span></label>
                <input type="password" name="password_confirmation" class="form-control text-center"
                    placeholder="Confirm manager's password" required>
            </div>
            <input type="hidden" name="provider_id" value="{{$provider->id}}" >

            <div class="form-group col-lg-12 text-center">
                <button class="btn btn-black btn-rounded">Complete Registration
                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="8" viewbox="0 0 23 8" fill="none">
                        <path d="M22.5 4.00032L18.9791 0.479492V3.3074H0.5V4.69333H18.9791V7.52129L22.5 4.00032Z" fill=""></path>
                    </svg>
                </button>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
