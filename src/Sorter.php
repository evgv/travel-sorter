<?php

namespace src;

use \src\Renderer;

/**
 * Class Sorter
 *
 * @package src
 */
class Sorter
{
    
    /**
     * @var array 
     */
    private $data = [];
    
    /**
     * @var \src\Renderer 
     */
    private $renderer;
    
    /**
     * @param array $data
     */
    public function __construct($data)
    {
        $this->data = $data;
        
        $this->renderer = new Renderer();
    }
    
    /**
     * @todo add data validation
     */
    private function validate()
    {
        //
    }

    /**
     * Sort
     */
    public function sort()
    {

        usort($this->data, function($a, $b) {
            return $a['Arrival'] !== $b['Departure'];
        });

        $needSort = false;

        for ($i = 0; $i < count($this->data); $i++) {
            if (empty($this->data[$i + 1])) {
                break;
            }

            if ($this->data[$i]['Arrival'] !== $this->data[$i + 1]['Departure']) {
                $needSort = true;
                break;
            }
        }

        if ($needSort) {
            $this->sort();
        }
    }
    
    /**
     * Print
     * 
     * Echo route to CLI
     */
    public function printRoute() 
    {

        foreach ($this->data as $item) {
          echo $this->renderer->process($item), PHP_EOL;
        }

        echo 'You have arrived at your final destination.', PHP_EOL;
    }

}