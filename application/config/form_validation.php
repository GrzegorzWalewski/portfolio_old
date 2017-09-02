<?php
$config = array 
	(
	'admin_users_login' => array
		(
			array(
					'field' => 'login',
					'label'=>'Login',
					'rules' => 'trim|required',
				),
			array(
					'field' => 'password',
					'label'=>'Password',
					'rules' => 'trim|required',
				),		
		),
	'cards' => array
		(
			array(
					'field' => 'nazwa',
					'label'=>'Nazwa',
					'rules' => 'trim|required|is_unique[karty.nazwa]',
				),
			array(
					'field' => 'link',
					'label'=>'Link',
					'rules' => 'trim|valid_url',
				),	
			array(
					'field' => 'data_p',
					'label'=>'Data',
					'rules' => 'required',
				),	

		),	
	'cards_edit' => array
		(
			array(
					'field' => 'nazwa',
					'label'=>'Nazwa',
					'rules' => 'trim|required',
				),
			array(
					'field' => 'link',
					'label'=>'Link',
					'rules' => 'trim|valid_url',
				),	
			array(
					'field' => 'data_p',
					'label'=>'Data',
					'rules' => 'required',
				),	

		),	
	'countries' => array
		(
			array(
					'field' => 'nazwa',
					'label'=>'Nazwa',
					'rules' => 'trim|required|is_unique[kraj.name]',
				),
			array(
					'field' => 'skrot',
					'label'=>'Skrót',
					'rules' => 'trim|required|trim|is_unique[kraj.short]|max_length[3]',
				),	
			array(
					'field' => 'kolor',
					'label'=>'Kolor',
					'rules' => 'trim',
				),	


		),	
	'country_edit' => array(
			array(
					'field' => 'nazwa',
					'label'=>'Nazwa',
					'rules' => 'trim|required',
				),
			array(
					'field' => 'skrot',
					'label'=>'Skrót',
					'rules' => 'trim|required|trim|max_length[3]',
				),	
			array(
					'field' => 'kolor',
					'label'=>'Kolor',
					'rules' => 'trim',
				),	
 
			),
		'elections' => array
		(
			array(
					'field' => 'who',
					'label'=>'Nazwa',
					'rules' => 'trim|required',
				),
			array(
					'field' => 'how_often',
					'label'=>'co_ile',
					'rules' => 'trim|required|max_length[2]|numeric',
				),	
			array(
					'field' => 'info',
					'label'=>'Opis',
					'rules' => 'trim|required',
				),	
			array(
					'field' => 'stanowisko',
					'label'=>'Stanowisko',
					'rules' => 'trim|required',
				),	
		),
		'articles' => array
		(
			array(
					'field' => 'title',
					'label'=>'Nazwa',
					'rules' => 'trim|required',
				),
			array(
					'field' => 'content',
					'label'=>'content',
					'rules' => 'trim|required',
				),	
			array(
					'field' => 'ID_Kraju',
					'label'=>'Kraj',
					'rules' => 'trim|required',
				),	
		),	
	)
?>