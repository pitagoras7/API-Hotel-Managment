<?php
require_once 'Conexion.php';

class InventoryModel extends conexion
{


	public $table         = "inventories"; 
	public $request       = "";

	public $id = null;
	public $id_field = "id"; 

	public $furnitures_id = null;
	public $furnitures_id_field = "furnitures_id"; 

	public $locations_id = null;
	public $locations_id_field = "locations_id"; 

	public $created = null;
	public $created_field = "created"; 

	public $archived = null;
	public $archived_field = "archived"; 

	public $archived_at = null;
	public $archived_at_field = "archived_at"; 


	public function esqueleto(){ 


		if( $this->furnitures_id !== null ){ 
			$this->where_value__[] = $this->furnitures_id;
			$this->where_field__[] = $this->furnitures_id_field;
		}

		if( $this->locations_id !== null ){ 
			$this->where_value__[] = $this->locations_id;
			$this->where_field__[] = $this->locations_id_field;
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