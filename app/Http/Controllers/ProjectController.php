<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Language;
use App\Models\Deployment;

class ProjectController extends Controller
{
    //
    public function addProject(){
        $project = new Project;
        $project->name = 'ELearning';
        $project->save();
   }

   public function showDeployment($id){
       // fetch deployment data based on projectd id
       //without hasonethroughmethod
        /* $deployment = Project::find($id)->language->flatMap->deployment;
        return $deployment; */

        //using hasManyThrough
        $deployment = Project::find($id)->deployment;
        return $deployment;
   }
}
