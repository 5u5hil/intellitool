@extends(config('constants.adminLayouts').'.default')

@section('content')

<div class="page-content">
    <!-- BEGIN BREADCRUMBS -->
    <div class="breadcrumbs">
        <h1>Add New Employee</h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">Home</a>
            </li>
            <li class="active">Employee</li>
        </ol>
    </div> 


    <div class="row">
        <div class="col-md-12">
            {!! Form::model($employee, ['method' => 'post', 'route' => 'admin.employee.save/update' , 'class' => 'repeater form-horizontal' ]) !!}
            {!! Form::hidden('id',null) !!}

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
                            <div class="col-md-4">
                                {!!Form::label('Employee Code','Employee Code') !!}
                                {!! Form::text('emp_code',null, ["class"=>'form-control' ,"placeholder"=>'Employee Code', "required"]) !!}
                            </div>
							  <div class="col-md-4">
                                {!!Form::label('First Name','First Name') !!}
                                {!! Form::text('first_name',null, ["class"=>'form-control' ,"placeholder"=>'First Name', "required"]) !!}
                            </div>	
							  <div class="col-md-4">
                                {!!Form::label('Last Name','Last Name') !!}
                                {!! Form::text('last_name',null, ["class"=>'form-control' ,"placeholder"=>'Last Name', "required"]) !!}
                            </div>	
                          
                          

                        </div>
                        <div class="form-group">
						  <div class="col-md-4">
                                {!!Form::label('Designation','Designation') !!}
                                {!! Form::select('roles',$roles,!empty($employee->roles()->first()->id)?$employee->roles()->first()->id:null,["class"=>'form-control m-b' , "required"]) !!}
                            </div>
						  <div class="col-md-4">
                                {!!Form::label('Reports To','Reports to') !!}
                                {!! Form::select('reports_to',[],null, ["class"=>'form-control', "required",'id'=>"selectAllOption"]) !!}
                            </div>	
                            <div class="col-md-4">
                                {!!Form::label('Email','Email') !!}
                                {!! Form::email('email',null, ["class"=>'form-control' ,"placeholder"=>'Email']) !!}
                            </div>	
                         

                        </div>
						
						       <div class="form-group">
						
                            <div class="col-md-4">
                                {!!Form::label('Password','Password') !!}
                                {!! Form::password('password', ["class"=>'form-control' ,"placeholder"=>'Password']) !!}
                            </div>
							 <div class="col-md-4">
                                {!!Form::label('Confirm Password','Confirm Password') !!}
                                {!! Form::password('confirm_password', ["class"=>'form-control' ,"placeholder"=>'Confirm Password']) !!}
                            </div>
                            <div class="col-md-4">
                                {!!Form::label('Phone','Phone') !!}
                                {!! Form::text('phone',null, ["class"=>'form-control' ,"placeholder"=>'Phone', "required"]) !!}
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
