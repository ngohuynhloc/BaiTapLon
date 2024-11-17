<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;

    // Khai báo các trường có thể được gán giá trị
    protected $fillable = [
        'user_id',
        'description',
        'giay_phep',
        'loai_hinh',
        'ten_cong_ty',
        'ten_nguoi_dai_dien',
        'so_cmnd_cccd',
        'email_phu',
        'tinh_thanh_pho',
        'quan_huyen',
        'phuong_xa',
        'dia_chi',
        'kcn',
        'nganh_kinh_doanh',
        'mat_hang',
        'quy_mo_lao_dong',
    ];
 
}
