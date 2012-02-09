<?php
class User extends AppModel {
	var $name = 'User';
	var $hasOne = 'Profile';
	var $hasMany = array('Degree','Job');
	var $validate = array(
		'username' => array(
			'ruleRequired' => array(
				'rule' => 'notEmpty',
				'message' => 'Por favor ingresa un nombre de usuario valido.'
			),
			'ruleisUnique' => array(
				'rule' => 'isUnique', 
				'message' => 'Ya existe un usuario con el mismo nombre de usuario.'
			),
			'ruleAlphanumeric' => array(
				'rule' => 'Alphanumeric',
				'message' => 'Por favor ingresa un nombre de usuario valido.'
			)
		),
		'email' => array(
			'rule' => array('email'),
			'message' => 'Por favor ingresa un email valido.'
			,
			'ruleisUnique' => array(
				'rule' => 'isUnique', 
				'message' => 'Ya existe un usuario con el mismo email.'			
			)		
		),
		'first_name' => array(
			'ruleAlphanumeric' => array(
				'rule' => 'alphaNumeric',
				'message' => 'Por favor ingresa un nombre valido.'
			),
			'rulenotEmpty' => array(
				'rule' => 'notEmpty',
				'message' => 'Por favor ingresa un nombre valido.'
			),
			'ruleMaxLength' => array(
				'rule' => array('maxLength', 30),         
				'message' => 'Por favor ingresa un nombre válido.'
			)
		),
		'last_name' => array(
			'ruleAlphanumeric' => array(
				'rule' => 'alphaNumeric',
				'message' => 'Por favor ingresa un nombre valido.'
			),
			'rulenotEmpty' => array(
				'rule' => 'notEmpty',
				'message' => 'Por favor ingresa un nombre valido.'
			),
			'ruleMaxLength' => array(
				'rule' => array('maxLength', 30),         
				'message' => 'Por favor ingresa un nombre válido.'
			)
		)
		
	);
		
	
	

	public static function get($field = null) {
		$user = Configure::read('User');
		if (empty($user) || (!empty($field) && !array_key_exists($field, $user))) {
			return false;
		}
		return !empty($field) ? $user[$field] : $user;
	}
}
?>