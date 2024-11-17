<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobPosting extends Model
{
    protected $fillable = [
        'employer_id',
        'tieu_de',
        'so_luong_can_tuyen', 
        'gioi_tinh',
        'do_tuoi',
        'mo_ta',
        'yeu_cau',
        'tinh_chat',
        'trinh_do_hoc_van',
        'trinh_do_chuyen_mon',
        'nganh_nghe',
        'kinh_nghiem',
        'muc_luong',
        'hinh_thuc_lam_viec',
        'thoi_gian_thu_viec',
        'quyen_loi',
        'noi_lam_viec',
        'het_han',
        'trang_thai',
    ];
}
