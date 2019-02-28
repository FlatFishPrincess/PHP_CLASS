<?php

echo "How old are you? ";
$input = stream_get_line(STDIN, 1024, PHP_EOL);

if ($input < 13) {
    echo "You are a Preteen.";
} else if ( $input > 12 && $input <= 19 )    {
    echo "You are a teanager.";
} else {
    echo "You are an adult.";
}

?>