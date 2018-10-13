<?php

namespace src\Renderer\Transport;

/**
 * Class Bus
 *
 * @package src\Renderer\Transport
 */
class Bus extends \src\Renderer\Transport
{
    
    /**
     * {@inheritdoc}
     * 
     * Example: 
     * 
     *      Array
     *          [
     *              "Departure" => "Barcelona",
     *              "Arrival" => "Gerona Airport",
     *              "Transportation" => "Bus",
     *          ]
     * 
     *      To string
     *          "Take the airport bus from Barcelona to Gerona Airport. No seat assignment."\
     * 
     * @todo add validation, add exception handler
     */
    public function render(array $item) 
    {
        $string = sprintf(
            'Take the airport bus from %s to %s.',
            $item['Departure'],
            $item['Arrival']
        );
        
        if (empty($item['Seat'])) {
            $string .= ' No seat assignment.';
        } else {
            $string .= sprintf(
                ' Seat number: %s',
                $item['Seat']
            );
        }
        
        
        return $string;
    }
    
}