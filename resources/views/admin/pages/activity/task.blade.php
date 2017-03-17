@extends(config('constants.adminLayouts').'.default')
@section('content')
<div class="page-content">
    <!-- BEGIN BREADCRUMBS -->
    <div class="breadcrumbs">
        <h1>Add New Activity</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{route('admin.dashboard')}}">Home</a>
            </li>
            <li class="active">Activity</li>
        </ol>
    </div>

    <div class="row">
        <div class="page-content-row">
            <div class="page-content-col">

                <div class="portlet box green">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-info-circle"></i>General Information</div>
                        <div class="tools">
                            <a href="javascript:;" class="collapse"> </a>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <section class="tasks">
                            <header class="tasks-header">
                                <h2 class="tasks-title">
                                    <span><i class="icon-pointer"></i> Zone Name</span>
                                    <span class="pull-right"><i class="icon-calendar"></i> 17 March 2017</span>
                                </h2>                 
                            </header>

                            <fieldset class="tasks-list">
                              <label class="tasks-list-item">
                                <span class="emptySpan">&nbsp;</span>
                                <span class="tasks-list-desc"><b>Shift Timing</b></span>
                                <span class="tasks-list-desc"><b>Task</b></span>
                                <span class="tasks-list-desc"><b>Employee Name</b></span>
                              </label>
                              <label class="tasks-list-item">
                                <input type="checkbox" name="task_1" value="1" class="tasks-list-cb">
                                <span class="tasks-list-mark"></span>
                                <span class="tasks-list-desc">9am - 6pm</span>
                                <span class="tasks-list-desc">Add Task</span>
                                <span class="tasks-list-desc">Sachin</span>
                              </label>
                              <label class="tasks-list-item">
                                <input type="checkbox" name="task_2" value="1" class="tasks-list-cb">
                                <span class="tasks-list-mark"></span>
                                <span class="tasks-list-desc">9am - 6pm</span>
                                <span class="tasks-list-desc">Add Task</span>
                                <span class="tasks-list-desc">Vikram</span>
                              </label>
                              <label class="tasks-list-item">
                                <input type="checkbox" name="task_3" value="1" class="tasks-list-cb">
                                 <span class="tasks-list-mark"></span>
                                <span class="tasks-list-desc">9am - 6pm</span>
                                <span class="tasks-list-desc">Add Task</span>
                                <span class="tasks-list-desc">Deepak</span>
                              </label>
                              <label class="tasks-list-item">
                                <input type="checkbox" name="task_3" value="1" class="tasks-list-cb">
                                 <span class="tasks-list-mark"></span>
                                <span class="tasks-list-desc">9am - 6pm</span>
                                <span class="tasks-list-desc">Add Task</span>
                                <span class="tasks-list-desc">Pravin</span>
                              </label>
                              <label class="tasks-list-item">
                                <input type="checkbox" name="task_3" value="1" class="tasks-list-cb">
                                 <span class="tasks-list-mark"></span>
                                <span class="tasks-list-desc">9am - 6pm</span>
                                <span class="tasks-list-desc">Add Task</span>
                                <span class="tasks-list-desc">Raj</span>
                              </label>
                            </fieldset>

                          </section>
                    </div>
                </div>  

            </div>
        </div>
    </div>        

</div>
@endsection
