@extends('layouts.app')

@section('title', 'products index')

@section('content')
	<div class="row">
		<div class="col-sm-12">
			<table class="table table-striped">
				<thead>
					<tr>
						<td>ID</td>
						<td>Name</td>
						<td>Price</td>
						<td colspan="3">Actions</td>
					</tr>
				</thead>
				<tbody>
					@foreach ($products as $product)
							<tr>
								<td>
									{{$product->id}}
								</td>
								<td>
									{{$product->name}}
								</td>
								<td>
									{{$product->price}}
								</td>
								<td>
									<a href="{{route('product.show', $product->id)}}" class="btn btn-success">
										<span class="fas fa-eye"></span>
									</a>
								</td>
								<td>
									<a href="{{route('product.edit', $product->id)}}" class="btn btn-primary">
										<span class="far fa-edit"></span>
									</a>
								</td>
								<td>
									<a href="{{route('product.destroy', $product->id)}}" class="btn btn-danger">
										<span class="far fa-trash-alt"></span>
									</a>
								</td>
							</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endsection