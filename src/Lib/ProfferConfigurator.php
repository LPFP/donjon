<?php

namespace App\Lib;

class ProfferConfigurator {

    public static function getConfiguration() {
        return
        [
            'root'            => WWW_ROOT . 'files', // Customise the root upload folder here, or omit to use the default
            'dir'             => 'photo_dir', // The name of the field to store the folder
            'thumbnailSizes'  => [
                'square'       => [
                    'w'                     => 200,
                    'h'                     => 200,
                    'crop'                  => true,
                    'jpeg_quality'          => 100,
                    'png_compression_level' => 9
                ],
                'littleSquare' => [
                    'w'                     => 100,
                    'h'                     => 100,
                    'crop'                  => true,
                    'jpeg_quality'          => 100,
                    'png_compression_level' => 9
                ],
            ],
            'thumbnailMethod' => 'Gd'  // Options are Imagick, Gd or Gmagick
        ];
    }

}
