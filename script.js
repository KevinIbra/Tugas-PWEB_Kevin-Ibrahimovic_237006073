$(document).ready(function() {
    $('#contactForm').on('submit', function(e) {
        e.preventDefault();
        
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            success: function(response) {
                $('#formMessage')
                    .removeClass('alert-danger')
                    .addClass('alert-success')
                    .html('Pesan berhasil dikirim!')
                    .show();
                $('#contactForm')[0].reset();
            },
            error: function() {
                $('#formMessage')
                    .removeClass('alert-success')
                    .addClass('alert-danger')
                    .html('Terjadi kesalahan. Silakan coba lagi.')
                    .show();
            }
        });
    });
});