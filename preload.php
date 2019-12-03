<?php

header('Content-Type: text/plain');

echo '<?php', PHP_EOL;

$status = opcache_get_status(true);

foreach ($status['scripts'] as $script) {
    $path = $script['full_path'];
    echo 'opcache_compile_file(', var_export($path, true), ');', PHP_EOL;
}
