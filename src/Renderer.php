<?php

namespace src;

use src\Renderer\Transport\Plane;
use src\Renderer\Transport\Train;
use src\Renderer\Transport\Bus;

/**
 * Class Renderer
 *
 * @package src
 */
class Renderer
{
    const RENDERER_PLANE = 'plane';
    const RENDERER_TRAIN = 'train';
    const RENDERER_BUS   = 'bus';
    
    /**
     * Render item data
     * 
     * @param array $item
     * @return string
     */
    public function process(array $item)
    {
        switch (strtolower($item['Transportation'])) {
            case self::RENDERER_PLANE:
                $renderer = new Plane();
                break;
            case self::RENDERER_TRAIN:
                $renderer = new Train();
                break;
            case self::RENDERER_BUS:
                $renderer = new Bus();
                break;
        }
        
        return $renderer->render($item);
    }

}