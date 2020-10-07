<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LanguageSeeder::class);
        $this->call(SettingsSeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(DownloadsSeeder::class);
        $this->call(WebPortfolioSeeder::class);
        $this->call(ArtPortfolioSeeder::class);
        $this->call(LangWebPortfolioSeeder::class);
        $this->call(LangArtPortfolioSeeder::class);
        $this->call(EducationSeeder::class);
        $this->call(ExperienceSeeder::class);
        $this->call(LangEducationsSeeder::class);
        $this->call(LangExperiencesSeeder::class);
        $this->call(ProjectsSeeder::class);
        $this->call(LangProjectsSeeder::class);
        $this->call(SpokenLanguageSeeder::class);
        $this->call(LangSpokenLanguageSeeder::class);
        $this->call(TechnologySeeder::class);
        $this->call(ToolsSeeder::class);
        $this->call(TechnologyWebPortfolioSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(LangCategorySeeder::class);
        $this->call(NavigationSeeder::class);
        $this->call(LangNavigationSeeder::class);
        $this->call(GeneralInformationSeeder::class);
        $this->call(LangGeneralInformationSeeder::class);
        $this->call(GroupPortfolioSeeder::class);
        $this->call(LangGroupPortfolioSeeder::class);

    }
}
