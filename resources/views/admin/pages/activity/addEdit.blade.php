@extends(config('constants.adminLayouts').'.default')
@section('content')
<div class="page-content">
    <!-- BEGIN BREADCRUMBS -->
    <div class="breadcrumbs">
        <h1>Add New Activity</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{route('admin.dashboard')}}">Home</a>
            </li>
            <li class="active">Activity</li>
        </ol>
    </div>


    <div class="row">
        <div class="col-md-12">

            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-clock-o"></i>Activity</div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"> </a>
                    </div>
                </div>
     <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    {{ Form::open(['class'=>'repeater form-horizontal']) }}
                    {{ Form::hidden("id",null) }}

                    <div class="form-body">
                        <div class="form-group">
                            <div class="col-md-4">
                                <label>Name</label>
                                {{Form::text('name',  null, ['class'=>'form-control',"placeholder"=>"Name"]) }}
                              
                            </div>	

                  
                            
                               <div class="col-md-4">
                                <label>Vertical</label>
                                {{Form::select('verticals',[""=>"Please Select","1"=>"House Keeping","2"=>"Food","3"=>"Security"] , null, ['class'=>'form-control','id'=>"selectAllOption",'multiple'=>'multiple']) }}
                            </div>
                            
                            <div class="col-md-4">
                                <div class="form-group form-md-radios top15">
                                    <label class="col-md-2 control-label" for="form_control_1">Active</label>
                                    <div class="col-md-9">
                                        <div class="md-radio-inline">
                                            <div class="md-radio">
                                                <input type="radio" id="activeYes" name="active" value="1"   class="md-radiobtn">
                                                <label for="activeYes">
                                                    <span class="inc"></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Yes</label>
                                            </div>
                                            <div class="md-radio">
                                                <input type="radio" id="activeNo"  name="active" value="0" class="md-radiobtn">
                                                <label for="activeNo">
                                                    <span class="inc"></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> No </label>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
    

                        <div class="form-group">
                            <div class="col-md-4">
                                <button type="submit" class="btn green">Submit</button>
                                <a href="{{route('admin.activity.list')}}" class="btn default">Cancel</a>
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

    $("#asset.activityForm").validate({
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