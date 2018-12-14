@extends('layouts.login')

@section('content')
  <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Add/Edit Projects</h4>
                  <p class="card-category">Enter details about your projects...</p>
                </div>
                <div class="card-body">
                  @if(isset($project))                   
                   <form method="put" action="{{ route('projects.update', $project->id) }}">
                  @else
                   <form method="post" action="{{ route('projects.store') }}">
                  @endif
                  @csrf
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating"> Project Name</label>
                          <input type="text" name="p_name" class="form-control" value="{{ $project->p_name }}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="">Project Start Date</label>
                          <input type="text" name="p_start_date" class="form-control datetimepicker" value="{{ $project->p_start_date}}">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="">Project End Date</label>
                          <input type="text" name="p_end_date" class="form-control datetimepicker" value="{{ $project->p_end_date}}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Project Assigned</label>
                          <input type="text" name="p_assigned" class="form-control" value="{{ $project->p_assigned}}">
                        </div>
                      </div>
                       <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Status</label>
                          <input type="text" name="p_status" class="form-control" value="{{ $project->p_status}}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Project Description</label>
                          <div class="form-group">
                            <label class="bmd-label-floating">Enter project Description...</label>
                            <textarea name="p_description" class="form-control" rows="5">{{ $project->p_description}}</textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Add/Edit</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>          
          </div>
        </div>
      </div>
@endsection
