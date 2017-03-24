@extends(config('constants.adminLayouts').'.default')
@section('content')
<div class="page-content">
    <!-- BEGIN BREADCRUMBS -->
    <div class="breadcrumbs">
        <h1>Add New Designation Level</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route("admin.dashboard") }}">Home</a>
            </li>
            <li class="active">Designation Level </li>
        </ol>
    </div>
    <div class="row">
        <div class="col-md-12">
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
                    {{ Form::model($designationLevel, ['route' => 'admin.designation.level.save/update', 'class'=>'repeater form-horizontal','id'=>'designationLevelForm','method'=>'post']) }}
                    {{ Form::hidden("id",null) }}
                    {{csrf_field()}}
                    <div class="form-body">
                        <div class="form-group">
                            <div class="col-md-3">
                                <label>Designation Level <span class="required" aria-required="true"> * </span></label>
                                {{Form::text('designation',  null, ['class'=>'form-control',"placeholder"=>"Designation Level"]) }}
                            </div>
                            <div class="error">{{ @$errors->first('designation') }}</div>
                            <div class="col-md-3">
                                <label>Sort Order</label>
                                {{Form::text('sort_order',  null, ['class'=>'form-control',"placeholder"=>"Order"]) }}
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-md-radios">
                                    <label class="col-md-2 control-label" for="form_control_1">Status</label>
                                    <div class="col-md-9">
                                        <div class="md-radio-inline">
                                            <div class="md-radio">
                                                <input type="radio" test="{{$designationLevel->status }}" id="activeYes" name="status" value="1"  <?= ($designationLevel->status == 1) ? 'checked' : ''; ?>  class="md-radiobtn">
                                                <label for="activeYes">
                                                    <span class="inc"></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Active</label>
                                            </div>
                                            <div class="md-radio">
                                                <input type="radio" test="{{$designationLevel->status }}" id="activeNo" <?= ($designationLevel->status == 0) ? 'checked' : ''; ?>  value="0" name="status" class="md-radiobtn">
                                                <label for="activeNo">
                                                    <span class="inc"></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Suspended </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6">
                                <button type="submit" class="btn green">Submit</button>
                                <a href="<?= route('admin.designation.level.list') ?>" class="btn default">Cancel</a>
                            </div>
                        </div>

                 

                    </div>	
                    <!-- END FORM-->
                    {{ Form::close() }}
                </div>
            </div>	
        </div>
    </div>
</div>

<!--       <div class="portlet-body">
                             BEGIN FORM
                            <form action="#" id="form_sample_2" class="form-horizontal">
                                <div class="form-body">
                                    <div class="alert alert-danger display-hide">
                                        <button class="close" data-close="alert"></button> You have some form errors. Please check below. </div>
                                    <div class="alert alert-success display-hide">
                                        <button class="close" data-close="alert"></button> Your form validation is successful! </div>
                                    <div class="form-group  margin-top-20">
                                        <label class="control-label col-md-3">Name
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-4">
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <input type="text" class="form-control" name="name" /> </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Email
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-4">
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <input type="text" class="form-control" name="email" /> </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">URL
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-4">
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <input type="text" class="form-control" name="url" /> </div>
                                            <span class="help-block"> e.g: http://www.demo.com or http://demo.com </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Number
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-4">
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <input type="text" class="form-control" name="number" /> </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Digits
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-4">
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <input type="text" class="form-control" name="digits" /> </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Credit Card
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-4">
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <input type="text" class="form-control" name="creditcard" /> </div>
                                            <span class="help-block"> e.g: 5500 0000 0000 0004 </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-9">
                                            <button type="submit" class="btn green">Submit</button>
                                            <button type="button" class="btn default">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                             END FORM
                        </div>-->
@endsection
@section('myscripts')
<script>

    $("#designationLevelForm").validate({
        rules: {
            designation: {
                required: true
            }
        },
        messages: {
            designation: {
                required: "Designation is required"
            }
        },
        errorPlacement: function (error, element) {
            var name = $(element).attr("name");
            var errorDiv = $(element).parent();
            errorDiv.append(error);
            // error.appendTo($("#" + name + "_validate"));
        }
    });


</script>
@endsection