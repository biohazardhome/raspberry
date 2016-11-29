<form class="form-horizontal" action="{{ route('admin.storehouse.store') }}" method="POST">
	{{ method_field('put') }}
	
	@include('admin.storehouse.form', compact('products'))
	
</form>