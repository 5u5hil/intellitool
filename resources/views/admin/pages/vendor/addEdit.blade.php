@extends(config('constants.adminLayouts').'.default')
@section('content')
<div class="page-content">
    <!-- BEGIN BREADCRUMBS -->
    <div class="breadcrumbs">
        <h1>Add New Vendor</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{route('admin.dashboard')}}">Home</a>
            </li>
            <li class="active">Vendor</li>
        </ol>
    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-user"></i>Vendor </div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"> </a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    {{ Form::model($vendor, ['route' => 'admin.vendor.save/update', 'class'=>'repeater form-horizontal','id'=>'shiftForm','method'=>'post']) }}
                    {{ Form::hidden("id",null) }}

                    <div class="form-body">
                        <div class="form-group">
                            <div class="col-md-4">
                                <label>First Name</label>
                                {{Form::text('firstname',  null, ['class'=>'form-control',"placeholder"=>'First Name']) }}
                                <div class="error">{{ @$errors->first('firstname') }}</div>

                            </div>	

                            <div class="col-md-4">
                                <label>Last Name</label>
                                {{Form::text('lastname',  null, ['class'=>'form-control',"placeholder"=>'Last Name']) }}
                                <div class="error">{{ @$errors->first('lastname') }}</div>

                            </div>	
                            <div class="col-md-4">
                                <label>Email</label>
                                {{Form::text('email',  null, ['class'=>'form-control',"placeholder"=>'Email']) }}
                                <div class="error">{{ @$errors->first('email') }}</div>

                            </div>	
                        </div>
                        <div class="form-group">
                            <div class="col-md-4">
                                <label>Phone</label>
                                {{Form::text('phone',  null, ['class'=>'form-control',"placeholder"=>'Phone']) }}
                                <div class="error">{{ @$errors->first('phone') }}</div>

                            </div>	
                            <div class="col-md-4">
                                <label>Address</label>
                                {{Form::text('address',  null, ['class'=>'form-control',"placeholder"=>'Address']) }}
                                <div class="error">{{ @$errors->first('address') }}</div>
                            </div>	
                            <div class="col-md-4"> 
                                {{ Form::label('Vertical', 'Vertical',['class'=>'control-label']) }}
                                {{Form::select('vertical_ids[]',$verticalSel,@$vendor->vendorverticals()->pluck('vertical_id')->toArray(), ['id'=>"selectAllOption",'multiple'=>'multiple']) }}

                            </div>	
                        </div>
                        <div class="form-group">
                            <div class="col-md-4">
                                <div class="form-group form-md-radios">
                                    <label class="col-md-2 control-label" for="form_control_1">Status</label>
                                    <div class="col-md-9">
                                        <div class="md-radio-inline">
                                            <div class="md-radio">
                                                <input type="radio" id="activeYes" name="status" value="1" <?= ($vendor->status = 1) ? 'checked' : ''; ?>  class="md-radiobtn">
                                                <label for="activeYes">
                                                    <span class="inc"></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Active</label>
                                            </div>
                                            <div class="md-radio">
                                                <input type="radio" id="activeNo" <?= ($vendor->status = 0) ? 'checked' : ''; ?>  value="0" name="status" class="md-radiobtn">
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
                                <a href="{{route('admin.vendor.list')}}" class="btn default">Cancel</a>
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

    $("#vendorForm").validate({
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