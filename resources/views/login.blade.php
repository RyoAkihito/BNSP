<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Login</title>
    <style>
        .login-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: 0;
            overflow: hidden;
        }

        .wave-container {
            flex: 1;
            position: relative;
            background: #f8f9fa;
            overflow: hidden;
        }

        .form-container {
            flex: 1;
            padding: 20px;
        }

        .card {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }

        /* Wave Animation */
        .wave {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100px;
            background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1440 320'%3E%3Cpath fill='%23007bff' fill-opacity='0.3' d='M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,112C672,96,768,96,864,112C960,128,1056,160,1152,160C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z'%3E%3C/path%3E%3C/svg%3E");
            background-size: cover;
            animation: wave 7s linear infinite;
        }

        .wave:nth-child(2) {
            opacity: 0.5;
            animation: wave 5s linear infinite reverse;
        }

        @keyframes wave {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-100%);
            }
        }

        /* Styling for the link */
        .register-link {
            color: #007bff;
            text-decoration: none;
            border-bottom: 1px solid #007bff;
        }

        .register-link:hover {
            color: #0056b3;
            border-bottom: 1px solid #0056b3;
        }
    </style>
</head>

<body>
    <div class="container-fluid login-container">
        <div class="row w-100">
            <!-- Left Side: Wave Animation -->
            <div class="wave-container">
                <div class="wave"></div>
                <div class="wave"></div>
            </div>

            <!-- Right Side: Form -->
            <div class="form-container">
                <div class="card">
                    <h1 class="text-center mb-4">Login</h1>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $item)
                                    <li>{{ $item }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" name="name" class="form-control" placeholder="Masukkan nama" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" value="{{ old('email') }}" name="email" class="form-control" placeholder="Masukkan email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Masukkan password" required>
                        </div>
                        <div class="mb-3 d-grid">
                            <button name="submit" type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </form>

                    <!-- Add the "Sudah punya akun?" text with link -->
                    <p class="text-center mt-3 mb-0">
                        Belum punya akun?
                        <a href="{{ route('register') }}" class="register-link">Register di sini</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>