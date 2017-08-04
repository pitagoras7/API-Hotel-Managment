<?php
require_once 'Conexion.php';

class LocationModel extends conexion
{


	public $table         = "locations"; 
	public $request       = "";

	public $id = null;
	public $id_field = "id"; 

	public $location_type = null;
	public $location_type_field = "location_type"; 

	public $location_subtype = null;
	public $location_subtype_field = "location_subtype"; 

	public $name = null;
	public $name_field = "name"; 

	public $longname = null;
	public $longname_field = "longname"; 

	public $details = null;
	public $details_field = "details"; 

	public $telephone = null;
	public $telephone_field = "telephone"; 

	public $address = null;
	public $address_field = "address"; 

	public $estatu = null;
	public $estatu_field = "estatu"; 

	public $image = null;
	public $image_field = "image"; 

	public $created = null;
	public $created_field = "created"; 

	public $archived = null;
	public $archived_field = "archived"; 

	public $archived_at = null;
	public $archived_at_field = "archived_at"; 




	public function esqueleto(){ 


		if( $this->location_type !== null ){ 
			$this->where_value__[] = $this->location_type;
			$this->where_field__[] = $this->location_type_field;
		}

		if( $this->location_subtype !== null ){ 
			$this->where_value__[] = $this->location_subtype;
			$this->where_field__[] = $this->location_subtype_field;
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

		if( $this->telephone !== null ){ 
			$this->where_value__[] = $this->telephone;
			$this->where_field__[] = $this->telephone_field;
		}

		if( $this->address !== null ){ 
			$this->where_value__[] = $this->address;
			$this->where_field__[] = $this->address_field;
		}

		if( $this->estatu !== null ){ 
			$this->where_value__[] = $this->estatu;
			$this->where_field__[] = $this->estatu_field;
		}

		if( $this->image !== null ){ 
			$this->where_value__[] = $this->image;
			$this->where_field__[] = $this->image_field;
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