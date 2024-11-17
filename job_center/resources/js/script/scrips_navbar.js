window.addEventListener("scroll", function() {
    var myDiv = document.getElementById("navbar");
    if (window.scrollY > 350) {
        // Khi cuộn xuống quá 100px, thêm class
        myDiv.classList.add("fixed-top");
    } else {
        // Khi cuộn trở lại phía trên, xóa class
        myDiv.classList.remove("fixed-top");
    }
});