<select name="" id="">

	@foreach($categories as $category)
		<option value="">{{$category->name}}</option>
	@endforeach

</select>

<select name="" id="">

	@foreach($categories as $category)

		<optgroup label="{{$category->name}}">
			@foreach($category->subcategories as $subcategory)
				<option value="">{{$subcategory->name}}</option>
			@endforeach
		</optgroup>
	@endforeach

</select>



<div class="form-group">
				<label for="">Category</label>
				<input type="text" class="form-control input-sm" name="">
			</div>


			<div class="form-group">
				<label for="">Subcategory</label>
				<input type="text" class="form-control input-sm" name="">
			</div>