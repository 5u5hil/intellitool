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
                                <a href="#tab_5_3" data-toggle="tab"> Role Assignment </a>
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
                                            <select class="mt-multiselect btn btn-default" multiple="multiple" data-clickable-groups="true" data-collapse-groups="true" data-width="100%">
                                                <optgroup label="Group 1" class="group-1">
                                                    <option value="1-1">Option 1.1</option>
                                                    <option value="1-2">Option 1.2</option>
                                                    <option value="1-3">Option 1.3</option>
                                                </optgroup>
                                                <optgroup label="Group 2" class="group-2">
                                                    <option value="2-1">Option 2.1</option>
                                                    <option value="2-2">Option 2.2</option>
                                                    <option value="2-3">Option 2.3</option>
                                                </optgroup>
                                            </select>
                                        </div>  
                                        <div class="col-md-2">
                                            <label class="control-label" style="margin: 20px;"></label>
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
                                        <div id="tree_1" class="tree-demo">
                                            <ul>
                                                <li> Root node 1
                                                    <ul>
                                                        <li data-jstree='{ "selected" : true }'>
                                                            <a href="javascript:;"> Initially selected </a>
                                                        </li>
                                                        <li data-jstree='{ "icon" : "fa fa-briefcase icon-state-success " }'> custom icon URL </li>
                                                        <li data-jstree='{ "opened" : true }'> initially open
                                                            <ul>
                                                                <li data-jstree='{ "disabled" : true }'> Disabled Node </li>
                                                                <li data-jstree='{ "type" : "file" }'> Another node </li>
                                                            </ul>
                                                        </li>
                                                        <li data-jstree='{ "icon" : "fa fa-warning icon-state-danger" }'> Custom icon class (bootstrap) </li>
                                                    </ul>
                                                </li>
                                                <li data-jstree='{ "type" : "file" }'>
                                                    <a href="http://www.jstree.com"> Clickanle link node </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                </div> 

                            </div>
                            <div class="tab-pane" id="tab_5_3">
                                <div class="portlet-body">
                                <div class="portlet-body form">
                                <div class="form-body">
                                    <div id="tree_3" class="tree-demos">
                                        <ul>
                                            <li> Root node 1
                                                <ul>
                                                    <li data-jstree='{ "selected" : true }'>
                                                        <a href="javascript:;"> Initially selected </a>
                                                    </li>
                                                    <li data-jstree='{ "icon" : "fa fa-briefcase icon-state-success " }'> custom icon URL </li>
                                                    <li data-jstree='{ "opened" : true }'> initially open
                                                        <ul>
                                                            <li data-jstree='{ "disabled" : true }'> Disabled Node </li>
                                                            <li data-jstree='{ "type" : "file" }'> Another node </li>
                                                        </ul>
                                                    </li>
                                                    <li data-jstree='{ "icon" : "fa fa-warning icon-state-danger" }'> Custom icon class (bootstrap) </li>
                                                </ul>
                                            </li>
                                            <li data-jstree='{ "type" : "file" }'>
                                                <a href="http://www.jstree.com"> Clickanle link node </a>
                                            </li>
                                        </ul>
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

@endsection