<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobSeeker extends Model
{
    use HasFactory;

    // Khai báo các trường có thể được gán giá trị
    protected $fillable = [
        'user_id',
        'ho_va_ten',
        'so_cmnd_cccd',
        'ngay_sinh',
        'ngay_cap',
        'gioi_tinh',
        'noi_cap',
        'dan_toc',
        'email_phu',
        'so_dien_thoai',
        'tinh_thanh_pho',
        'quan_huyen',
        'phuong_xa',
        'trinh_do_hoc_van',
        'trinh_do_cmkt_cao_nhat',
    ];

    protected $casts = [
        'ngay_sinh' => 'date',
        'ngay_cap' => 'date',
    ];
    // //
}
