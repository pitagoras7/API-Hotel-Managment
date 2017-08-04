
<?php
require_once 'Conexion.php';

class OrderExtraModel extends conexion
{


	public $table         = "orderExtras"; 
	public $request       = "";

	public $id = null;
	public $id_field = "id"; 

	public $orderDetail_id = null;
	public $orderDetail_id_field = "orderDetail_id"; 

	public $quanty = null;
	public $quanty_field = "quanty"; 

	public $estatu = null;
	public $estatu_field = "estatu"; 

	public $observation = null;
	public $observation_field = "observation"; 

	public $subtotal = null;
	public $subtotal_field = "subtotal"; 

	public $tax = null;
	public $tax_field = "tax"; 

	public $total = null;
	public $total_field = "total"; 

	public $archived = null;
	public $archived_field = "archived"; 

	public $archived_at = null;
	public $archived_at_field = "archived_at"; 

	public $exento = null;
	public $exento_field = "exento"; 




	public function esqueleto(){ 


		if( $this->orderDetail_id !== null ){ 
			$this->where_value__[] = $this->orderDetail_id;
			$this->where_field__[] = $this->orderDetail_id_field;
		}

		if( $this->quanty !== null ){ 
			$this->where_value__[] = $this->quanty;
			$this->where_field__[] = $this->quanty_field;
		}

		if( $this->estatu !== null ){ 
			$this->where_value__[] = $this->estatu;
			$this->where_field__[] = $this->estatu_field;
		}

		if( $this->observation !== null ){ 
			$this->where_value__[] = $this->observation;
			$this->where_field__[] = $this->observation_field;
		}

		if( $this->subtotal !== null ){ 
			$this->where_value__[] = $this->subtotal;
			$this->where_field__[] = $this->subtotal_field;
		}

		if( $this->tax !== null ){ 
			$this->where_value__[] = $this->tax;
			$this->where_field__[] = $this->tax_field;
		}

		if( $this->total !== null ){ 
			$this->where_value__[] = $this->total;
			$this->where_field__[] = $this->total_field;
		}

		if( $this->archived !== null ){ 
			$this->where_value__[] = $this->archived;
			$this->where_field__[] = $this->archived_field;
		}

		if( $this->archived_at !== null ){ 
			$this->where_value__[] = $this->archived_at;
			$this->where_field__[] = $this->archived_at_field;
		}

		if( $this->exento !== null ){ 
			$this->where_value__[] = $this->exento;
			$this->where_field__[] = $this->exento_field;
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