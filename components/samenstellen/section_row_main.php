<div class="dubble_wrapper section section_row_main">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Stel hier uw menu samen</h1>
                <ul class="menu-nav">
                    <li><a href="#id_menu1">Appetizers Soups</a></li>
                    <li><a href="#id_menu2">Grill menu</a></li>
                    <li><a href="#id_menu3">Sauces Sides</a></li>
                    <li><a href="#id_menu4">Desserts</a></li>
                    <li><a href="#id_menu5">Other</a></li>
                </ul>
                <p>
                    Alles wat hier staat is slechts om een indruk te geven van het grafische effect van tekst op deze plek. Dit is een voorbeeld tekst.<br>
                    De faketekst is dus een tekst die eigenlijk nergens over gaat. <br>
                    Het grappige is, dat mensen deze toch vaak lezen. Zelfs als men weet dat.
                </p>
                <h2>Uw menu tot nu toe</h2>
                <?php
                    $aantalPersonen = $_POST["aantalPersonen"];

                    for($i = 1; $i < $aantalPersonen + 1; $i++){
                        echo"<div class=\"col-md-12\"><h2 class='menuNumber'>Menu #". $i ."</h2>";
                        include 'components/samenstellen/custom-content-6.php';
                    }
                ?>
            </div>
        </div>
    </div>
</div>