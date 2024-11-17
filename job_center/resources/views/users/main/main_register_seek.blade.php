<div class="container mb-5">
    <form method="POST" action="{{ route('store',['type' => 'job_seeker'])}}" enctype="multipart/form-data"
        id="signup-seeker-form">
        @csrf
        <diV class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title border-start border-4 border-primary ps-2 mb-4">Thông tin đăng nhập</h4>

                        <div class="mb-3">
                            <label for="name" class="form-label">Tên đăng nhập</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                name="name" value="{{ old('name') }}" required>
                            @error('name')
                            <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                name="email" value="{{ old('email') }}" required>
                            @error('email')
                            <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Mật khẩu</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                id="password" name="password" required>
                            @error('password')
                            <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Nhập lại mật khẩu</label>
                            <input type="password" class="form-control" id="password_confirmation"
                                name="password_confirmation" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title border-start border-4 border-primary ps-2 mb-4">Thông tin cá nhân</h4>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="ho-va-ten" class="form-label">Họ và Tên</label>
                                <input type="text" class="form-control @error('ho_va_ten') is-invalid @enderror"
                                    id="ho-va-ten" name="ho_va_ten" value="{{ old('ho_va_ten') }}"
                                    placeholder="Nhập họ và tên" required>
                                @error('ho_va_ten')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="so-cmnd-cccd" class="form-label">Số CMND/CCCD</label>
                                <input type="text" class="form-control @error('so_cmnd_cccd') is-invalid @enderror"
                                    id="so-cmnd-cccd" name="so_cmnd_cccd" value="{{ old('so_cmnd_cccd') }}"
                                    placeholder="Nhập số CMND/CCCD" required>
                                @error('so_cmnd_cccd')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="ngay-sinh" class="form-label">Ngày sinh</label>
                                <input type="date" class="form-control @error('ngay_sinh') is-invalid @enderror"
                                    id="ngay-sinh" name="ngay_sinh" value="{{ old('ngay_sinh') }}" required>
                                @error('ngay_sinh')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="ngay-cap" class="form-label">Ngày cấp</label>
                                <input type="date" class="form-control @error('ngay_cap') is-invalid @enderror"
                                    id="ngay-cap" name="ngay_cap" value="{{ old('ngay_cap') }}" required>
                                @error('ngay_cap')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="gioi-tinh" class="form-label">Giới tính</label>
                                <select class="form-select @error('gioi_tinh') is-invalid @enderror" id="gioi-tinh"
                                    name="gioi_tinh" required>
                                    <option selected>Nam</option>
                                    <option>Nữ</option>
                                    <option>Khác</option>
                                </select>
                                @error('gioi_tinh')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="noi-cap" class="form-label">Nơi cấp</label>
                                <input type="text" class="form-control @error('noi_cap') is-invalid @enderror"
                                    id="noi-cap" name="noi_cap" value="{{ old('noi_cap') }}" placeholder="Nhập nơi cấp"
                                    required>
                                @error('noi_cap')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="dan-toc" class="form-label">Dân tộc</label>
                                <select class="form-select @error('dan_toc') is-invalid @enderror" id="dan-toc"
                                    name="dan_toc" required>
                                    <option value="Kinh" {{ old('dan_toc') == 'Kinh' ? 'selected' : '' }}>Kinh</option>
                                    <option value="Tày" {{ old('dan_toc') == 'Tày' ? 'selected' : '' }}>Tày</option>
                                    <option value="Thái" {{ old('dan_toc') == 'Thái' ? 'selected' : '' }}>Thái</option>
                                </select>
                                @error('dan_toc')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email liên hệ</label>
                                <input type="email" class="form-control @error('email_phu') is-invalid @enderror"
                                    id="email_phu" name="email_phu" value="{{ old('email_phu') }}"
                                    placeholder="Nhập email" required>
                                @error('email_phu')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="phone" class="form-label">Số điện thoại</label>
                                <input type="tel" class="form-control @error('so_dien_thoai') is-invalid @enderror"
                                    id="phone" name="so_dien_thoai" value="{{ old('so_dien_thoai') }}"
                                    placeholder="Nhập số điện thoại" pattern="^(0[3-9]{1}[0-9]{8})$"
                                    title="Số điện thoại phải bắt đầu bằng 0 và có 10 chữ số" required>
                                @error('so_dien_thoai')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-3">
                                <label for="tinh-thanh-pho" class="form-label">Tỉnh/Thành phố</label>
                                <select class="form-select @error('tinh_thanh_pho') is-invalid @enderror"
                                    id="tinh-thanh-pho" name="tinh_thanh_pho" required>
                                    <option selected>Chọn tỉnh/thành phố</option>
                                    <option>Hà Nội</option>
                                    <option>TP. Hồ Chí Minh</option>
                                </select>
                                @error('tinh_thanh_pho')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-3">
                                <label for="quan-huyen" class="form-label">Quận/Huyện</label>
                                <select class="form-select @error('quan_huyen') is-invalid @enderror" id="quan-huyen"
                                    name="quan_huyen" required>
                                    <option selected>Chọn quận/huyện</option>
                                    <option>Quận 1</option>
                                    <option>Quận 2</option>
                                </select>
                                @error('quan_huyen')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-3">
                                <label for="phuong-xa" class="form-label">Phường/Xã</label>
                                <select class="form-select @error('phuong_xa') is-invalid @enderror" id="phuong-xa"
                                    name="phuong_xa" required>
                                    <option selected>Chọn phường/xã</option>
                                    <option>Phường 1</option>
                                    <option>Phường 2</option>
                                </select>
                                @error('phuong_xa')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <div class="col-md-6">
                                <label for="trinh-do-hoc-van" class="form-label">Trình độ học vấn</label>
                                <select class="form-select @error('trinh_do_hoc_van') is-invalid @enderror"
                                    id="trinh-do-hoc-van" name="trinh_do_hoc_van" required>
                                    <option selected>Chọn</option>
                                    <option>Tốt nghiệp tiểu học</option>
                                    <option>Tốt nghiệp trung học cơ sở</option>
                                    <option>Tốt nghiệp trung học phổ thông</option>
                                    <option>Tốt nghiệp đại học</option>
                                </select>
                                @error('trinh_do_hoc_van')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="trinh-do-cmkt-cao-nhat" class="form-label">Trình độ CMKT cao nhất</label>
                                <input class="form-control @error('trinh_do_cmkt_cao_nhat') is-invalid @enderror"
                                    list="options-trinh-do" id="trinh-do-cmkt-cao-nhat" name="trinh_do_cmkt_cao_nhat"
                                    placeholder="Chọn hoặc nhập" required>
                                <datalist id="options-trinh-do">
                                    <option value="Trung cấp">
                                    <option value="Cao đẳng">
                                    <option value="Đại học">
                                    <option value="Thạc sĩ">
                                    <option value="Tiến sĩ">
                                </datalist>
                                @error('trinh_do_cmkt_cao_nhat')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!--điều khoảng-->
                        <div class="row ">
                            <div class="col-md-8">
                                <h5 class="card-title mb-3">Thỏa thuận sử dụng</h5>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="overflow-auto" style="max-height: 150px">
                                            <p class="card-text mb-3">
                                                Xin hãy đọc cẩn thận những điều khoản của Bản thỏa thuận sử dụng khi
                                                truy
                                                cập vào Website việc làm Quangnam.vn, và nếu bạn không đồng ý với các
                                                điều
                                                khoản của Bản thỏa thuận này, xin đừng truy cập vào Website Quangnam.vn.
                                                Việc bạn truy cập, sử dụng trang Web Quangnam.vn có nghĩa là bạn chấp
                                                nhận,
                                                đồng ý bị ràng buộc với điều khoản, điều kiện của Bản thỏa thuận sử dụng
                                                này.<br>
                                                hdsjdshds<br>
                                                sdjfh,<br>
                                                fdsn<br>

                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="check_dieu_khoang">
                            <label class="form-check-label" for="check_dieu_khoang" id="label_check">
                                Tôi đã đọc và đồng ý với thỏa thuận sử dụng
                            </label>
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type="button" class="btn btn-primary" onclick="window.location.href='{{ route('home') }}';" >Quay
                                lại</button>
                            <button type="submit" class="btn btn-primary">Đăng ký</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<script>
const form = document.getElementById('signup-seeker-form');
const checkbox = document.getElementById('check_dieu_khoang');
const submitButton = form.querySelector('button[type="submit"]');
const label = document.getElementById('label_check');


// submitButton.disabled = true;


checkbox.addEventListener('change', function() {
    if (checkbox.checked) {
        submitButton.disabled = false;
    }
});

form.addEventListener('submit', function(event) {
    if (!checkbox.checked) {
        event.preventDefault(); // Prevent form submission
        label.classList.add('text-danger');
        submitButton.disabled = true;

    }
});
</script>