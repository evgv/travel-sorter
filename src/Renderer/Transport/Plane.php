<?php

namespace src\Renderer\Transport;

/**
 * Class Plane
 *
 * @package src\Renderer\Transport
 */
class Plane extends \src\Renderer\Transport
{
    
    /**
     * {@inheritdoc}
     * 
     * Example: 
     * 
     *      Array
     *          [
     *              "Departure" => "Gerona Airport",
     *              "Arrival" => "Stockholm",
     *              "Transportation" => "Plane",
     *              "TransportationNumber" => "SK455",
     *              "Seat" => "3A",
     *              "Gate" => "45B",
     *              "Baggage" => "334"
     *          ]
     * 
     *      To string
     *          "From Stockholm, take flight SK22 to New York JFK. Gate 22B, seat 7B. Baggage will we automatically transferred from your last leg."
     * 
     * @todo add validation, add exception handler
     */
    public function render(array $item) 
    {
        $string = sprintf(
            'From %s, take flight %s to %. Gate %s, seat %s.',
            $item['Departure'],
            $item['TransportationNumber'],
            $item['Arrival'],
            $item['Gate'],
            $item['Seat']
        );
        
        if (empty($item['Baggage'])) {
            $string .= ' Baggage drop at ticket counter 344.';
        } else {
            $string .= ' Baggage will we automatically transferred from your last leg.';
        }
        
        return $string;
    }
    
}