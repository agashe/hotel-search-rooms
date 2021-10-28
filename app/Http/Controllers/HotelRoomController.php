<?php

namespace App\Http\Controllers;

use App\Services\HotelRoomServiceInterface;

class HotelRoomController extends Controller
{
    /**
     * @var HotelRoomServiceInterface $hotelRoomService
     */
    private $hotelRoomService;

    /**
     * HotelRoomController Constructor.
     *
     * @param HotelRoomServiceInterface $hotelRoomService
     */
    public function __construct(HotelRoomServiceInterface $hotelRoomService)
    {
        $this->hotelRoomService = $hotelRoomService;
    }

    /**
     * Fetch a list of all rooms.
     * 
     * @return \Response
     */
    public function index()
    {
        return response()->json($this->hotelRoomService->list());
    }
}
