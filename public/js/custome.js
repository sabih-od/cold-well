$(document).ready(function () {
    $(".img-upload").on("change", function () {
        var imgpath = $(this).parent();
        var file = $(this);
        readURL(this, imgpath);

    });

    function readURL(input, imgpath) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                imgpath.css('background', 'url(' + e.target.result + ')');
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
});
