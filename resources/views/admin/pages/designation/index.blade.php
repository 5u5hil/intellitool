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
                            <th scope="col">Designation</th>
                            <th scope="col">Designation Level</th>
                            <th scope="col">Vertical</th>
<!--                              <th scope="col">Status</th>-->
                            <th scope="col">Incubation Date</th>
                        
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($designations as $dsg)
                        <tr>
                            <td>{{$dsg->id}}</td>
                            <td> {{ $dsg->name }} </td>
                            <td>{{ $dsg->designation }}  </td>
                            <td>
                               {{ $dsg->verticals}}
                            </td>
<!--                            <td><label class="label label-<?= ($dsg->status == 1)?'success':'danger'?>"><?= ($dsg->status == 1)?'Active':'Suspended'?> </label></td>-->
                                
                            <td> {{ date("d M Y",strtotime($dsg->created_at)) }}</td>
                            <td class="text-center">
                                <a href="{{ route("admin.designation.add/edit",['id'=>$dsg->id]) }}" class="tooltips" data-container="body" data-placement="bottom" data-original-title="Edit Designation">
                                    <i class='icon-pencil'></i>
                                </a> 
                                <a href="" class="tooltips" data-container="body" data-placement="bottom" data-original-title="View Designation">
                                    <i class='icon-magnifier'>
                                    </i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    
                    {{ $designations->links() }}
                    
                </table>
            </div>
        </div>
    </div>
</div>
@endsection