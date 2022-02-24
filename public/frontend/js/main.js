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

//for seat and validation
function valueSender() {
    var a = document.getElementById('select-seat');
    localStorage.setItem("myValue", a);
    window.location.href="{ url('/add-seat/{bus_id}') }";
}

function valueReceiver() {
    var b = localStorage.getItem("myValue");
    alert("The value received is: "+b);
    var resetValue = document.getElementById('seatNumber');
    localStorage.setItem("myValue", resetValue);
}