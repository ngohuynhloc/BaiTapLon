
const laborBtn = document.getElementById('labor-btn');
    const employerBtn = document.getElementById('employer-btn');
    const loginBtn = document.getElementById('login-btn');

    // Hàm để thay đổi màu nút khi nhấn
    function changeButtonColor(activeButton, inactiveButton) {
        activeButton.classList.add('active'); // Thêm lớp active vào nút được chọn
        inactiveButton.classList.remove('active'); // Xóa lớp active khỏi nút còn lại
    }

    window.addEventListener('DOMContentLoaded', (event) => {
        const urlParams = new URLSearchParams(window.location.search);
        const type = urlParams.get('type'); // Lấy tham số 'role' từ URL

        if (type === 'job_seeker') {
            changeButtonColor(laborBtn, employerBtn); // Nếu là 'labor', chọn "Người lao động"
        } else if (type === 'employer') {
            changeButtonColor(employerBtn, laborBtn);
            // Nếu là 'recruiter', chọn "Nhà tuyển dụng"
        }
    });
    // Xử lý sự kiện khi nhấn vào nút "Người lao động"
    laborBtn.addEventListener('click', function() {
        changeButtonColor(laborBtn, employerBtn);
        var url = this.getAttribute('data-url');
        window.location.href = url; //
    });

    // Xử lý sự kiện khi nhấn vào nút "Nhà tuyển dụng"
    employerBtn.addEventListener('click', function() {
        changeButtonColor(employerBtn, laborBtn);
        var url = this.getAttribute('data-url');
        window.location.href = url; //
    });

    loginBtn.addEventListener('click', function(){
        var url = this.getAttribute('data-url');
        window.location.href = url;
    });


    // // Lấy các phần tử cần thiết
    // const password = document.getElementById('password');
    // const confirmPassword = document.getElementById('password_confirmation');
    // const passwordError = document.getElementById('password-error');

    // // Hàm kiểm tra mật khẩu nhập lại có khớp với mật khẩu không
    // function checkPasswords() {
    //     if (password.value !== confirmPassword.value) {
    //         confirmPassword.setCustomValidity("Mật khẩu nhập lại không khớp.");
    //         passwordError.style.display = 'block'; // Hiển thị thông báo lỗi
    //     } else {
    //         confirmPassword.setCustomValidity(""); // Xóa lỗi
    //         passwordError.style.display = 'none'; // Ẩn thông báo lỗi
    //     }
    // }

    // // Thêm sự kiện để kiểm tra ngay khi nhập dữ liệu
    // password.addEventListener('input', checkPasswords);
    // confirmPassword.addEventListener('input', checkPasswords);

    // // Xử lý sự kiện submit form
    // document.getElementById('signup-form').addEventListener('submit', function(event) {
    //     if (!this.checkValidity() || password.value !== confirmPassword.value) {
    //         event.preventDefault(); // Ngừng submit nếu không hợp lệ
    //     }
    // });
   
    // // Lấy các nút
    