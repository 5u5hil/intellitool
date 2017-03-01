@extends(config('constants.adminLayouts').'.default')

@section('content')

<div class="page-content">
    <!-- BEGIN BREADCRUMBS -->
    <div class="breadcrumbs">
        <h1>Designation Listing</h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">Home</a>
            </li>
            <li class="active">Designation</li>
        </ol>
    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="table-scrollable">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Role</th>
                            <th scope="col">Display Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Incubation Date</th>
                            <th></th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($designations as $dsg)
                        <tr>
                            <td>{{$dsg->id}}</td>
                            <td> {{ $dsg->name }} </td>
                            <td>{{ $dsg->display_name }}  </td>
                            <td> {{ $dsg->description }} </td>
                            <td> {{ date("d-M-Y",strtotime($dsg->created_at)) }}</td>
                            <td class="text-center">
                                <a href="{{ route("admin.designation.add/edit",['id'=>$dsg->id]) }}" class="tooltips" data-container="body" data-placement="bottom" data-original-title="Edit">
                                    <i class='icon-pencil'></i>
                                </a> 
                                <a href="{{ route("admin.designation.add/Edit") }}" class="tooltips" data-container="body" data-placement="bottom" data-original-title="Add">
                                    <i class='icon-plus'></i>
                                </a>
                                <a href="" class="tooltips" data-container="body" data-placement="bottom" data-original-title="View Client Details">
                                    <i class='icon-magnifier'>

                                    </i></a>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

@endsection