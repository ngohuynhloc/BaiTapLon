<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employer;
use App\Models\JobPosting;
use App\Http\Resources\JobPostingResource;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
 

class JobPostingController extends Controller
{

    protected function validator(array $data)
    {
        return Validator::make($data, [
            
        ],[
            // Các thông báo lỗi
            
            
        ]);
        
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("users.posting");
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validator($request->all())->validate();
        
        $user_id=Auth::id();

        $employer = Employer::where('user_id', $user_id)->first();

        if(!$employer){
            return 'người dùng không tồn tại';
        }else{
            JobPosting ::create([
            
                'employer_id' => $employer->id,
                'tieu_de'=> $request->input('tieu_de'),
                'so_luong_can_tuyen'=> $request->input('so_luong'), 
                'gioi_tinh'=> $request->input('gioi_tinh'),
                'do_tuoi'=> $request->input('do_tuoi'),
                'mo_ta'=> $request->input('mo_ta'),
                'yeu_cau'=> $request->input('yeu_cau'),
                'tinh_chat'=> $request->input('tinh_chat'),
                'trinh_do_hoc_van'=> $request->input('hoc_van'),
                'trinh_do_chuyen_mon'=> $request->input('chuyen_mon'),
                'nganh_nghe'=> $request->input('nghanh_nghe'),
                'kinh_nghiem'=> $request->input('kinh_nghiem'),
                'muc_luong'=> $request->input('muc_luong'),
                'hinh_thuc_lam_viec'=> $request->input('thoi_gian'),
                'thoi_gian_thu_viec'=> $request->input('thu_viec'),
                'quyen_loi'=> $request->input('quyen_loi'),
                'noi_lam_viec'=> $request->input('noi_lam_viec'),
                'het_han'=> $request->input('het_han'),
                'trang_thai'=> 'waiting',

        ]);
        }
        $request->session()->flash('status', 'Tạo bài đăng thành công!');

        return redirect()->route('posting');
        
    }

    /**
     * Display the specified resource.
     */

     public function showdemo(){
        
        $jobPostings = JobPosting::orderBy('created_at', 'desc')->take(10)->get();

        if ($jobPostings->isEmpty()) {
            return response()->json(['message' => 'Không có bài đăng công việc'], 404);
        }
        // Trả về dữ liệu đã được định dạng dưới dạng Resource collection
        return JobPostingResource::collection($jobPostings);
     }
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
