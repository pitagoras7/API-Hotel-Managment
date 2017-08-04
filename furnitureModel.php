<?php
require_once 'Conexion.php';

class FurnitureModel extends conexion
{


	public $table         = "furnitures"; 
	public $request       = "";

	public $id = null;
	public $id_field = "id"; 

	public $furnitures_type = null;
	public $furnitures_type_field = "furnitures_type"; 

	public $furnitures_subtype = null;
	public $furnitures_subtype_field = "furnitures_subtype"; 

	public $quanty = null;
	public $quanty_field = "quanty"; 

	public $max = null;
	public $max_field = "max"; 

	public $min = null;
	public $min_field = "min"; 

	public $name = null;
	public $name_field = "name"; 

	public $longname = null;
	public $longname_field = "longname"; 

	public $details = null;
	public $details_field = "details"; 

	public $estatu = null;
	public $estatu_field = "estatu"; 

	public $image = null;
	public $image_field = "image"; 

	public $color = null;
	public $color_field = "color"; 

	public $icon = null;
	public $icon_field = "icon"; 

	public $created = null;
	public $created_field = "created"; 

	public $archived = null;
	public $archived_field = "archived"; 

	public $archived_at = null;
	public $archived_at_field = "archived_at"; 




	public function esqueleto(){ 


		if( $this->furnitures_type !== null ){ 
			$this->where_value__[] = $this->furnitures_type;
			$this->where_field__[] = $this->furnitures_type_field;
		}

		if( $this->furnitures_subtype !== null ){ 
			$this->where_value__[] = $this->furnitures_subtype;
			$this->where_field__[] = $this->furnitures_subtype_field;
		}

		if( $this->quanty !== null ){ 
			$this->where_value__[] = $this->quanty;
			$this->where_field__[] = $this->quanty_field;
		}

		if( $this->max !== null ){ 
			$this->where_value__[] = $this->max;
			$this->where_field__[] = $this->max_field;
		}

		if( $this->min !== null ){ 
			$this->where_value__[] = $this->min;
			$this->where_field__[] = $this->min_field;
		}

		if( $this->name !== null ){ 
			$this->where_value__[] = $this->name;
			$this->where_field__[] = $this->name_field;
		}

		if( $this->longname !== null ){ 
			$this->where_value__[] = $this->longname;
			$this->where_field__[] = $this->longname_field;
		}

		if( $this->details !== null ){ 
			$this->where_value__[] = $this->details;
			$this->where_field__[] = $this->details_field;
		}

		if( $this->estatu !== null ){ 
			$this->where_value__[] = $this->estatu;
			$this->where_field__[] = $this->estatu_field;
		}

		if( $this->image !== null ){ 
			$this->where_value__[] = $this->image;
			$this->where_field__[] = $this->image_field;
		}

		if( $this->color !== null ){ 
			$this->where_value__[] = $this->color;
			$this->where_field__[] = $this->color_field;
		}

		if( $this->icon !== null ){ 
			$this->where_value__[] = $this->icon;
			$this->where_field__[] = $this->icon_field;
		}

		if( $this->created !== null ){ 
			$this->where_value__[] = $this->created;
			$this->where_field__[] = $this->created_field;
		}

		if( $this->archived !== null ){ 
			$this->where_value__[] = $this->archived;
			$this->where_field__[] = $this->archived_field;
		}

		if( $this->archived_at !== null ){ 
			$this->where_value__[] = $this->archived_at;
			$this->where_field__[] = $this->archived_at_field;
		}

		

	}


	public function save($id=null)
	{
		$this->id = $id;
		$this->esqueleto();
		$this->ejecucion();

		if($id==null) 
			$id = $this->id__();

		return $this->all($id);
	}




}

?>