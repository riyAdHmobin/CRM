@extends('main')

@section('dynamic_page')
<div class="row">
	<div class="col-12 col-lg-8 col-xxl-9 d-flex">
		<div class="card flex-fill">
			<div class="card-header">
				<h5 class="card-title mb-0">Leads</h5>
			</div>
			<table class="table table-hover my-0">
				<thead>
					<tr>
						<th>Name</th>
						<th class="d-none d-xl-table-cell">Start Date</th>
						<th class="d-none d-xl-table-cell">End Date</th>
						<th>Status</th>
						<th class="d-none d-md-table-cell">Assignee</th>
					</tr>
				</thead>
				<tbody>
                    @foreach($leads as $single)
                    <tr>
						<td>Alexander</td>
                        <td>mail.com</td>
                        <td>This is something</td>
                        <td><span class="badge bg-danger">Cancelled</span></td>
                        <td>Something</td>
                        <td>
                            <a href="" class="btn btn-primary btn-sm"><i class="align-middle" data-feather="edit"></i><span class="align-middle"></span></a>
                            <a href="" class="btn btn-danger btn-sm"><i class="align-middle" data-feather="trash-2"></i> <span class="align-middle"></span></a>
                        </td>
					</tr>
                    @endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection