//for owl carousel
$(".carousel").owlCarousel({
    margin: 10,
    autoplay: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1,
            nav: false
        },
        600: {
            items: 2,
            nav: false
        },
        1000: {
            items: 3,
            nav: false
        }
    }
});

//for calculating total price of seat
$(".changeValue").change(function(e){
    var a = $("#seatNumber").val();
    var b = $("#seatPrice").val();
    var total = a * b;
    $("#totalPrice").val(total);
})