@extends('main')

@section('dynamic_page')
<div class="row">
	<div class="">
		<div class="card flex-fill">
			<div class="card-header">
			<h3>All Leads</h3>
			</div>
			<table class="table table-hover my-0">
				<thead>
					<tr>
						<th>Name</th>
						<th>Company Name</th>
						<th>Email</th>
						<th>Phone</th>
                        <th>Lead Status</th>
                        <th>Lead Source</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
                    @foreach($leads as $single)
                    <tr>
						<td>{{ $single->first_name }} {{ $single->last_name }}</td>
                        <td>{{ $single->company_name }}</td>
                        <td>{{ $single->email }}</td>
                        <td>{{ $single->phone }}</td>
                        <td>{{ $single->lead_status }}</td>
                        <td>{{ $single->lead_source }}</td>
                        <td>
                            <a href="" class="btn btn-primary btn-sm"><i class="align-middle" data-feather="edit"></i><span class="align-middle"></span></a>
                            <a href="{{ url('/leads/delete-lead/'.$single->id) }}" onclick="return confirm('Are You Sure You Want To Delete This Lead.')" class="btn btn-danger btn-sm"><i class="align-middle" data-feather="trash-2"></i> <span class="align-middle"></span></a>
                        </td>
					</tr>
                    @endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection