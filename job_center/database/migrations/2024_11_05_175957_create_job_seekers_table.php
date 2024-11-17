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
        Schema::create('job_seekers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('ho_va_ten'); // Họ và tên
            $table->string('so_cmnd_cccd'); // Số CMND/CCCD
            $table->date('ngay_sinh'); // Ngày sinh
            $table->date('ngay_cap'); // Ngày cấp
            $table->enum('gioi_tinh', ['Nam', 'Nữ', 'Khác']); // Giới tính
            $table->string('noi_cap'); // Nơi cấp
            $table->string('dan_toc')->default('Kinh'); // Dân tộc
            $table->string('email_phu'); // Email liên hệ
            $table->string('so_dien_thoai'); // Số điện thoại
            $table->string('tinh_thanh_pho'); // Tỉnh/Thành phố
            $table->string('quan_huyen'); // Quận/Huyện
            $table->string('phuong_xa'); // Phường/Xã
            $table->string('trinh_do_hoc_van'); // Trình độ học vấn
            $table->string('trinh_do_cmkt_cao_nhat'); // Trình độ CMKT cao nhất
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_seekers');
    }
};
