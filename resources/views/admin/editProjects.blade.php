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
                  @if(isset($project->id))                   
                   <form  method="post" action="{{ route('projects.update', $project->id) }}" enctype="multipart/form-data"
>   
                    {{ method_field('PUT') }}
                  @else
                   <form method="post" action="{{ route('projects.store') }}" autocomplete="off" enctype="multipart/form-data"
>
                  @endif
                  @csrf
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating"> Project Name</label>
                          <input type="text" name="p_name" class="form-control" value="{{  old('p_name', $project->p_name) }}">
                        </div>
                        <span class="text-danger error">{{ $errors->first('p_name') }}</span>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="">Project Start Date</label>
                          <input type="text" autocomplete="off" name="p_start_date" class="form-control datetimepicker" value="{{  old('p_start_date', $project->p_start_date) }}">
                        </div>
                         <span class="text-danger error">{{ $errors->first('p_start_date') }}</span>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="">Project End Date</label>
                          <input type="text" autocomplete="off" name="p_end_date" class="form-control datetimepicker" value="{{  old('p_end_date', $project->p_end_date) }}">
                        </div>
                          <span class="text-danger error">{{ $errors->first('p_end_date') }}</span>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="">Project Assigned</label>
                         <div class="dropdown bootstrap-select dropup">  
                           <select class="selectpicker" data-size="7" data-style="btn btn-primary btn-round" name="p_assigned" > 
                            <option value="">Please Select</option>
                           @foreach($p_assigned as $key => $value)
                            <option value="{{$key}}" {{ (old('p_assigned', $project->p_assigned) == $key) ? 'selected' : ''}}>{{$value}}</option>
                        @endforeach
                          </select>
                           </div>                          
                        </div>
                          <span class="text-danger error">{{ $errors->first('p_assigned') }}</span>
                      </div>
                       <div class="col-md-6">
                        <div class="form-group ">
                          <label class="">Status</label>
                          <div class="dropdown bootstrap-select dropup">
                            <select class="selectpicker" data-size="7" data-style="btn btn-primary btn-round" name="p_status" > 
                             @foreach($p_status as $key => $value)
                              <option value="{{$value}}" {{ ( old('p_status', $project->p_status) == $value) ? 'selected' : ''}}>{{$value}}</option>
                          @endforeach
                            </select>
                        </div>                         
                        </div>
                         <span class="text-danger error">{{ $errors->first('p_status') }}</span>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-8">
                        <div class="form-group">
                          <label>Project Description</label>
                          <div class="form-group">
                            <label class="bmd-label-floating">Enter project Description...</label>
                            <textarea name="p_description" class="form-control" rows="5">{{ old('p_description', $project->p_description)}}</textarea>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-4">
                      <h4 class="title">Project Image</h4>
                      <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                        <div class="fileinput-new thumbnail">
                          <img src="{{ asset('img/image_placeholder.jpg')}}" >
                        </div>
                        <div class="fileinput-preview fileinput-exists thumbnail"></div>
                        <div>
                          <span class="btn btn-rose btn-round btn-file">
                            <span class="fileinput-new">Select image</span>
                            <span class="fileinput-exists">Change</span>
                            <input type="file" name="p_image">
                          </span>
                          <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                        </div>
                         <span class="text-danger error">{{ $errors->first('p_image') }}</span>
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
