<?php
require_once 'Conexion.php';

class PreferenceModel extends conexion
{

	
	public $table         = "preferences"; 
	public $request       = "";

	public $id = null;
	public $id_field = "id"; 

	public $roomservice_id = null;
	public $roomservice_id_field = "roomservice_id"; 

	public $guest_id = null;
	public $guest_id_field = "guest_id"; 

	public $location_id = null;
	public $location_id_field = "location_id"; 

	public $supply_id = null;
	public $supply_id_field = "supply_id"; 

	public $estatu = null;
	public $estatu_field = "estatu"; 

	public $details = null;
	public $details_field = "details"; 

	public $price = null;
	public $price_field = "price"; 

	public $archived = null;
	public $archived_field = "archived"; 

	public $archived_at = null;
	public $archived_at_field = "archived_at"; 

	public $created_at = null;
	public $created_at_field = "created_at"; 

	public $closed_at = null;
	public $closed_at_field = "closed_at"; 

	public $viewed_at = null;
	public $viewed_at_field = "viewed_at"; 

	public $viewed_by = null;
	public $viewed_by_field = "viewed_by"; 

	public $user_id = null;
	public $user_id_field = "user_id"; 




	public function esqueleto(){ 


		if( $this->roomservice_id !== null ){ 
			$this->where_value__[] = $this->roomservice_id;
			$this->where_field__[] = $this->roomservice_id_field;
		}

		if( $this->guest_id !== null ){ 
			$this->where_value__[] = $this->guest_id;
			$this->where_field__[] = $this->guest_id_field;
		}

		if( $this->location_id !== null ){ 
			$this->where_value__[] = $this->location_id;
			$this->where_field__[] = $this->location_id_field;
		}

		if( $this->supply_id !== null ){ 
			$this->where_value__[] = $this->supply_id;
			$this->where_field__[] = $this->supply_id_field;
		}

		if( $this->estatu !== null ){ 
			$this->where_value__[] = $this->estatu;
			$this->where_field__[] = $this->estatu_field;
		}

		if( $this->details !== null ){ 
			$this->where_value__[] = $this->details;
			$this->where_field__[] = $this->details_field;
		}

		if( $this->price !== null ){ 
			$this->where_value__[] = $this->price;
			$this->where_field__[] = $this->price_field;
		}

		if( $this->archived !== null ){ 
			$this->where_value__[] = $this->archived;
			$this->where_field__[] = $this->archived_field;
		}

		if( $this->archived_at !== null ){ 
			$this->where_value__[] = $this->archived_at;
			$this->where_field__[] = $this->archived_at_field;
		}

		if( $this->created_at !== null ){ 
			$this->where_value__[] = $this->created_at;
			$this->where_field__[] = $this->created_at_field;
		}

		if( $this->closed_at !== null ){ 
			$this->where_value__[] = $this->closed_at;
			$this->where_field__[] = $this->closed_at_field;
		}

		if( $this->viewed_at !== null ){ 
			$this->where_value__[] = $this->viewed_at;
			$this->where_field__[] = $this->viewed_at_field;
		}

		if( $this->viewed_by !== null ){ 
			$this->where_value__[] = $this->viewed_by;
			$this->where_field__[] = $this->viewed_by_field;
		}

		if( $this->user_id !== null ){ 
			$this->where_value__[] = $this->user_id;
			$this->where_field__[] = $this->user_id_field;
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