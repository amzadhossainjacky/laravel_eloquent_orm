<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Language;
use App\Models\Deployment;

class LanguageController extends Controller
{
    //
    public function addLanguage($id){

        $project = Project::find($id);
        $language = new Language();
        $language->name = 'c#';
        $project->language()->save($language);

    }
}
