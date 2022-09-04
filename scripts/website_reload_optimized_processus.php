<?php
echo "Starting reloading resources from disks...\n";

$path_css = './resources/css/';
$path_css_backup = './storage/private/backups/css/';
$path_js = './resources/js/';

echo "Reloading... [20%]\n";

foreach (scandir($path_css) as $file) {
    if ($file !== '.' && $file !== '..') {
        $explode = explode('.', $file);
        $extension = $explode[1];
        if ($extension === 'css') {
            foreach (scandir($path_css_backup) as $file2) {
                if ($file2 !== '.' && $file2 !== '..') {
                    $explode = explode('@', $file2);
                    $fileName = $explode[1] ?? '';
                    if ($fileName === $file) {
                        $content = file_get_contents($path_css_backup . $file2);
                        file_put_contents($path_css . $file, $content);
                        unlink($path_css_backup . $file2);
                    }
                }
            }
        }
    }
}

echo "Reloading... [100%]\n";
echo "Reloading finished !\n";