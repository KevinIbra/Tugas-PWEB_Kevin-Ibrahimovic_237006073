$(document).ready(function () {
    // Tombol Share
    $(".btn-share").on("click", function () {
        const platform = $(this).data("platform");
        const url = window.location.href; // URL halaman saat ini
        let shareUrl = "";

        if (platform === "facebook") {
            shareUrl = `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(url)}`;
        } else if (platform === "twitter") {
            shareUrl = `https://twitter.com/intent/tweet?url=${encodeURIComponent(url)}&text=Check%20this%20out!`;
        }

        if (shareUrl) {
            window.open(shareUrl, "_blank");
        }
    });

    // Navigasi Artikel Sebelumnya dan Selanjutnya
    $(".btn-prev").on("click", function () {
        alert("Navigasi ke artikel sebelumnya.");
        // Tambahkan logika untuk navigasi ke artikel sebelumnya
    });

    $(".btn-next").on("click", function () {
        alert("Navigasi ke artikel selanjutnya.");
        // Tambahkan logika untuk navigasi ke artikel selanjutnya
    });

    // Kirim Komentar
    $("#commentForm").on("submit", function (e) {
        e.preventDefault(); // Mencegah pengiriman formulir secara default

        const name = $("#nama").val().trim();
        const comment = $("#komentar").val().trim();

        if (name === "" || comment === "") {
            alert("Nama dan komentar tidak boleh kosong.");
            return;
        }

        // Tambahkan komentar ke daftar komentar
        const newComment = `
            <div class="border p-3 mb-3">
                <strong>${name}:</strong>
                <p>${comment}</p>
            </div>
        `;
        $(".comment-list").append(newComment);

        // Reset formulir
        this.reset();
        alert("Komentar berhasil dikirim!");
    });
});