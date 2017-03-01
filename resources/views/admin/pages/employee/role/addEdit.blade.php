@extends(config('constants.adminLayouts').'.default')

@section('content')

<div class="page-content">
    <!-- BEGIN BREADCRUMBS -->
    <div class="breadcrumbs">
        <h1>Add New Role</h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">Home</a>
            </li>
            <li class="active">Role</li>
        </ol>
    </div>


    <div class="row">
        <div class="col-md-12">
            {{ Form::model($role, ['route' => 'admin.employee.role.save.update', 'class'=>'repeater form-horizontal','method'=>'post']) }}



            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-user"></i>General Info </div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"> </a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <div class="form-body">
                        <div class="form-group">
                            <div class="col-md-4">

                                {{ Form::label('Role', 'Role') }}
                                {{Form::text('name',  null, ['class'=>'form-control','required'=>'true','placeholder'=>'Role']) }}

                            </div>	
                            <div class="col-md-4">
                                
                                 {{ Form::label('Display Name', 'Display Name') }}
                                 {{Form::text('display_name',  null, ['class'=>'form-control','required'=>'true','placeholder'=>'Display Name']) }}

                            </div>	
                            <div class="col-md-4">
                                {{ Form::label('Description', 'Description') }}
                                {{Form::text('description',  null, ['class'=>'form-control','required'=>'true','placeholder'=>'Description']) }}

                            </div>	
                        </div>

                    </div>	
                    <!-- END FORM-->
                </div>
            </div>	

            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-user"></i>Permissions</div>
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
                                                  <div class="col-md-6">
                                        <div class="portlet light bordered">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    <i class="icon-bubble font-green-sharp"></i>
                                                    <span class="caption-subject font-green-sharp bold uppercase">Checkable Tree</span>
                                                </div>
                                                
                                               {{ print_r($permissions) }}
                                         
                                            </div>
                                            <div class="portlet-body">
                                                <div id="tree_2" class="tree-demo"> </div>
                                            </div>
                                        </div>
                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
            {{ Form::close() }}	
        </div>
    </div>
</div>
@endsection
