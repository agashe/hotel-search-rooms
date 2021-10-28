<?php

namespace App\Adapters;

interface BaseHotelAPIAdapterInterface
{
    /**
     * Fetch a list of all featured room by hotel.
     * 
     * @return array
     */
    public function rooms();
}