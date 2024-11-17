<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('job_postings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employer_id')->constrained('employers')->onDelete('cascade');
            $table->string('tieu_de');  // Tiêu đề công việc
            $table->string('so_luong_can_tuyen')->nullable();  // Số lượng cần tuyển (dùng string thay vì integer)
            $table->string('gioi_tinh')->nullable();  // Giới tính yêu cầu (nam, nữ, khác)
            $table->string('do_tuoi')->nullable();  // Độ tuổi (đến)
            $table->text('mo_ta');  // Mô tả công việc
            $table->text('yeu_cau');  // Yêu cầu công việc
            $table->string('tinh_chat')->nullable();  // Tính chất công việc
            $table->string('trinh_do_hoc_van')->nullable();  // Trình độ học vấn
            $table->string('trinh_do_chuyen_mon')->nullable();  // Trình độ chuyên môn
            $table->string('nganh_nghe')->nullable();  // Ngành nghề
            $table->string('kinh_nghiem')->nullable();  // Kinh nghiệm
            $table->string('muc_luong')->nullable();  // Mức lương
            $table->string('hinh_thuc_lam_viec')->nullable();  // Hình thức làm việc
            $table->string('thoi_gian_thu_viec')->nullable();  // Thời gian thử việc
            $table->text('quyen_loi');  // Quyền lợi
            $table->string('noi_lam_viec');  // Nơi làm việc
            $table->date('het_han');  // Ngày hết hạn
            $table->enum('trang_thai', ['waiting', 'accept', 'refuse'])->default('waiting');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_postings');
    }
};
