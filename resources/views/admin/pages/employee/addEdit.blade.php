@extends(config('constants.adminLayouts').'.default')

@section('content')

<div class="page-content">
    <!-- BEGIN BREADCRUMBS -->
    <div class="breadcrumbs">
        <h1>Add New Employee</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">Home</a>
            </li>
            <li class="active">Employee</li>
        </ol>
    </div> 


    <div class="row">
        <div class="col-md-12">
            {!! Form::model($employee, ['method' => 'post', 'route' => 'admin.employee.save/update' , 'class' => 'repeater form-horizontal',"id"=>"EmpForm" ]) !!}
            {!! Form::hidden('id',null) !!}

            <?php
            $vertids = $employee->reportto()->get(['report_to']);
            $arrV = [];

            foreach ($vertids as $vid) {
                array_push($arrV, $vid->report_to);
            }
            ?>

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
                                {!! Form::text('emp_code',null, ["class"=>'form-control' ,"placeholder"=>'Employee Code']) !!}
                            </div>
                            <div class="col-md-4">
                                {!!Form::label('First Name','First Name') !!}
                                {!! Form::text('firstname',null, ["class"=>'form-control' ,"placeholder"=>'First Name']) !!}

                                <div class="error">{{ $errors->first('firstname') }}</div>

                            </div>	
                            <div class="col-md-4">
                                {!!Form::label('Last Name','Last Name') !!}
                                {!! Form::text('lastname',null, ["class"=>'form-control' ,"placeholder"=>'Last Name']) !!}
                            </div>	
                        </div>
                        <div class="form-group">
                            <div class="col-md-4">
                                {!!Form::label('Designation','Designation') !!}
                                {!! Form::select('roles',$roles,!empty($employee->roles()->first()->id)?$employee->roles()->first()->id:null,["class"=>'form-control m-b' ]) !!}
                                <div class="error">{{ $errors->first('roles') }}</div>
                            </div>
                            <div class="col-md-4">
                                {!!Form::label('Reports To','Reports to') !!}
                                {!! Form::select('reports_to[]',$reportTo,($arrV)?$arrV:null, ["class"=>'form-control','id'=>"selectAllOption","multiple"=>"multiple"]) !!}
                            </div>	
                            <div class="col-md-4">
                                {!!Form::label('Email','Email') !!}
                                {!! Form::email('email',null, ["class"=>'form-control' ,"placeholder"=>'Email']) !!}
                                <div class="error">{{ $errors->first('email') }}</div>
                            </div>	
                        </div>
                        <div class="form-group">
                            <div class="col-md-4">
                                {!!Form::label('Password','Password') !!}
                                {!! Form::password('password', ["class"=>'form-control' ,"placeholder"=>'Password',"id"=>"password"]) !!}
                            </div>
                            <div class="col-md-4">
                                {!!Form::label('Confirm Password','Confirm Password') !!}
                                {!! Form::password('confirm_password', ["class"=>'form-control' ,"placeholder"=>'Confirm Password']) !!}
                            </div>
                            <div class="col-md-4">
                                {!!Form::label('Phone','Phone') !!}
                                {!! Form::text('phone',null, ["class"=>'form-control' ,"placeholder"=>'Phone']) !!}
                                <div class="error">{{ $errors->first('phone') }}</div>
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

@section('myscripts')
<script>

    //  alert("sdf");
    jQuery.validator.addMethod("phonevalidate", function (phone_number, element) {
        phone_number = phone_number.replace(/\s+/g, "");
        return this.optional(element) || phone_number.length > 9 &&
                phone_number.match(/^(1-?)?(\([2-9]\d{2}\)|[2-9]\d{2})-?[2-9]\d{2}-?\d{4}$/);
    }, "Please specify a valid phone number");
    $("#EmpForm").validate({
        rules: {
            firstname: {
                required: true
            },
            roles: {
                required: true
            },
            email: {
                email: true,
                required: true

            }, phone: {
                required: true,
                phonevalidate: true

            },
            password: {
                required: true,
                minlength: 5
            },
            confirm_password: {
                required: true,
                minlength: 5,
                equalTo: "#password"
            }


        },
        messages: {
            firstname: {
                required: "Firstname is required"
            },
            roles: {
                required: "Designation is required"
            },
            email: {
                email: "Valid Email Id is required",
                required: "Email is required",
            },
            phone: {
                required: "Phone is required",
            },
            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long"
            },
            confirm_password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long",
                equalTo: "Enter Confirm Password Same as Password"
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
