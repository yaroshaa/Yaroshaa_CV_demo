<?php

namespace App\Repositories;

use App\Models\GroupPortfolio;
use App\Models\Settings;
use App\Models\Category;
use App\Models\Download;
use App\Models\Project;
use App\Models\Technology;
use App\Models\Tools;
use App\Models\WebPortfolio;
use App\Models\ArtPortfolio;
use App\Models\SpokenLanguage;
use App\Models\Navigation;
use App\Models\GeneralInformation;
use App\Models\Experience;
use App\Models\Education;
use App\Models\Language;

class HomeRepository implements Interfaces\HomeRepositoryInterface
{

    /**
     * @return \Illuminate\Support\Collection
     */
    public function getDefaultLanguage()
    {
        $id = Settings::first()->default_lang_id;
        $data['defaultLanguage'] = Language::find($id)->key;
        return collect($data);;
    }

    /**
     * @param null $key
     * @return object
     */
    public function getHome($key = null)
    {
        $langId = isset($key)
            ? Language::where('key', $key)->first()->id
            : (integer) Settings::first()->default_lang_id;
        $data = $this->getData($langId);

        return $data;
    }


    /**
     * @param int $langId
     * @return \Illuminate\Support\Collection
     */
    public function getData(int $langId)
    {

        $current_lang_key = Language::where('id', $langId)->first()->key;

        $generals = GeneralInformation::with(['translate' => function ($query) use ($langId) {
            $query->where('lang_id' , $langId);
        }])->where('status' , true)->first();

        $nav = Navigation::with(['translate' => function ($query) use ($langId) {
            $query->where('lang_id' , $langId);
        }])->where('status' , true)->first();

        $educations = Education::with(['translate' => function ($query) use ($langId) {
            $query->where('lang_id' , $langId);
        }])->where('status' , true)->orderBy('order')->get();

        $experiences = Experience::with(['translate' => function ($query) use ($langId) {
            $query->where('lang_id' , $langId);
        }])->where('status' , true)->orderBy('order')->get();

        $data['aboutme'] = [  // do not touch this key
            'educations' => $educations,
            'experiences' => $experiences,
            'download' => Download::where('lang_id',$langId)->first()->link
        ];

        $data['projects'] = Project::with(['translate' => function ($query)  use ($langId) {
            $query->where('lang_id' , $langId);
        }])->where('status' , true)->get();

        $data['artportfolio'] = ArtPortfolio::with(['translate' => function ($query) use ($langId) {
            $query->where('lang_id' , $langId);
        }])->where('status' , true)->get();

        $data['webportfolio']['groups'] = GroupPortfolio::with(['translate' => function ($query) use ($langId) {
            $query->where('lang_id' , $langId);
        }])->where('status' , true)->get();

        $data['webportfolio']['pages'] = WebPortfolio::with(['translate' => function ($query) use ($langId) {
            $query->where('lang_id' , $langId);
        },
            'icons'])->where('status' , true)->orderBy('order')
            ->get();

        $data['spokenlangs'] = SpokenLanguage::with(['translate' => function ($query) use ($langId) {
            $query->where('lang_id' , $langId);
        }])->where('status' , true)->get();
        $settings = Settings::first();

        $data['contacts']['emails'] = $settings->email_first;
        $data['contacts']['phones'] = $settings->phone_first;
        $data['contacts']['skype'] = $settings->skype ;
        $data['contacts']['time_work'] =  $settings->time_work ;
        $data['copiright'] =  $settings->copiright ;

        $links = [
            'link_facebook' => $settings->link_facebook,
            'link_pinterest' =>  $settings->link_pinterest,
            'link_twitter' =>  $settings->link_twitter,
            'link_instagram' =>  $settings->link_instagram,
            'link_linkedin' =>  $settings->link_linkedin,
            'link_github' =>  $settings->link_github,
            'link_bitbucket' =>  $settings->link_bitbuket,
            'link_azure' =>  $settings->link_azure
        ];

        $categories = Category::with(['translate' => function ($query) use ($langId) {
            $query->where('lang_id' , $langId);
        }])
            ->where('status' , true)
            ->orderBy('order')
            ->get();

        $data['tools'] = Tools::where('status', 1)->get();
        $data['technology'] = Technology::where('status', 1)->get();
        $navigation = json_decode($nav->translate->nav_list, true);

        $allData = array();

        foreach($categories as $key=>$category){
            $allData['categories'][$key]['label'] = $category;
            if(isset($data[$category->key])){
                $allData['categories'][$key]['data'] = $data[$category->key];
            }
        }

        $allData['general'] = $generals->translate;
        $allData['navigation'] =  collect($navigation['navigation']);
        $allData['languages'] =  Language::where('status', true)->get();
        $allData['currentLanguageData'] = Language::find($langId);
        $allData['current_lang'] = $current_lang_key;
        $allData['links'] = $links;

        return collect($allData);;
    }
}
