<?php

if (1 == 2) {
    echo "si";
} else {
    echo "no";
}


////formas alternativas, se suelen usar en las plantillas para facilitar la legibilidad


if (1 == 2):
    echo "si";
else:
    echo "no";
endif;



switch (4):
    case 0:
        echo "es 0";
        break;
    case 1:
        echo "es 1";
        break;
endswitch;



$x = 0;
while($x < 10):
    echo "vale" . $x;
    $x++;
endwhile;