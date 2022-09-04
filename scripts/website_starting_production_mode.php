<?php

echo "Starting production optimized...\n";

include 'vendor/cerdic/css-tidy/class.csstidy.php';

$path_css = './resources/css/';
$path_js = './resources/js/';

echo "Css cleanup [0%]\n";
$css = new csstidy();
$css->set_cfg('optimise_shorthands', 2);
$css->set_cfg('template', 'high');
echo "Css cleanup [20%]\n";

foreach (scandir($path_css) as $file) {
    if ($file !== '.' && $file !== '..') {
        $explode = explode('.', $file);
        $extension = $explode[1];
        if ($extension === 'css') {
            $content = file_get_contents('./resources/css/' . $file);
            $css->parse($content);
            file_put_contents('./storage/private/backups/css/backup_css_' . time() . '@' . $file, $content);
            file_put_contents('./resources/css/' . $file, $css->print->plain());
        }
    }
}
echo "Css cleanup [100%]\n";
echo "Production mode is finished ! Backup resources is in storage/private/backups/\n";
echo "For reload resources, execute this command: 'php scripts/website_reload_optimized_processus.php'";


// TODO: js cleanup