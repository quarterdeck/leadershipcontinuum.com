<?php

use TightenCo\Jigsaw\Jigsaw;

/** @var \Illuminate\Container\Container $container */
/** @var \TightenCo\Jigsaw\Events\EventBus $events */

$events->beforeBuild(function (Jigsaw $jigsaw) {
    echo '🎨 Tailwind...';
    shell_exec('tailwindcss -i ./source/_assets/css/main.css -o ./source/css/main.css -m');
});
