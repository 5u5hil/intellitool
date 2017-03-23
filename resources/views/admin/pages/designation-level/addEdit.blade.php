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
                                <label>Designation Level</label>
                                {{Form::text('designation',  null, ['class'=>'form-control',"placeholder"=>"Designation Level"]) }}
                            </div>
                             <div class="error">{{ @$errors->first('designation') }}</div>
                             <div class="col-md-3">
                                <label>Order</label>
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
                        @foreach($errors->all() as $getMessage)
<!--                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="alert alert-danger">
                                    <p>{{$getMessage}}</p>
                                </div>
                            </div>
                        </div>-->
                        @endforeach
                    </div>	
                    <!-- END FORM-->
                    {{ Form::close() }}
                </div>
            </div>	
        </div>
    </div>
</div>
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