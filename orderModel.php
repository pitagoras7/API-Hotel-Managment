
<?php
require_once 'Conexion.php';

class OrderModel extends conexion
{



	public $table         = "orders"; 
	public $request       = "";

	public $id = null;
	public $id_field = "id"; 

	public $guest_id = null;
	public $guest_id_field = "guest_id"; 

	public $mesa_id = null;
	public $mesa_id_field = "mesa_id"; 

	public $user_id = null;
	public $user_id_field = "user_id"; 

	public $order_type = null;
	public $order_type_field = "order_type"; 

	public $description = null;
	public $description_field = "description"; 

	public $estatu = null;
	public $estatu_field = "estatu"; 

	public $created_at = null;
	public $created_at_field = "created_at"; 

	public $viewed_at = null;
	public $viewed_at_field = "viewed_at"; 

	public $preparing = null;
	public $preparing_field = "preparing"; 

	public $sent = null;
	public $sent_field = "sent"; 

	public $canceled = null;
	public $canceled_field = "canceled"; 

	public $archived = null;
	public $archived_field = "archived"; 

	public $archived_at = null;
	public $archived_at_field = "archived_at"; 




	public function esqueleto(){ 


		if( $this->guest_id !== null ){ 
			$this->where_value__[] = $this->guest_id;
			$this->where_field__[] = $this->guest_id_field;
		}

		if( $this->mesa_id !== null ){ 
			$this->where_value__[] = $this->mesa_id;
			$this->where_field__[] = $this->mesa_id_field;
		}

		if( $this->user_id !== null ){ 
			$this->where_value__[] = $this->user_id;
			$this->where_field__[] = $this->user_id_field;
		}

		if( $this->order_type !== null ){ 
			$this->where_value__[] = $this->order_type;
			$this->where_field__[] = $this->order_type_field;
		}

		if( $this->description !== null ){ 
			$this->where_value__[] = $this->description;
			$this->where_field__[] = $this->description_field;
		}

		if( $this->estatu !== null ){ 
			$this->where_value__[] = $this->estatu;
			$this->where_field__[] = $this->estatu_field;
		}

		if( $this->created_at !== null ){ 
			$this->where_value__[] = $this->created_at;
			$this->where_field__[] = $this->created_at_field;
		}

		if( $this->viewed_at !== null ){ 
			$this->where_value__[] = $this->viewed_at;
			$this->where_field__[] = $this->viewed_at_field;
		}

		if( $this->preparing !== null ){ 
			$this->where_value__[] = $this->preparing;
			$this->where_field__[] = $this->preparing_field;
		}

		if( $this->sent !== null ){ 
			$this->where_value__[] = $this->sent;
			$this->where_field__[] = $this->sent_field;
		}

		if( $this->canceled !== null ){ 
			$this->where_value__[] = $this->canceled;
			$this->where_field__[] = $this->canceled_field;
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