@extends(config('constants.adminLayouts').'.default')
@section('content')
<div class="page-content">
    <!-- BEGIN BREADCRUMBS -->
    <div class="breadcrumbs">
        <h1>Schedules</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{route('admin.dashboard')}}">Home</a>
            </li>
            <li class="active">Schedules</li>
        </ol>
    </div>

          <div class="row">
              <div class="page-content-row">
                  <div class="page-content-col">
                    <div class="portlet light bordered">
                      <div class="portlet-body form">
                        <form action="#" class="mt-repeater form-horizontal">
                          <div class="mt-repeater-input">
                           <label class="control-label">Zone</label>
                            <select class='form-control'  name="zone[]">
                                <option value="1">Please Select</option>
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
                          <div class="mt-repeater-input">
                              <label class="control-label">Date</label>
                              <br/>
                              <input class="input-group form-control form-control-inline date date-picker" size="16" type="text" name="date-input" data-date-format="dd/mm/yyyy" placeholder="Date" /> 
                          </div>                                         
                          <div class="mt-repeater-input">
                              <label class="control-label">Activity Status</label>
                              <br/>
                              <select name="select-input" class="form-control">
                                  <option value="0" selected="">All</option>
                                  <option value="A">Completed</option>
                                  <option value="B">Incompleted</option>
                              </select>
                          </div>
                          <div class="mt-repeater-input">
                              <a href="javascript:;" data-repeater-delete class="btn btn-success mt-repeater-delete">
                                  <i class="fa fa-search"></i> Search</a>
                          </div>
                        </form>
                      </div>
                  </div>

                <div class="portlet box green">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-calendar"></i> 17 March 2017
                        </div>
                    </div>

                    <div class="portlet-body">
                      <div class="panel-group accordion" id="accordion3">
                          <div class="panel panel-default">
                              <div class="panel-heading">
                                  <h4 class="panel-title">
                                      <a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion3" href="#collapse_3_1"> <i class="icon-pointer"></i> Ground Floor </a>
                                  </h4>
                              </div>
                              <div id="collapse_3_1" class="panel-collapse in">
                                  <div class="panel-body">
                                    <div class="table-responsive">
                                       <table class="table taskTable">
                                          <thead>
                                            <tr>
                                              <th></th>
                                              <th>Shift</th>
                                              <th>Activity</th>
                                              <th>Done By</th>
                                              <th>Done At</th>
                                              <th>Supervisor By </th>
                                              <th>Mis Feedback</th>
                                              <th>Client Feedback</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <tr>
                                              <td><input type="checkbox" class="checkboxStyle" checked></input></td>
                                              <td><p class="tooltipNew tooltips" data-original-title="( 9am - 6pm )">Shift A </p> </td>
                                              <td class="mainHideText"><p class="taskHideText tooltips" data-original-title="Lorem ipsum dolor sit amet, consectetuer adipiscing elit.">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p></td>
                                              <td><p>Vikram</p></td>
                                              <td><p>12 pm</p></td>
                                              <td><p>Chintan</p></td>
                                              <td>
                                                <span class="star-rating right10"> 
                                                  <span class="fa fa-star-o" data-rating="1"></span>
                                                  <span class="fa fa-star-o" data-rating="2"></span>
                                                  <span class="fa fa-star-o" data-rating="3"></span>
                                                  <span class="fa fa-star-o" data-rating="4"></span>
                                                  <span class="fa fa-star-o" data-rating="5"></span>
                                                  <input type="hidden" name="whatever" class="rating-value" value="3">
                                                </span>
                                                <a data-toggle="modal" href="#misFeedback" class="right10"><i class="fa fa-info-circle"></i></a>
                                                <a href="#modal-gallery" data-toggle="modal" class="right10"><i class="fa fa-image"></i></a>
                                              </td>
                                              <td>
                                                <span class="star-rating right10"> 
                                                  <span class="fa fa-star-o" data-rating="1"></span>
                                                  <span class="fa fa-star-o" data-rating="2"></span>
                                                  <span class="fa fa-star-o" data-rating="3"></span>
                                                  <span class="fa fa-star-o" data-rating="4"></span>
                                                  <span class="fa fa-star-o" data-rating="5"></span>
                                                  <input type="hidden" name="whatever" class="rating-value" value="3">
                                                </span>
                                                <a data-toggle="modal" href="#clientFeedback" class="right10"><i class="fa fa-info-circle"></i></a>
                                                <a href="#modal-gallery" data-toggle="modal" class="right10"><i class="fa fa-image"></i></a>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td><input type="checkbox" class="checkboxStyle"></input></td>
                                              <td><p class="tooltipNew tooltips" data-original-title="( 9am - 6pm )">Shift B </p> </td>
                                              <td><p class="taskHideText tooltips" data-original-title="Lorem ipsum dolor sit amet, consectetuer adipiscing elit.">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p></td>
                                              <td><p>Deepak</p></td>
                                              <td><p>2 pm</p></td>
                                              <td><p>Sushil</p></td>
                                              <td>
                                                <span class="star-rating right10"> 
                                                  <span class="fa fa-star-o" data-rating="1"></span>
                                                  <span class="fa fa-star-o" data-rating="2"></span>
                                                  <span class="fa fa-star-o" data-rating="3"></span>
                                                  <span class="fa fa-star-o" data-rating="4"></span>
                                                  <span class="fa fa-star-o" data-rating="5"></span>
                                                  <input type="hidden" name="whatever" class="rating-value" value="3">
                                                </span>
                                                <a data-toggle="modal" href="#misFeedback" class="right10"><i class="fa fa-info-circle"></i></a>
                                                <a href="#modal-gallery" data-toggle="modal" class="right10"><i class="fa fa-image"></i></a>
                                              </td>
                                              <td>
                                                <span class="star-rating right10"> 
                                                  <span class="fa fa-star-o" data-rating="1"></span>
                                                  <span class="fa fa-star-o" data-rating="2"></span>
                                                  <span class="fa fa-star-o" data-rating="3"></span>
                                                  <span class="fa fa-star-o" data-rating="4"></span>
                                                  <span class="fa fa-star-o" data-rating="5"></span>
                                                  <input type="hidden" name="whatever" class="rating-value" value="3">
                                                </span>
                                                <a data-toggle="modal" href="#clientFeedback" class="right10"><i class="fa fa-info-circle"></i></a>
                                                <a href="#modal-gallery" data-toggle="modal" class="right10"><i class="fa fa-image"></i></a>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </div>  
                                  </div>
                              </div>
                          </div>
                          <div class="panel panel-default">
                              <div class="panel-heading">
                                  <h4 class="panel-title">
                                      <a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapse_3_2"> <i class="icon-pointer"></i> First Floor </a>
                                  </h4>
                              </div>
                              <div id="collapse_3_2" class="panel-collapse collapse">
                                  <div class="panel-body">
                                    <div class="table-responsive">    
                                    <table class="table taskTable">
                                          <thead>
                                            <tr>
                                              <th></th>
                                              <th>Shift</th>
                                              <th>Activity</th>
                                              <th>Done By</th>
                                              <th>Done At</th>
                                              <th>Supervisor By </th>
                                              <th>Mis Feedback</th>
                                              <th>Client Feedback</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <tr>
                                              <td><input type="checkbox" class="checkboxStyle" checked></input></td>
                                              <td><p class="tooltipNew tooltips" data-original-title="( 9am - 6pm )">Shift A </p> </td>
                                              <td class="mainHideText"><p class="taskHideText tooltips" data-original-title="Lorem ipsum dolor sit amet, consectetuer adipiscing elit.">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p></td>
                                              <td><p>Vikram</p></td>
                                              <td><p>12 pm</p></td>
                                              <td><p>Chintan</p></td>
                                              <td>
                                                <span class="star-rating right10"> 
                                                  <span class="fa fa-star-o" data-rating="1"></span>
                                                  <span class="fa fa-star-o" data-rating="2"></span>
                                                  <span class="fa fa-star-o" data-rating="3"></span>
                                                  <span class="fa fa-star-o" data-rating="4"></span>
                                                  <span class="fa fa-star-o" data-rating="5"></span>
                                                  <input type="hidden" name="whatever" class="rating-value" value="3">
                                                </span>
                                                <a data-toggle="modal" href="#misFeedback" class="right10"><i class="fa fa-info-circle"></i></a>
                                                <a href="#modal-gallery" data-toggle="modal" class="right10"><i class="fa fa-image"></i></a>
                                              </td>
                                              <td>
                                                <span class="star-rating right10"> 
                                                  <span class="fa fa-star-o" data-rating="1"></span>
                                                  <span class="fa fa-star-o" data-rating="2"></span>
                                                  <span class="fa fa-star-o" data-rating="3"></span>
                                                  <span class="fa fa-star-o" data-rating="4"></span>
                                                  <span class="fa fa-star-o" data-rating="5"></span>
                                                  <input type="hidden" name="whatever" class="rating-value" value="3">
                                                </span>
                                                <a data-toggle="modal" href="#clientFeedback" class="right10"><i class="fa fa-info-circle"></i></a>
                                                <a href="#modal-gallery" data-toggle="modal" class="right10"><i class="fa fa-image"></i></a>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td><input type="checkbox" class="checkboxStyle"></input></td>
                                              <td><p class="tooltipNew tooltips" data-original-title="( 9am - 6pm )">Shift B </p> </td>
                                              <td><p class="taskHideText tooltips" data-original-title="Lorem ipsum dolor sit amet, consectetuer adipiscing elit.">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p></td>
                                              <td><p>Deepak</p></td>
                                              <td><p>2 pm</p></td>
                                              <td><p>Sushil</p></td>
                                              <td>
                                                <span class="star-rating right10"> 
                                                  <span class="fa fa-star-o" data-rating="1"></span>
                                                  <span class="fa fa-star-o" data-rating="2"></span>
                                                  <span class="fa fa-star-o" data-rating="3"></span>
                                                  <span class="fa fa-star-o" data-rating="4"></span>
                                                  <span class="fa fa-star-o" data-rating="5"></span>
                                                  <input type="hidden" name="whatever" class="rating-value" value="3">
                                                </span>
                                                <a data-toggle="modal" href="#misFeedback" class="right10"><i class="fa fa-info-circle"></i></a>
                                                <a href="#modal-gallery" data-toggle="modal" class="right10"><i class="fa fa-image"></i></a>
                                              </td>
                                              <td>
                                                <span class="star-rating right10"> 
                                                  <span class="fa fa-star-o" data-rating="1"></span>
                                                  <span class="fa fa-star-o" data-rating="2"></span>
                                                  <span class="fa fa-star-o" data-rating="3"></span>
                                                  <span class="fa fa-star-o" data-rating="4"></span>
                                                  <span class="fa fa-star-o" data-rating="5"></span>
                                                  <input type="hidden" name="whatever" class="rating-value" value="3">
                                                </span>
                                                <a data-toggle="modal" href="#clientFeedback" class="right10"><i class="fa fa-info-circle"></i></a>
                                                <a href="#modal-gallery" data-toggle="modal" class="right10"><i class="fa fa-image"></i></a>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
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

