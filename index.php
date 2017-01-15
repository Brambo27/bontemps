<!--owaudhiwud;utagd;oiwgaclutdgawcdluwaydulgwad-->
<!DOCTYPE html>
<html lang="nl">
<?php include 'components/head.php' ?>
<body class="index">
<div id="page">
    <?php include 'components/header.php' ?>
    <?php include 'components/logo.php' ?>
    <div class="content">
        <?php
        include 'components/index/section_row_main.php';
        include 'components/index/section_row_1.php';
        include 'components/index/section_row_2.php';
        include 'components/index/section_row_3.php'
        ?>
    </div>
</div>
</body>
</html>

<script>
    $(document).ready(function () {

        $("#owl-carousel").owlCarousel({
            loop:true,
            pagination: false,
            slideSpeed: 300,
            paginationSpeed: 400,
            items: 3,
            navigation: true,
            autoPlay : 3500,
            stopOnHover : true
        });

    });
</script>
<script>
    function initMap() {
        var mapDiv = document.getElementById('map');
        var map = new google.maps.Map(mapDiv, {
            center: {lat: 52.387350, lng: 4.616547},
            zoom: 15
        });
    }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCGg_b5uwT9cKAZtzqCT_LQRq_Lqdd3RHE&callback=initMap"></script>