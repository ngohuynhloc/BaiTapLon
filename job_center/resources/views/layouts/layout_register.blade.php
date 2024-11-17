<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng kí</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
</head>
<style>
    .btn-light.active {
        background-color: #2c50c6;
        color: white;
    }
</style>
<body>
    <header>
        <div class="container-fruid d-flex row mb-5 py-3" style="background-color: #003366;">
            <div class="col-md-6 d-flex justify-content-start">
                <button id="labor-btn" class="btn btn-light mx-3" data-url  ="{{ route('register', ['type' => 'job_seeker']) }}" >Đăng ký dành cho người lao động</button>
                <button id="employer-btn" class="btn btn-light" data-url="{{ route('register', ['type' => 'employer']) }}">Đăng ký dành cho nhà tuyển dụng</button>
            </div>
            <div class="col-md-6 d-flex justify-content-end">
                <button id="login-btn" class="btn btn-primary me-3" data-url="{{ route('home') }}">Trang chủ</button>
            </div>
        </div>
    </header>
    @yield('content')
</body>
<script src="{{ asset('js/script_register.js') }}"></script>
</html>