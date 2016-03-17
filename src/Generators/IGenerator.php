<?php
namespace Mk\Feed\Generators;

use Mk\Feed\Storage;

/**
 * Interface IGenerator
 * @package Mk\Feed\Generators
 */
interface IGenerator {

    /**
     * IGenerator constructor.
     * @param \Mk\Feed\Storage $storage
     */
    public function __construct(Storage $storage);

    /**
     * Generate file
     * @return mixed
     */
    public function generate();

    /**
     * Save file
     * @param $filename
     * @return mixed
     */
    public function save($filename);
}