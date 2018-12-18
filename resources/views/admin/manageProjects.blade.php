@extends('layouts.login')

@section('content')
     <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                     <div class="card-header card-header-tabs card-header-primary">
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <span class="nav-tabs-title">Projects :</span>
                      <ul class="nav nav-tabs pull-right" data-tabs="tabs" >
                        <li class="nav-item">
                          <a class="nav-link active" href="{{ route('projects.create')}}">
                            <i class="material-icons">bug_report</i> Add New Projects
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
            <form method="post" id="manageForm" action="{{ route('projects.deleteAll') }}" autocomplete="off">
               {{ method_field('DELETE') }}
               @csrf
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th width="2%">  
                         <div class="form-check">
                                <label class="form-check-label"> 
                                  <input class="form-check-input" type="checkbox" id="checkAll">
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>                        
                        </th>
                        <th>
                          S. No.
                        </th>
                          
                        <th>
                          Project Name
                        </th>
                        <th>
                          Start Date
                        </th>
                        <th>
                          End Date
                        </th>
                        <th>
                         Assigned To
                        </th>
                        <th>
                          Status
                        </th>
                         <th>
                          Actions
                        </th>
                      </thead>
                      <tbody>
                      <?php $i = 1; ?>
                        @foreach ($projects as $project)  
                        <tr> 
                         <td>
                              <div class="form-check">
                                <label class="form-check-label"> 
                                  <input class="form-check-input checkedAll" type="checkbox" value="{{ $project->id }}" name="ids[]"  data-id="{{ $project->id }}" >
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                             <td>
                            {{$i}}
                          </td>
                          <td class="text-warning">
                            {{ $project->p_name }}
                          </td>
                          <td>
                            {{ $project->p_start_date }}
                          </td>
                          <td>
                            {{ $project->p_end_date }}
                          </td>
                           <td >
                            {{$project->users->name }}
                          </td>
                          <td >
                            {{ $project->p_status }}
                          </td>
                           <td class="td-actions text-left">
                              <a href="{{ url('projects/edit/' . $project->id) }}" rel="tooltip" title="Edit Project" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </a>                              
                            </td>
                        </tr>
                            <?php $i++; ?>         
                        @endforeach
                        
                      </tbody>
                    </table>
                  </div>                   
                </div>
              </form>
                 <div class="card-footer">                           
                    <div class="task">
                        <button class="btn btn-danger delete-all">
                            <i class="material-icons">close</i> Delete
                          <div class="ripple-container"></div></button>
                     </div>
                     <div class="pagination" > 
                            {{ $projects->render() }}
                    </div>                   
                 </div>
           
              </div>
            </div>           
          </div>
        </div>
      </div>
@endsection

