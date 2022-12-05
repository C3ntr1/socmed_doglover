<?php
namespace App\Services;
use Illuminate\Support\Facades\Http;

class DogService
{
    private $base_link;

    public function __construct()
    {
        $this->base_link = config('dog.base_link');
    }

    public function getRequest(string $endpoint)
    {
        return Http::acceptJson()
        ->get($this->base_link . $endpoint);
    }
}
