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
        Schema::create('employers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->text('description')->nullable();
            $table->string('giay_phep'); // Đường dẫn lưu trữ giấy phép
            $table->enum('loai_hinh', ['ca_nhan', 'doanh_nghiep'])->default('ca_nhan'); // Loại hình kinh doanh
            $table->string('ten_cong_ty'); // Tên nhà tuyển dụng
            $table->string('ten_nguoi_dai_dien'); // Tên người đại diện
            $table->string('so_cmnd_cccd'); // Số CMND/CCCD
            $table->string('email_phu'); // Email phụ
            $table->string('tinh_thanh_pho'); // Tỉnh/Thành phố
            $table->string('quan_huyen'); // Quận/Huyện
            $table->string('phuong_xa'); // Phường/Xã
            $table->string('dia_chi'); // Địa chỉ chi tiết
            $table->string('kcn')->nullable(); // Khu công nghiệp (nullable)
            $table->string('nganh_kinh_doanh'); // Ngành kinh doanh chính
            $table->string('mat_hang'); // Mặt hàng sản phẩm chính
            $table->string('quy_mo_lao_dong'); // Quy mô lao động
            $table->timestamps(); // Cột created_at và updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employers');
    }
};
