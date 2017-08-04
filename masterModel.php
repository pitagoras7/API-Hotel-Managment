<?php
require_once 'Conexion.php';

class MasterModel extends conexion
{

	public $table         = "masters"; 
	public $request       = "";

	public $id = null;
	public $id_field = "id"; 

	public $name = null;
	public $name_field = "name"; 

	public $longname = null;
	public $longname_field = "longname"; 

	public $type = null;
	public $type_field = "type"; 

	public $subtype = null;
	public $subtype_field = "subtype"; 

	public $color = null;
	public $color_field = "color"; 

	public $icon = null;
	public $icon_field = "icon"; 

	public $archived = null;
	public $archived_field = "archived"; 

	public $archived_at = null;
	public $archived_at_field = "archived_at"; 

	public $avatar = null;
	public $avatar_field = "avatar"; 

	public $remember_token = null;
	public $remember_token_field = "remember_token"; 

	public $created_at = null;
	public $created_at_field = "created_at"; 

	public $updated_at = null;
	public $updated_at_field = "updated_at"; 

	public $user_id = null;
	public $user_id_field = "user_id"; 




	public function esqueleto(){ 


		if( $this->name !== null ){ 
			$this->where_value__[] = $this->name;
			$this->where_field__[] = $this->name_field;
		}

		if( $this->longname !== null ){ 
			$this->where_value__[] = $this->longname;
			$this->where_field__[] = $this->longname_field;
		}

		if( $this->type !== null ){ 
			$this->where_value__[] = $this->type;
			$this->where_field__[] = $this->type_field;
		}

		if( $this->subtype !== null ){ 
			$this->where_value__[] = $this->subtype;
			$this->where_field__[] = $this->subtype_field;
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

		if( $this->avatar !== null ){ 
			$this->where_value__[] = $this->avatar;
			$this->where_field__[] = $this->avatar_field;
		}

		if( $this->remember_token !== null ){ 
			$this->where_value__[] = $this->remember_token;
			$this->where_field__[] = $this->remember_token_field;
		}

		if( $this->created_at !== null ){ 
			$this->where_value__[] = $this->created_at;
			$this->where_field__[] = $this->created_at_field;
		}

		if( $this->updated_at !== null ){ 
			$this->where_value__[] = $this->updated_at;
			$this->where_field__[] = $this->updated_at_field;
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
