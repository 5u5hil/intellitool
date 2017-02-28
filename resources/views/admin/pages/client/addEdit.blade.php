@extends(config('constants.adminLayouts').'.default')

@section('content')

<div class="page-content">
    <!-- BEGIN BREADCRUMBS -->
    <div class="breadcrumbs">
        <h1>Add New Client</h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">Home</a>
            </li>
            <li class="active">Client</li>
        </ol>
    </div>


	<div class="row">
		<div class="col-md-12">
		<form action="#" class="repeater form-horizontal">
			<div class="portlet box green">
				<div class="portlet-title">
					<div class="caption">
						<i class="fa fa-user"></i>Basic Info </div>
					<div class="tools">
						<a href="javascript:;" class="collapse"> </a>
					</div>
				</div>
				<div class="portlet-body form">
					<!-- BEGIN FORM-->
						<div class="form-body">
							<div class="form-group">
								<div class="col-md-4">
									<label>Company Name</label>
									<input type="text" class="form-control" placeholder="Company Name">
								</div>	
								<div class="col-md-4">
									<label>Contact Name</label>
									<input type="text" class="form-control" placeholder="Contact Name">
								</div>	
								<div class="col-md-4">
									<label>Email Address</label>
									<input type="text" class="form-control" placeholder="Email Address"> 	
								</div>	
							</div>
							<div class="form-group">
								<div class="col-md-4">
									<label>Phone No.</label>
									<input type="text" class="form-control" placeholder="Phone No.">
								</div>	
								<div class="col-md-4">
									<label>Status</label>
									<select class="form-control" name="options2">
										<option value="">Select...</option>
										<option value="Option 1">Active</option>
										<option value="Option 2">Suspended</option>
										<option value="Option 3">Inactive</option>
										<option value="Option 4">Pending</option>
									</select>	
								</div>	
								<div class="col-md-4">
									<label>	Incubation Date</label>
									<div class='input-group date'>
										<input type='text' class="form-control" id="datepicker" />
										<span class="input-group-addon">
											<span class="glyphicon glyphicon-calendar"></span>
										</span>
									</div>
								</div>	
							</div>
						</div>	
					<!-- END FORM-->
				</div>
			</div>	
			
			<div class="portlet box green">
				<div class="portlet-title">
					<div class="caption">
						<i class="fa fa-user"></i>Basic Info </div>
					<div class="tools">
						<a href="javascript:;" class="collapse"> </a>
					</div>
				</div>
				<div class="portlet-body form">
					<!-- BEGIN FORM-->
						<div class="form-body">
							<div class="mt-repeater">
                                <div data-repeater-list="group-c">
                                    <div data-repeater-item class="mt-repeater-item">
                                        <div class="row mt-repeater-row">
                                            <div class="col-md-12">
                                               <div class="form-group">
	                                               <div class="col-md-6">
														<label>File Upload</label>
														<div class="fileinput fileinput-new" data-provides="fileinput" style="width: 100%;">
	                                                        <div class="input-group">
	                                                            <div class="form-control input-fixed" data-trigger="fileinput">
	                                                                <i class="fa fa-file fileinput-exists"></i>&nbsp;
	                                                                <span class="fileinput-filename"> </span>
	                                                            </div>
	                                                            <span class="input-group-addon btn default btn-file">
	                                                                <span class="fileinput-new"> Select file </span>
	                                                                <span class="fileinput-exists"> Change </span>
	                                                                <input type="file" name="..."> </span>
	                                                            <a href="javascript:;" class="input-group-addon btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
	                                                        </div>
	                                                    </div>
													</div>

													<div class="col-md-5">
														<label>Phone No.</label>
														<input type="text" class="form-control" placeholder="Phone No.">
													</div>
		                                            <div class="col-md-1">
		                                                <a href="javascript:;" data-repeater-delete class="btn btn-danger pull-right mt-repeater-delete">
		                                                    <i class="fa fa-trash"></i>
		                                                </a>
		                                            </div>
                                            	</div>
                                        	</div>
                                    	</div>
                                	</div>
                                </div>	
                                <a href="javascript:;" data-repeater-create class="btn btn-info mt-repeater-add">
                                    <i class="fa fa-plus"></i> Add New</a>
                            </div>
						</div>	
					<!-- END FORM-->
				</div>
			</div>	
			
			<div class="form-actions">
				<div class="row">
					<div class="col-md-offset-5 col-md-6">
						<button type="submit" class="btn green">Submit</button>
						<button type="button" class="btn default">Cancel</button>
					</div>
				</div>
			</div>
		</form>	
		</div>
	</div>
</div>
@endsection
