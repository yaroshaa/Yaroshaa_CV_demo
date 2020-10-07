<?php
namespace App\Repositories\Interfaces;

interface HomeRepositoryInterface
{
    public function getDefaultLanguage();
    public function getHome($key = null);
    public function getData(int $lang_id);
}
