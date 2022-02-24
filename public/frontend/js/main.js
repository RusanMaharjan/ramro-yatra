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
    var b = document.getElementById('remSeat').innerHTML;
    
    if(a > b) {
        document.getElementById('error').innerHTML = "Select seat less than "+b;
        seatNumber.style.backgroundColor = "#ffcccc";
        document.getElementById('button').style.visibility = 'hidden';
    }

    if(a < 1) {
        document.getElementById('error').innerHTML = "Select seat more than 0.";
        seatNumber.style.backgroundColor = "#ffcccc";
        document.getElementById('button').style.visibility = 'hidden';
    }

    if(a>0 && a<=b) {
        document.getElementById('error').innerHTML = "";
        seatNumber.style.backgroundColor = "#ffffff";
        document.getElementById('button').style.visibility = 'visible';
    }
}