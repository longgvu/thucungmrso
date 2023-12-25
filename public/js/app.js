import './bootstrap';
document.addEventListener("DOMContentLoaded", function() {
    const avatars = document.querySelectorAll(".avatar");
    let currentAvatarIndex = 0;

    function showNextAvatar() {
        avatars[currentAvatarIndex].classList.remove("active");

        currentAvatarIndex = (currentAvatarIndex + 1) % avatars.length;

        avatars[currentAvatarIndex].classList.add("active");
    }

    // Hiển thị avatar đầu tiên
    avatars[currentAvatarIndex].classList.add("active");

    // Tự động chuyển đổi avatar sau mỗi khoảng thời gian (ví dụ: 5 giây)
    setInterval(showNextAvatar, 5000);
});