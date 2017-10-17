@extends('layouts.app')

@section('content')

<div class="row px-5 pt-4">
   
	
		<table class="table table-user-information">
			<tbody>
				<h3>{{ Auth::user()->name }}'s Wish List</h3>
				<tr>
					<td><b>Category</b></td>
					<td><b>Details</b></td>
					<td><b>Actions</b></td>
				</tr>
				@foreach(Auth::user()->wishlist as $item)
					<tr>
						<td>{{ $item->product->category->name }}</td>
						<td>{{ $item->product->title }}</td>
						<td>
							<span><a class="btn btn-secondary" href="/ads/{{ $item->product->id }}" role="button">See Ad</a></span>
							<span>
								<form  action="/wishlist/{{ $item->id }}" method="POST">
					                {{ csrf_field() }}
					                <input type="hidden" name="_method" value="DELETE">
					                <button id="deleteWishlistBtn" type="submit" class="btn btn-danger">Delete</button>
				                </form>
			            	</span>
						</td>
					</tr>
				@endforeach
			</tbody>
			<table class="table table-user-information">
		</table>
	
</div>

@endsection
