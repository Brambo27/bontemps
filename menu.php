<!DOCTYPE html>
<html lang="nl">
<?php include 'components/head.php' ?>
<body class="no-index">
<div class="menu" id="page">
    <?php include 'components/header.php' ?>
    <div class="content">
        <?php
        include 'components/menu/section_row_main.php';
        include 'components/menu/section_row_1.php';
        include 'components/menu/section_row_2.php';
        include 'components/menu/section_row_3.php';
        include 'components/menu/section_row_4.php';
        include 'components/menu/section_row_5.php'
        ?>
    </div>
</div>
</body>
</html>
<script>
    $(function() {
        $('a[href*="#"]:not([href="#"])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
</script>