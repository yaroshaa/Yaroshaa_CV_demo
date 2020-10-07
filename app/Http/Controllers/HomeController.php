<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Settings;
use App\Models\Language;
use Illuminate\Support\Facades\App;
use App\Repositories\Interfaces\HomeRepositoryInterface;

/**
 * Class HomeController
 * @package App\Http\Controllers
 * This controller for organizing the standard data reception and transmission of this data to the view with Blade template
 */


class HomeController extends Controller
{
    private $homeRepository;
    public function __construct(HomeRepositoryInterface $homeRepository)
    {
        $this->homeRepository = $homeRepository;
    }

    /**
     * @param null $key
     * @return \Illuminate\View\View
     */
    public function index($key = null)
    {

        $settings = Settings::first();

        $lang_id = isset($key)
            ? Language::where('key', $key)->first()->id
            : (integer)$settings->default_lang_id;

        $current_lang_key = Language::where('id', $lang_id)->first()->key;

        App::setLocale($current_lang_key);

        $data = $this->homeRepository->getData($lang_id);

        return view('pages.home', ['allData' => $data, 'settings' => $settings, 'languages' => $data['languages'], 'currentLang' => $current_lang_key]);
    }
}

