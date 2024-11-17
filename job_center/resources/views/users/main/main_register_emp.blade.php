<div class="container mb-5">
    <form method="POST" action="{{ route('register',['type' => 'employer'])}}" enctype="multipart/form-data" id="signup-employer-form">
        @csrf
        <div class="row mb-4">
            <!-- Form đăng nhập -->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title border-start border-4 border-primary ps-2 mb-4">Thông tin đăng nhập
                        </h4>

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

            <!-- Phần thông tin doanh nghiệp -->
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title border-start border-4 border-primary ps-2 mb-4">Giấy phép đăng ký kinh
                            doanh/Quyết định thành lập doanh nghiệp</h4>
                        <div class="mb-4">
                            <div class="d-flex align-items-center gap-2">
                                <input type="file" name="giay_phep" id="giay_phep"
                                    class="form-control @error('giay_phep') is-invalid @enderror">
                                @error('giay_phep')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <h4 class="card-title border-start border-4 border-primary ps-2 mb-4">Thông tin Doanh nghiệp,
                            Người tuyển dụng</h4>
                        <label class="form-label mb-3">Hình thức kinh doanh<span class="text-danger">*</span></label>
                        <div class="mb-4">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="loai_hinh" id="ca_nhan" value="ca_nhan" checked>
                                <label class="form-check-label" for="ca_nhan">Cá nhân/ Hộ kinh doanh cá thể</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="loai_hinh" id="doanh_nghiep" value="doanh_nghiep">
                                <label class="form-check-label" for="doanh_nghiep">Doanh nghiệp</label>
                            </div>
                        </div>

                        <!-- Hàng 1 -->
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="ten_cong_ty">Tên doanh nghiệp<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('ten_cong_ty') is-invalid @enderror"
                                        id="ten_cong_ty" value="{{ old('ten_cong_ty') }}" name="ten_cong_ty" placeholder="Nhập....">
                                    @error('ten_cong_ty')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="ten_nguoi_dai_dien">Họ tên người đại diện<span
                                            class="text-danger">*</span></label>
                                    <input type="text"
                                        class="form-control @error('ten_nguoi_dai_dien') is-invalid @enderror"
                                        id="ten_nguoi_dai_dien" name="ten_nguoi_dai_dien" value="{{ old('ten_nguoi_dai_dien') }}" placeholder="Nhập....">
                                    @error('ten_nguoi_dai_dien')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="so_cmnd_cccd">Số CMND/CCCD <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('so_cmnd_cccd') is-invalid @enderror"
                                        id="so_cmnd_cccd" name="so_cmnd_cccd" value="{{ old('so_cmnd_cccd') }}" placeholder="Nhập....">
                                    @error('so_cmnd_cccd')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="email_phu">Email liên hệ <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control @error('email_phu') is-invalid @enderror"
                                        id="email_phu" name="email_phu" value="{{ old('email_phu') }}" placeholder="Nhập....">
                                    @error('email_phu')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- Hàng 2 -->
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="tinh_thanh_pho">Tỉnh/Thành phố <span
                                            class="text-danger">*</span></label>
                                    <select class="form-select @error('tinh_thanh_pho') is-invalid @enderror"
                                        id="tinh_thanh_pho" name="tinh_thanh_pho" >
                                        <option selected>Chọn tỉnh/thành phố</option>
                                        <option>Hà Nội</option>
                                        <option>TP. Hồ Chí Minh</option>
                                    </select>
                                    @error('tinh_thanh_pho')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="quan_huyen">Quận/Huyện <span class="text-danger">*</span></label>
                                    <select class="form-select @error('quan_huyen') is-invalid @enderror"
                                        id="quan_huyen" name="quan_huyen">
                                        <option selected>Chọn quận/huyện</option>
                                        <option>Quận 1</option>
                                        <option>Quận 2</option>
                                    </select>
                                    @error('quan_huyen')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="phuong_xa">Phường/Xã <span class="text-danger">*</span></label>
                                    <select class="form-select @error('phuong_xa') is-invalid @enderror" id="phuong_xa"
                                        name="phuong_xa">
                                        <option selected>Chọn phường/xã</option>
                                        <option>Phường 1</option>
                                        <option>Phường 2</option>
                                    </select>
                                    @error('phuong_xa')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- Hàng 3 -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="dia_chi">Địa chỉ chi tiết <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('dia_chi') is-invalid @enderror"
                                        id="dia_chi" name="dia_chi" value="{{ old('dia_chi') }}" placeholder="Nhập....">
                                    @error('dia_chi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="kcn">KCN</label>
                                    <input type="text" class="form-control @error('kcn') is-invalid @enderror" id="kcn"
                                        name="kcn" value="{{ old('kcn') }}" placeholder="Nhập....">
                                    @error('kcn')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- Hàng 4 -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nganh_kinh_doanh">Ngành kinh doanh chính <span
                                            class="text-danger">*</span></label>
                                    <select class="form-select @error('nganh_kinh_doanh') is-invalid @enderror"
                                        id="nganh_kinh_doanh" name="nganh_kinh_doanh">
                                        <option selected disabled>Chọn...</option>
                                        <option value="cntt">Công nghệ thông tin</option>
                                        <option value="sanXuat">Sản xuất</option>
                                        <option value="thuongMai">Thương mại</option>
                                        <option value="dichVu">Dịch vụ</option>
                                    </select>
                                    @error('nganh_kinh_doanh')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="mat_hang">Mặt hàng/sản phẩm dịch vụ chính <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control  @error('mat_hang') is-invalid @enderror"
                                        id="mat_hang" name="mat_hang" value="{{ old('mat_hang') }}" placeholder="Nhập....">
                                    @error('mat_hang')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror

                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-12">
                            <div class="form-group">
                                    <label for="quy_mo_lao_dong">Quy mô lao động<span
                                            class="text-danger">*</span></label>
                                    <select class="form-select @error('quy_mo_lao_dong') is-invalid @enderror"
                                        id="quy_mo_lao_dong" name="quy_mo_lao_dong">
                                        <option selected disabled>Chọn...</option>
                                        <option value="<10">Dưới 10</option>
                                        <option value="10-50">10-50</option>
                                        <option value="51-100">51-100</option>
                                        <option value="101-200">101-200</option>
                                        <option value="201-500">201-500</option>
                                        <option value="501-1000">501-1000</option>
                                        <option value="1001-3000">1001-3000</option>
                                        <option value="3001-10000">3001-10000</option>
                                        <option value=">10000">Trên 10000</option>
                                    </select>
                                    @error('quy_mo_lao_dong')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
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
                        <!-- Buttons -->
                        <div class="row">
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button type="button" class="btn btn-primary" onclick="window.location.href='{{ route('home') }}';">Quay
                                    lại</button>
                                <button type="submit" class="btn btn-primary">Đăng ký</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Phần 2: Form thông tin chi tiết -->
    </form>
</div>
<script>
const form = document.getElementById('signup-employer-form');
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