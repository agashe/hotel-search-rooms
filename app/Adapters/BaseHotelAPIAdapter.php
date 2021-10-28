<?php

namespace App\Adapters;

use App\Adapters\BaseHotelAPIAdapterInterface;

abstract class BaseHotelAPIAdapter implements BaseHotelAPIAdapterInterface
{
    /**
     * @var string $endpoint
     */
    private $endpoint;

    /**
     * @param $endpoint
     * @return void
     */
    public function setEndPoint($endpoint)
    {
        $this->endpoint = $endpoint;
    }
    
    /**
     * @return string
     */
    public function getEndPoint()
    {
        return $this->endpoint;
    }

    /**
     * Fetch a list of all featured room by hotel.
     * 
     * @return array
     */
    abstract public function rooms();
}