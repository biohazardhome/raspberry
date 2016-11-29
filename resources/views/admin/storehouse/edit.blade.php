<form class="form-horizontal" action="{{ route('admin.storehouse.update', [$store->id]) }}" method="POST">

	@include('admin.storehouse.form', compact('store', 'products'))
	
</form>