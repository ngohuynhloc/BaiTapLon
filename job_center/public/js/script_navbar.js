let prevScrollpos = window.pageYOffset;

window.onscroll = function() {
    if (window.innerWidth < 1000) {  // Chỉ thực hiện trên mobile
        let currentScrollPos = window.pageYOffset;
        if (prevScrollpos < currentScrollPos) {
            // Đang cuộn xuống, ẩn menu
            const navbar = document.getElementById('navbarNav');
            if (navbar.classList.contains('show')) {
                bootstrap.Collapse.getInstance(navbar).hide();
            }
        }
        prevScrollpos = currentScrollPos;
    }
}

window.addEventListener("scroll", function() {
    var myDiv = document.getElementById("navbar");
    
    // var navbar= document.getElementById("navbarNav");
    
    if (window.scrollY > 350) {

        myDiv.classList.add("fixed-top");

        var menu = document.getElementById("dropdownMenu");
        // Khi cuộn xuống quá 100px, thêm class
        menu.style.display = 'none';
      
        
    } else {
        // Khi cuộn trở lại phía trên, xóa class
        myDiv.classList.remove("fixed-top");
    }
});
document.getElementById('dropdownButton').addEventListener('click', function() {
    var menu = document.getElementById('dropdownMenu');
    if (menu.style.display === 'block') {
        menu.style.display = 'none';
    } else {
        menu.style.display = 'block';
    }
});

//Đóng menu nếu nhấp ra ngoài
window.addEventListener('click', function(e) {
    if (!document.getElementById('dropdownButton').contains(e.target)) {
        document.getElementById('dropdownMenu').style.display = 'none';
    }
});

