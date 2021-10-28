<?php

namespace App\Adapters;

use Illuminate\Support\Facades\Http;
use App\Adapters\AmadeusAdapterInterface;

class AmadeusAdapter extends BaseHotelAPIAdapter implements AmadeusAdapterInterface
{
    /**
     * For the task all credintials will be saved
     * in config not int the .env file.
     * 
     * @var string $apiKey
     * @var string $apiSecret
     */
    private $apiKey;
    private $apiSecret;

    /**
     * AmadeusAdapter Constructor
     */
    public function __construct()
    {
        $this->apiKey = config('amadeus.api_key');
        $this->apiSecret = config('amadeus.api_secret');

        $this->setEndPoint(config('amadeus.endpoint'));
    }

    /**
     * Fetch a list of all featured room by hotel.
     * 
     * @return array
     */
    public function rooms()
    {
        // get access token
        $authResponse = Http::asForm()   
            ->post($this->getEndPoint() . '/v1/security/oauth2/token', [
                'grant_type' => 'client_credentials',
                'client_id' => $this->apiKey,
                'client_secret' => $this->apiSecret,
            ]);

        // get rooms
        $roomsResponse = Http::withToken($authResponse['access_token'])
            ->get($this->getEndPoint() . '/v3/shopping/hotel-offers', [
                'hotelIds' => 'HLLON101'
            ]);

        return $roomsResponse->collect();
    }
} 
