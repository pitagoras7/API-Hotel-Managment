<?php
require_once 'Conexion.php';

class ServiceModel extends conexion
{



	public $table         = "services"; 
	public $request       = "";

	public $id = null;
	public $id_field = "id"; 

	public $code = null;
	public $code_field = "code"; 

	public $name = null;
	public $name_field = "name"; 

	public $longname = null;
	public $longname_field = "longname"; 

	public $service_type = null;
	public $service_type_field = "service_type"; 

	public $service_subtype = null;
	public $service_subtype_field = "service_subtype"; 

	public $estatu = null;
	public $estatu_field = "estatu"; 

	public $details = null;
	public $details_field = "details"; 

	public $email = null;
	public $email_field = "email"; 

	public $telephone1 = null;
	public $telephone1_field = "telephone1"; 

	public $telephone2 = null;
	public $telephone2_field = "telephone2"; 

	public $contact = null;
	public $contact_field = "contact"; 

	public $detailsPrice = null;
	public $detailsPrice_field = "detailsPrice"; 

	public $price = null;
	public $price_field = "price"; 

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

	public $avatar2 = null;
	public $avatar2_field = "avatar2"; 

	public $avatar3 = null;
	public $avatar3_field = "avatar3"; 

	public $avatar4 = null;
	public $avatar4_field = "avatar4"; 

	public $avatar5 = null;
	public $avatar5_field = "avatar5"; 

	public $created_at = null;
	public $created_at_field = "created_at"; 

	public $user_id = null;
	public $user_id_field = "user_id"; 




	public function esqueleto(){ 


		if( $this->code !== null ){ 
			$this->where_value__[] = $this->code;
			$this->where_field__[] = $this->code_field;
		}

		if( $this->name !== null ){ 
			$this->where_value__[] = $this->name;
			$this->where_field__[] = $this->name_field;
		}

		if( $this->longname !== null ){ 
			$this->where_value__[] = $this->longname;
			$this->where_field__[] = $this->longname_field;
		}

		if( $this->service_type !== null ){ 
			$this->where_value__[] = $this->service_type;
			$this->where_field__[] = $this->service_type_field;
		}

		if( $this->service_subtype !== null ){ 
			$this->where_value__[] = $this->service_subtype;
			$this->where_field__[] = $this->service_subtype_field;
		}

		if( $this->estatu !== null ){ 
			$this->where_value__[] = $this->estatu;
			$this->where_field__[] = $this->estatu_field;
		}

		if( $this->details !== null ){ 
			$this->where_value__[] = $this->details;
			$this->where_field__[] = $this->details_field;
		}

		if( $this->email !== null ){ 
			$this->where_value__[] = $this->email;
			$this->where_field__[] = $this->email_field;
		}

		if( $this->telephone1 !== null ){ 
			$this->where_value__[] = $this->telephone1;
			$this->where_field__[] = $this->telephone1_field;
		}

		if( $this->telephone2 !== null ){ 
			$this->where_value__[] = $this->telephone2;
			$this->where_field__[] = $this->telephone2_field;
		}

		if( $this->contact !== null ){ 
			$this->where_value__[] = $this->contact;
			$this->where_field__[] = $this->contact_field;
		}

		if( $this->detailsPrice !== null ){ 
			$this->where_value__[] = $this->detailsPrice;
			$this->where_field__[] = $this->detailsPrice_field;
		}

		if( $this->price !== null ){ 
			$this->where_value__[] = $this->price;
			$this->where_field__[] = $this->price_field;
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

		if( $this->avatar2 !== null ){ 
			$this->where_value__[] = $this->avatar2;
			$this->where_field__[] = $this->avatar2_field;
		}

		if( $this->avatar3 !== null ){ 
			$this->where_value__[] = $this->avatar3;
			$this->where_field__[] = $this->avatar3_field;
		}

		if( $this->avatar4 !== null ){ 
			$this->where_value__[] = $this->avatar4;
			$this->where_field__[] = $this->avatar4_field;
		}

		if( $this->avatar5 !== null ){ 
			$this->where_value__[] = $this->avatar5;
			$this->where_field__[] = $this->avatar5_field;
		}

		if( $this->created_at !== null ){ 
			$this->where_value__[] = $this->created_at;
			$this->where_field__[] = $this->created_at_field;
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