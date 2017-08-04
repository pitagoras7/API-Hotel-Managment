<?php
require_once 'Conexion.php';

class UserModel extends conexion
{


	
	public $table         = "users"; 
	public $request       = "";

	public $id = null;
	public $id_field = "id"; 

	public $code = null;
	public $code_field = "code"; 

	public $user_id = null;
	public $user_id_field = "user_id"; 

	public $job_type = null;
	public $job_type_field = "job_type"; 

	public $dpto_type = null;
	public $dpto_type_field = "dpto_type"; 

	public $cargo_type = null;
	public $cargo_type_field = "cargo_type"; 

	public $firstname = null;
	public $firstname_field = "firstname"; 

	public $lastname = null;
	public $lastname_field = "lastname"; 

	public $email = null;
	public $email_field = "email"; 

	public $password = null;
	public $password_field = "password"; 

	public $token = null;
	public $token_field = "token"; 

	public $avatar = null;
	public $avatar_field = "avatar"; 

	public $genre = null;
	public $genre_field = "genre"; 

	public $birtdate = null;
	public $birtdate_field = "birtdate"; 

	public $telephone = null;
	public $telephone_field = "telephone"; 

	public $online = null;
	public $online_field = "online"; 

	public $offline = null;
	public $offline_field = "offline"; 

	public $created = null;
	public $created_field = "created"; 

	public $deleted = null;
	public $deleted_field = "deleted"; 

	public $archived = null;
	public $archived_field = "archived"; 

	public $level = null;
	public $level_field = "level"; 



	public function esqueleto(){ 


		if( $this->code !== null ){ 
			$this->where_value__[] = $this->code;
			$this->where_field__[] = $this->code_field;
		}

		if( $this->user_id !== null ){ 
			$this->where_value__[] = $this->user_id;
			$this->where_field__[] = $this->user_id_field;
		}

		if( $this->job_type !== null ){ 
			$this->where_value__[] = $this->job_type;
			$this->where_field__[] = $this->job_type_field;
		}

		if( $this->dpto_type !== null ){ 
			$this->where_value__[] = $this->dpto_type;
			$this->where_field__[] = $this->dpto_type_field;
		}

		if( $this->cargo_type !== null ){ 
			$this->where_value__[] = $this->cargo_type;
			$this->where_field__[] = $this->cargo_type_field;
		}

		if( $this->firstname !== null ){ 
			$this->where_value__[] = $this->firstname;
			$this->where_field__[] = $this->firstname_field;
		}

		if( $this->lastname !== null ){ 
			$this->where_value__[] = $this->lastname;
			$this->where_field__[] = $this->lastname_field;
		}

		if( $this->email !== null ){ 
			$this->where_value__[] = $this->email;
			$this->where_field__[] = $this->email_field;
		}

		if( $this->password !== null ){ 
			$this->where_value__[] = $this->password_create($this->password);
			$this->where_field__[] = $this->password_field;
		}

		if( $this->token !== null ){ 
			$this->where_value__[] = $this->token;
			$this->where_field__[] = $this->token_field;
		}

		if( $this->avatar !== null ){ 
			$this->where_value__[] = $this->avatar;
			$this->where_field__[] = $this->avatar_field;
		}

		if( $this->genre !== null ){ 
			$this->where_value__[] = $this->genre;
			$this->where_field__[] = $this->genre_field;
		}

		if( $this->birtdate !== null ){ 
			$this->where_value__[] = $this->birtdate;
			$this->where_field__[] = $this->birtdate_field;
		}

		if( $this->telephone !== null ){ 
			$this->where_value__[] = $this->telephone;
			$this->where_field__[] = $this->telephone_field;
		}

		if( $this->online !== null ){ 
			$this->where_value__[] = $this->online;
			$this->where_field__[] = $this->online_field;
		}

		if( $this->offline !== null ){ 
			$this->where_value__[] = $this->offline;
			$this->where_field__[] = $this->offline_field;
		}

		if( $this->created !== null ){ 
			$this->where_value__[] = $this->created;
			$this->where_field__[] = $this->created_field;
		}

		if( $this->deleted !== null ){ 
			$this->where_value__[] = $this->deleted;
			$this->where_field__[] = $this->deleted_field;
		}

		if( $this->archived !== null ){ 
			$this->where_value__[] = $this->archived;
			$this->where_field__[] = $this->archived_field;
		}

		if( $this->level !== null ){ 
			$this->where_value__[] = $this->level;
			$this->where_field__[] = $this->level_field;
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


	public function password_verify($user,$password){
		$this->where__('email'," = ",$user);
		$res = $this->all();
		$res =  $this->ARR__($res);

		if (password_verify($password , $res[0]->password )) {
			return $res = $this->all();
		} else {
			return $this->error;
		}

	}








}

?>