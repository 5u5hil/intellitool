@extends(config('constants.adminLayouts').'.default')
@section('content')
<div class="page-content">
    <!-- BEGIN BREADCRUMBS -->
    <div class="breadcrumbs">
        <h1>Add New Asset</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{route('admin.dashboard')}}">Home</a>
            </li>
            <li class="active">Asset</li>
        </ol>
    </div>


    <div class="row">
        <div class="col-md-12">

            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-clock-o"></i>Asset</div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"> </a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <!--                    Form::model($shift, ['route' => 'admin.shift.save/update', 'class'=>'repeater form-horizontal','id'=>'shiftForm','method'=>'post']) -->
                    {{ Form::model($getAsset,['route'=>['admin.asset.save/update',$getAsset['id']],'class'=>'repeater form-horizontal']) }}
                    {{ Form::hidden("id",null) }}

                    <div class="form-body">
                        <div class="form-group">
                            <div class="col-md-4">
                                <label>Machine Name</label>
                                {{Form::text('machine_name',  null, ['class'=>'form-control',"placeholder"=>"Machine Name"]) }}
                            </div>	

                            <div class="col-md-4">
                                <label>Asset Category</label>
                                {{Form::select('asset_category',$assetCategory , $getAsset['asset_category'], ['class'=>'form-control']) }}
                            </div>

                            <div class="col-md-4">
                                <label>Vertical</label>
                                {{Form::select('vertical',$vertical ,  $getAsset['vertical'], ['class'=>'form-control']) }}
                            </div>


                        </div>
                        <div class="form-group">
                            <div class="col-md-4">
                                <label>Model</label>
                                {{Form::text('model',  null, ['class'=>'form-control',"placeholder"=>"Model"]) }}
                            </div>	

                            <div class="col-md-4">
                                <label>Serial Number</label>
                                {{Form::text('serial_number',  null, ['class'=>'form-control',"placeholder"=>"Serial Number"]) }}
                            </div>	


                            <div class="col-md-4">
                                <label>Description</label>
                                {{Form::text('description',  null, ['class'=>'form-control',"placeholder"=>"Description"]) }}
                            </div>	
                        </div>

                        <div class="form-group">

                            <div class="col-md-4">
                                <label>Make</label>
                                {{$getAsset->make}}
                                {{Form::select('make',$make, $getAsset->make, ['class'=>'form-control']) }}
                            </div>
                            <div class="col-md-4">
                                <label>Installation Date</label>
                                <div class='input-group date'>
                                    {{Form::text('installation_date',  null, ['class'=>'form-control datepicker',"placeholder"=>"Installation Date"]) }}
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>                            </div>	


                            <div class="col-md-4">
                                <label>Warranty Upto</label>
                                <div class='input-group date'>
                                    {{Form::text('warranty_upto',  null, ['class'=>'form-control datepicker',"placeholder"=>"Warranty Upto"]) }}
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>	
                        </div>

                        <div class="form-group">


                            <div class="col-md-4">
                                <label> AMC Start Date</label>
                                <div class='input-group date'>
                                    {{Form::text('amc_start_date',  null, ['class'=>'form-control datepicker',"placeholder"=>"AMC Start Date"]) }}
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>	

                            <div class="col-md-4">
                                <label> AMC End Date</label>
                                <div class='input-group date'>
                                    {{Form::text('amc_end_date',  null, ['class'=>'form-control datepicker',"placeholder"=>"AMC End Date"]) }}
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>	

                            <div class="col-md-4">
                                <label> AMC Vendor</label>
                                <div class='input-group date'>
                                    {{Form::text('amc_vendor',  null, ['class'=>'form-control datepicker',"placeholder"=>"AMC Vendor"]) }}
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>                            </div>	
                        </div>
                        <div class="form-group">
                            <div class="col-md-4">
                                <label>Installation Location</label>
                                {{Form::text('installation_location',  null, ['class'=>'form-control',"placeholder"=>"Installation Location"]) }}
                            </div>	




                        </div>

                        <div class="form-group">
                            <div class="col-md-4">
                                <button type="submit" class="btn green">Submit</button>
                                <a href="{{route('admin.shift.list')}}" class="btn default">Cancel</a>
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

    $("#shiftForm").validate({
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