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
             {{ Form::model($designationLevel, ['route' => ['admin.designation.level.save/update',$designationLevel['id']], 'class'=>'repeater form-horizontal','id'=>'designationLevelForm','method'=>'post']) }}
                {{csrf_field()}}
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
                                    <label>Designation Level</label>
                                    {{Form::text('designation',  null, ['class'=>'form-control']) }}
                                </div>	

                            </div>
                            <div class="form-group">
                                <div class="col-md-4">
                                <button type="submit" class="btn green">Submit</button>
                                <button type="button" class="btn default">Cancel</button>
                                </div>
                            </div>
                        </div>	
                        <!-- END FORM-->

                    </div>


                </div>	




            {{ Form::close() }}
        </div>
    </div>
</div>
@endsection