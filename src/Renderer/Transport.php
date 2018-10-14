<?php

namespace src\Renderer;

/**
 * Abstract class Transport
 *
 * @package src\Renderer
 */
abstract class Transport 
{
    
    abstract public function render(array $item);
    
}
