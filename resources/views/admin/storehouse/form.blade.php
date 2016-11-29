{{ csrf_field() }}

<div class="form-group">
	<label>Product ID</label>
	<select name="product_id" placeholder="Product ID" required>
		<option></option>
		@foreach ($products as $product)
			<?php $selected = isset($store) && $product->id === $store->product_id  ? 'selected' : ''; ?>
			
			<option {{ $selected }} value="{{ $product->id }}">{{ $product->title }}</option>			
		@endforeach
	</select>
</div>

<div class="form-group">
	<label>Purchase price</label>
	<input class="form-control" type="number" name="purchase_price" value="{{ isset($store) ? $store->purchase_price : '' }}" required>
</div>

<div class="form-group">
	<label>Arrive count</label>
	<input class="form-control" type="number" name="arrive_count" value="{{ isset($store) ? $store->arrive_count : '' }}" required>
</div>

<div class="form-group">
	<label>Count</label>
	<input class="form-control" type="number" name="count" value="{{ isset($store) ? $store->count : '' }}">
</div>

<button class="btn btn-default" type="submit">Send</button>
