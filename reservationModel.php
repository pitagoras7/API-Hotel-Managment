<?php
require_once 'Conexion.php';

class ReservationModel extends conexion
{


	public $table         = "reservations"; 
	public $request       = "";

	public $id = null;
	public $id_field = "id"; 

	public $guest_id = null;
	public $guest_id_field = "guest_id"; 

	public $location_id = null;
	public $location_id_field = "location_id"; 

	public $validated = null;
	public $validated_field = "validated"; 

	public $estatu = null;
	public $estatu_field = "estatu"; 

	public $ocupation_type = null;
	public $ocupation_type_field = "ocupation_type"; 

	public $ocupation_subtype = null;
	public $ocupation_subtype_field = "ocupation_subtype"; 

	public $entry = null;
	public $entry_field = "entry"; 

	public $checkin = null;
	public $checkin_field = "checkin"; 

	public $checkout = null;
	public $checkout_field = "checkout"; 

	public $departure = null;
	public $departure_field = "departure"; 

	public $quantity = null;
	public $quantity_field = "quantity"; 

	public $created = null;
	public $created_field = "created"; 

	public $archived = null;
	public $archived_field = "archived"; 

	public $archived_at = null;
	public $archived_at_field = "archived_at"; 

	public $user_id = null;
	public $user_id_field = "user_id"; 




	public function esqueleto(){ 


		if( $this->guest_id !== null ){ 
			$this->where_value__[] = $this->guest_id;
			$this->where_field__[] = $this->guest_id_field;
		}

		if( $this->location_id !== null ){ 
			$this->where_value__[] = $this->location_id;
			$this->where_field__[] = $this->location_id_field;
		}

		if( $this->validated !== null ){ 
			$this->where_value__[] = $this->validated;
			$this->where_field__[] = $this->validated_field;
		}

		if( $this->estatu !== null ){ 
			$this->where_value__[] = $this->estatu;
			$this->where_field__[] = $this->estatu_field;
		}

		if( $this->ocupation_type !== null ){ 
			$this->where_value__[] = $this->ocupation_type;
			$this->where_field__[] = $this->ocupation_type_field;
		}

		if( $this->ocupation_subtype !== null ){ 
			$this->where_value__[] = $this->ocupation_subtype;
			$this->where_field__[] = $this->ocupation_subtype_field;
		}

		if( $this->entry !== null ){ 
			$this->where_value__[] = $this->entry;
			$this->where_field__[] = $this->entry_field;
		}

		if( $this->checkin !== null ){ 
			$this->where_value__[] = $this->checkin;
			$this->where_field__[] = $this->checkin_field;
		}

		if( $this->checkout !== null ){ 
			$this->where_value__[] = $this->checkout;
			$this->where_field__[] = $this->checkout_field;
		}

		if( $this->departure !== null ){ 
			$this->where_value__[] = $this->departure;
			$this->where_field__[] = $this->departure_field;
		}

		if( $this->quantity !== null ){ 
			$this->where_value__[] = $this->quantity;
			$this->where_field__[] = $this->quantity_field;
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