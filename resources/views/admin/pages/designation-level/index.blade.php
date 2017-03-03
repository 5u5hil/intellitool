@extends(config('constants.adminLayouts').'.default')

@section('content')

<div class="page-content">
    <!-- BEGIN BREADCRUMBS -->
    <div class="breadcrumbs">
        <h1>Designation Level</h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">Home</a>
            </li>
            <li class="active">Designation Level</li>
        </ol>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div id="transform-buttons" class="btn-group btn-default">

                <a href="{{route('admin.designation.level.add/edit')}}" class="btn btn-default" id="destroy">
                    <span data-zh="">Add New Designation Level</span>
                </a>
            </div>
            <div class="table-scrollable">

                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Designation</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($designationLevel as $getLevel)
                        <tr>
                            <td>{{$getLevel['id']}}</td>
                            <td> {{$getLevel['designation']}}</td>
                            <td class="text-center"><a href="{{route("admin.designation.level.add/edit",['id'=>$getLevel['id']])}}" class="tooltips" data-container="body" data-placement="bottom" data-original-title="Edit Designation"><i class='icon-pencil'></i></a>  <a href="" class="tooltips" data-container="body" data-placement="bottom" data-original-title="View Designation"><i class='icon-magnifier'></i></a> <a href="" class="tooltips" data-container="body" data-placement="bottom" data-original-title="Delete Designation"><i class='icon-trash'></i></a> </td>
                        </tr>
                        @endforeach
                      
                    </tbody>
                    
                </table>
               
            </div>
                {{$designationLevel->links()}}
        </div>
    </div>

</div>
@endsection