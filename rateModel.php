<?php
require_once 'Conexion.php';

class RateModel extends conexion
{


	public $table         = "rates"; 
	public $request       = "";

	public $id = null;
	public $id_field = "id"; 

	public $location_subtype = null;
	public $location_subtype_field = "location_subtype"; 

	public $since = null;
	public $since_field = "since"; 

	public $until = null;
	public $until_field = "until"; 

	public $price = null;
	public $price_field = "price"; 

	public $archived = null;
	public $archived_field = "archived"; 

	public $archived_at = null;
	public $archived_at_field = "archived_at"; 



	public function esqueleto(){ 


		if( $this->location_subtype !== null ){ 
			$this->where_value__[] = $this->location_subtype;
			$this->where_field__[] = $this->location_subtype_field;
		}

		if( $this->since !== null ){ 
			$this->where_value__[] = $this->since;
			$this->where_field__[] = $this->since_field;
		}

		if( $this->until !== null ){ 
			$this->where_value__[] = $this->until;
			$this->where_field__[] = $this->until_field;
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