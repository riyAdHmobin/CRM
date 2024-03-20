@extends('main')
@section('dynamic_page')

	<div class="container-fluid p-0">
		<!-- <div class="mb-3">
			<h1 class="h3 d-inline align-middle">Lead Information</h1>
			<a class="badge bg-dark text-white ms-2" href="upgrade-to-pro.html">
			Get more form examples
			</a>
		</div> -->
		<div class="row">
			<div class="">
				<div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Lead Information</h5>
				    </div>
					<div class="card-body">
                        <h5 class="card-title mb-0">First Name</h5>
						<input type="text" class="form-control" placeholder="">
					</div>

                    <div class="card-body">
                        <h5 class="card-title mb-0">Last Name</h5>
						<input type="text" class="form-control" placeholder="">
					</div>

                    <div class="card-body">
                        <h5 class="card-title mb-0">Title</h5>
						<input type="text" class="form-control" placeholder="">
					</div>

                    <div class="card-body">
                        <h5 class="card-title mb-0">Email</h5>
						<input type="text" class="form-control" placeholder="">
					</div>

                    <div class="card-body">
                        <h5 class="card-title mb-0">Phone</h5>
						<input type="text" class="form-control" placeholder="">
					</div>

					<div class="card-body">
                        <h5 class="card-title mb-0">Lead Status</h5>
						<select class="form-select mb-3">
							<option selected>Open this select menu</option>
							<option>1</option>
							<option>2</option>
						</select>
					</div>

                    <div class="card-body">
                        <h5 class="card-title mb-0">Lead Source</h5>
						<select class="form-select mb-3">
							<option selected>Open this select menu</option>
							<option>1</option>
							<option>2</option>
						</select>
					</div>
				</div>

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Address</h5>
				    </div>
					<div class="card-body">
                        <h5 class="card-title mb-0">Street</h5>
						<input type="text" class="form-control" placeholder="">
					</div>

                    <div class="card-body">
                        <h5 class="card-title mb-0">City</h5>
						<input type="text" class="form-control" placeholder="">
					</div>

                    <div class="card-body">
                        <h5 class="card-title mb-0">State</h5>
						<input type="text" class="form-control" placeholder="">
					</div>

                    <div class="card-body">
                        <h5 class="card-title mb-0">Zip Code</h5>
						<input type="text" class="form-control" placeholder="">
					</div>

                    <div class="card-body">
                        <h5 class="card-title mb-0">Country</h5>
						<input type="text" class="form-control" placeholder="">
					</div>
				</div>

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Other Information</h5>
				    </div>
					<div class="card-body">
                        <h5 class="card-title mb-0">Description</h5>
						<textarea class="form-control" rows="3" placeholder=""></textarea>
					</div>
				</div>
				
			</div>
			<!-- <div class="col-12 col-lg-6">
			</div> -->
		</div>
	</div>

@endsection

