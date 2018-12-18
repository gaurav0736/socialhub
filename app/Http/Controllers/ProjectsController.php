<?php

namespace App\Http\Controllers;

use App\Projects;
use Illuminate\Http\Request;
use Helper;
use DB;

class ProjectsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    protected function rules()
    {
        return [
            'p_name' => 'required|max:200',
            'p_start_date' => 'required|date_format:"Y-m-d"',
            'p_end_date' => 'required|date_format:"Y-m-d"|after:p_start_date',
            'p_assigned' => 'required|integer',
            'p_status' => 'required',
        ];
    }

     protected function attributes()
    {
        return [
            'p_name' => 'Project Name',
            'p_start_date' => 'Project Start Date',
            'p_end_date' => 'Project End Date',
            'p_assigned' => 'Project Assigned To',
            'p_status' => 'Project Status',
        ];
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Projects::orderBy('id', 'desc')->paginate(5);       
        return view('admin/manageProjects', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $project = new Projects();
         $p_assigned = DB::table('users')->pluck('name','id'); 
      //   dd($project);
        $p_status = Helper::getEnumValues('projects','p_status'); 

       return view('admin/editProjects', compact('project','p_status','p_assigned'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    $validator =  $this->validate($request, $this->rules(), [], $this->attributes());

        $project = new Projects();
        $project->p_name=$request->input('p_name');       
        $project->p_start_date=$request->input('p_start_date');
        $project->p_end_date=$request->input('p_end_date');
        $project->p_assigned=$request->input('p_assigned');
        $project->p_status=$request->input('p_status');
        $project->p_description=$request->input('p_description');
        $project->created_at=date('Y-m-d H:i:s');
        $project->updated_at=date('Y-m-d H:i:s');
        $project->save();
         return redirect('projects')->with("status", "Project Details Saved.");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function show(Projects $projects)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function edit($projects)
    {
        $project = Projects::where('id', $projects)->firstOrFail();
          $p_assigned = DB::table('users')->pluck('name','id'); 
         $p_status = Helper::getEnumValues('projects','p_status'); 
       return view('admin/editProjects', compact('project','p_status','p_assigned'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Projects $projects)
    {
       
    $validator =  $this->validate($request, $this->rules(), [], $this->attributes());     
     $projects->update([
        'p_name' => $request->input('p_name'),
        'p_start_date' => $request->input('p_start_date'),
        'p_end_date' => $request->input('p_end_date'),
        'p_assigned' => $request->input('p_assigned'),
        'p_status' => $request->input('p_status'),
        'p_description' => $request->input('p_description'),
        'updated_at' => $request->input('updated_at'),
    ]);
        return redirect('projects')->with("status", "Project Details Updated.");
       

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function deleteAll(Request $request)
    {
        $ids = $request->ids;
        if(!empty($ids)){
        Projects::whereIn('id',$ids)->delete();
        return redirect('projects')->with("deleted", "Selected records deleted successfully.");
         }
         return redirect('projects')->with("deleted", "Please select at least one record.");
    }
}
