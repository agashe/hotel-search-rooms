<?php

namespace App\Services;

use App\Services\HotelRoomServiceInterface;
use App\Adapters\AmadeusAdapterInterface;

class HotelRoomService implements HotelRoomServiceInterface
{
    /**
     * @var AmadeusAdapterInterface $amadeusAdapter
     */
    private $amadeusAdapter;

    /**
     * HotelRoomService Constructor
     *
     * @param AmadeusAdapterInterface $amadeusAdapter
     */
    public function __construct(AmadeusAdapterInterface $amadeusAdapter)
    {
        $this->amadeusAdapter = $amadeusAdapter;
    }

    /**
     * Fetch the rooms details from all providers
     * then return a list by them.
     * 
     * @return array
     */
    public function list()
    {
        return $this->amadeusAdapter->rooms();
    }
}