<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    public static function remove($id)
    {
        $user = self::find($id);  // Tìm người dùng theo ID
        if ($user) {
            return $user->delete();  // Xóa người dùng
        }
        return null;  // Trả về null nếu không tìm thấy người dùng
    }
    public static function updateUser($id, $data)
    {
        $user = self::find($id);  // Tìm người dùng theo ID
        if ($user) {
            $user->update($data);  // Cập nhật thông tin người dùng với dữ liệu mới
            return $user;  // Trả về người dùng đã được cập nhật
        }
        return null;  // Trả về null nếu không tìm thấy người dùng
    }

    
}
