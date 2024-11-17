<main>
    <div class="container py-5">
        <form method="POST"  action="{{ route('store_posting')}}" enctype="multipart/form-data" id="store-posting">
            @csrf
            <div class="row px-5 mx-5">
                <div class="col-md-8">
                    <h2 class="text-danger">Bài đăng</h2>
                    <div class="mt-3 border-top border-danger border-2">
                        <div class="my-3">
                            <label for="tieu_de" class="form-label">Tiêu đề</label>
                            <input type="text" class="form-control" name="tieu_de" id="tieu_de"
                                value="{{old('tieu_de')}}">
                        </div>

                        <div class="my-3 ">
                            <label for="so_luong" class="form-label">Số lượng</label>
                            <input type="text" class="form-control" name="so_luong" id="so_luong"
                                value="{{old('so_luong')}}">
                        </div>

                        <div class="my-3">
                            <label for="gioi_tinh" class="form-label">giới tính</label>
                            <select class="form-select" name="gioi_tinh" id="gioi_tinh">
                                <option {{ old('gioi_tinh') == 'Nam' ? 'selected' : '' }}>Nam</option>
                                <option {{ old('gioi_tinh') == 'Nữ' ? 'selected' : '' }}>Nữ</option>
                                <option {{ old('gioi_tinh') == 'Nam/Nữ' ? 'selected' : '' }}>Nam/Nữ</option>
                            </select>
                        </div>

                        <div class="my-3">
                            <label for="do_tuoi" class="form-label">Độ tuổi</label>
                            <input type="text" class="form-control" name="do_tuoi" id="do_tuoi"
                                value="{{old('do_tuoi')}}">
                        </div>

                        <div class="my-3">
                            <label for="mo_ta" class="form-label"><span class="text-danger"><sup>*</sup></span> Mô tả
                                công việc</label>
                            <textarea class="form-control overflow-auto" name="mo_ta" id="mo_ta" rows="6"
                                placeholder="Nhập nội dung ở đây...">{{old('mo_ta')}}</textarea>
                        </div>

                        <div class="my-3">
                            <label for="yeu_cau" class="form-label"><span class="text-danger"><sup>*</sup></span> Yêu
                                cầu </label>
                            <textarea class="form-control overflow-auto" name="yeu_cau" id="yeu_cau" rows="6"
                                placeholder="Nhập nội dung ở đây...">{{old('yeu_cau')}}</textarea>
                        </div>

                        <div class="my-3 form-group">
                            <label for="tinh_chat" class="form-label"><span class="text-danger"><sup>*</sup></span>Hình thức làm việc</label>
                            <select class="form-control" id="tinh_chat" name="tinh_chat">
                                <option {{ old('tinh_chat') == 'Chọn hình thức làm việc' ? 'selected' : '' }}>Chọn hình thức làm việc</option>
                                <option {{ old('tinh_chat') == 'Giờ hành chính' ? 'selected' : '' }}>Giờ hành chính</option>
                                <option {{ old('tinh_chat') == 'Làm thêm/Làm việc ngoài giờ' ? 'selected' : '' }}>Làm thêm/Làm việc ngoài giờ</option>
                                <option {{ old('tinh_chat') == 'Làm việc online' ? 'selected' : '' }}>Làm việc online</option>
                                <option {{ old('tinh_chat') == 'Làm việc theo ca/xoay ca' ? 'selected' : '' }}>Làm việc theo ca/xoay ca</option>
                                <option {{ old('tinh_chat') == 'Việc làm cho người lớn tuổi' ? 'selected' : '' }}>Việc làm cho người lớn tuổi</option>
                            </select>
                        </div>

                        <div class="my-3 form-group">
                            <label for="hoc_van" class="form-label"><span class="text-danger"><sup>*</sup></span>Trình độ học vấn</label>
                            <select class="form-control" id="hoc_van" name="hoc_van">
                                <option {{ old('hoc_van') == 'Chọn trình độ học vấn' ? 'selected' : '' }}>Chọn trình độ học vấn</option>
                                <option {{ old('hoc_van') == 'Tiểu học' ? 'selected' : '' }}>Tiểu học</option>
                                <option {{ old('hoc_van') == 'Trung học cơ sở' ? 'selected' : '' }}>Trung học cơ sở</option>
                                <option {{ old('hoc_van') == 'Trung học phổ thông' ? 'selected' : '' }}>Trung học phổ thông</option>
                                <option {{ old('hoc_van') == 'Tốt nghiệp đại học' ? 'selected' : '' }}>Tốt nghiệp đại học</option>
                            </select>
                        </div>

                        <div class="my-3 form-group">
                            <label for="chuyen_mon" class="form-label"><span class="text-danger"><sup>*</sup></span>Trình độ chuyên môn</label>
                            <input type="text" class="form-control" id="chuyen_mon" name="chuyen_mon" value="{{old('chuyen_mon')}}" placeholder="Nhập..">
                        </div>

                        <div class="my-3 form-group">
                            <label for="nghanh_nghe" class="form-label"><span class="text-danger"><sup>*</sup></span>Nghành nghề tuyển dụng</label>
                            <input type="text" class="form-control" id="nghanh_nghe" name="nghanh_nghe" value="{{old('nghanh_nghe')}}" placeholder="Nhập..">
                        </div>

                        <div class="my-3 form-group">
                            <label for="kinh_nghiem" class="form-label">Kinh nghiệm</label>
                            <select class="form-control" id="kinh_nghiem" name="kinh_nghiem">
                                <option {{ old('kinh_nghiem') == 'Chọn trình độ kinh nghiệm' ? 'selected' : '' }}>Chọn trình độ kinh nghiệm</option>
                                <option {{ old('kinh_nghiem') == 'dưới 1 năm' ? 'selected' : '' }}>dưới 1 năm</option>
                                <option {{ old('kinh_nghiem') == 'Từ 1-2 năm' ? 'selected' : '' }}>Từ 1-2 năm</option>
                                <option {{ old('kinh_nghiem') == 'Từ 3-4 năm' ? 'selected' : '' }}>Từ 3-4 năm</option>
                                <option {{ old('kinh_nghiem') == 'Từ 4-5 năm' ? 'selected' : '' }}>Từ 4-5 năm</option>
                                <option {{ old('kinh_nghiem') == 'Từ 5-10 năm' ? 'selected' : '' }}>Từ 5-10 năm</option>
                                <option {{ old('kinh_nghiem') == 'Trên 10 năm' ? 'selected' : '' }}>Trên 10 năm</option>
                            </select>
                        </div>

                        <div class="my-3">
                            <label for="muc_luong" class="form-label"><span class="text-danger"><sup>*</sup></span> Mức lương
                                 </label>
                            <input class="form-control" name="muc_luong" id="muc_luong" value="{{old('muc_luong')}}">
                        </div>

                        <div class="my-3">
                            <label for="thoi_gian" class="form-label"><span class="text-danger"><sup>*</sup></span>Thời gian làm việc
                                 </label>
                            <input class="form-control" name="thoi_gian" id="thoi_gian" value="{{old('thoi_gian')}}">
                        </div>

                        <div class="my-3 form-group">
                            <label for="thu_viec" class="form-label">Thời gian thử việc</label>
                            <select class="form-control" id="thu_viec" name="thu_viec">
                                <option {{ old('thu_viec') == 'Chọn..' ? 'selected' : '' }}>Chọn..</option>
                                <option {{ old('thu_viec') == 'Không có' ? 'selected' : '' }}>Không có</option>
                                <option {{ old('thu_viec') == '1 Tháng' ? 'selected' : '' }}>1 Tháng</option>
                                <option {{ old('thu_viec') == '1-2 Tháng' ? 'selected' : '' }}>1-2 Tháng</option>
                                <option {{ old('thu_viec') == '2-6 Tháng' ? 'selected' : '' }}>2-6 Tháng</option>
                                <option {{ old('thu_viec') == '1 năm' ? 'selected' : '' }}>1 năm</option>
                            </select>
                        </div>
                        <div class="my-3">
                            <label for="quyen_loi" class="form-label">Quyền lợi
                                 </label>
                            <textarea class="form-control overflow-auto" name="quyen_loi" id="quyen_loi" rows="6"
                                placeholder="Nhập nội dung ở đây...">{{old('quyen_loi')}}</textarea>
                        </div>

                        <div class="my-3 form-group">
                            <label for="noi_lam_viec" class="form-label"><span class="text-danger"><sup>*</sup></span>Nơi làm việc</label>
                            <input type="text" class="form-control" id="noi_lam_viec" name="noi_lam_viec" value="{{old('noi_lam_viec')}}" placeholder="Nhập..">
                        </div>


                        <div class="my-3 form-group">
                            <label for="het_han" class="form-label"><span class="text-danger"><sup>*</sup></span>Hạn tuyển dụng</label>
                            <input type="date" class="form-control" id="het_han" name="het_han" value="{{old('het_han')}}">
                        </div>

                        <div class="my-3 d-flex justify-content-end">
                            <button type="submit" class="btn btn-success">Tạo bài đăng</button>
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </div>
</main>
