$('#carousel').on('slide.bs.carousel', function (e) {

    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 3;
    var totalItems = $('#carousel .carousel-item').length;
    console.log(totalItems);
    if (idx >= totalItems-(itemsPerSlide-1)) {
        var it = itemsPerSlide - (totalItems - idx);
        console.log(it);
        for (var i=0; i<it; i++) {
            // append slides to end
            if (e.direction=="left") {
                $('#carousel .carousel-item').eq(i).appendTo('#carousel .carousel-inner');
            }
            else {
                $('#carousel .carousel-item').eq(0).appendTo('#carousel .carousel-inner');
            }
        }
    }
});
$('#carousel1').on('slide.bs.carousel', function (e) {

    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 3;
    var totalItems = $('#carousel1 .carousel-item').length;
    console.log(totalItems);
    if (idx >= totalItems-(itemsPerSlide-1)) {
        var it = itemsPerSlide - (totalItems - idx);
        console.log(it);
        for (var i=0; i<it; i++) {
            // append slides to end
            if (e.direction=="left") {
                $('#carousel1 .carousel-item').eq(i).appendTo('#carousel1 .carousel-inner');
            }
            else {
                $('#carousel1 .carousel-item').eq(0).appendTo('#carousel1 .carousel-inner');
            }
        }
    }
});
