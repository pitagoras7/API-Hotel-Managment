
<?php
require_once 'Conexion.php';

class ExtraModel extends conexion
{




	public $table         = "extras"; 
	public $request       = "";

	public $id = null;
	public $id_field = "id"; 

	public $code = null;
	public $code_field = "code"; 

	public $name = null;
	public $name_field = "name"; 

	public $extra_type = null;
	public $extra_type_field = "extra_type"; 

	public $extra_subtype = null;
	public $extra_subtype_field = "extra_subtype"; 

	public $estatu = null;
	public $estatu_field = "estatu"; 

	public $details = null;
	public $details_field = "details"; 

	public $color = null;
	public $color_field = "color"; 

	public $icon = null;
	public $icon_field = "icon"; 

	public $archived = null;
	public $archived_field = "archived"; 

	public $archived_at = null;
	public $archived_at_field = "archived_at"; 

	public $avatar1 = null;
	public $avatar1_field = "avatar1"; 

	public $created_at = null;
	public $created_at_field = "created_at"; 

	public $user_id = null;
	public $user_id_field = "user_id"; 

	public $subtotal = null;
	public $subtotal_field = "subtotal"; 

	public $tax = null;
	public $tax_field = "tax"; 

	public $taxporcentage = null;
	public $taxporcentage_field = "taxporcentage"; 

	public $total = null;
	public $total_field = "total"; 




	public function esqueleto(){ 


		if( $this->code !== null ){ 
			$this->where_value__[] = $this->code;
			$this->where_field__[] = $this->code_field;
		}

		if( $this->name !== null ){ 
			$this->where_value__[] = $this->name;
			$this->where_field__[] = $this->name_field;
		}

		if( $this->extra_type !== null ){ 
			$this->where_value__[] = $this->extra_type;
			$this->where_field__[] = $this->extra_type_field;
		}

		if( $this->extra_subtype !== null ){ 
			$this->where_value__[] = $this->extra_subtype;
			$this->where_field__[] = $this->extra_subtype_field;
		}

		if( $this->estatu !== null ){ 
			$this->where_value__[] = $this->estatu;
			$this->where_field__[] = $this->estatu_field;
		}

		if( $this->details !== null ){ 
			$this->where_value__[] = $this->details;
			$this->where_field__[] = $this->details_field;
		}

		if( $this->color !== null ){ 
			$this->where_value__[] = $this->color;
			$this->where_field__[] = $this->color_field;
		}

		if( $this->icon !== null ){ 
			$this->where_value__[] = $this->icon;
			$this->where_field__[] = $this->icon_field;
		}

		if( $this->archived !== null ){ 
			$this->where_value__[] = $this->archived;
			$this->where_field__[] = $this->archived_field;
		}

		if( $this->archived_at !== null ){ 
			$this->where_value__[] = $this->archived_at;
			$this->where_field__[] = $this->archived_at_field;
		}

		if( $this->avatar1 !== null ){ 
			$this->where_value__[] = $this->avatar1;
			$this->where_field__[] = $this->avatar1_field;
		}

		if( $this->created_at !== null ){ 
			$this->where_value__[] = $this->created_at;
			$this->where_field__[] = $this->created_at_field;
		}

		if( $this->user_id !== null ){ 
			$this->where_value__[] = $this->user_id;
			$this->where_field__[] = $this->user_id_field;
		}

		if( $this->subtotal !== null ){ 
			$this->where_value__[] = $this->subtotal;
			$this->where_field__[] = $this->subtotal_field;
		}

		if( $this->tax !== null ){ 
			$this->where_value__[] = $this->tax;
			$this->where_field__[] = $this->tax_field;
		}

		if( $this->taxporcentage !== null ){ 
			$this->where_value__[] = $this->taxporcentage;
			$this->where_field__[] = $this->taxporcentage_field;
		}

		if( $this->total !== null ){ 
			$this->where_value__[] = $this->total;
			$this->where_field__[] = $this->total_field;
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