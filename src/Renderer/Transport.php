<?php

namespace src\Renderer;

/**
 * Class Transport
 *
 * @package src\Renderer
 */
abstract class Transport 
{
    
    abstract public function render(array $item);
    
}