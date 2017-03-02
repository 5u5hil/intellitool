@extends(config('constants.adminLayouts').'.default')

@section('content')
<div class="page-content">
    <!-- BEGIN BREADCRUMBS -->
    <div class="breadcrumbs">
        <h1>Edit Project</h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">Home</a>
            </li>
            <li class="active">Project</li>
        </ol>
    </div>


    <div class="row">
        <div class="col-md-12">
            <form action="#" class="repeater form-horizontal">
                <div class="portlet-title">
                    <div class="tabbable-custom ">
                        <ul class="nav nav-tabs ">

                            <li class="active">
                                <a href="#tab_5_1" data-toggle="tab"> General Info </a>
                            </li>
                            <li>
                                <a href="#tab_5_2" data-toggle="tab"> Zone Management</a>
                            </li>
                            <li>
                                <a href="#tab_5_3" data-toggle="tab"> Employee Assignment </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_5_1">
                                <div class="portlet-body form">
                                    <div class="form-body">
                                        <div class="form-group">
                                            <div class="col-md-4">
                                                <label class="control-label">Project Name</label>
                                                <input type="text" placeholder="" class="form-control">
                                            </div>  
                                            <div class="col-md-4">
                                                <label class="control-label">Company Name</label>
                                                <select class="form-control" name="options2">
                                                    <option value="">Select...</option>
                                                    <option value="housekeeping">Company Name 1</option>
                                                    <option value="security">Company Name 2</option>
                                                </select>
                                            </div>  
                                            <div class="col-md-4">
                                                <label class="control-label">Number Of Zone</label>
                                                <input type="text" placeholder="" class="form-control">   
                                            </div>  
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-4">
                                                <label class="control-label">Schedule Planning Done</label>
                                                <select class="form-control" name="options2">
                                                    <option value="">Select...</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>  
                                            <div class="col-md-4">
                                                <label class="control-label">Location</label>
                                                <input type="text" placeholder="" class="form-control">
                                            </div>  
                                            <div class="col-md-4">
                                                <label class="control-label">Verticals</label>
                                                <select class="form-control" name="options2">
                                                    <option value="">Select...</option>
                                                    <option value="housekeeping">Housekeeping</option>
                                                    <option value="security">Security</option>
                                                </select>   
                                            </div>  
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <div class="tab-pane" id="tab_5_2">
                                <div class="portlet-body form">
                                    <div class="form-body">
                                        <div class="form-group">
                                            <div class="col-md-4">
                                                <label class="control-label">Zone Name</label>
                                                <input type="text" placeholder="" class="form-control">
                                            </div>  
                                            <div class="col-md-4">
                                                <label class="control-label">Select Zone</label>
                                                 <select id="example-allSelectedText-includeSelectAllOption" multiple="multiple">
                                                    <option value="Accord">- Accord</option>
                                                    <option value="Duster">-- Duster</option>
                                                    <option value="Esteem">--- Esteem</option>
                                                    <option value="Fiero">---- Fiero</option>
                                                    <option value="Lancer">----- Lancer</option>
                                                    <option value="Phantom">------ Phantom</option>
                                                </select>
                                            </div>  
                                            <div class="col-md-2">
                                                <label class="control-label" style="margin-top: 40px;"></label>
                                                <label class="mt-checkbox mt-checkbox-outline"> Upload Photo
                                                    <input type="checkbox" value="1" name="test" />
                                                    <span></span>
                                                </label>
                                            </div>                                            
                                            <div class="col-md-2">
                                                <label class="control-label" style="margin: 20px;"></label>
                                                <button type="submit" class="btn blue">Add</button>
                                            </div> 
                                        </div>
                                        <hr>
                                        <div class="portlet-body">
                                            <ul id="tree1">
                                                <li><a href="#">TECH</a>
                                                    <ul>
                                                        <li>Company Maintenance</li>
                                                        <li>Employees
                                                            <ul>
                                                                <li>Reports
                                                                    <ul>
                                                                        <li>Report1</li>
                                                                        <li>Report2</li>
                                                                        <li>Report3</li>
                                                                    </ul>
                                                                </li>
                                                                <li>Employee Maint.</li>
                                                            </ul>
                                                        </li>
                                                        <li>Human Resources</li>
                                                    </ul>
                                                </li>
                                                <li>XRP
                                                    <ul>
                                                        <li>Company Maintenance</li>
                                                        <li>Employees
                                                            <ul>
                                                                <li>Reports
                                                                    <ul>
                                                                        <li>Report1</li>
                                                                        <li>Report2</li>
                                                                        <li>Report3</li>
                                                                    </ul>
                                                                </li>
                                                                <li>Employee Maint.</li>
                                                            </ul>
                                                        </li>
                                                        <li>Human Resources</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> 

                            </div>
                            <div class="tab-pane" id="tab_5_3">
                                <div class="portlet-body">
                                    <div class="portlet-body form">
                                        <div class="panel-group accordion" id="accordion1">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse_1" aria-expanded="false"> Housekeeping </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse_1" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">

                                                        <div class="form-body">
                                                            <ul id="tree2">
                                                                <li><a href="#">TECH</a><i class="icon-plus addUsers"></i>
                                                                    <ul>
                                                                        <li>Company Maintenance<i class="icon-plus addUsers"></i></li>
                                                                        <li>Employees<i class="icon-plus addUsers"></i>
                                                                            <ul>
                                                                                <li>Reports<i class="icon-plus addUsers"></i>
                                                                                    <ul>
                                                                                        <li>Report1<i class="icon-plus addUsers"></i></li>
                                                                                        <li>Report2<i class="icon-plus addUsers"></i></li>
                                                                                        <li>Report3<i class="icon-plus addUsers"></i></li>
                                                                                    </ul>
                                                                                </li>
                                                                                <li>Employee Maint.<i class="icon-plus addUsers"></i></li>
                                                                            </ul>
                                                                        </li>
                                                                        <li>Human Resources<i class="icon-plus addUsers"></i></li>
                                                                    </ul>
                                                                </li>
                                                                <li>XRP<i class="icon-plus addUsers"></i>
                                                                    <ul>
                                                                        <li>Company Maintenance<i class="icon-plus addUsers"></i></li>
                                                                        <li>Employees<i class="icon-plus addUsers"></i>
                                                                            <ul>
                                                                                <li>Reports<i class="icon-plus addUsers"></i>
                                                                                    <ul>
                                                                                        <li>Report1<i class="icon-plus addUsers"></i></li>
                                                                                        <li>Report2<i class="icon-plus addUsers"></i></li>
                                                                                        <li>Report3<i class="icon-plus addUsers"></i></li>
                                                                                    </ul>
                                                                                </li>
                                                                                <li>Employee Maint.<i class="icon-plus addUsers"></i></li>
                                                                            </ul>
                                                                        </li>
                                                                        <li>Human Resources<i class="icon-plus addUsers"></i></li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse_2" aria-expanded="false"> Security </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse_2" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body" >
                                                        <div class="form-body">
                                                            <ul id="tree3">
                                                                <li><a href="#">TECH</a>
                                                                    <ul>
                                                                        <li>Company Maintenance</li>
                                                                        <li>Employees
                                                                            <ul>
                                                                                <li>Reports
                                                                                    <ul>
                                                                                        <li>Report1</li>
                                                                                        <li>Report2</li>
                                                                                        <li>Report3</li>
                                                                                    </ul>
                                                                                </li>
                                                                                <li>Employee Maint.</li>
                                                                            </ul>
                                                                        </li>
                                                                        <li>Human Resources</li>
                                                                    </ul>
                                                                </li>
                                                                <li>XRP
                                                                    <ul>
                                                                        <li>Company Maintenance</li>
                                                                        <li>Employees
                                                                            <ul>
                                                                                <li>Reports
                                                                                    <ul>
                                                                                        <li>Report1</li>
                                                                                        <li>Report2</li>
                                                                                        <li>Report3</li>
                                                                                    </ul>
                                                                                </li>
                                                                                <li>Employee Maint.</li>
                                                                            </ul>
                                                                        </li>
                                                                        <li>Human Resources</li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </div> </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse_3" aria-expanded="false">Machinery </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse_3" class="panel-collapse in" >
                                                    <div class="panel-body">
                                                        <div class="form-body">
                                                            <ul id="tree4">
                                                                <li><a href="#">TECH</a>
                                                                    <ul>
                                                                        <li>Company Maintenance</li>
                                                                        <li>Employees
                                                                            <ul>
                                                                                <li>Reports
                                                                                    <ul>
                                                                                        <li>Report1</li>
                                                                                        <li>Report2</li>
                                                                                        <li>Report3</li>
                                                                                    </ul>
                                                                                </li>
                                                                                <li>Employee Maint.</li>
                                                                            </ul>
                                                                        </li>
                                                                        <li>Human Resources</li>
                                                                    </ul>
                                                                </li>
                                                                <li>XRP
                                                                    <ul>
                                                                        <li>Company Maintenance</li>
                                                                        <li>Employees
                                                                            <ul>
                                                                                <li>Reports
                                                                                    <ul>
                                                                                        <li>Report1</li>
                                                                                        <li>Report2</li>
                                                                                        <li>Report3</li>
                                                                                    </ul>
                                                                                </li>
                                                                                <li>Employee Maint.</li>
                                                                            </ul>
                                                                        </li>
                                                                        <li>Human Resources</li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </div> </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                                                   
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-5 col-md-6">
                                <button type="submit" class="btn green">Submit</button>
                                <button type="button" class="btn default">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>	
            </form>	
        </div>
    </div>
</div>
<!-- set up the modal to start hidden and fade in and out -->
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- dialog body -->
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal">&times;</button>

                <div class="form-group">
                    <label class="control-label">Select Role</label>
                    <div class="input-group col-md-8">           
                        <select class="form-control" name="options2">
                            <option value="">Select...</option>
                            <option value="housekeeping">Housekeeping</option>
                            <option value="security">Security</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label">Assign Employee</label>
                    <div class="input-group col-md-8">                   
                        <select class="form-control" name="options2">
                            <option value="">Select...</option>
                            <option value="housekeeping">Jignesh Reddy</option>
                            <option value="security">Karan Kenny</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- dialog buttons -->
            <div class="modal-footer"><button type="button" class="btn btn-primary ">Assign</button></div>
        </div>
    </div>
</div>
@endsection

