 <div class="list-group">

  	@foreach (App\Models\Category::orderBy('name','asc')->where('parent_id',NULL)->get() as $parent)
	    <a href="#" class="list-group-item list-group-item-action">
	    	<img src="{!! asset('images/category_image/' .$parent->image) !!}" width="100">
		    	{{ $parent->name }}
    	</a>
 	@endforeach 
</div>
