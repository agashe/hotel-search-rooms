<?php

namespace App\Services;

interface HotelRoomServiceInterface
{
    /**
     * Fetch the rooms details from all providers
     * then return a list by them.
     * 
     * @return array
     */
    public function list();
}