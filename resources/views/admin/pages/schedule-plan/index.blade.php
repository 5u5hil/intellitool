@extends(config('constants.adminLayouts').'.default')

@section('content')

<div class="page-content">
    <!-- BEGIN BREADCRUMBS -->
    <div class="breadcrumbs">
        <h1>Schedule Plan Listing</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">Home</a>
            </li>
            <li class="active">Schedule Plan</li>
        </ol>
    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="table-scrollable">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Project Name</th>
                            <th scope="col">Vertical</th>
                            <th scope="col">Last Updated By</th>
                            <th scope="col">Last Updated At</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td> Neelkanth Group Pvt. Ltd. </td>
                            <td> Housekeeping </td>
                            <td> Neel Shah</td>
                            <td> 8798798787 </td>
                          <td class="text-center"><a href="{{ route('admin.schedule.plan.add/edit') }}" class="tooltips" data-container="body" data-placement="bottom" data-original-title="Edit Schedule Plan"><i class='icon-pencil'>
                                
                                    </i>
                                            </a>
                                            <a href="" class="tooltips" data-container="body" data-placement="bottom" data-original-title="Publish Schedule"><i class="icon-rocket"></i></a>
                                
                                            <a href="" class="tooltips" data-container="body" data-placement="bottom" data-original-title="View Schedule Plan"><i class='icon-magnifier'></i></a>  <a href="" class="tooltips" data-container="body" data-placement="bottom" data-original-title="Delete Schedule Plan"><i class='icon-trash'></i>
                                            </a> </td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td> Taj Hotel </td>
                            <td> Security </td>
                            <td> Neel Shah</td>
                            <td> 8798798787 </td>
                                        <td class="text-center"><a href="{{ route('admin.schedule.plan.add/edit') }}" class="tooltips" data-container="body" data-placement="bottom" data-original-title="Edit Schedule Plan"><i class='icon-pencil'>
                                
                                    </i>
                                            </a>
                                            <a href="" class="tooltips" data-container="body" data-placement="bottom" data-original-title="Publish Schedule"><i class="icon-rocket"></i></a>
                                
                                            <a href="" class="tooltips" data-container="body" data-placement="bottom" data-original-title="View Schedule Plan"><i class='icon-magnifier'></i></a>  <a href="" class="tooltips" data-container="body" data-placement="bottom" data-original-title="Delete Schedule Plan"><i class='icon-trash'></i>
                                            </a> </td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td> Searock Hotel </td>
                            <td> Housekeeping </td>
                            <td> John Cade</td>
                            <td> 8798798784 </td>
                            <td class="text-center"><a href="{{ route('admin.schedule.plan.add/edit') }}" class="tooltips" data-container="body" data-placement="bottom" data-original-title="Edit Plan">
                                    <i class='icon-pencil'></i></a>   <a href="" class="tooltips" data-container="body" data-placement="bottom" data-original-title="Convert to Schedule"><i class="icon-rocket"></i></a>
                             
                                </a><a href="" class="tooltips" data-container="body" data-placement="bottom" data-original-title="View Plan"><i class='icon-magnifier'></i></a>
                                
                                <a href="" class="tooltips" data-container="body" data-placement="bottom" data-original-title="Delete Plan"><i class='icon-trash'></i></a> </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection