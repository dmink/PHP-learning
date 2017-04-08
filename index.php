<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>PHP lessons</title>
    </head>
    <body>

        <h2>Task 01</h2>
        <?php
            $name = 'Dmitry';
            $age = 33;

            echo "<p>My name is $name,<br> I'm $age</p>";

            $auto = 'Porsche 911';
            $color = 'yellow';
            $speed = '320 km/h';

            echo "<p>Hello, World! My name is $name, I'm $age<br>";
            echo "Yesterday I bought a new car called $auto<br>";
            echo "My $auto is $color<br>";
            echo "It has $speed on its speedometer<br>";
            echo 'I\'m happy!</p>';
        ?>

        <h2>Task 02</h2>
        <?php
            $myname = 'Dmitry';

            echo "<p>My name is $myname<br>";
            echo "I'm $myage</p>";

            $dog = 'Dana';
            $cat = 'Asya';
            $relationship = 'friends';

            echo "<p>I've got dog $dog and cat $cat in my house<br>";
            echo "They're $relationship<br>";
            echo "They love to play together $place</p>";
        ?>

        <h2>Task 03</h2>
        <?php
            const LANGUAGE = 'English';

            if ( defined('LANGUAGE') ) {
                echo LANGUAGE . '<br>';
            } else {
                echo 'nope' . '<br>';
            }

            /* the try to change a constant
            LANGUAGE = 94;
            echo LANGUAGE;
            */

            const PLANET = 'Earth';
            const CREATE = 'humanity';

            if ( defined('PLANET') ) {
                echo 'the ' . CREATE . ' live on ' . PLANET . '<br>';
            } else {
                echo 'Planet doesn\'t exist';
            }
        ?>

        <h2>Task 04</h2>
        <?php
            $my_age = 33;

            if ( 18 <= $my_age && $my_age <= 65 ) {
                echo 'You\'re strong! Go work!';
            } elseif ( $my_age > 65 ) {
                echo 'You\'re too old. You\'re fired!';
            } elseif ( 1 < $my_age && $my_age < 17 ) {
                echo 'You\'re too young. Go to school!';
            } elseif ( !(int)$my_age ) {
                echo 'Write a number, please';
            } else {
                echo 'Sorry, your age is undefined';
            }
        ?>

        <h2>Task 05</h2>
        <?php
            $day = 4;

            switch($day) {

                case 1:
                case 2:
                case 3:
                case 4:
                case 5:
                    echo 'This is a workday' . '<br>';
                    break;

                case 6:
                case 7:
                    echo 'This is a day off' . '<br>';
                    break;

                default:
                    echo 'Sorry, the day is undefined' . '<br>';
            }

            $planets = 9;

            switch($planets) {

                case 1:
                    echo 'Mercury';
                    break;

                case 2:
                    echo 'Venus';
                    break;

                case 3:
                    echo 'Earth';
                    break;

                case 4:
                    echo 'Mars';
                    break;

                case 5:
                    echo 'Jupiter';
                    break;

                case 6:
                    echo 'Saturn';
                    break;

                case 7:
                    echo 'Uranus';
                    break;

                case 8:
                    echo 'Neptune';
                    break;

                case 9:
                    echo 'Pluto isn\'t a planet';
                    break;

                default:
                    echo 'It isn\'t Solar system';
            }
        ?>

        ?>

    </body>
</html>