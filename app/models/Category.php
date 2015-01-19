<?php

	class Category extends Eloquent{
		protected $guarded = [];


		/*public function (){
			return $this->belongsToMany('Model');
		}*/

		//relation
		public function subcategories(){
			return $this->hasMany('Subcategory');
		}
	}

 ?>