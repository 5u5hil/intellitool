@extends(config('constants.adminLayouts').'.default')

@section('content')
<div class="page-content">
    <!-- BEGIN BREADCRUMBS -->
    <div class="breadcrumbs">
        <h1>Add New Schedule Plan</h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">Home</a>
            </li>
            <li class="active">Schedule Plan</li>
        </ol>
    </div>


    <div class="row">


        <div class="page-content-row">

            <!-- END PAGE SIDEBAR -->
            <div class="page-content-col">

                <form action="#" class="repeater form-horizontal">

                    <div class="portlet box green">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-info-circle"></i>General Information</div>
                            <div class="tools">
                                <a href="javascript:;" class="collapse"> </a>
                            </div>
                        </div>
                        <div class="portlet-body form">
                            <!-- BEGIN FORM-->
                            <div class="form-body">
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <label class="control-label">Project</label>
                                        <div class="input-group col-md-12 col-sm-12 col-xs-12"> 
                                            <select class='form-control' name="project">
                                                <option value="">Please Select</option>
                                                <option value="1">Neelkanth Business Park</option>
                                                <option value="2">Neelkanth Corporate Park</option>
                                                <option value="3">Neelkanth Kingdom</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-12 col-xs-12"> 
                                        {{ Form::label('Vertical', 'Vertical',['class'=>'control-label']) }}
                                        {{Form::select('verticle_ids[]',[""=>"Please Select","1"=>"House Keeping","2"=>"Security","3"=>"Food"],null, ['class'=>"form-control"]) }}

                                    </div>
                                </div>

                            </div>	
                            <!-- END FORM-->
                        </div>
                    </div>	


                    <div class="portlet box green">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-tasks"></i>Schedule Plan</div>
                            <div class="tools">
                                <a href="javascript:;" class="collapse"> </a>
                            </div>
                        </div>

                        <div class="portlet-body form">

                            <div class="form-body">

                                <div class="form-group">
                                    <div class="input-group control-group col-md-12 col-sm-12 col-xs-12">                                
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <a class="btn pull-right green add-schedule-group">Add Zone</a>
                                            </div>
                                        </div> 

                                        <div class="panel-group" id="accordion">
                                            <!-- First Panel -->
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                     <h4 class="panel-title">
                                                         Zone Name 1
                                                     </h4>
                                                </div>
                                                <div class="panel-collapse collapse in">
                                                    <div class="panel-body">
                                                        <div class="portlet light bordered newAddSDPlan">
                                                            <div class="form-group">  
                                                                <span class="pull-right">
                                                                    <a href="javascript:;" data-repeater-delete class="btn btn-success schedule-add-row tooltipNew"><span class="tooltiptext">Add Activity</span>
                                                                        <i class="fa fa-plus"></i> </a>
                                                                    <a href="javascript:;" data-repeater-delete class="btn purple schedule-group-replica tooltipNew"><span class="tooltiptext">Replicate Zone</span>
                                                                        <i class="fa fa-copy"></i></a>
                                                                    <a href="javascript:;" data-repeater-delete class="btn btn-danger schedule-group-delete tooltipNew"><span class="tooltiptext">Delete Zone</span>
                                                                        <i class="fa fa-close"></i></a>
                                                                </span> 
                                                                <div class="col-md-4 col-sm-12 col-xs-12">
                                                                <label class="control-label">Zone:</label>
                                                                    <select class='form-control'  name="zone[]">
                                                                        <option value="1">Please Select Zone</option>
                                                                        <option value="1">Neelkanth Business Park</option>
                                                                        <option value="2">- Compound</option>
                                                                        <option value="3">- Gate 1</option>
                                                                        <option value="4">- Gate 2</option>
                                                                        <option value="5">- Gate 3</option>
                                                                        <option value="6">- Wing A</option>
                                                                        <option value="7">-- Reception</option>
                                                                        <option value="8">-- Ground Floor</option>
                                                                        <option value="9">--- Shop 1</option>
                                                                        <option value="10">--- Shop 2</option>
                                                                        <option value="11">-- First Floor</option>
                                                                        <option value="12">--- Office 101</option>
                                                                        <option value="13">---- Conference Room</option>
                                                                        <option value="14">---- Toilet</option>
                                                                        <option value="15">--- Office 102</option>
                                                                        <option value="16">--- Corridor</option>
                                                                        <option value="17">--- General Men's Toilet</option>
                                                                        <option value="18">--- General Women's Toilet</option>
                                                                        <option value="19">-- Second Floor</option>
                                                                        <option value="20">-- Third Floor</option>
                                                                        <option value="21">-- Fourth Floor</option>
                                                                        <option value="22">- Wing B</option>
                                                                        <option value="23">- Wing C</option>
                                                                        <option value="24">- Wing D</option>
                                                                    </select>
                                                                </div>

                                                                <div class="col-md-2 col-sm-12 col-xs-12">
                                                                    <div class="input-group col-md-12 col-sm-12 col-xs-12"> 
                                                                    <label class="control-label">Shift:</label>
                                                                        <select class='form-control' name="shift[]">
                                                                            <option value="">Please Select Shift</option>
                                                                            <option value="1">Shift A</option>
                                                                            <option value="2">Shift B</option>
                                                                            <option value="3">Shift C</option>
                                                                            <option value="4">Shift D</option>
                                                                            <option value="5">Shift E</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-2 col-sm-12 col-xs-12">
                                                                    <div class="input-group col-md-12 col-sm-12 col-xs-12">
                                                                    <label class="control-label">Assign Employee:</label>           
                                                                        <select class="example-optgroup-buttonText" name="assign_emp[]" style="width: 100%;" multiple="multiple">
                                                                            <optgroup label="Senior Supervisor">
                                                                                <option value="1">John</option>
                                                                                <option value="2">Smith</option>
                                                                                <option value="3">Bhavana</option>
                                                                            </optgroup>
                                                                            <optgroup label="Supervisor">
                                                                                <option value="4">Leena</option>
                                                                                <option value="5">Sushil</option>
                                                                                <option value="6">Sachin</option>
                                                                            </optgroup>
                                                                        </select> 
                                                                    </div>
                                                                </div> 
                                                            </div>

                                                            <div class="form-group">                                                  
                                                                <div class="col-md-4 col-sm-12 col-xs-12">
                                                                    <label class="control-label">Activity:</label>
                                                                    <div class="input-group col-md-12 col-sm-12 col-xs-12"> 
                                                                        <select class='form-control' name="activity[]">
                                                                            <option value="">Please Select</option>
                                                                            <option value="1">Cleaning</option>
                                                                            <option value="2">Dusting</option>
                                                                            <option value="3">Mopping</option>
                                                                            <option value="4">HAVC</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4 col-sm-12 col-xs-12">
                                                                    <label class="control-label">Intervals</label>
                                                                    <div class="input-group col-md-12 col-sm-12 col-xs-12"> 
                                                                        <select class='form-control interval' name="intervals[]">
                                                                            <option value="">Please Select</option>
                                                                            <option value="2">Hourly</option>
                                                                            <option value="3">Daily</option>
                                                                            <option value="4">Weekly</option>
                                                                            <option value="5">Fortnightly</option>
                                                                            <option value="6">Monthly</option>
                                                                            <option value="7">Quarterly</option>
                                                                            <option value="8">Half Monthly</option>
                                                                            <option value="9">Yearly</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2 col-sm-12 col-xs-12 top20">
                                                                    <a href="javascript:;" data-repeater-delete class="btn purple schedule-row-replica tooltipNew"><span class="tooltiptext">Replicate Activity</span>
                                                                        <i class="fa fa-copy"></i> </a>
                                                                    <a href="javascript:;" data-repeater-delete class="btn btn-danger schedule-row-delete tooltipNew"><span class="tooltiptext">Delete</span>
                                                                        <i class="fa fa-trash"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="copyScheduleGroup hide">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                         <h4 class="panel-title">
                                                             Zone Name 2 
                                                         </h4>
                                                    </div>
                                                    <div class="panel-collapse collapse in">
                                                        <div class="panel-body">
                                                            <div class="input-group control-group col-md-12 col-sm-12 col-xs-12"> 
                                                                <div class="portlet light bordered newAddSDPlan">
                                                                    <div class="form-group">
                                                                        <span class="pull-right">
                                                                            <a href="javascript:;" data-repeater-delete class="btn btn-success schedule-add-row tooltipNew"><span class="tooltiptext">Add Activity</span>
                                                                                <i class="fa fa-plus"></i> </a>
                                                                            <a href="javascript:;" data-repeater-delete class="btn purple schedule-group-replica tooltipNew"><span class="tooltiptext">Replicate Zone</span>
                                                                                <i class="fa fa-copy"></i></a>
                                                                            <a href="javascript:;" data-repeater-delete class="btn btn-danger schedule-group-delete tooltipNew"><span class="tooltiptext">Delete Zone</span>
                                                                                <i class="fa fa-close"></i></a>
                                                                        </span> 
                                                                        <div class="col-md-4 col-sm-12 col-xs-12">
                                                                            <label class="control-label">Zone</label>
                                                                            <select class='form-control'  name="zone[]">
                                                                                <option value="1">Please Select</option>
                                                                                <option value="Accord">Neelkanth Business Park</option>
                                                                                <option value="Duster">- Compound</option>
                                                                                <option value="Esteem">- Gate 1</option>
                                                                                <option value="Fiero">- Gate 2</option>
                                                                                <option value="Fiero">- Gate 3</option>
                                                                                <option value="Fiero">- Wing A</option>
                                                                                <option value="Fiero">-- Reception</option>
                                                                                <option value="Fiero">-- Ground Floor</option>
                                                                                <option value="Fiero">--- Shop 1</option>
                                                                                <option value="Fiero">--- Shop 2</option>
                                                                                <option value="Fiero">-- First Floor</option>
                                                                                <option value="Fiero">--- Office 101</option>
                                                                                <option value="Fiero">---- Conference Room</option>
                                                                                <option value="Fiero">---- Toilet</option>
                                                                                <option value="Fiero">--- Office 102</option>
                                                                                <option value="Fiero">--- Corridor</option>
                                                                                <option value="Fiero">--- General Men's Toilet</option>
                                                                                <option value="Fiero">--- General Women's Toilet</option>
                                                                                <option value="Fiero">-- Second Floor</option>
                                                                                <option value="Fiero">-- Third Floor</option>
                                                                                <option value="Fiero">-- Fourth Floor</option>
                                                                                <option value="Fiero">- Wing B</option>
                                                                                <option value="Fiero">- Wing C</option>
                                                                                <option value="Fiero">- Wing D</option>
                                                                            </select>
                                                                        </div> 

                                                                        <div class="col-md-2 col-sm-12 col-xs-12">
                                                                            <label class="control-label">Shift</label>
                                                                            <div class="input-group col-md-12 col-sm-12 col-xs-12"> 
                                                                                <select class='form-control ' name="shift[]">
                                                                                    <option value="">Please Select</option>
                                                                                    <option value="shift-a">Shift A</option>
                                                                                    <option value="shift-b">Shift B</option>
                                                                                    <option value="shift-c">Shift C</option>
                                                                                    <option value="shift-d">Shift D</option>
                                                                                    <option value="shift-e">Shift E</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-2 col-sm-12 col-xs-12">
                                                                            <label class="control-label">Assign Employee</label>
                                                                            <div class="input-group col-md-12 col-sm-12 col-xs-12">             
                                                                                <select class="example-optgroup-buttonText " style="width: 100%;"  name="assign_emp[]" multiple="multiple">
                                                                                    <optgroup label="Senior Supervisor">
                                                                                        <option value="1-1">John</option>
                                                                                        <option value="1-2">Smith</option>
                                                                                        <option value="1-3">Bhavana</option>
                                                                                    </optgroup>
                                                                                    <optgroup label="Supervisor">
                                                                                        <option value="2-1">Leena</option>
                                                                                        <option value="2-2">Sushil</option>
                                                                                        <option value="2-3">Sachin</option>
                                                                                    </optgroup>
                                                                                </select>
                                                                            </div>
                                                                        </div>                                                 
                                                                    </div>

                                                                    <div class="form-group"> 
                                                                        <div class="col-md-4 col-sm-12 col-xs-12">
                                                                            <label class="control-label">Activity</label>
                                                                            <div class="input-group col-md-12 col-sm-12 col-xs-12"> 
                                                                                <select class='form-control ' name="activity[]">
                                                                                    <option value="shift-a">Please Select</option>
                                                                                    <option value="shift-a">Cleaning</option>
                                                                                    <option value="shift-b">Dusting</option>
                                                                                    <option value="shift-c">Mopping</option>
                                                                                    <option value="shift-d">HAVC</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-4 col-sm-12 col-xs-12">
                                                                            <label class="control-label">Intervals</label>
                                                                            <div class="input-group col-md-12 col-sm-12 col-xs-12"> 
                                                                                <select class='form-control interval' name="intervals[]">
                                                                                    <option value="shift-a">Please Select</option>
                                                                                    <option value="shift-a">Hourly</option>
                                                                                    <option value="shift-b">Daily</option>
                                                                                    <option value="shift-c">Weekly</option>
                                                                                    <option value="shift-d">Fortnightly</option>
                                                                                    <option value="shift-e">Monthly</option>
                                                                                    <option value="shift-e">Quarterly</option>
                                                                                    <option value="shift-e">Half Monthly</option>
                                                                                    <option value="shift-e">Yearly</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-2 col-sm-12 col-xs-12 top20">
                                                                            <a href="javascript:;" class="btn purple schedule-row-replica tooltipNew"><span class="tooltiptext">Replicate Activity</span>
                                                                                <i class="fa fa-copy"></i> </a>
                                                                            <a href="javascript:;" class="btn btn-danger schedule-row-delete tooltipNew"><span class="tooltiptext">Delete</span>
                                                                                <i class="fa fa-trash"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                                       

                                            <div class="copyScheduleRow hide"> 
                                                <div class="form-group">
                                                    <div class="col-md-4 col-sm-12 col-xs-12">
                                                        <label class="control-label">Activity</label>
                                                        <div class="input-group col-md-12 col-sm-12 col-xs-12"> 
                                                            <select class='form-control ' name='activity[]'>
                                                                <option value="">Please Select</option>
                                                                <option value="1">Cleaning</option>
                                                                <option value="2">Dusting</option>
                                                                <option value="3">Mopping</option>
                                                                <option value="4">HAVC</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4 col-sm-12 col-xs-12">
                                                        <label class="control-label">Intervals</label>
                                                        <div class="input-group col-md-12 col-sm-12 col-xs-12"> 
                                                            <select class='form-control interval' name='intervals[]'>
                                                                <option value="">Please Select</option>
                                                                <option value="1">Hourly</option>
                                                                <option value="2">Daily</option>
                                                                <option value="3">Weekly</option>
                                                                <option value="4">Fortnightly</option>
                                                                <option value="5">Monthly</option>
                                                                <option value="6">Quarterly</option>
                                                                <option value="7">Half Monthly</option>
                                                                <option value="8">Yearly</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-sm-12 col-xs-12 top20">
                                                        <a href="javascript:;" data-repeater-delete class="btn purple schedule-row-replica tooltipNew"><span class="tooltiptext">Replicate Activity</span>
                                                            <i class="fa fa-copy"></i> </a>
                                                        <a href="javascript:;" data-repeater-delete class="btn btn-danger schedule-row-delete tooltipNew"><span class="tooltiptext">Delete</span>
                                                            <i class="fa fa-trash"></i></a>
                                                    </div>
                                                </div>

                                            </div> 

                                            <div class='hide copyTimeSel' >
                                                <div class="col-md-2">
                                                    <label>Time</label>
                                                    <div class="input-icon">
                                                        <i class="fa fa-clock-o"></i>
                                                        <input type="text" class="form-control timepicker timepicker-default" value="{{ $shift->starttime or null}}" name='starttime'>
                                                    </div>
                                                </div>
                                            </div>

                                         </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- END PAGE BASE CONTENT -->
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('myscripts')
<script>
    $(document).on("change", "select", function () {
        $("option[value=" + this.value + "]", this).attr("selected", true).siblings().removeAttr("selected");
    });
    $(document).ready(function () {
        //for schedule plan
        $("body").on("click", ".add-schedule-group", function () {
        //  $('.panel-default .panel-collapse').removeClass('in');
          var cnt=$('.panel-default .panel-collapse').length;
          var asf=cnt-1;
          $('.panel-default .panel-collapse').removeClass('in');
       //   $('.panel-default:not(:last-child)').addClass('fasdfasdfsdaf');
          console.log(cnt);
            var html = $(".copyScheduleGroup .panel-default").eq(0).clone();
                console.log(html)
                html.find(".panel-collapse").addClass('in');
            $('#accordion').append(html);
        });
 
          $('#accordion').on('click','.panel-default .panel-heading',function(event){
             $('.panel-default .panel-collapse').removeClass('in');
            $(this).parent().find('.panel-collapse').toggleClass('in');
        })
 
        $("body").on("click", ".schedule-group-delete", function () {
            $(this).parent().parent().parent().remove();
        });
        $("body").on("click", ".schedule-add-row", function () {
            var html = $(".copyScheduleRow").html();
            $(this).parent().parent().after(html);
        });
        $("body").on("click", ".schedule-row-delete", function () {
            $(this).parent().parent().remove();
        });
        $("body").on("click", ".schedule-row-replica", function () {
            var replicaRow = $(this).parent().parent().clone();
            var selects = replicaRow.find("select");
            $(selects).each(function (i) {
                var select = this;
                replicaRow.find("select").eq(i).val($(select).val());
            });
            $(this).parent().parent().after(replicaRow);
        });
        $("body").on("click", ".schedule-group-replica", function () {
            var replicaRow = $(this).parent().parent().parent().clone();
            var selects = replicaRow.find("select");
            $(selects).each(function (i) {
                var select = this;
                replicaRow.find("select").eq(i).val($(select).val());
            });
            $(this).parent().parent().parent().after(replicaRow);
        });

        $("body").on("click", ".interval", function () {
            var selectElement = $(this).find("option:selected").text();
            //  console.log(selectElement);
            if (selectElement == 'Daily') {
                // $(this).append($(".copyTimeSel"));
                // console.log(selectElement);
            }
        });
    });


</script>
<style>
.tooltipNew { position: relative; display: inline-block;}
.tooltipNew .tooltiptext {visibility: hidden; width: 120px; background-color: black; color: #fff; text-align: center; border-radius: 6px; padding: 5px 0; position: absolute; z-index: 1; bottom: 120%; left: 50%; margin-left: -60px;}
.tooltipNew .tooltiptext::after {content: ""; position: absolute; top: 100%; left: 50%; margin-left: -5px; border-width: 5px; border-style: solid; border-color: black transparent transparent transparent;}
.tooltipNew:hover .tooltiptext {visibility: visible;}

</style>
@endsection