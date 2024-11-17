@if(session('success'))
<script>
alert('{{ session('
    success ') }}');
</script>
@endif
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <style>
    body {
        background-color: #f2f2f2;
    }

    .login-container {
        max-width: 400px;
        margin: 100px auto 0;
        padding: 30px;
        background-color: white;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    </style>
</head>

<body>
    @if ($errors->has('login'))
    <div class="alert alert-danger text-center" id="login-error-message">
        {{ $errors->first('login') }}
    </div>
    <script>
    // Thêm một khoảng thời gian chờ 5 giây để ẩn thông báo
    setTimeout(function() {
        var message = document.getElementById('login-error-message');
        if (message) {
            message.style.display = 'none'; // Ẩn thông báo sau 5 giây
        }
    }, 5000); // 5000 ms = 5 giây
    </script>
    @endif
    <div class="container login-container">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h2 class="text-center mb-5">Đăng nhập</h2>
            <div class="mb-4">

                <input type="text" class="form-control" name="name" id="name" placeholder="Tên đăng nhập" required>
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" name="password" id="password" placeholder="Mật khẩu"
                    required>
            </div>
            <div class="form-check mb-3">
                <div class="d-flex justify-content-between align-items-center">
                    <!-- Sử dụng align-items-center -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                            {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            Nhớ tài khoảng
                        </label>
                    </div>
                    @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Quên mật khẩu?') }}
                    </a>
                    @endif
                </div>
            </div>
            <div class="text-center d-flex mt-3">
                <button type="submit" class="btn btn-primary mx-3 w-100" name="role" value="job_seeker"> ứng
                    viên</button>
                <button type="submit" class="btn btn-primary mx-3 w-100" name="role" value="employer"> nhà tuyển
                    dụng</button>
            </div>
        </form>
    </div>
</body>


</html>