(function( $ ) {

    console.log('mygps');

    $( window ).on( "load", function() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition, showError);
            } else {
                $('.result, link').css('display', 'none');
                $('.error').css('display', 'block');
                $('.error div').text('Geolocation is not supported by this browser.');
            }
    });

    function showPosition(position) {

        console.log(position);
        var lat = position.coords.latitude.toString();
        var long = position.coords.longitude.toString();

        if ( long.substring(0,1) == '-') {
            long = long.slice(0, 11);
        } else {
            long = long.slice(0, 10);
        }

        if ( lat.substring(0,1) == '-') {
            lat = lat.slice(0, 11);
        } else {
            lat = lat.slice(0, 10);
        }

        var date = new Date(position.timestamp);
        var hours = date.getHours(),
            minutes = date.getMinutes(),
            seconds = date.getSeconds(),
            month = date.getMonth() + 1,
            day = date.getDate(),
            year = date.getFullYear() % 100;
            console.log(date);

        function pad(date) {
            return (date < 10 ? "0" : "") + date;
        }

        var formattedDate = pad(hours) + ":"
                          + pad(minutes) + ":"
                          + pad(seconds) + " / "
                          + month + "-"
                          + pad(day) + "-"
                          + pad(year);

                          console.log(date);

        $('.lat').text(lat);
        $('.long').text(long);
        $('.latlong').text('(' + lat + ',' + long + ')');
        $('.time').text(formattedDate);
        $('.link').text('View on Google Maps').attr({ 'href' : 'https://www.google.com/maps/search/?api=1&query=' + lat + ',' + long + '', 'target' : '_blank' });
    }

    function showError(error) {
    console.log(error);
    $('.result-container.success, .link').css('display', 'none');
    $('.result-container.error').css('display', 'block');
    switch(error.code) {
        case error.PERMISSION_DENIED:
            $('.error div').text('User denied the request for Geolocation.');
            break;
        case error.POSITION_UNAVAILABLE:
            $('.error div').text('Location information is unavailable.');
            break;
        case error.TIMEOUT:
            $('.error div').text('The request to get user location timed out.');
            break;
        case error.UNKNOWN_ERROR:
            $('.error div').text('An unknown error occurred.');
            break;
        }
    }

}(jQuery));
