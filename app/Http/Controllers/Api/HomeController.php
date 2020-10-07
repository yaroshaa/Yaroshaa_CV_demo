<?php

namespace App\Http\Controllers\Api;

use App\Repositories\Interfaces\HomeRepositoryInterface;
use Illuminate\Http\Request;

class HomeController extends BaseController
{
    private $homeRepository;
    public function __construct(HomeRepositoryInterface $homeRepository)
    {
        $this->homeRepository = $homeRepository;
    }

    public function getHomeData($key = null)
    {
        $home = $this->homeRepository->getHome($key);
        return $this->sendResponse($home, 'HomeData retrieved successfully.');
    }

    public function getDefaultLanguage($key = null)
    {
        $defaultLanguage = $this->homeRepository->getDefaultLanguage();
        return $this->sendResponse($defaultLanguage, 'DefaultLanguage retrieved successfully.');
    }
}
