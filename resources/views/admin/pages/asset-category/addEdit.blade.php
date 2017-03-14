@extends(config('constants.adminLayouts').'.default')
@section('content')
<div class="page-content">
    <!-- BEGIN BREADCRUMBS -->
    <div class="breadcrumbs">
        <h1>Add New Asset Category</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{route('admin.dashboard')}}">Home</a>
            </li>
            <li class="active">Asset Category</li>
        </ol>
    </div>


    <div class="row">
        <div class="col-md-12">

            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-clock-o"></i>Assets Category</div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"> </a>
                    </div>
                </div>
     <div class="portlet-body form"><?php $action=route('admin.vendor.save/update',null);

     ?>
                    <!-- BEGIN FORM-->
                    {{ Form::model($assetCategory,['route'=>['admin.asset.category.save/update',$assetCategory['id']],'method'=>'POST','class'=>'repeater form-horizontal']) }}
                    {{ Form::hidden("id",null) }}

                    <div class="form-body">
                        <div class="form-group">
                            <div class="col-md-6">
                                <label>Name</label>
                                {{Form::text('name',  null, ['class'=>'form-control',"placeholder"=>"Name"]) }}
                                <div class="error">{{ $errors->first('name') }}</div>
                            </div>	

                            <div class="col-md-6">
                                <div class="form-group form-md-radios top15">
                                    <label class="col-md-1 control-label" for="form_control_1">Status</label>
                                    <div class="col-md-9">
                                        <div class="md-radio-inline">
                                            <div class="md-radio">
                                                <input type="radio" id="activeYes" name="status" value="1" {{$assetCategory['status']==1?'checked':''}}  class="md-radiobtn">
                                                <label for="activeYes">
                                                    <span class="inc"></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Active</label>
                                            </div>
                                            <div class="md-radio">
                                                <input type="radio" id="activeNo" {{$assetCategory['status']==0?'checked':''}}  name="status" value="0" class="md-radiobtn">
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
                            <div class="col-md-4">
                                <button type="submit" class="btn green">Submit</button>
                                <a href="{{route('admin.asset.category.list')}}" class="btn default">Cancel</a>
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
@endsection

@section('myscripts')
<script>

    $("#asset.categoryForm").validate({
        rules: {
            name: {
                required: true
            },
            starttime: {
                required: true
            },
            endtime: {
                required: true

            }


        },
        messages: {
            name: {
                required: "Name is required"
            },
            starttime: {
                required: "Start Time is required"
            },
            endtime: {
                required: "End Time is required"
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