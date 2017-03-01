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
                                            <select class="form-control" name="options2">
                                                <option value="">Select...</option>
                                                <option value="housekeeping">Zone Name 1</option>
                                                <option value="security">Zone Name 2</option>
                                            </select>
                                        </div>  
                                        <div class="col-md-4">
                                            <label class="control-label">Upload Photo</label>
                                            <input type="text" placeholder="" class="form-control">   
                                        </div>                                            
                                        <div class="col-md-4">
                                            <label class="control-label">Number Of Zone</label>
                                            <input type="text" placeholder="" class="form-control">   
                                        </div> 
                                    </div>
                                </div>
                                </div> 
                            </div>
                            <div class="tab-pane" id="tab_5_3">
                                <p> Howdy, I'm in Section 3. </p>
                                <p> Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis
                                    autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat </p>
                                <p>
                                    <a class="btn yellow" href="ui_tabs_accordions_navs.html#tab_5_3" target="_blank"> Activate this tab via URL </a>
                                </p>
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