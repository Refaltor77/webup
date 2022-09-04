<?php

namespace webup\app;

use csstidy;

class Main
{
    private csstidy $cssCompressor;

    public function __construct()
    {
        $this->cssCompressor = new csstidy();
    }

    public function startingWebsite(): void {

    }

    public function cssOptimize(): void {

        /*
         * test
         * /!\ Warning is not safe !
         *   $css = $this->cssCompressor;
         *   $css->set_cfg('optimise_shorthands', 2);
         *   $css->set_cfg('template', 'high');
         *   $content = file_get_contents('resources/css/index.css');
         *   file_put_contents('storage/private/backups/css_compressor_backup'.time().'.css', $content);
         *   $css->parse($content);
         *   $cssOptimized = $css->print->plain();
         *   $css->css;
         *   file_put_contents('resources/css/index.css', $cssOptimized);
         */
    }
}