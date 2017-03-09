@extends(config('constants.adminLayouts').'.default')

@section('content')
<div class="page-content">
    <!-- BEGIN BREADCRUMBS -->
    <div class="breadcrumbs">
        <h1>Add New Schedule Plan</h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">Home</a>
            </li>
            <li class="active">Schedule Plan</li>
        </ol>
    </div>


    <div class="row">
        <div class="col-md-12">
            <form action="#" class="repeater form-horizontal">
                <div class="portlet box green">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-user"></i>General Information</div>
                        <div class="tools">
                            <a href="javascript:;" class="collapse"> </a>
                        </div>
                    </div>
                    <div class="portlet-body form">
                        <!-- BEGIN FORM-->
                        <div class="form-body">
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label class="control-label">Shift</label>
                                    <div class="input-group col-md-12"> 
                                        <select class='form-control' >
                                            <option value="shift-a">Shift A</option>
                                            <option value="shift-b">Shift B</option>
                                            <option value="shift-c">Shift C</option>
                                            <option value="shift-d">Shift D</option>
                                            <option value="shift-e">Shift E</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6"> 
                                    {{ Form::label('Verticle', 'Verticle',['class'=>'control-label']) }}
                                    {{Form::select('verticle_ids[]',[""=>"Please Select","1"=>"House Keeping","2"=>"Security","3"=>"Food"],null, ['id'=>"selectAllOption",'multiple'=>'multiple']) }}

                                </div>
                            </div>

                        </div>	
                        <!-- END FORM-->
                    </div>
                </div>	

                <div class="portlet box green">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-clock"></i>Schedule </div>
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
                                                            <label>Phone No.</label>
                                                            <input type="text" class="form-control" placeholder="Phone No.">
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
                                                            <label>Phone No.</label>
                                                            <input type="text" class="form-control" placeholder="Phone No.">
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