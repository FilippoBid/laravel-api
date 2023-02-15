<?php

namespace App\Http\Controllers\Api;

use App\Models\Admin\Project;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
        public function index(){

            $projects = Project::all();

            
            return response()->json([
                "projects" => $projects,
            ]);
        }




        /* funzione show */
        public function show($id){


            $project = Project::findOrFail($id);

            
                
                return response()->json([
                    "project" => $project,
                ]);
        }
}


    
    

