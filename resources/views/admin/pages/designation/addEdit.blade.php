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
            <li class="active">Role</li>
        </ol>
    </div>
    

    <div class="row">
        <div class="col-md-12">
            {{ Form::model($design, ['route' => 'admin.designation.save/update', 'class'=>'repeater form-horizontal','method'=>'post']) }}
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
                            <div class="col-md-4">

                                {{ Form::label('Designation', 'Designation') }}
                                {{Form::text('designation',  null, ['class'=>'form-control','required'=>'true','placeholder'=>'Designation']) }}

                            </div>	
                            <div class="col-md-4">

                                {{ Form::label('Reporting Designation', 'Reporting Designation') }}
                                {{Form::select('parent_id',$getRepoting , null, ['class'=>'form-control','required'=>'true']) }}

                            </div>	
                              <div class="col-md-4">

                                {{ Form::label('Designation Level', 'Designation Level') }}
                                {{Form::select('level_id',$desLevel , null, ['class'=>'form-control','required'=>'true']) }}

                            </div>
                        </div>

                    </div>	
                    <!-- END FORM-->
                </div>
            </div>	

            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-user"></i>Role Permissions</div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"> </a>
                    </div>
                </div>
                <div class="portlet-body form">
                       
                  

                    <!-- BEGIN FORM-->
                    <div class="form-body">
                        
                      <input type="checkbox"  id="perm" name="chkAll" class="make-switch uppercase chkAll"  data-on="success" data-on-color="success" data-off-color="danger" data-size="small"> Grant Complete Access

                        <div class="mt-repeater">
                            <!--                            <div data-repeater-list="group-c">-->
                            <div data-repeater-item class="mt-repeater-item">
                                <div class="row mt-repeater-row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="mt-element-list">
                                          
                                                @foreach($permissions  as $permk => $permv)

                                                <!--                                                    <div class="mt-list-head list-simple ext-1 font-white bg-grey-gallery">-->
                                                <div class="list-head-title-container">
                                                    <!--                                                            <div class="list-date">Nov 8, 2015</div>
                                                    -->                                                            <h6 class="list-title uppercase">{{ $permk }}</h6>
                                                </div>
                                                <!--                                                    </div>-->
                                                <div class="mt-list-container list-simple ext-1">
                                                    @foreach($permv as $per)
                                                    <ul>
                                                        <li class="mt-list-item done">
                                                            <div class="list-icon-container">
                                                                <i class="icon-check"></i>
                                                            </div>
                                                            <div class="list-datetime">
                                                                <input type="checkbox" id="perm{{ $per['id'] }}"  <?php echo in_array($per['id'], array_flatten($design->perms()->get(['id'])->toArray())) ? "checked" : ""  ?> class="make-switch uppercase" name="chk[]" value="{{@$per['id']}}" data-on="success" data-on-color="success" data-off-color="danger" data-size="small">

                                                            </div>
                                                            <div class="list-item-content">
                                                                <h6 class="uppercase">
                                                                    {{$per['perms'] }}
                                                                </h6>
                                                            </div>
                                                        </li>




                                                    </ul>
                                                    @endforeach
                                                </div>
                                                @endforeach
                                            </div>




                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--                            </div>	-->

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
  
      
        $(".chkAll").on("click",function () {
              alert("sdf");
            var checkbox = $(this);
            var isChecked = checkbox.is(':checked');
            if (isChecked) {
                $("[name='chk[]']").attr('Checked', 'Checked');
            } else {
                $("[name='chk[]']").removeAttr('Checked');
            }
        }); 
    
</script>
@endsection
