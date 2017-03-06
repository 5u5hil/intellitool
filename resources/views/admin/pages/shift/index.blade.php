@extends(config('constants.adminLayouts').'.default')

@section('content')

<div class="page-content">
    <!-- BEGIN BREADCRUMBS -->
    <div class="breadcrumbs">
        <h1>Shift</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">Home</a>
            </li>
            <li class="active">Shift</li>
        </ol>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div id="transform-buttons" class="btn-group btn-default">

                <a href="{{route('admin.shift.add/edit')}}" class="btn btn-default" id="destroy">
                    <span data-zh="">Add New Shift</span>
                </a>
            </div>
            <div class="table-scrollable">

                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Shift</th>
                            <th scope="col">Start Time</th>
                            <th scope="col">End Time</th>
                            <th scope="col">Active</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($shifts as $shift)
                        <tr>
                            <td>{{$shift->id}}</td>
                            <td> {{$shift->name}}</td>
                            <td> {{date("h:i A",strtotime($shift->starttime))}}</td>
                            <td> {{date("h:i A",strtotime($shift->endtime))}}</td>
                            <td> {{ ($shift->active == 0)?"No":"Yes"}}</td>
                            <td class="text-center">
                                <a href="{{route("admin.shift.add/edit",['id'=>$shift->id])}}" class="tooltips" data-container="body" data-placement="bottom" data-original-title="Edit Shift">
                                    <i class='icon-pencil'></i>
                                </a>  
                                <a href="#" class="tooltips" data-container="body" data-placement="bottom" data-original-title="View Shift">
                                    <i class='icon-magnifier'></i>
                                </a>
<!--                                <a href="" class="tooltips" data-container="body" data-placement="bottom" data-original-title="Delete Shift">
                                    <i class='icon-trash'></i>
                                </a> -->
                            </td>
                        </tr>
                        @endforeach

                    </tbody>

                </table>

            </div>
            {{$shifts->links()}}
        </div>
    </div>

</div>
@endsection