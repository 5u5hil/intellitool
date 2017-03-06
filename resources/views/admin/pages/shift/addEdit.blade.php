@extends(config('constants.adminLayouts').'.default')
@section('content')
<div class="page-content">
    <!-- BEGIN BREADCRUMBS -->
    <div class="breadcrumbs">
        <h1>Add New Designation Level</h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">Home</a>
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
                    {{ Form::model($shift, ['route' => 'admin.shift.save/update', 'class'=>'repeater form-horizontal','id'=>'shiftForm','method'=>'post']) }}
                    {{ Form::hidden("id",null) }}

                    <div class="form-body">
                        <div class="form-group">
                            <div class="col-md-6">
                                <label>Name</label>
                                {{Form::text('name',  null, ['class'=>'form-control']) }}
                                <div class="error">{{ $errors->first('name') }}</div>
                            </div>	

                            <div class="col-md-6">
                                <div class="form-group form-md-radios">
                                    <label class="col-md-3 control-label" for="form_control_1">Active</label>
                                    <div class="col-md-9">
                                        <div class="md-radio-list">
                                            <div class="md-radio">
                                                <input type="radio" id="activeYes" name="active" value="1" checked="{{ ($shift->active==1)?'checked':''  }}" class="md-radiobtn">
                                                <label for="activeYes">
                                                    <span class="inc"></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Yes</label>
                                            </div>
                                            <div class="md-radio">
                                                <input type="radio" id="activeNo" checked="{{ ($shift->active==0)?'checked':''  }}"  name="active" value="0" class="md-radiobtn">
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
                            <div class="col-md-6">

                                <label class="control-label">Start Time</label>

                                <div class="input-icon">
                                    <i class="fa fa-clock-o"></i>
                                    <input type="text" class="form-control timepicker timepicker-default" value="{{ $shift->starttime or null}}" name='starttime'>
                                </div>

                                <div class="error">{{ $errors->first('starttime') }}</div>

                            </div>	

                            <div class="col-md-6">

                                <label class="control-label">End Time</label>

                                <div class="input-icon">
                                    <i class="fa fa-clock-o"></i>
                                    <input type="text" value="{{ $shift->endtime or null}}" class="form-control timepicker timepicker-default" name='endtime' > </div>

                                <div class="error">{{ $errors->first('endtime') }}</div>

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