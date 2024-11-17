<header class="d-flex flex-column">
    <div class="container-fluid d-flex justify-content-between align-items-center py-1 px-3 header-top">
        <div class="text-white py-2">
            <div class="d-flex flex-column flex-sm-row">
                <!-- Thay đổi để sắp xếp dọc ở màn hình nhỏ -->
                <div class="me-5 mb-sm-0 ">
                    <!-- Thêm margin cho màn hình nhỏ -->
                    <i class="fas fa-phone-alt me-2 "></i>
                    <span>Hotline: 0789454598</span>
                </div>
                <div>
                    <i class="fas fa-envelope me-2"></i>
                    <a href="mailto:contact@vieclamquangnam.vn" class="text-white text-decoration-none">
                        ngohuynhloc@gmail.com.vn
                    </a>
                </div>
            </div>
        </div>
        <div class="auth-buttons">
            @guest
            <button class="btn btn-login me-2"
                onclick="window.location.href='{{ route('showformlogin') }}'">{{ __('Đăng nhập') }}</button>
            <div class="btn-group">
                <button type="button" class="btn btn-sigin dropdown-toggle" data-bs-toggle="dropdown"
                    aria-expanded="false">{{ __('Đăng kí') }}</button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('register', ['type' => 'job_seeker']) }}">Ứng viên</a>
                    </li>
                    <li><a class="dropdown-item" href="{{ route('register', ['type' => 'employer']) }}">Nhà tuyển
                            dụng</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#" style="display: none;">Quản trị viên</a></li>
                </ul>
            </div>
            @else

            @if(Auth::user() && Auth::user()->role === 'job_seeker')
            <div class="dropdown d-flex align-items-center" style="position: relative;">
                <i class="bi bi-person-circle fs-2" style="color: white;"></i> <!-- Icon -->
                <p class="mb-0 ms-2 pe-3 name " style="color: white;">{{ Auth::user()->name }}</p>
                <button class="btn btn-outline-dark" id="dropdownButton">☰</button>
                <div class="dropdown-menu" id="dropdownMenu">
                    <a href="#" class="text-dark">Hồ sơ</a>
                    <a href="#" class="text-dark">Tài khoản</a>
                    <a href="#" class="text-dark">Việc đã ứng tuyển</a>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        class="text-dark">Đăng xuất</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>


            @elseif(Auth::user() && Auth::user()->role === 'employer')

            <div class="dropdown d-flex align-items-center" style="position: relative;">
                <i class="bi bi-person-circle fs-2" style="color: white;"></i> <!-- Icon -->
                <p class="mb-0 ms-2 pe-3 name " style="color: white;">{{ Auth::user()->name }}</p>
                <button class="btn btn-outline-dark" id="dropdownButton">☰</button>
                <div class="dropdown-menu" id="dropdownMenu">
                    <a href="#" class="text-dark">Hồ sơ</a>
                    <a href="#" class="text-dark">Tài khoản</a>
                    <a href="{{route('posting')}}" class="text-dark">Tạo bài đăng</a>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        class="text-dark">Đăng xuất</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
            @endif
            @endguest
        </div>
    </div>
    <div class="hero-section">
        <div class="hero-content text-center">
            <h1 class="fw-bold mb-3 d-none d-sm-block">Khám Phá Cơ Hội Nghề Nghiệp Mới</h1>
            <!-- Ẩn thẻ ở màn hình nhỏ -->
            <p class="lead mb-3">Kết nối với hàng nghìn công việc và nhà tuyển dụng hàng đầu</p>
            <a href="#" class="btn btn-lg btn-custom mb-4">Tìm Việc Ngay</a>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark py-0" style="background: black" id="navbar">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav justify-content-center flex-grow-1">
                    <li class="nav-item p-2 border-end {{ request()->routeIs('home') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('home') }}"><i class="fas fa-home fa-lg me-1"></i> Trang
                            chủ</a>
                    </li>
                    <li class="nav-item p-2 border-end {{ request()->routeIs('introduce') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('introduce') }}"><i
                                class="fas fa-info-circle fa-lg fa-2x me-1"></i> Giới thiệu</a>
                    </li>
                    <li class="nav-item p-2 border-end {{ request()->is('jobs*') ? 'active' : '' }}">
                        <a class="nav-link" href="#"><i class="fas fa-search fa-lg fa-2x me-1"></i> Việc làm</a>
                    </li>
                    <li class="nav-item p-2 border-end {{ request()->is('notifications*') ? 'active' : '' }}">
                        <a class="nav-link" href="#"><i class="fas fa-bell fa-lg fa-2x me-1"></i> Thông báo</a>
                    </li>
                    <li class="nav-item p-2 border-end {{ request()->is('candidates*') ? 'active' : '' }}">
                        <a class="nav-link" href="#"><i class="fas fa-users fa-lg fa-2x me-1"></i> Ứng viên</a>
                    </li>
                    <li class="nav-item p-2 border-end {{ request()->is('contact*') ? 'active' : '' }}">
                        <a class="nav-link" href="#"><i class="fas fa-envelope fa-lg fa-2x me-1"></i> Liên hệ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Lấy tất cả các phần tử có class là 'nav-item'
        const navItems = document.querySelectorAll('.nav-item');

        // Thêm sự kiện click cho từng phần tử
        navItems.forEach(item => {
            item.addEventListener('click', function() {
                // Xóa class 'active' từ tất cả các nav-item
                navItems.forEach(nav => nav.classList.remove('active'));

                // Thêm class 'active' cho phần tử được click
                this.classList.add('active');
            });
        });
    });
    </script>

    <!-- 
    @if (Auth::check())
    <div class="menu p-3">
        <div class="container d-flex align-items-center justify-content-center">
            <div class="d-flex px-5">
                
                <div class="d-flex align-items-center">
                    <i class="bi bi-person-circle fs-2"></i> 
                    <p class="mb-0 ms-2 me-5 pe-3 border-end border-2 border-dark name ">{{ Auth::user()->name }}</p>
                    
                    <a href="#" class="text-dark px-3 py-2 mx-2 item">Hồ sơ</a>
                    <a href="#" class="text-dark px-3 py-2 mx-2 item">Tài khoản</a>
                    <a href="#" class="text-dark px-3 py-2 mx-2 item">Việc đã ứng tuyển</a>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        class="text-dark px-3 py-2 mx-2 item">Đăng xuất</a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endif -->
</header>