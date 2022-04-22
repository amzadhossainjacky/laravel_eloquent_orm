<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Language;
use App\Models\Deployment;

class DeploymentController extends Controller
{
    //

    public function addDeployment($id){
        $language = Language::find($id);
        $deployment = new Deployment();
        $deployment->work = 'pending';
        $language->deployment()->save($deployment);
    }
}
