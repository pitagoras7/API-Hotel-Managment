<?php
require_once 'Conexion.php';

class roomserviceModel extends conexion
{


	public $table         = "roomservices"; 
	public $request       = "";

	public $id = null;
	public $id_field = "id"; 

	public $guest_id = null;
	public $guest_id_field = "guest_id"; 

	public $ocupation_id = null;
	public $ocupation_id_field = "ocupation_id"; 

	public $location_id = null;
	public $location_id_field = "location_id"; 

	public $service_id = null;
	public $service_id_field = "service_id"; 

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

	public $quality = null;
	public $quality_field = "quality"; 

	public $observation = null;
	public $observation_field = "observation"; 

	public $user_id = null;
	public $user_id_field = "user_id"; 




	public function esqueleto(){ 


		if( $this->guest_id !== null ){ 
			$this->where_value__[] = $this->guest_id;
			$this->where_field__[] = $this->guest_id_field;
		}

		if( $this->ocupation_id !== null ){ 
			$this->where_value__[] = $this->ocupation_id;
			$this->where_field__[] = $this->ocupation_id_field;
		}

		if( $this->location_id !== null ){ 
			$this->where_value__[] = $this->location_id;
			$this->where_field__[] = $this->location_id_field;
		}

		if( $this->service_id !== null ){ 
			$this->where_value__[] = $this->service_id;
			$this->where_field__[] = $this->service_id_field;
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

		if( $this->quality !== null ){ 
			$this->where_value__[] = $this->quality;
			$this->where_field__[] = $this->quality_field;
		}

		if( $this->observation !== null ){ 
			$this->where_value__[] = $this->observation;
			$this->where_field__[] = $this->observation_field;
		}

		if( $this->user_id !== null ){ 
			$this->where_value__[] = $this->user_id;
			$this->where_field__[] = $this->user_id_field;
		}



	}

	

	public $table         = "roomservices"; 
	public $request       = "";

	public $id = null;
	public $id_field = "id"; 

	public $guest_id = null;
	public $guest_id_field = "guest_id"; 

	public $ocupation_id = null;
	public $ocupation_id_field = "ocupation_id"; 

	public $location_id = null;
	public $location_id_field = "location_id"; 

	public $service_id = null;
	public $service_id_field = "service_id"; 

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

	public $quality = null;
	public $quality_field = "quality"; 

	public $observation = null;
	public $observation_field = "observation"; 

	public $user_id = null;
	public $user_id_field = "user_id"; 




	public function esqueleto(){ 


		if( $this->guest_id !== null ){ 
			$this->where_value__[] = $this->guest_id;
			$this->where_field__[] = $this->guest_id_field;
		}

		if( $this->ocupation_id !== null ){ 
			$this->where_value__[] = $this->ocupation_id;
			$this->where_field__[] = $this->ocupation_id_field;
		}

		if( $this->location_id !== null ){ 
			$this->where_value__[] = $this->location_id;
			$this->where_field__[] = $this->location_id_field;
		}

		if( $this->service_id !== null ){ 
			$this->where_value__[] = $this->service_id;
			$this->where_field__[] = $this->service_id_field;
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

		if( $this->quality !== null ){ 
			$this->where_value__[] = $this->quality;
			$this->where_field__[] = $this->quality_field;
		}

		if( $this->observation !== null ){ 
			$this->where_value__[] = $this->observation;
			$this->where_field__[] = $this->observation_field;
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