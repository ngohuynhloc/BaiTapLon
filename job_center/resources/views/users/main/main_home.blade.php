<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<main class="container my-5 ">
    <div class="row g-4 introduce m-5">
        <div class="col-lg-8">
            <div class="card h-100">
                <div class="card-body">
                    <h2 class="card-title mb-4">Về Chúng Tôi</h2>
                    <p class="card-text">Trung tâm Dịch vụ Việc làm là đơn vị tiên phong trong lĩnh vực kết nối việc
                        làm, mang đến giải pháp tuyển dụng và tìm việc hiệu quả. Với đội ngũ chuyên gia giàu kinh
                        nghiệm, chúng tôi cam kết hỗ trợ cả người tìm việc và nhà tuyển dụng đạt được mục tiêu của
                        mình.
                    </p>
                    <a href="{{route('introduce')}}" class="btn btn-custom mt-3">Tìm Hiểu Thêm</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card h-100">
                <div class="card-header">
                    <h5 class="mb-0">Thông Báo Mới</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Hội chợ việc làm tháng 5/2024
                        <span class="badge bg-primary rounded-pill">Mới</span>
                    </li>
                    <li class="list-group-item">Khóa đào tạo kỹ năng phỏng vấn</li>
                    <li class="list-group-item">Cơ hội việc làm mới trong ngành IT</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- viec lam moi -->
    <div class="row m-5">
        <div class="col-md-8">
            <h4 class="text-danger border-bottom border-danger pb-2 mb-3 text-truncate">VIỆC LÀM MỚI</h4>
            <div class="scrollable-content border border-dark">
                <div class="row row-cols-2" id="job-list">
                    <script>
                    $(document).ready(function() {
                        $.ajax({
                            url: 'http://127.0.0.1:8000/api/postings', // Đường dẫn API lấy 10 bài đăng gần nhất
                            method: 'GET',
                            success: function(data) {
                                console.log(data);
                                // Duyệt qua danh sách các bài đăng và hiển thị lên giao diện
                                data.data.forEach(function(jobPosting) {
                                    $('#job-list').append(`
                                         <div class="px-2 col">
                                             <div class="card">
                                                 <div class="card-body">
                                                    <a href="#" class="mb-3 card-title d-block text-uppercase fw-bold text-decoration-none text-truncate" style="font-size: 1.2em">
                                                       <i class="fas fa-briefcase me-2"></i>${jobPosting.tieu_de}
                                                           </a>
                                                    <p class="card-text mt-4"><i class="fas fa-dollar-sign me-2"></i>${jobPosting.muc_luong}</p>
                                                    <p class="card-text"><i class="far fa-calendar-alt me-2"></i>${jobPosting.created_at}</p>
                                                    <p class="card-text text-decoration-none text-truncate"><i class="fas fa-map-marker-alt me-2"></i>${jobPosting.noi_lam_viec}</p>
                                                 </div>
                                             </div>
                                         </div>
                                 `);
                                });
                            },
                            error: function(xhr, status, error) {
                                console.log('Có lỗi xảy ra:', error);
                            }
                        });
                    });
                    </script>
                </div>

            </div>
            <div>
                <button type="button" class="btn btn-danger mt-3 float-end">Xem tất cả >></button>
            </div>
        </div>


        <!-- nhà tuyển dụng hàng đầu -->
        <div class="col-md-4">
            <h4 class="text-danger border-bottom border-danger pb-2 mb-3 text-truncate">NHÀ TUYỂN DỤNG UY TÍN</h4>
            <div class="employer-list scrollable-content border border-dark">
                <div class="employer-item">
                    <img src="" alt="Company logo" class="employer-logo">
                    <div class="employer-info">
                        <p>Công ty TNHH Oriental Commerce Vina dhsahshaahshaskhkjdshdskkjdsh</p>
                    </div>
                </div>
                <div class="employer-item">
                    <img src="" alt="Company logo" class="employer-logo">
                    <div class="employer-info">
                        <p>CHI NHÁNH QUẢNG NAM - CÔNG TY CỔ PHẦN VIỄN THÔNG FPT</p>
                    </div>
                </div>
                <div class="employer-item">
                    <img src="" alt="Company logo" class="employer-logo">
                    <div class="employer-info">
                        <p>CÔNG TY CPTM PHÚC PHÚ THÀNH</p>
                    </div>
                </div>
                <div class="employer-item">
                    <img src="" alt="Company logo" class="employer-logo">
                    <div class="employer-info">
                        <p>Công ty Cổ phần Tuấn Đạt</p>
                    </div>
                </div>
            </div>
            <div>
                <button type="button" class="btn btn-danger mt-3 float-end">Xem tất cả >></button>
            </div>
        </div>
    </div>

    <!-- đgggf -->
    <div class="introduce container-fluid row my-5 g-4 justify-content-center">
        <div class="col-md-4">
            <div class="card text-center h-100">
                <div class="card-body">
                    <i class="fas fa-search feature-icon"></i>
                    <h5 class="card-title">Tìm Việc Làm</h5>
                    <p class="card-text">Khám phá hàng nghìn cơ hội việc làm phù hợp với bạn.</p>
                    <a href="#" class="btn btn-custom mt-3">Xem Việc Làm</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center h-100">
                <div class="card-body">
                    <i class="fas fa-bullhorn feature-icon"></i>
                    <h5 class="card-title">Đăng Tin Tuyển Dụng</h5>
                    <p class="card-text">Đăng tin tuyển dụng và tìm kiếm ứng viên phù hợp.</p>
                    <a href="#" class="btn btn-custom mt-3">Đăng Tin</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center h-100">
                <div class="card-body">
                    <i class="fas fa-comments feature-icon"></i>
                    <h5 class="card-title">Tư Vấn Nghề Nghiệp</h5>
                    <p class="card-text">Nhận tư vấn từ chuyên gia để phát triển sự nghiệp.</p>
                    <a href="#" class="btn btn-custom mt-3">Đặt Lịch Tư Vấn</a>
                </div>
            </div>
        </div>
    </div>
</main>