@extends(config('constants.adminLayouts').'.default')

@section('content')

<div class="page-content">
    <!-- BEGIN BREADCRUMBS -->
    <div class="breadcrumbs">
        <h1>Employee Listing</h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">Home</a>
            </li>
            <li class="active">Employee</li>
        </ol>
    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="table-scrollable">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                              <th scope="col">Employee Code</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Joining Date</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach($employees as $emp)
                        <tr>
                            <td>{{$emp->id}}</td>
                            <td>{{ $emp->emp_code }} </td>
                            <td> {{ $emp->name }}</td>
                            <td> {{$emp->email }}</td>
                            <td> {{ $emp->phone }}</td>
                            <td> {{ date("d M Y",strtotime($emp->created_at)) }}</td>
                            <td class="text-center">
                                <a href="{{ route('admin.employee.add/edit',['id'=>$emp->id]) }}" class="tooltips" data-container="body" data-placement="bottom" data-original-title="Edit Employee Details">
                                    <i class='icon-pencil'></i>
                                </a>
                            
                                <a href="" class="tooltips" data-container="body" data-placement="bottom" data-original-title="View Employee Details">
                                    <i class='icon-magnifier'></i>
                                </a>
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