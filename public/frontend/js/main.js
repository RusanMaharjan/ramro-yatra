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

//for seat validation
function seatValidation() {
    var a = parseInt(document.getElementById('seatNumber').value);

    if(a > 47) {
        document.getElementById('error').innerHTML = "Select seat less than 47.";
        seatNumber.style.backgroundColor = "#ffcccc";
    }

    if(a < 1) {
        document.getElementById('error').innerHTML = "Select seat more than 0.";
        seatNumber.style.backgroundColor = "#ffcccc";
    }

    if(a>0 && a<=47) {
        document.getElementById('error').innerHTML = "";
        seatNumber.style.backgroundColor = "#ffffff";
    }
}