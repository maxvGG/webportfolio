$(document).ready(function () {
    $('.primary-word-sub').on('mouseenter', function () {
        $(this).addClass("primary-word-sub--active")
            .delay(3500).queue(function (nxt) {
                $(this).removeClass('primary-word-sub--active');
                nxt();
            });
    })
}) 