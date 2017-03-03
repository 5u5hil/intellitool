@extends(config('constants.adminLayouts').'.default')
@section('content')
<div class="page-content">
    <!-- BEGIN BREADCRUMBS -->
    <div class="breadcrumbs">
        <h1>Add New Proposal</h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">Home</a>
            </li>
            <li class="active">Proposal</li>
        </ol>
    </div>


    <div class="row">
        <div class="col-md-12">
            <form action="#" class="repeater form-horizontal">
                <div class="portlet box green">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-tag"></i>Proposal Info </div>
                        <div class="tools">
                            <a href="javascript:;" class="collapse"> </a>
                        </div>
                    </div>
                    <div class="portlet-body form">
                        <!-- BEGIN FORM-->
                        <div class="form-body">
                            <div class="form-group">
                                <div class="col-md-4">
                                    <label>Project Name</label>
                                    <input type="text" class="form-control" placeholder="Project Name">
                                </div>	
                                <div class="col-md-4">
                                    <label>Client</label>
                                    <select class="form-control" name="options2">
                                        <option value="">Select...</option>
                                        <option value="Option 1">Neelkanth Business Group</option>
                                        <option value="Option 2">Mernic Mall</option>
                                    </select>
                                </div>	
                                <div class="col-md-4">
                                    <label>Client Coordinator</label>
                                    <select class="selectAllOption2" multiple="multiple">
                                        <option value="Accord">Jigar Shah</option>
                                        <option value="Duster1">Karan Droh</option>
                                        <option value="Duster2">James Anderson</option>
                                        <option value="Duster3">Jiten Parab</option>
                                    </select> 
                                </div>	
                            </div>
                            <div class="form-group">

                                <div class="col-md-4">
                                    <label>Proposal Stage</label>
                                    <select class="form-control" name="options2">
                                        <option value="">Select...</option>
                                        <option value="Option 1">Survey</option>
                                        <option value="Option 2">SLA</option>
                                        <option value="Option 3">Quotation</option>
                                    </select>	
                                </div>	
                                <div class="col-md-4">
                                    <label>Verticals Opted For</label>
                                    <select class='selectAllOption3' multiple="multiple">
                                        <option value="Option 1">Security</option>
                                        <option value="Option 2">Housekeeping</option>
                                    </select>	
                                </div>
                                  <div class="col-md-4">
                                    <label>Location</label>
                                    <input type="text" class="form-control" placeholder="Location">
                                </div>	
                            </div>

                        </div>	
                        <!-- END FORM-->
                    </div>
                </div>	

                <div class="portlet box green">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-envelope"></i>Quotation</div>
                        <div class="tools">
                            <a href="javascript:;" class="collapse"> </a>
                        </div>
                    </div>
                    <div class="portlet-body form">
                        <!-- BEGIN FORM-->
                        <div class="form-body">
                            <div class="mt-repeater">
                                <div data-repeater-list="group-c">
                                    <div data-repeater-item class="mt-repeater-item">
                                        <div class="row mt-repeater-row">
                                            <div class="col-md-12">
                                                <div class="input-group control-group after-add-more col-md-12">
                                                <div class="form-group">
                                                    <div class="col-md-4">
                                                        <label>Quotation Item</label>
                                                        <select class="form-control" name="options2">
                                                            <option value="">Select...</option>
                                                            <option value="Option 1">Janitors</option>
                                                            <option value="Option 2">Machineries</option>
                                                            <option value="Option 2">Supervisors</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label>Quotation Note</label>
                                                        <input type="text" class="form-control" placeholder="Quotation Note">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label>Amount</label>
                                                        <input type="text" class="form-control" placeholder="Amount">
                                                    </div>
                                                    <div class="col-md-1">
                                                    <label></label>
                                                        <button class="btn btn-danger pull-right remove" style="margin-top: 20px;">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                </div>
                                               <div class="copy hide">
                                                <div class="form-group">
                                                    <div class="col-md-4">
                                                        <label>Quotation Item</label>
                                                        <select class="form-control" name="options2">
                                                            <option value="">Select...</option>
                                                            <option value="Option 1">Janitors</option>
                                                            <option value="Option 2">Machineries</option>
                                                            <option value="Option 2">Supervisors</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label>Quotation Note</label>
                                                        <input type="text" class="form-control" placeholder="Quotation Note">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label>Amount</label>
                                                        <input type="text" class="form-control" placeholder="Amount">
                                                    </div>
                                                    <div class="col-md-1">
                                                    <label></label>
                                                        <button class="btn btn-danger pull-right remove" style="margin-top: 20px;">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>	
                                <div class="input-group-btn col-md-12" style="padding: 0px;"> 
                                    <button class="btn btn-success add-more" type="button"><i class="glyphicon glyphicon-plus"></i> Add</button>
                                </div>
                            </div>
                        </div>	
                        <!-- END FORM-->
                    </div>
                </div>	
  <div class="portlet box green">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-docs"></i>Supporting Documents </div>
                        <div class="tools">
                            <a href="javascript:;" class="collapse"> </a>
                        </div>
                    </div>
                    <div class="portlet-body form">
                        <!-- BEGIN FORM-->
                        <div class="form-body">
                            <div class="mt-repeater">
                                <div data-repeater-list="inner-group">
                                    <div data-repeater-item class="inner">
                                        <div class="row mt-repeater-row">
                                        <div class="col-md-12">
                                            <div class="input-group control-group1 after-add-more1 col-md-12">
                                                <div class="form-group">
                                                    <div class="col-md-6">
                                                        <label>File Upload</label>
                                                        <div class="fileinput fileinput-new" data-provides="fileinput" style="width: 100%;">
                                                            <div class="input-group">
                                                                <div class="form-control input-fixed" data-trigger="fileinput">
                                                                    <i class="fa fa-file fileinput-exists"></i>&nbsp;
                                                                    <span class="fileinput-filename"> </span>
                                                                </div>
                                                                <span class="input-group-addon btn default btn-file">
                                                                    <span class="fileinput-new"> Select file </span>
                                                                    <span class="fileinput-exists"> Change </span>
                                                                    <input type="file" name="..."> </span>
                                                                <a href="javascript:;" class="input-group-addon btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <label>Document Title</label>
                                                        <input type="text" class="form-control" placeholder="Document Title">
                                                    </div>
                                                    <div class="col-md-1">
                                                        <button class="btn btn-danger pull-right remove1" style="margin-top: 20px;">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                           <div class="copy1 hide">
                                                <div class="form-group">
                                                    <div class="col-md-6">
                                                        <label>File Upload</label>
                                                        <div class="fileinput fileinput-new" data-provides="fileinput" style="width: 100%;">
                                                            <div class="input-group">
                                                                <div class="form-control input-fixed" data-trigger="fileinput">
                                                                    <i class="fa fa-file fileinput-exists"></i>&nbsp;
                                                                    <span class="fileinput-filename"> </span>
                                                                </div>
                                                                <span class="input-group-addon btn default btn-file">
                                                                    <span class="fileinput-new"> Select file </span>
                                                                    <span class="fileinput-exists"> Change </span>
                                                                    <input type="file" name="..."> </span>
                                                                <a href="javascript:;" class="input-group-addon btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <label>Document Title</label>
                                                        <input type="text" class="form-control" placeholder="Document Title">
                                                    </div>
                                                    <div class="col-md-1">
                                                        <button class="btn btn-danger pull-right remove1" style="margin-top: 20px;">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       </div> 
                                    </div>
                                </div>	
                                <div class="input-group-btn col-md-12" style="padding: 0px;"> 
                                    <button class="btn btn-success add-more1" type="button"><i class="glyphicon glyphicon-plus"></i> Add</button>
                                </div>
                            </div>
                        </div>	
                        <!-- END FORM-->
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
            </form>	
        </div>
    </div>
</div>
@endsection

