@extends(config('constants.adminLayouts').'.default')

@section('content')

<div class="page-content">
    <!-- BEGIN BREADCRUMBS -->
    <div class="breadcrumbs">
        <h1>Add New Designation</h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">Home</a>
            </li>
            <li class="active">Designation</li>
        </ol>
    </div>
    <?php
    $vertids = $design->verticles()->get(['verticle_id']);
    $arrV = [];
    $vetArr = [];
    foreach ($vertids as $vid) {
        array_push($arrV, $vid->verticle_id);
    }
    ?>



    <div class="row">
        <div class="col-md-12">
            {{ Form::model($design, ['route' => 'admin.designation.save/update', 'class'=>'repeater form-horizontal','method'=>'post','id'=>'DesignationForm']) }}
            {{ Form::hidden("id",null) }}


            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-info"></i>General Information </div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"> </a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <div class="form-body">
                        <div class="form-group">
                            <div class="col-md-3">
                                {{ Form::label('Designation', 'Designation') }}
                                {{Form::text('name',  null, ['class'=>'form-control','placeholder'=>'Designation']) }}

                                <div class="error">{{ @$errors->first('name') }}</div>
                            </div>	
                            <div class="col-md-3">
                                {{ Form::label('Reporting Designation', 'Reporting Designation') }}
                                {{Form::select('parent_id',@$getRepoting , @$design->parent_id or null , ['class'=>'form-control']) }}
                            </div>	
                            <div class="col-md-3">
                                {{ Form::label('Designation Level', 'Designation Level') }}
                                {{Form::select('designation_level_id',@$desLevel ,  @$design->designation_level_id or null , ['class'=>'form-control']) }}
                                <div class="error">{{ @$errors->first('designation_level_id') }}</div>

                            </div>


                            <!--                               <label class="control-label">Parent Zone</label>
                                                                             <select id="example-allSelectedText-includeSelectAllOption" multiple="multiple">
                                                                                <option value="Accord">Accord</option>
                                                                                <option value="Duster">-- Duster</option>
                                                                                <option value="Esteem">--- Esteem</option>
                                                                                <option value="Fiero">---- Fiero</option>
                                                                                <option value="Lancer">--- Lancer</option>
                                                                                <option value="Phantom">-- Phantom</option>
                                                                            </select>-->
                            <div class="col-md-3"> 
                                {{ Form::label('Verticle', 'Verticle',['class'=>'control-label']) }}
                                {{Form::select('verticle_ids[]',@$verticlesSel ,$arrV, ['id'=>"selectAllOption",'multiple'=>'multiple']) }}
                                <div class="error">{{ @$errors->first('verticle_ids') }}</div>



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
                    <div class="form-body">
                        <div class="form-group">
                            <div class="col-md-6">
                                <label class="mt-checkbox">   GRANT SYSTEM ACCESS  
                                    <input type="checkbox" name="system_access" value="{{ $design->system_access or 0 }}" {{ ($design->system_access == 1)?'checked':''}} >
                                    <span></span>
                                </label>
                            </div>
                            <div class="col-md-6 permDiv">
                                <label class="mt-checkbox pull-right">   GRANT COMPLETE ACCESS
                                    <input type="checkbox" name="chkAll">
                                    <span></span>
                                </label>
                            </div>

                        </div>

                    </div>	   




                    <!-- BEGIN FORM-->
                    <div class="form-body permDiv">
                        @foreach($permissions  as $permk => $permv)
                        <div class="panel panel-default">
                            <div class="panel-heading" style="background: #f9f9f9;">
                                <h4 class="panel-title uppercase">
                                    {{$permk}}
                                    <div class="pull-right">
                                        <label class="mt-checkbox"> Select All  
                                            <input type="checkbox" name="chk_group[]" data-group='{{$permk}}'>
                                            <span></span>
                                        </label>
                                    </div>
                                </h4>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mt-checkbox-inline" style="padding:10px 20px;">
                                        @foreach($permv as $per)
                                        <label class="mt-checkbox"> 
                                            {{strtoupper($per['perms']) }}

                                            <input type="checkbox" name="chk[]" data-per='{{$permk}}' value="{{@$per['id']}}" id="perm{{ $per['id'] }}"  <?php echo in_array($per['id'], array_flatten($design->perms()->get(['id'])->toArray())) ? "checked" : "" ?>>
                                            <span></span>
                                        </label> 
                                        @endforeach
                                    </div>
                                </div> 
                            </div>
                        </div>
                        @endforeach
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


    if ($("[name='system_access'").val() !== "0")
        $(".permDiv").show();
    else
        $(".permDiv").hide();



    $("[name='chkAll']").on("click", function () {

        var checkbox = $(this);
        var isChecked = checkbox.is(':checked');
        if (isChecked) {
            $("[name='chk[]']").attr('Checked', 'Checked');
            $("[name='chk_group[]']").attr('Checked', 'Checked');
        } else {
            $("[name='chk[]']").removeAttr('Checked');
            $("[name='chk_group[]']").removeAttr('Checked');
        }
    });

    $("[name='system_access'").click(function () {
        var checkbox = $(this);
        var isChecked = checkbox.is(':checked');

        if (isChecked) {
            $(".permDiv").show();
            $("[name='system_access'").val(1);
        } else {
            $(".permDiv").hide();
            $("[name='system_access'").val(0);
        }


    });

    $("[name='chk_group[]'").click(function () {
        var getattr = $(this).data('group');
        var checkbox = $(this);
        var isChecked = checkbox.is(':checked');

        if (isChecked) {
            $("[data-per='" + getattr + "']").attr('Checked', 'Checked');
        } else {
            $("[data-per='" + getattr + "']").removeAttr('Checked');
        }

    });

    $("#DesignationForm").validate({
        rules: {
            name: {
                required: true
            },
            designation_level_id: {
                required: true
            }, 'verticle_ids[]': {
                required: true
            }

        },
        messages: {
            name: {
                required: "Designation is required"
            },
            designation_level_id: {
                required: "Designation Level is required"
            },
            'verticle_ids[]': {
                required: "Verticle is required",
            }

        },
        errorPlacement: function (error, element) {
            var name = $(element).attr("name");
            var errorDiv = $(element).parent();
            errorDiv.append(error);
        }

    });

</script>
@endsection
