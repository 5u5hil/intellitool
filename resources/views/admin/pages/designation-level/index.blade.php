@extends(config('constants.adminLayouts').'.default')
@section('content')
<div class="page-content">
    <!-- BEGIN BREADCRUMBS -->
    <div class="breadcrumbs">
        <h1>Designation Level</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route("admin.dashboard") }}">Home</a>
            </li>
            <li class="active">Designation Level</li>
        </ol>
    </div>
    <div class="row">
        <div class="col-md-12">
            @if(Session::get('successMsg'))
            @component('admin.includes.success-msg')
            {{ Session::get('successMsg') }}
            @endcomponent
            @endif
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
                            <th scope="col">Sort Order</th>
                            
                            <th scope="col">Created On</th>
                            <th scope="col">Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($designationLevel as $getLevel)
                        <tr>
                            <td>{{$getLevel->id}}</td>
                            <td> {{$getLevel->designation}}</td>
                            <td> {{($getLevel->sort_order == 0)?'-': $getLevel->sort_order}}</td>
                            <td> {{ date("d M Y",strtotime($getLevel->created_at))}}</td>
                                                        <td> <label class="label label-{{($getLevel->status == 1)?'success':'danger'  }}" >{{ ($getLevel->status == 1)?'Active':'Suspended'}}</label></td>
                            <td class="text-center"><a href="{{route("admin.designation.level.add/edit",['id'=>$getLevel->id])}}" class="tooltips" data-container="body" data-placement="bottom" data-original-title="Edit Designation">
                                    <i class='icon-pencil'></i></a> 
                                <a href="" class="tooltips" data-container="body" data-placement="bottom" data-original-title="View Designation"><i class='icon-magnifier'></i></a> 
                            </td>
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