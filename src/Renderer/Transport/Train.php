<?php

namespace src\Renderer\Transport;

/**
 * Class Train
 *
 * @package src\Renderer\Transport
 */
class Train extends \src\Renderer\Transport
{
    
    /**
     * {@inheritdoc}
     * 
     * Example: 
     * 
     *      Array
     *          [
     *              "Departure" => "Madrid",
     *              "Arrival" => "Barcelona",
     *              "Transportation" => "Train",
     *              "TransportationNumber" => "78A",
     *              "Seat" => "45B"
     *           ]
     * 
     *      To string
     *          "Take train 78A from Madrid to Barcelona. Seat number: 45B"
     * 
     * @todo add validation, add exception handler
     */
    public function render(array $item) 
    {
        $string = sprintf(
            'Take train %s from %s to %s. Seat number: %s',
            $item['TransportationNumber'],
            $item['Departure'],
            $item['Arrival'],
            $item['Seat']
        );
        
        return $string;
    }
    
}