@extends(config('constants.adminLayouts').'.default')
@section('content')
<div class="page-content">
    <!-- BEGIN BREADCRUMBS -->
    <div class="breadcrumbs">
        <h1>Schedules</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{route('admin.dashboard')}}">Home</a>
            </li>
            <li class="active">Schedules</li>
        </ol>
    </div>

          <div class="row">
              <div class="page-content-row">
                  <div class="page-content-col">
                    <div class="portlet light bordered">
                      <div class="portlet-body form">
                        <form action="#" class="mt-repeater form-horizontal">
                          <div class="mt-repeater-input">
                              <label class="control-label">Name</label>
                              <br/>
                              <input type="text" name="text-input" class="form-control" placeholder="Name" /> 
                          </div>
                          <div class="mt-repeater-input">
                              <label class="control-label">Joined Date</label>
                              <br/>
                              <input class="input-group form-control form-control-inline date date-picker" size="16" type="text" name="date-input" data-date-format="dd/mm/yyyy" placeholder="Date" /> 
                          </div>                                         
                          <div class="mt-repeater-input">
                              <label class="control-label">Department</label>
                              <br/>
                              <select name="select-input" class="form-control">
                                  <option value="0" selected="">Marketing</option>
                                  <option value="A">Marketing</option>
                                  <option value="B">Creative</option>
                                  <option value="C">Development</option>
                              </select>
                          </div>
                          <div class="mt-repeater-input">
                              <a href="javascript:;" data-repeater-delete class="btn btn-success mt-repeater-delete">
                                  <i class="fa fa-search"></i> Search</a>
                          </div>
                        </form>
                      </div>
                  </div>

                <div class="portlet box green">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-calendar"></i> 17 March 2017
                        </div>
                    </div>

                    <div class="portlet-body">
                      <div class="panel-group accordion" id="accordion3">
                          <div class="panel panel-default">
                              <div class="panel-heading">
                                  <h4 class="panel-title">
                                      <a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion3" href="#collapse_3_1"> <i class="icon-pointer"></i> Ground Floor </a>
                                  </h4>
                              </div>
                              <div id="collapse_3_1" class="panel-collapse in">
                                  <div class="panel-body">
                                      <fieldset class="tasks-list">
                                        <label class="tasks-list-item" style="background: #f1f1f1;">
                                          <span class="emptySpan">&nbsp;</span>
                                          <span class="tasks-list-desc"><b>Shift</b></span>
                                          <span class="tasks-list-desc"><b>Activity</b></span>
                                          <span class="tasks-list-desc"><b>Employee Name</b></span>
                                        </label>
                                        <label class="tasks-list-item">
                                          <input type="checkbox" name="task_1" value="1" class="tasks-list-cb" checked>
                                          <span class="tasks-list-mark"></span>
                                          <span class="tasks-list-desc">Shift A (9am - 6pm)</span>
                                          <span class="tasks-list-desc">Dusting</span>
                                          <span class="tasks-list-desc">Sachin</span>
                                        </label>
                                        <label class="tasks-list-item">
                                          <input type="checkbox" name="task_2" value="1" class="tasks-list-cb" checked>
                                          <span class="tasks-list-mark"></span>
                                          <span class="tasks-list-desc">Shift B (9am - 6pm)</span>
                                          <span class="tasks-list-desc">Cleaning</span>
                                          <span class="tasks-list-desc">Vikram</span>
                                        </label>
                                        <label class="tasks-list-item">
                                          <input type="checkbox" name="task_3" value="1" class="tasks-list-cb">
                                           <span class="tasks-list-mark"></span>
                                          <span class="tasks-list-desc">Shift C (9am - 6pm)</span>
                                          <span class="tasks-list-desc">Mopping</span>
                                          <span class="tasks-list-desc">Deepak</span>
                                        </label>
                                        <label class="tasks-list-item">
                                          <input type="checkbox" name="task_3" value="1" class="tasks-list-cb">
                                           <span class="tasks-list-mark"></span>
                                          <span class="tasks-list-desc">Shift A (9am - 6pm)</span>
                                          <span class="tasks-list-desc">Cleaning</span>
                                          <span class="tasks-list-desc">Pravin</span>
                                        </label>
                                        <label class="tasks-list-item">
                                          <input type="checkbox" name="task_3" value="1" class="tasks-list-cb">
                                           <span class="tasks-list-mark"></span>
                                          <span class="tasks-list-desc">Shift B (9am - 6pm)</span>
                                          
                                          <span class="tasks-list-desc">Dusting</span>
                                          <span class="tasks-list-desc">Raj</span>
                                        </label>
                                      </fieldset>
                                  </div>
                              </div>
                          </div>
                          <div class="panel panel-default">
                              <div class="panel-heading">
                                  <h4 class="panel-title">
                                      <a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapse_3_2"> <i class="icon-pointer"></i> First Floor </a>
                                  </h4>
                              </div>
                              <div id="collapse_3_2" class="panel-collapse collapse">
                                  <div class="panel-body">
                                      <fieldset class="tasks-list">
                                        <label class="tasks-list-item" style="background: #f1f1f1;">
                                          <span class="emptySpan">&nbsp;</span>
                                          <span class="tasks-list-desc"><b>Shift</b></span>
                                          <span class="tasks-list-desc"><b>Activity</b></span>
                                          <span class="tasks-list-desc"><b>Employee Name</b></span>
                                        </label>
                                        <label class="tasks-list-item">
                                          <input type="checkbox" name="task_1" value="1" class="tasks-list-cb" checked>
                                          <span class="tasks-list-mark"></span>
                                          <span class="tasks-list-desc">Shift A (9am - 6pm)</span>
                                          <span class="tasks-list-desc">Cleaning</span>
                                          <span class="tasks-list-desc">Sachin</span>
                                        </label>
                                        <label class="tasks-list-item">
                                          <input type="checkbox" name="task_2" value="1" class="tasks-list-cb" checked>
                                          <span class="tasks-list-mark"></span>
                                          <span class="tasks-list-desc">Shift B (9am - 6pm)</span>
                                          <span class="tasks-list-desc">Dusting</span>
                                          <span class="tasks-list-desc">Vikram</span>
                                        </label>
                                        <label class="tasks-list-item">
                                          <input type="checkbox" name="task_3" value="1" class="tasks-list-cb">
                                           <span class="tasks-list-mark"></span>
                                          <span class="tasks-list-desc">Shift A (9am - 6pm)</span>
                                          <span class="tasks-list-desc">Mopping</span>
                                          <span class="tasks-list-desc">Deepak</span>
                                        </label>
                                        <label class="tasks-list-item">
                                          <input type="checkbox" name="task_3" value="1" class="tasks-list-cb">
                                           <span class="tasks-list-mark"></span>
                                          <span class="tasks-list-desc">Shift C (9am - 6pm)</span>
                                          <span class="tasks-list-desc">Dusting</span>
                                          <span class="tasks-list-desc">Pravin</span>
                                        </label>
                                        <label class="tasks-list-item">
                                          <input type="checkbox" name="task_3" value="1" class="tasks-list-cb">
                                           <span class="tasks-list-mark"></span>
                                          <span class="tasks-list-desc">Shift B (9am - 6pm)</span>
                                          <span class="tasks-list-desc">Cleaning</span>
                                          <span class="tasks-list-desc">Raj</span>
                                        </label>
                                      </fieldset>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

                </div>  

            </div>
        </div>
    </div>        

</div>
@endsection
