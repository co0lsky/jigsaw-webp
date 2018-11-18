<?php

namespace SkyChin\Jigsaw\WebP;

use Illuminate\Filesystem\Filesystem;

class ImageConverter
{
    private $filesystem;


    /**
     * ImageConverter constructor.
     *
     * @param Filesystem $filesystem
     */
    public function __construct(Filesystem $filesystem)
    {
        $this->filesystem = $filesystem;
    }

    /**
     * Convert all the images (JPEG, PNG) in source folder to WebP and store in destination folder
     *
     * @param $source
     * @param $destination
     * @return void
     */
    public function convert($source, $destination)
    {
        $source = $this->appendForwardSlash($source);

        $destination = $this->appendForwardSlash($destination);

        if (!$this->filesystem->exists($destination)) {
            $this->filesystem->makeDirectory($destination);
        }

        foreach($this->filesystem->files($source) as $image) {

            $outputName = $destination . $image->getBasename('.' . $image->getExtension()) . '.webp';

            if (file_exists($outputName)) {
                continue;
            }

            $resource = $image->getExtension() == 'jpeg'
                ? imagecreatefromjpeg($source . $image->getFilename())
                : imagecreatefrompng($source . $image->getFilename());

            imagewebp($resource, $outputName);
        }
    }

    private function appendForwardSlash($path)
    {
        return preg_match('/\/$/', $path) ? $path : $path . '/';
    }
}
