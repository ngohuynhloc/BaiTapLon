<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\JobSeeker;
use App\Models\Employer;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator_job_seeker(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            // Các trường dành cho bảng JobSeekerDetail
            'ho_va_ten' => 'required|string|max:255',
            'so_cmnd_cccd' => 'required|regex:/^[0-9]{12}$/|unique:job_seekers', // Số CMND/CCCD phải là 12 chữ số
            'ngay_sinh' => 'required|date',
            'ngay_cap' => 'required|date',
            'gioi_tinh' => 'required|string',
            'noi_cap' => 'required|string|max:255',
            'dan_toc' => 'required|string|max:255',
            'email_phu' => 'required|email|max:255',
            'so_dien_thoai' => 'required|regex:/^(0[3-9]{1}[0-9]{8})$/|unique:job_seekers', // Số điện thoại
            'tinh_thanh_pho' => 'required|string|not_in:Chọn tỉnh/thành phố',
            'quan_huyen' => 'required|string|not_in:Chọn quận/huyện',
            'phuong_xa' => 'required|string|not_in:Chọn phường/xã',
            'trinh_do_hoc_van' => 'required|string',
            'trinh_do_cmkt_cao_nhat' => 'required|string',   

        ],[
            // Các thông báo lỗi
            'name.required' => 'Họ và tên không được để trống.',
            'name.max' => 'Họ và tên không được vượt quá 255 ký tự.',
            'name.unique'=> 'Tên đăng nhập đã tồn tại',
            
            'email.required' => 'Email không được để trống.',
            'email.email' => 'Email không hợp lệ.',
            'email.max' => 'Email không được vượt quá 255 ký tự.',
            'email.unique' => 'Email này đã được sử dụng.',
        
            'password.required' => 'Mật khẩu không được để trống.',
            'password.min' => 'Mật khẩu phải có ít nhất 8 ký tự.',
            'password.confirmed' => 'Mật khẩu xác nhận không khớp.',
            
            'ho_va_ten.required' => 'Họ và tên ứng viên không được để trống.',
            'ho_va_ten.max' => 'Họ và tên ứng viên không được vượt quá 255 ký tự.',
            
            'so_cmnd_cccd.required' => 'Số CMND/CCCD không được để trống.',
            'so_cmnd_cccd.regex' => 'Số CMND/CCCD phải là 12 chữ số.',
            'so_cmnd_cccd.unique' => 'Số CMND/CCCD đã tồn tại',
            
            'ngay_sinh.required' => 'Ngày sinh không được để trống.',
            'ngay_sinh.date' => 'Ngày sinh phải là một ngày hợp lệ.',
            
            'ngay_cap.required' => 'Ngày cấp không được để trống.',
            'ngay_cap.date' => 'Ngày cấp phải là một ngày hợp lệ.',
            
            'gioi_tinh.required' => 'Giới tính không được để trống.',
            'gioi_tinh.string' => 'Giới tính phải là một chuỗi ký tự.',
            
            'noi_cap.required' => 'Nơi cấp không được để trống.',
            'noi_cap.max' => 'Nơi cấp không được vượt quá 255 ký tự.',
            
            'dan_toc.required' => 'Dân tộc không được để trống.',
            'dan_toc.max' => 'Dân tộc không được vượt quá 255 ký tự.',
            
            'email_phu.required' => 'Email phụ không được để trống.',
            'email_phu.email' => 'Email phụ không hợp lệ.',
            'email_phu.max' => 'Email phụ không được vượt quá 255 ký tự.',
            
            'so_dien_thoai.required' => 'Số điện thoại không được để trống.',
            'so_dien_thoai.regex' => 'Số điện thoại không hợp lệ.',
            'so_dien_thoai.unique'=> 'Số điện thoại đã tồn tại',
            
            'tinh_thanh_pho.required' => 'Tỉnh/Thành phố không được để trống.',
            
            'quan_huyen.required' => 'Quận/Huyện không được để trống.',
            
            'phuong_xa.required' => 'Phường/Xã không được để trống.',
            
            'trinh_do_hoc_van.required' => 'Trình độ học vấn không được để trống.',

            'trinh_do_cmkt_cao_nhat.required' => 'Trình độ CMKT cao nhất không được để trống.',
            
        ]);
        
    }

    protected function validator_employer(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            // Các trường dành cho bảng JobSeekerDetail
            'giay_phep' => 'required|file|mimes:jpg,png,pdf|max:2048',  // Kiểm tra tệp giấy phép
            'loai_hinh' => 'required|string|max:255',
            'ten_cong_ty' => 'required|string|max:255',
            'ten_nguoi_dai_dien' => 'required|string|max:255',
            'so_cmnd_cccd' => 'required|regex:/^[0-9]{12}$/|unique:employers', // Số CMND/CCCD phải là 12 chữ số
            'email_phu' => 'required|email|max:255',
            'tinh_thanh_pho' => 'required|string|not_in:Chọn tỉnh/thành phố',
            'quan_huyen' => 'required|string|not_in:Chọn quận/huyện',
            'phuong_xa' => 'required|string|not_in:Chọn phường/xã',
            'dia_chi' => 'required|string|max:255',
            'kcn' => 'required|string|max:255',
            'nganh_kinh_doanh' => 'required|string|max:255',
            'mat_hang' => 'required|string|max:255',
            'quy_mo_lao_dong' => 'required|string|max:255|not_in:Chọn...',
    ], [
        // Các thông báo lỗi cho các trường mới
           'giay_phep.required' => 'Giấy phép không được để trống.',
           'giay_phep.file' => 'Giấy phép phải là một tệp.',
           'giay_phep.mimes' => 'Giấy phép chỉ chấp nhận các tệp có đuôi jpg, png, pdf.',
           'giay_phep.max' => 'Giấy phép không được vượt quá 2MB.',
        
           'loai_hinh.required' => 'Loại hình không được để trống.',
           'loai_hinh.max' => 'Loại hình không được vượt quá 255 ký tự.',
        
           'ten_cong_ty.required' => 'Tên công ty không được để trống.',
           'ten_cong_ty.max' => 'Tên công ty không được vượt quá 255 ký tự.',
        
           'ten_nguoi_dai_dien.required' => 'Tên người đại diện không được để trống.',
           'ten_nguoi_dai_dien.max' => 'Tên người đại diện không được vượt quá 255 ký tự.',
        
           'so_cmnd_cccd.required' => 'Số CMND/CCCD không được để trống.',
           'so_cmnd_cccd.regex' => 'Số CMND/CCCD phải là 12 chữ số.',
           'so_cmnd_cccd.unique' => 'Số CMND/CCCD đã tồn tại',
        
           'email_phu.required' => 'Email phụ không được để trống.',
           'email_phu.email' => 'Email phụ không hợp lệ.',
           'email_phu.max' => 'Email phụ không được vượt quá 255 ký tự.',
         
           'tinh_thanh_pho.required' => 'Tỉnh/Thành phố không được để trống.',
        
           'quan_huyen.required' => 'Quận/Huyện không được để trống.',
          
           'phuong_xa.required' => 'Phường/Xã không được để trống.',
        
           'dia_chi.required' => 'Địa chỉ không được để trống.',
           'dia_chi.max' => 'Địa chỉ không được vượt quá 255 ký tự.',
        
           'kcn.required' => 'Khu công nghiệp không được để trống.',
           'kcn.max' => 'Khu công nghiệp không được vượt quá 255 ký tự.',
        
           'nganh_kinh_doanh.required' => 'Ngành kinh doanh không được để trống.',
           'nganh_kinh_doanh.max' => 'Ngành kinh doanh không được vượt quá 255 ký tự.',
        
           'mat_hang.required' => 'Mặt hàng không được để trống.',
           'mat_hang.max' => 'Mặt hàng không được vượt quá 255 ký tự.',
        
           'quy_mo_lao_dong.required' => 'Quy mô lao động không được để trống.',
           'quy_mo_lao_dong.max' => 'Quy mô lao động không được vượt quá 255 ký tự.',
    ]);
        
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */


    public function store(Request $request)
    {
        $role=$request->input('type');
        // tạo mới một joc_seeker
        if ($role === 'job_seeker') {
            $this->validator_job_seeker($request->all())->validate();
             // Nếu không có lỗi, tạo người dùng mới
            $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'role' => $role,
                  ]);
            $user_id = $user->id;
            $user_id = JobSeeker::create([
                'user_id' => $user_id,
                'ho_va_ten' => $request->input('ho_va_ten'),
                'so_cmnd_cccd' => $request->input('so_cmnd_cccd'),
                'ngay_sinh' => $request->input('ngay_sinh'),
                'ngay_cap' => $request->input('ngay_cap'),
                'gioi_tinh' => $request->input('gioi_tinh'),
                'noi_cap' => $request->input('noi_cap'),
                'dan_toc' => $request->input('dan_toc'),
                'email_phu' => $request->input('email_phu'),
                'so_dien_thoai' => $request->input('so_dien_thoai'),
                'tinh_thanh_pho' => $request->input('tinh_thanh_pho'),
                'quan_huyen' => $request->input('quan_huyen'),
                'phuong_xa' => $request->input('phuong_xa'),
                'trinh_do_hoc_van' => $request->input('trinh_do_hoc_van'),
                'trinh_do_cmkt_cao_nhat' => $request->input('trinh_do_cmkt_cao_nhat'),
            ]);

            //tạo mới một employer
        } elseif ($request->input('type') === 'employer') {
            $this->validator_employer($request->all())->validate();
            $user = User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
                'role'=> $role,
                ]);
            $user_id = $user->id;

            if ($request->hasFile('giay_phep')) {
                $file = $request->file('giay_phep');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $file->storeAs('uploads/giay_phep', $fileName, 'public');
            }
            Employer::create([
                'user_id' => $user_id,
                'giay_phep' => isset($fileName) ? $fileName : null, // Lưu tên file nếu có
                'loai_hinh' => $request->input('loai_hinh'),
                'ten_cong_ty' => $request->input('ten_cong_ty'),
                'ten_nguoi_dai_dien' => $request->input('ten_nguoi_dai_dien'),
                'so_cmnd_cccd' => $request->input('so_cmnd_cccd'),
                'email_phu' => $request->input('email_phu'),
                'tinh_thanh_pho' => $request->input('tinh_thanh_pho'),
                'quan_huyen' => $request->input('quan_huyen'),
                'phuong_xa' => $request->input('phuong_xa'),
                'dia_chi' => $request->input('dia_chi'),
                'kcn' => $request->input('kcn'),
                'nganh_kinh_doanh' => $request->input('nganh_kinh_doanh'),
                'mat_hang' => $request->input('mat_hang'),
                'quy_mo_lao_dong' => $request->input('quy_mo_lao_dong'),
            ]);

        }
        $request->session()->flash('success', 'Đăng kí thành công!');
        return redirect()->route('login');
    }


    
    public function showRegisterForm(Request $request)
    {
    $type = $request->query('type'); // Hoặc $request->input('role');
    // Xử lý dựa trên giá trị của $role
    return view('auth.register',compact('type'));
    }
}