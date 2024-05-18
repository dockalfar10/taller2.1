document.addEventListener('DOMContentLoaded', function () {
    // resaltar la imágenes cuándo se pase el mouse por encima
    $(document).on('mouseenter', '.resaltar', function () {
        $(this).css({
            'transform': 'scale(1.05)',
            'box-shadow': '0 0 10px rgba(0, 0, 0, 0.5)'
        });
    }).on('mouseleave', '.resaltar', function () {
        $(this).css({
            'transform': 'scale(1)',
            'box-shadow': 'none'
        });
    });
});
