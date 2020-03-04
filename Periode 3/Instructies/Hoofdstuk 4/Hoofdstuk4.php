<?php
        date_default_timezone_set ("Europe/Amsterdam");
         $vandaag = date("d-m-Y H:i");
         echo "De datum en tijd hier in Nederland is: $vandaag";

         ?>

<?php

        date_default_timezone_set("Asia/Tokyo");
        $vandaag = date ("d-m-Y H:i");
        echo "<br>De datum en tijd in Japan is nu : $vandaag";


        ?>
<?php
    date_default_timezone_set("Est");
    $vandaag = date ("d-m-Y H:i");
    echo "De datum en tijd in New York is nu : $vandaag";

?>

