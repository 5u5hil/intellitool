@extends(config('constants.adminLayouts').'.default')

@section('content')

<div class="page-content">
    <!-- BEGIN BREADCRUMBS -->
    <div class="breadcrumbs">
        <h1>Client Listing</h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">Home</a>
            </li>
            <li class="active">Client</li>
        </ol>
    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="table-scrollable">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Company Name</th>
                            <th scope="col">Contact Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">No. Of Projects</th>
                            <th scope="col">Incubation Date</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td> Neelkanth Group Pvt. Ltd. </td>
                            <td> Neel Shah </td>
                            <td> neel@neelkath.com</td>
                            <td> 8798798787 </td>
                            <td> 4 </td>
                            <td> 14th Jan 2017 </td>
                        </tr>
                       <tr>
                            <td>1</td>
                            <td> Neelkanth Group Pvt. Ltd. </td>
                            <td> Neel Shah </td>
                            <td> neel@neelkath.com</td>
                            <td> 8798798787 </td>
                            <td> 4 </td>
                            <td> 14th Jan 2017 </td>
                        </tr>
                         <tr>
                            <td>1</td>
                            <td> Neelkanth Group Pvt. Ltd. </td>
                            <td> Neel Shah </td>
                            <td> neel@neelkath.com</td>
                            <td> 8798798787 </td>
                            <td> 4 </td>
                            <td> 14th Jan 2017 </td>
                        </tr>
                         <tr>
                            <td>1</td>
                            <td> Neelkanth Group Pvt. Ltd. </td>
                            <td> Neel Shah </td>
                            <td> neel@neelkath.com</td>
                            <td> 8798798787 </td>
                            <td> 4 </td>
                            <td> 14th Jan 2017 </td>
                        </tr>
                         <tr>
                            <td>1</td>
                            <td> Neelkanth Group Pvt. Ltd. </td>
                            <td> Neel Shah </td>
                            <td> neel@neelkath.com</td>
                            <td> 8798798787 </td>
                            <td> 4 </td>
                            <td> 14th Jan 2017 </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

@endsection