</div>

<div class="modal fade" id="misFeedback" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Mis Feedback</h4>
            </div>
            <div class="modal-body">
              <blockquote class="ModleFeedback">
                  <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. </p>
                  <small>Someone famous
                      <cite title="Source Title">Source Title</cite>
                  </small>
              </blockquote>
            </div>
            <div class="modal-footer">
                <span class="timeText">(Time: 2:30pm)</span>
                <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="clientFeedback" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Client Feedback</h4>
            </div>
            <div class="modal-body">
              <blockquote class="ModleFeedback">
                  <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. </p>

                  <small>Someone famous
                      <cite title="Source Title">Source Title</cite>
                  </small>
              </blockquote>
            </div>
            <div class="modal-footer">
                <span class="timeText">(Time: 2:30pm)</span>
                <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<div class="modal" id="modal-gallery" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
          <button class="close" type="button" data-dismiss="modal">×</button>
          <h3 class="modal-title"> Gallery</h3>
      </div>
      <div class="modal-body">
          <div class="container-fluid">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="carousel carousel-showmanymoveone slide" id="itemslider">
                <div class="carousel-inner">
                  <div class="item active">
                    <div class="col-xs-12 col-sm-6 col-md-12">
                      <img src="https://s12.postimg.org/655583bx9/item_1_180x200.png" class="img-responsive center-block">
                    </div>
                  </div>
                  <div class="item">
                    <div class="col-xs-12 col-sm-6 col-md-12">
                      <img src="https://s12.postimg.org/41uq0fc4d/item_2_180x200.png" class="img-responsive center-block">
                    </div>
                  </div>
                  <div class="item">
                    <div class="col-xs-12 col-sm-6 col-md-12">
                      <img src="https://s12.postimg.org/dawwajl0d/item_3_180x200.png" class="img-responsive center-block">
                    </div>
                  </div>
                </div>

                <div id="slider-control">
                  <a class="left carousel-control" href="#itemslider" data-slide="prev"> <i class="fa fa-angle-left" aria-hidden="true"></i></a>
                  <a class="right carousel-control" href="#itemslider" data-slide="next"> <i class="fa fa-angle-right" aria-hidden="true"></i></a>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
          <button class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


@endsection

@section('myscripts')
<script type="text/javascript">
$(function () {
  $('.taskTable tr:first-child p').css('textDecoration', 'line-through').css('color', '#39ca74');
    $('input:checkbox').on('change', function () {
      var b=$(this).parent().parent().find('p');
        var ab = $(b);
        if (this.checked) {
            $(ab).css('textDecoration', 'line-through').css('color', '#39ca74');
        } else {
            $(ab).css('textDecoration', 'none').css('color', 'black');
        }
    })
})

var $star_rating = $('.star-rating .fa');
var SetRatingStar = function() {
  return $star_rating.each(function() {
    if (parseInt($star_rating.siblings('input.rating-value').val()) >= parseInt($(this).data('rating'))) {
      return $(this).removeClass('fa-star-o').addClass('fa-star');
    } else {
      return $(this).removeClass('fa-star').addClass('fa-star-o');
    }
  });
};
$star_rating.on('click', function() {
  $star_rating.siblings('input.rating-value').val($(this).data('rating'));
  return SetRatingStar();
});
SetRatingStar();

</script>
@endsection
