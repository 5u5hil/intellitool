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
                            <i class="fa fa-user"></i>Basic Info </div>
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
                                    <label>Contact Person</label>
                                    <input type="text" class="form-control" placeholder="Contact Person">
                                </div>	
                            </div>
                            <div class="form-group">
                                <div class="col-md-4">
                                    <label>Email Address</label>
                                    <input type="text" class="form-control" placeholder="Email Address"> 	

                                </div>	
                                                 <div class="col-md-4">
                                    <label>Phone No</label>
                                    <input type="text" class="form-control" placeholder="Phone No"> 	

                                </div>	
                                <div class="col-md-4">
                                    <label>Proposal Stage</label>
                                    <select class="form-control" name="options2">
                                        <option value="">Select...</option>
                                        <option value="Option 1">Survey</option>
                                        <option value="Option 2">SLA</option>
                                        <option value="Option 3">Quotation</option>
                                    </select>	
                                </div>	

                            </div>
                        </div>	
                        <!-- END FORM-->
                    </div>
                </div>	

                <div class="portlet box green">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-user"></i>Quotation</div>
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
                                                <div class="form-group">
                                                    <div class="col-md-4">
                                                        <label>Quotation Item</label>
                                                        <input type="text" class="form-control" placeholder="Quotation Item">
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
                                                        <a href="javascript:;" data-repeater-delete class="btn btn-danger pull-right mt-repeater-delete">
                                                            <i class="fa fa-trash"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>	
                                <a href="javascript:;" data-repeater-create class="btn btn-info mt-repeater-add">
                                    <i class="fa fa-plus"></i> Add New</a>
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

