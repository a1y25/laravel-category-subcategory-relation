<?php

	class Subcategory extends Eloquent{
		protected $guarded = [];

		//relation...
		public function category(){
			return $this->belongsTo('Category');
		}
	}

 ?>