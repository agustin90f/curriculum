<?
class ProfilesController extends AppController {
	var $name = 'Profiles';
	var $scaffold;
	function dashboard() {
		$userName = User::get('username');
	 $this->set('username', $userName );
	}
}
?>