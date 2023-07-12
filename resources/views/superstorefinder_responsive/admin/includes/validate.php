<?php

//validating admin store add
function validate_store_add(){
global $lang; 
global $fields; 
global $errors; 


	// define form fields
	$fields = array(
		'name'=>array(
			'rule'=>'/.+/',
			'message'=>$lang['ADMIN_STORE_NAME_VALIDATE'],
			'value'=>'',
			'required'=>TRUE
		),
		'address'=>array(
			'rule'=>'/.+/',
			'message'=>$lang['ADMIN_STORE_ADDRESS_VALIDATE'],
			'value'=>'',
			'required'=>TRUE
		),
		'telephone'=>array(
			'rule'=>'/[0-9 +]/',
			'message'=>$lang['ADMIN_STORE_TELEPHONE_VALIDATE'],
			'value'=>'',
			'required'=>FALSE
		),
		'email'=>array(
			'rule'=>"/^([a-z0-9\+_\-']+)(\.[a-z0-9\+_\-']+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",
			'message'=>$lang['ADMIN_STORE_EMAIL_VALIDATE'],
			'value'=>'',
			'required'=>FALSE
		),
		'website'=>array(
			'rule'=>'/.+/',
			'message'=>$lang['ADMIN_STORE_WEBSITE_VALIDATE'],
			'value'=>'',
			'required'=>FALSE
		),
		'embed_video'=>array(
			'rule'=>'/.+/',
			'message'=>'Please enter a valid embed code',
			'value'=>'',
			'required'=>FALSE
		),
		'default_media'=>array(
			'rule'=>'/.+/',
			'message'=>'Please select a default media',
			'value'=>'',
			'required'=>FALSE
		),
		'description'=>array(
			'rule'=>'/.+/',
			'message'=>$lang['ADMIN_STORE_DESCRIPTION_VALIDATE'],
			'value'=>'',
			'required'=>FALSE
		),
		'openinghour'=>array(
			'rule'=>'/.+/',
			'message'=>$lang['ADMIN_STORE_DESCRIPTION_VALIDATE'],
			'value'=>'',
			'required'=>FALSE
		),
		'latitude'=>array(
			'rule'=>'/[0-9.\-]/',
			'message'=>$lang['ADMIN_STORE_LATITUDE_VALIDATE'],
			'value'=>'',
			'required'=>TRUE
		),
		'longitude'=>array(
			'rule'=>'/[0-9.\-]/',
			'message'=>$lang['ADMIN_STORE_LONGITUDE_VALIDATE'],
			'value'=>'',
			'required'=>TRUE
		),
		'ext_url'=>array(
			'rule'=>'/.+/',
			'message'=>$lang['ADMIN_STORE_WEBSITE_VALIDATE'],
			'value'=>'',
			'required'=>FALSE
		)
	);

	
	$session_id = session_id();
	
	$tmp_upload_folder = ROOT.'temp_upload/'.$session_id.'/';
	
	$resize_image_width = 320;


	
	if(isset($_POST['delete_image'])) {
		
		$delete = array_keys($_POST['delete_image']);
		$image = $delete[0];
		
		if(file_exists($tmp_upload_folder.$image)) {
			
			if(!@unlink($tmp_upload_folder.$image)) {
				$errors = $lang['ADMIN_STORE_IMAGE_DELETE_FAILED'].$v;
			}
		}
	}


	// form submissoin

	if($_POST) {

		$errors = array();
		foreach($fields as $k=>$v) {
			
			if(isset($_POST[$k])) {
				
				$required = (isset($v['required'])) ? (!empty($_POST[$k])) ? TRUE : $v['required']  : TRUE ;
				
				if(isset($v['rule']) && $required && !preg_match($v['rule'], $_POST[$k]) ) {
					
					if(isset($v['rule']) && !preg_match($v['rule'], $_POST[$k]) ) {
						
						if(isset($v['message']) && !empty($v['message'])) {
							$errors[] = $v['message'];
						}
					}
				}
			
			$fields[$k]['value'] = $_POST[$k];
			}
		}
		
	
		if(isset($_FILES['file']) && $_FILES['file']['error'] != 4) {
			$allowed_mimetypes = array('image/gif', 'image/jpeg', 'image/pjpeg', 'image/x-png', 'image/png');
			if(!in_array($_FILES['file']['type'],$allowed_mimetypes)) {
				$errors[] = $lang['ADMIN_STORE_ALLOWED_IMAGE'];
			} else {
				create_dir($tmp_upload_folder);
				$img  = new Image(array('filename'=>$_FILES['file']['tmp_name']));
				if($img !== FALSE) {
					$safe_name = strtolower(str_replace(' ','_',preg_replace('/[^a-zA-Z0-9\-_. ]/','',$_FILES['file']['name'])));
				        if(!$img->save($tmp_upload_folder.'ori_'.$safe_name)) {
							//$errors[] = $lang['ADMIN_STORE_THUMB_FAILED'];
						}
					
					$img2  = new Image(array('filename'=>$_FILES['file']['tmp_name']));
					if($img2->resize_to_width($resize_image_width)) {

						if(!$img2->save($tmp_upload_folder.$safe_name)) {
							$errors[] = $lang['ADMIN_STORE_THUMB_FAILED'];
						}
					} else {
						$errors[] = $lang['ADMIN_STORE_THUMB_FAILED'];
					}
				} else {
					$errors[] = $lang['ADMIN_STORE_IMAGE_FAILED'];
				}
			}
		}
		if(empty($errors)) {
			
			// xss check
			foreach ($_POST as $key => $value) {
				if($key!='embed_video') {
					$_POST[$key] = htmlspecialchars($value, ENT_QUOTES,"UTF-8");
				}
		    }
			
		$db = db_connect();
		mysqli_query($GLOBALS["___mysqli_ston"], "SET NAMES utf8"); 
		$_POST['approved'] = 1;
			
			 $_POST['name'] = addslashes($_POST['name']);
			 $_POST['address'] = addslashes($_POST['address']);
			 $_POST['description'] = addslashes($_POST['description']);
			 $_POST['openinghour'] = addslashes($_POST['openinghour']);
			
			$_POST['description'] = mega_html($_POST['description']);
		    $_POST['openinghour'] = mega_html($_POST['openinghour']);
			if(!$db->insert('stores',$_POST)) {
				$errors[] = $lang['ADMIN_STORE_SAVE_FAILED'];
			} else {
				
				$insert_id = $db->get_insert_id();
				if(is_dir($tmp_upload_folder)) {
					$files = get_files($tmp_upload_folder);
					if(!empty($files)) {
						
						if(create_dir(ROOT.'imgs/stores/'.$insert_id)) {					
							
							foreach($files as $k=>$v) {
								if(@copy(ROOT.'temp_upload/'.$session_id.'/'.$v,ROOT.'imgs/stores/'.$insert_id.'/'.$v)) {
									@unlink(ROOT.'temp_upload/'.$session_id.'/'.$v);
								}
							}
						}
					}
				}
				/*new custom marker upload code*/
		if(isset($_FILES['marker']) && $_FILES['marker']['error'] != 4) {
			$valid_exts = array("jpg","jpeg","gif","png");
			$ext = end(explode(".",strtolower(trim($_FILES["marker"]["name"]))));
			if(in_array($ext,$valid_exts)){
				$max_dimension = 800; // Max new width or height, can not exceed this value.
				 create_dir(ROOT.'imgs/marker/'.$insert_id);
				 $dir=ROOT.'imgs/marker/'.$insert_id.'/';
				$postvars = array(
				"image"    => basename($_FILES["marker"]["name"]),
				"image_tmp"    => $_FILES["marker"]["tmp_name"],
				);
				 
					if($ext == "jpg" || $ext == "jpeg"){
					$image = imagecreatefromjpeg($postvars["image_tmp"]);
					}
					else if($ext == "gif"){
					$image = imagecreatefromgif($postvars["image_tmp"]);
					}
					else if($ext == "png"){
					$image = imagecreatefrompng($postvars["image_tmp"]);
					}
					$size = getimagesize($postvars["image_tmp"]);
					$ratio = $size[0]/$size[1]; // width/height
					if( $ratio > 1) {
					$width = 58;
					$height = 58/$ratio;
					
					$width2 = $size[0];
					$height2 = $size[0]/$ratio;
					}
					else {
					$width = 58*$ratio;
					$height = 58;
					
					$width2 = $size[0]*$ratio;
					$height2 = $size[0];
					}
					
					$tmp = imagecreatetruecolor($width,$height);
					if($ext == "gif" or $ext == "png"){
						imagecolortransparent($tmp, imagecolorallocatealpha($tmp, 0, 0, 0, 127));
						imagealphablending($tmp, false);
						imagesavealpha($tmp, true);
						imagecopyresampled($tmp,$image,0,0,0,0,$width,$height,$size[0],$size[1]);
						$filename = $dir.$postvars["image"];
						imagepng($tmp,$filename,9);
					}
					
					else
					{
						$whiteBackground = imagecolorallocate($tmp, 255, 255, 255); 
						imagefill($tmp,0,0,$whiteBackground); // fill the background with white
						imagecopyresampled($tmp,$image,0,0,0,0,$width,$height,$size[0],$size[1]);
						$filename = $dir.$postvars["image"];
						imagejpeg($tmp,$filename,100);
					}
					imagedestroy($image);
					imagedestroy($tmp);
				}
			}
				
				$_SESSION['notification'] = array('type'=>'good','msg'=>$lang['ADMIN_STORE_SAVED']);
				redirect(ROOT_URL.'stores.php');
			}
		}
	}

	
	$images = array();
	if(is_dir($tmp_upload_folder)) {
		$images = get_files($tmp_upload_folder);
		foreach($images as $k=>$v) {
			$images[$k] = ROOT_URL.'temp_upload/'.$session_id.'/'.$v;
		}
	}
}

// Validate edit store


function mega_html($a) {
		$a=str_replace('"', "&quot;", $a);
		$a=str_replace("'", "&#39;", $a);
		$a=str_replace(">", "&gt;", $a);
		$a=str_replace("<", "&lt;", $a);
		$a=str_replace(" & ", " &amp; ", $a);
		return str_replace("," ,"&#44;" ,$a);
	}

function validate_edit_store(){

	global $lang;
	global $fields;
	global $upload_dir;
	global $store;
	global $errors; 
	global $upload_dir_marker;
	global $marker_dir_check;
	$fields = array(
		'name'=>array(
			'rule'=>'/.+/',
			'message'=>$lang['ADMIN_STORE_NAME_VALIDATE'],
			'value'=>'',
			'required'=>TRUE
		),
		'address'=>array(
			'rule'=>'/.+/',
			'message'=>$lang['ADMIN_STORE_ADDRESS_VALIDATE'],
			'value'=>'',
			'required'=>TRUE
		),
		'telephone'=>array(
			'rule'=>'/[0-9 +]/',
			'message'=>$lang['ADMIN_STORE_TELEPHONE_VALIDATE'],
			'value'=>'',
			'required'=>FALSE
		),
		'email'=>array(
			'rule'=>"/^([a-z0-9\+_\-']+)(\.[a-z0-9\+_\-']+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",
			'message'=>$lang['ADMIN_STORE_EMAIL_VALIDATE'],
			'value'=>'',
			'required'=>FALSE
		),
		'website'=>array(
			'rule'=>'/.+/',
			'message'=>$lang['ADMIN_STORE_WEBSITE_VALIDATE'],
			'value'=>'',
			'required'=>FALSE
		),
		'embed_video'=>array(
			'rule'=>'/.+/',
			'message'=>'Please enter a valid embed code',
			'value'=>'',
			'required'=>FALSE
		),
		'default_media'=>array(
			'rule'=>'/.+/',
			'message'=>'Please select a default media',
			'value'=>'',
			'required'=>FALSE
		),
		'description'=>array(
			'rule'=>'/.+/',
			'message'=>$lang['ADMIN_STORE_DESCRIPTION_VALIDATE'],
			'value'=>'',
			'required'=>FALSE
		),
		'openinghour'=>array(
			'rule'=>'/.+/',
			'message'=>$lang['ADMIN_STORE_DESCRIPTION_VALIDATE'],
			'value'=>'',
			'required'=>FALSE
		),
		'latitude'=>array(
			'rule'=>'/[0-9.\-]/',
			'message'=>$lang['ADMIN_STORE_LATITUDE_VALIDATE'],
			'value'=>'',
			'required'=>TRUE
		),
		'longitude'=>array(
			'rule'=>'/[0-9.\-]/',
			'message'=>$lang['ADMIN_STORE_LONGITUDE_VALIDATE'],
			'value'=>'',
			'required'=>TRUE
		),
		'ext_url'=>array(
			'rule'=>'/.+/',
			'message'=>$lang['ADMIN_STORE_WEBSITE_VALIDATE'],
			'value'=>'',
			'required'=>FALSE
		)
	);

	if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
		$_SESSION['notification'] = array('type'=>'bad','msg'=>$lang['ADMIN_INVALID_ID']);
		redirect(ROOT_URL.'stores.php');
	}
	$db = db_connect();

	mysqli_query($GLOBALS["___mysqli_ston"], "SET NAMES utf8"); 
	$store = $db->get_row("SELECT stores.* FROM stores WHERE stores.id=".$db->escape($_GET['id']));
	if(empty($store)) {
		$_SESSION['notification'] = array('type'=>'bad','msg'=>$lang['ADMIN_INVALID_ID']);
		redirect(ROOT_URL.'stores.php');
	}


	$upload_dir = ROOT.'imgs/stores/'.$store['id'].'/';
	$upload_dir_marker = ROOT.'imgs/marker/'.$store['id'].'/';
	$resize_image_width = 320;


	if(isset($_POST['delete_image'])) {

		$delete = array_keys($_POST['delete_image']);
		$image = $delete[0];
		$image2 = 'ori_'.$delete[0];


		if(file_exists($upload_dir.$image)) {

			if(!@unlink($upload_dir.$image)) {
				$_SESSION['notification'] = array('type'=>'bad','msg'=>$lang['ADMIN_STORE_IMAGE_DELETE_FAILED'].$v);
			} else {
				$_SESSION['notification'] = array('type'=>'good','msg'=>$lang['ADMIN_STORE_IMAGE_DELETED']);
			}
		} else {
			$_SESSION['notification'] = array('type'=>'bad','msg'=>$lang['ADMIN_STORE_IMAGE_NOT_EXIST']);
		}
		
		if(file_exists($upload_dir.$image2)) {

			if(!@unlink($upload_dir.$image2)) {
				$_SESSION['notification'] = array('type'=>'bad','msg'=>$lang['ADMIN_STORE_IMAGE_DELETE_FAILED'].$v);
			} else {
				$_SESSION['notification'] = array('type'=>'good','msg'=>$lang['ADMIN_STORE_IMAGE_DELETED']);
			}
		} else {
			$_SESSION['notification'] = array('type'=>'bad','msg'=>$lang['ADMIN_STORE_IMAGE_NOT_EXIST']);
		}
		
	redirect(ROOT_URL.'stores_edit.php?id='.$store['id']);
	}
	if(isset($_POST['delete_marker'])) {

		$delete = array_keys($_POST['delete_marker']);
		$image = $delete[0];

		if(file_exists($upload_dir_marker.$image)) {

			if(!@unlink($upload_dir_marker.$image)) {
				$_SESSION['notification'] = array('type'=>'bad','msg'=>$lang['ADMIN_STORE_IMAGE_DELETE_FAILED'].$v);
			} else {
				$_SESSION['notification'] = array('type'=>'good','msg'=>$lang['ADMIN_STORE_IMAGE_DELETED']);
			}
		} else {
			$_SESSION['notification'] = array('type'=>'bad','msg'=>$lang['ADMIN_STORE_IMAGE_NOT_EXIST']);
		}
		
	redirect(ROOT_URL.'stores_edit.php?id='.$store['id']);
	}

	if($_POST) {
		$errors = array();
		foreach($fields as $k=>$v) {

			if(isset($_POST[$k])) {

				$required = (isset($v['required'])) ? (!empty($_POST[$k])) ? TRUE : $v['required']  : TRUE ;

				if(isset($v['rule']) && $required && !preg_match($v['rule'], $_POST[$k]) ) {

					if(isset($v['rule']) && !preg_match($v['rule'], $_POST[$k]) ) {

						if(isset($v['message']) && !empty($v['message'])) {
							$errors[] = $v['message'];
						}
					}
				}
			

			$fields[$k]['value'] = $_POST[$k];
			}
		}
		

		if(isset($_FILES['file']) && $_FILES['file']['error'] != 4) {

			$allowed_mimetypes = array('image/gif', 'image/jpeg', 'image/pjpeg', 'image/x-png', 'image/png');

			if(!is_dir($upload_dir)) {
				create_dir($upload_dir);
			}
			

			if(!in_array($_FILES['file']['type'],$allowed_mimetypes)) {
				$errors[] = $lang['ADMIN_STORE_ALLOWED_IMAGE'];
			} else {

				$img  = new Image(array('filename'=>$_FILES['file']['tmp_name']));

				if($img !== FALSE) {
				
				$safe_name = strtolower(str_replace(' ','_',preg_replace('/[^a-zA-Z0-9\-_. ]/','',$_FILES['file']['name'])));
				
				        if(!$img->save($upload_dir.'ori_'.$safe_name)) {
							//$errors[] = $lang['ADMIN_STORE_THUMB_FAILED'];
						}
					
					$img2  = new Image(array('filename'=>$_FILES['file']['tmp_name']));
					if($img2->resize_to_width($resize_image_width)) {

						if(!$img2->save($upload_dir.$safe_name)) {
							$errors[] = $lang['ADMIN_STORE_THUMB_FAILED'];
						}
						
					} else {
						$errors[] = $lang['ADMIN_STORE_THUMB_FAILED'];
					}
				} else {
					$errors[] = $lang['ADMIN_STORE_IMAGE_FAILED'];
				}
			}
		}
		/*new custom marker upload code*/
		if(isset($_FILES['marker']) && $_FILES['marker']['error'] != 4) {
			$valid_exts = array("jpg","jpeg","gif","png");
			$ext = end(explode(".",strtolower(trim($_FILES["marker"]["name"]))));
			if(in_array($ext,$valid_exts)){
				$max_dimension = 800; // Max new width or height, can not exceed this value.
				$dir=$upload_dir_marker;
				if(!is_dir($dir))
				{
				 create_dir($upload_dir_marker);
				}
				$postvars = array(
				"image"    => basename($_FILES["marker"]["name"]),
				"image_tmp"    => $_FILES["marker"]["tmp_name"],
				);
				 
					if($ext == "jpg" || $ext == "jpeg"){
					$image = imagecreatefromjpeg($postvars["image_tmp"]);
					}
					else if($ext == "gif"){
					$image = imagecreatefromgif($postvars["image_tmp"]);
					}
					else if($ext == "png"){
					$image = imagecreatefrompng($postvars["image_tmp"]);
					}
					$size = getimagesize($postvars["image_tmp"]);
					$ratio = $size[0]/$size[1]; // width/height
					if( $ratio > 1) {
					$width = 58;
					$height = 58/$ratio;
					
					$width2 = $size[0];
					$height2 = $size[0]/$ratio;
					}
					else {
					$width = 58*$ratio;
					$height = 58;
					
					$width2 = $size[0]*$ratio;
					$height2 = $size[0];
					}
					
					$tmp = imagecreatetruecolor($width,$height);
					if($ext == "gif" or $ext == "png"){
						imagecolortransparent($tmp, imagecolorallocatealpha($tmp, 0, 0, 0, 127));
						imagealphablending($tmp, false);
						imagesavealpha($tmp, true);
						imagecopyresampled($tmp,$image,0,0,0,0,$width,$height,$size[0],$size[1]);
						$filename = $dir.$postvars["image"];
						imagepng($tmp,$filename,9);
					}
					
					else
					{
						$whiteBackground = imagecolorallocate($tmp, 255, 255, 255); 
						imagefill($tmp,0,0,$whiteBackground); // fill the background with white
						imagecopyresampled($tmp,$image,0,0,0,0,$width,$height,$size[0],$size[1]);
						$filename = $dir.$postvars["image"];
						imagejpeg($tmp,$filename,100);
					}
					imagedestroy($image);
					imagedestroy($tmp);
				}
			}
		
		if(empty($errors)) {
			
			// xss check
			foreach ($_POST as $key => $value) {
				if($key!='embed_video') {
					$_POST[$key] = htmlspecialchars($value, ENT_QUOTES,"UTF-8");
				}
		    }

			$_POST['approved'] = 1;
		
			 $_POST['name'] = addslashes($_POST['name']);
			 $_POST['address'] = addslashes($_POST['address']);
			 $_POST['description'] = addslashes($_POST['description']);
			 $_POST['openinghour'] = addslashes($_POST['openinghour']);
			
			 $_POST['description'] = mega_html($_POST['description']);
			 $_POST['openinghour'] = mega_html($_POST['openinghour']);			
			if(!$db->update('stores',$_POST,$_GET['id'])) {
				$errors[] = $lang['ADMIN_STORE_SAVE_FAILED'];
			} else {
				$_SESSION['notification'] = array('type'=>'good','msg'=>$lang['ADMIN_STORE_SAVED']);
				redirect(ROOT_URL.'stores.php');
			}
		}
	} else {

		foreach($fields as $k=>$v) {
			if(isset($store[$k])) {
				$fields[$k]['value'] = $store[$k];
			}
		}
	}


	
}


// validate add user

function validate_user_add(){

global $fields;
global $lang; 	
global $errors;

	$fields = array(
		'username'=>array(
			'rule'=>'/.+/',
			'message'=>$lang['ADMIN_USERNAME_VALIDATE'],
			'value'=>'',
			'required'=>TRUE
		),
		'password'=>array(
			'rule'=>'/.+/',
			'message'=>$lang['ADMIN_PASSWORD_VALIDATE'],
			'value'=>'',
			'required'=>TRUE
		),
		'cpassword'=>array(
			'rule'=>'/[0-9 +]/',
			'message'=>$lang['ADMIN_CONFIRM_PASSWORD_VALIDATE'],
			'value'=>'',
			'required'=>TRUE
		)
	);

	
	if($_POST) {

		$errors = array();
		foreach($fields as $k=>$v) {
			
			if(isset($_POST[$k])) {
				
				$required = (isset($v['required'])) ? (!empty($_POST[$k])) ? TRUE : $v['required']  : TRUE ;
				
				if(isset($v['rule']) && $required && !preg_match($v['rule'], $_POST[$k]) ) {
					
					if(isset($v['rule']) && !preg_match($v['rule'], $_POST[$k]) ) {
						
						if(isset($v['message']) && !empty($v['message'])) {
							$errors[] = $v['message'];
						}
					}
				}
		
			$fields[$k]['value'] = $_POST[$k];
			}
		}
		
		
		if($fields['password']['value']!=$fields['cpassword']['value']){
		   $errors[] = $lang['ADMIN_PASSWORD_NOT_MATCHED'];
		}
		
		
		$db = db_connect();
		$users = $db->get_rows("SELECT users.* FROM users WHERE users.username='".$fields['username']['value']."'");
		
		if(!empty($users)){
		 $errors[] = $lang['ADMIN_USERNAME_EXIST'];
		}
		
		if(empty($errors)) {
			
			// xss check
			foreach ($_POST as $key => $value) {
					$_POST[$key] = htmlspecialchars($value, ENT_QUOTES,"UTF-8");
		    }
			
			$db = db_connect();
			
			
			$_POST['password'] = md5($fields['cpassword']['value'].SALT);
			
			if(!$db->insert('users',$_POST)) {
				$errors[] = $lang['ADMIN_USERNAME_CREATE_FAILED'];
			} else {
				
				
				
				$_SESSION['notification'] = array('type'=>'good','msg'=>$lang['ADMIN_USERNAME_SAVED']);
				redirect(ROOT_URL.'users.php');
			}
		}
	}
}

// validate user edit

function validate_user_edit(){

global $fields;
global $lang; 	
global $errors;
global $user;

	
	$fields = array(
		'username'=>array(
			'rule'=>'/.+/',
			'message'=>$lang['ADMIN_USERNAME_VALIDATE'],
			'value'=>'',
			'required'=>TRUE
		),
		'password'=>array(
			'rule'=>'/.+/',
			'message'=>$lang['ADMIN_PASSWORD_VALIDATE'],
			'value'=>'',
			'required'=>TRUE
		),
		'cpassword'=>array(
			'rule'=>'/[0-9 +]/',
			'message'=>$lang['ADMIN_CONFIRM_PASSWORD_VALIDATE'],
			'value'=>'',
			'required'=>TRUE
		)
	);

	
	if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
		$_SESSION['notification'] = array('type'=>'bad','msg'=>$lang['ADMIN_INVALID_ID']);
		redirect(ROOT_URL.'users.php');
	}

	
	$db = db_connect();
	$user = $db->get_row("SELECT users.* FROM users WHERE users.id=".$db->escape($_GET['id']));
	if(empty($user)) {
		$_SESSION['notification'] = array('type'=>'bad','msg'=>$lang['ADMIN_INVALID_ID']);
		redirect(ROOT_URL.'users.php');
	}


	if($_POST) {
		$errors = array();
		foreach($fields as $k=>$v) {

			if(isset($_POST[$k])) {

				$required = (isset($v['required'])) ? (!empty($_POST[$k])) ? TRUE : $v['required']  : TRUE ;

				if(isset($v['rule']) && $required && !preg_match($v['rule'], $_POST[$k]) ) {

					if(isset($v['rule']) && !preg_match($v['rule'], $_POST[$k]) ) {

						if(isset($v['message']) && !empty($v['message'])) {
							$errors[] = $v['message'];
						}
					}
				}
			

			$fields[$k]['value'] = $_POST[$k];
			}
		}
		
		if($fields['password']['value']!=$fields['cpassword']['value']){
		   $errors[] = $lang['ADMIN_PASSWORD_NOT_MATCHED'];
		}
		

		
		if(empty($errors)) {
			
			// xss check
			foreach ($_POST as $key => $value) {
					$_POST[$key] = htmlspecialchars($value, ENT_QUOTES,"UTF-8");
		    }
			
			// password encryption
			$_POST['password'] = md5($fields['cpassword']['value'].SALT);
			
			if(!$db->update('users',$_POST,$_GET['id'])) {
				$errors[] = $lang['ADMIN_USERNAME_EDIT_FAILED'];
			} else {
				$_SESSION['notification'] = array('type'=>'good','msg'=>$lang['ADMIN_USERNAME_SAVED']);
				redirect(ROOT_URL.'users.php');
			}
		}
	} else {
	
		foreach($fields as $k=>$v) {
			if(isset($user[$k])) {
				$fields[$k]['value'] = $user[$k];
			}
		}
	}

}


// validate change password


function validate_change_password(){

global $fields;
global $lang; 	
global $errors;
global $user;

	$fields = array(
		'password'=>array(
			'rule'=>'/.+/',
			'message'=>$lang['ADMIN_PLEASE_ENTER_PASSWORD'],
			'value'=>'',
			'required'=>TRUE
		),
		'cpassword'=>array(
			'rule'=>'/.+/',
			'message'=>$lang['ADMIN_PLEASE_CONFIRM_PASSWORD'],
			'value'=>'',
			'required'=>TRUE
		)
	);


	$db = db_connect();
	$user = $db->get_row("SELECT users.* FROM users WHERE users.id=".$db->escape($_SESSION['User']['id']));
	if(empty($user)) {
		$_SESSION['notification'] = array('type'=>'bad','msg'=>$lang['ADMIN_INVALID_ID']);
		redirect(ROOT_URL.'index.php');
	}


	if($_POST) {
		$errors = array();
		foreach($fields as $k=>$v) {
			
			if(isset($_POST[$k])) {
				
				$required = (isset($v['required'])) ? (!empty($_POST[$k])) ? TRUE : $v['required']  : TRUE ;
				
				if(isset($v['rule']) && $required && !preg_match($v['rule'], $_POST[$k]) ) {
					
					if(isset($v['rule']) && !preg_match($v['rule'], $_POST[$k]) ) {
						
						if(isset($v['message']) && !empty($v['message'])) {
							$errors[] = $v['message'];
						}
					}
				}
			
			
			$fields[$k]['value'] = $_POST[$k];
			}
		}

		if($fields['password']['value']!=$fields['cpassword']['value']){
		   $errors[] = $lang['ADMIN_PASSWORD_NOT_MATCHED'];
		}
		
		if(empty($errors)) {
			
			// xss check
			foreach ($_POST as $key => $value) {
					$_POST[$key] = htmlspecialchars($value, ENT_QUOTES,"UTF-8");
		    }
			
			$_POST['password'] = md5($fields['cpassword']['value'].SALT);
			
			if(!$db->update('users',$_POST,$_SESSION['User']['id'])) {
				$errors[] = $lang['ADMIN_PASSWORD_CHANGE_FAILED'];
			} else {
				$_SESSION['notification'] = array('type'=>'good','msg'=>$lang['ADMIN_PASSWORD_CHANGED']);
				
			}
		}
	} else {
		
		foreach($fields as $k=>$v) {
			if(isset($user[$k])) {
				$fields[$k]['value'] = $user[$k];
			}
		}
	}


}

// validate add category


function validate_cat_add(){

global $lang; 
global $fields; 
global $errors; 

	// define form fields
	$fields = array(
		'cat_name'=>array(
			'rule'=>'/.+/',
			'message'=>$lang['SSF_ADMIN_CAT_NAME_VALIDATE'],
			'value'=>'',
			'required'=>TRUE
		)
	);

	
	$session_id = session_id();
	
	$tmp_upload_folder = ROOT.'temp_upload/'.$session_id.'/';
	
	$resize_image_width = 100;


	
	if(isset($_POST['delete_image'])) {
		
		$delete = array_keys($_POST['delete_image']);
		$image = $delete[0];
		
		if(file_exists($tmp_upload_folder.$image)) {
			
			if(!@unlink($tmp_upload_folder.$image)) {
				$errors = $lang['SSF_ADMIN_CAT_DELETE_IMAGE_FAILED'].$v;
			}
		}
	}


	// form submissoin
	if($_POST) {

		$errors = array();
		foreach($fields as $k=>$v) {
			
			if(isset($_POST[$k])) {
				
				$required = (isset($v['required'])) ? (!empty($_POST[$k])) ? TRUE : $v['required']  : TRUE ;
				
				if(isset($v['rule']) && $required && !preg_match($v['rule'], $_POST[$k]) ) {
					
					if(isset($v['rule']) && !preg_match($v['rule'], $_POST[$k]) ) {
						
						if(isset($v['message']) && !empty($v['message'])) {
							$errors[] = $v['message'];
						}
					}
				}
			
			$fields[$k]['value'] = $_POST[$k];
			}
		}
		
		
		if($_FILES && $_FILES['file']['error'] != 4) {
			
			$allowed_mimetypes = array('image/gif', 'image/jpeg', 'image/pjpeg', 'image/x-png', 'image/png');
			
			
			if(!in_array($_FILES['file']['type'],$allowed_mimetypes)) {
				$errors[] = $lang['ADMIN_STORE_ALLOWED_IMAGE'];
			} else {
				
				create_dir($tmp_upload_folder);
				
				
				$img  = new Image(array('filename'=>$_FILES['file']['tmp_name']));
				
				if($img !== FALSE) {
					
					if($img->resize_to_width($resize_image_width)) {
						
						$safe_name = strtolower(str_replace(' ','_',preg_replace('/[^a-zA-Z0-9\-_. ]/','',$_FILES['file']['name'])));
						
						
						if(!$img->save($tmp_upload_folder.$safe_name)) {
							$errors[] = $lang['ADMIN_STORE_THUMB_FAILED'];
						}
					} else {
						$errors[] = $lang['ADMIN_STORE_THUMB_FAILED'];
					}
				} else {
					$errors[] = $lang['ADMIN_STORE_IMAGE_FAILED'];
				}
			}
		}
		
		if(empty($errors)) {
			
			// xss check
			foreach ($_POST as $key => $value) {
					$_POST[$key] = htmlspecialchars($value, ENT_QUOTES,"UTF-8");
		    }
			
			$db = db_connect();
			mysqli_query($GLOBALS["___mysqli_ston"], "SET NAMES utf8"); 
			

			
			 $_POST['cat_name'] = addslashes($_POST['cat_name']);

			
			if(!$db->insert('categories',$_POST)) {
				$errors[] = $lang['SSF_ADMIN_CAT_SAVE_FAILED'];
			} else {
				
				$insert_id = $db->get_insert_id();
				
				
				if(is_dir($tmp_upload_folder)) {
					$files = get_files($tmp_upload_folder);
					if(!empty($files)) {
						
						if(create_dir(ROOT.'imgs/categories/'.$insert_id)) {					
							
							foreach($files as $k=>$v) {
								if(@copy(ROOT.'temp_upload/'.$session_id.'/'.$v,ROOT.'imgs/categories/'.$insert_id.'/'.$v)) {
									@unlink(ROOT.'temp_upload/'.$session_id.'/'.$v);
								}
							}
						}
					}
				}
				
				
				$_SESSION['notification'] = array('type'=>'good','msg'=>$lang['SSF_ADMIN_CAT_SAVED']);
				redirect(ROOT_URL.'categories.php');
			}
		}
	}

	
	$images = array();
	if(is_dir($tmp_upload_folder)) {
		$images = get_files($tmp_upload_folder);
		foreach($images as $k=>$v) {
			$images[$k] = ROOT_URL.'temp_upload/'.$session_id.'/'.$v;
		}
	}
}



// Validate edit category

function validate_edit_cats(){

global $lang;
global $fields;
global $upload_dir;
global $cats;
global $errors; 


	
	$fields = array(
		'cat_name'=>array(
			'rule'=>'/.+/',
			'message'=>$lang['SSF_ADMIN_CAT_NAME_VALIDATE'],
			'value'=>'',
			'required'=>TRUE
		)
	);


	if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
		$_SESSION['notification'] = array('type'=>'bad','msg'=>$lang['ADMIN_INVALID_ID']);
		redirect(ROOT_URL.'categories.php');
	}

	$db = db_connect();

	mysqli_query($GLOBALS["___mysqli_ston"], "SET NAMES utf8"); 
	$cats = $db->get_row("SELECT categories.* FROM categories WHERE categories.id=".$db->escape($_GET['id']));
	if(empty($cats)) {
		$_SESSION['notification'] = array('type'=>'bad','msg'=>$lang['ADMIN_INVALID_ID']);
		redirect(ROOT_URL.'categories.php');
	}


	$upload_dir = ROOT.'imgs/categories/'.$cats['id'].'/';

	$resize_image_width = 100;


	if(isset($_POST['delete_image'])) {

		$delete = array_keys($_POST['delete_image']);
		$image = $delete[0];


		if(file_exists($upload_dir.$image)) {

			if(!@unlink($upload_dir.$image)) {
				$_SESSION['notification'] = array('type'=>'bad','msg'=>$lang['SSF_ADMIN_CAT_DELETE_IMAGE_FAILED'].$v);
			} else {
				$_SESSION['notification'] = array('type'=>'good','msg'=>$lang['ADMIN_STORE_IMAGE_DELETED']);
			}
		} else {
			$_SESSION['notification'] = array('type'=>'bad','msg'=>$lang['ADMIN_STORE_IMAGE_NOT_EXIST']);
		}
		
	redirect(ROOT_URL.'category_edit.php?id='.$cats['id']);
	}


	if($_POST) {
		$errors = array();
		foreach($fields as $k=>$v) {

			if(isset($_POST[$k])) {

				$required = (isset($v['required'])) ? (!empty($_POST[$k])) ? TRUE : $v['required']  : TRUE ;

				if(isset($v['rule']) && $required && !preg_match($v['rule'], $_POST[$k]) ) {

					if(isset($v['rule']) && !preg_match($v['rule'], $_POST[$k]) ) {

						if(isset($v['message']) && !empty($v['message'])) {
							$errors[] = $v['message'];
						}
					}
				}
			

			$fields[$k]['value'] = $_POST[$k];
			}
		}
		

		if($_FILES && $_FILES['file']['error'] != 4) {

			$allowed_mimetypes = array('image/gif', 'image/jpeg', 'image/pjpeg', 'image/x-png', 'image/png');

			if(!is_dir($upload_dir)) {
				create_dir($upload_dir);
			}
			

			if(!in_array($_FILES['file']['type'],$allowed_mimetypes)) {
				$errors[] = $lang['ADMIN_STORE_ALLOWED_IMAGE'];
			} else {

				$img  = new Image(array('filename'=>$_FILES['file']['tmp_name']));

				if($img !== FALSE) {

					if($img->resize_to_width($resize_image_width)) {

						$safe_name = strtolower(str_replace(' ','_',preg_replace('/[^a-zA-Z0-9\-_. ]/','',$_FILES['file']['name'])));
						

						if(!$img->save($upload_dir.$safe_name)) {
							$errors[] = $lang['ADMIN_STORE_THUMB_FAILED'];
						}
					} else {
						$errors[] = $lang['ADMIN_STORE_THUMB_FAILED'];
					}
				} else {
					$errors[] = $lang['ADMIN_STORE_IMAGE_FAILED'];
				}
			}
		}
		
		if(empty($errors)) {

		// xss check
			foreach ($_POST as $key => $value) {
					$_POST[$key] = htmlspecialchars($value, ENT_QUOTES,"UTF-8");
		    }
			
			
			 $_POST['cat_name'] = addslashes($_POST['cat_name']);

			
			if(!$db->update('categories',$_POST,$_GET['id'])) {
				$errors[] = $lang['SSF_ADMIN_CAT_SAVE_FAILED'];
			} else {
				$_SESSION['notification'] = array('type'=>'good','msg'=>$lang['SSF_ADMIN_CAT_SAVED']);
				redirect(ROOT_URL.'categories.php');
			}
		}
	} else {

		foreach($fields as $k=>$v) {
			if(isset($cats[$k])) {
				$fields[$k]['value'] = $cats[$k];
			}
		}
	}

}

/*.* custom marker setting function   *.*/   
function custom_setting_marker(){
	 if(!empty($_FILES['custom_marker']['name'])){
    $valid_exts = array("jpg","jpeg","gif","png");
			$ext = end(explode(".",strtolower(trim($_FILES["custom_marker"]["name"]))));
			if(in_array($ext,$valid_exts)){
				$max_dimension = 800; // Max new width or height, can not exceed this value.
				$dir = '../images/icons/';
				$postvars = array(
				"image"    => 'custom_marker.png',
				"image_tmp"    => $_FILES["custom_marker"]["tmp_name"],
				);
					if($ext == "jpg" || $ext == "jpeg"){
					$image = imagecreatefromjpeg($postvars["image_tmp"]);
					}
					else if($ext == "gif"){
					$image = imagecreatefromgif($postvars["image_tmp"]);
					}
					else if($ext == "png"){
					$image = imagecreatefrompng($postvars["image_tmp"]);
					}
					$size = getimagesize($postvars["image_tmp"]);
					$ratio = $size[0]/$size[1]; // width/height
					if( $ratio > 1) {
					$width = 58;
					$height = 58/$ratio;
					}
					else {
					$width = 58*$ratio;
					$height = 58;
					}
					
					$tmp = imagecreatetruecolor($width,$height);
					if($ext == "gif" or $ext == "png"){
						imagecolortransparent($tmp, imagecolorallocatealpha($tmp, 0, 0, 0, 127));
						imagealphablending($tmp, false);
						imagesavealpha($tmp, true);
						imagecopyresampled($tmp,$image,0,0,0,0,$width,$height,$size[0],$size[1]);
						$filename = $dir.$postvars["image"];
						imagepng($tmp,$filename,9);
					}
					
					else
					{
						$whiteBackground = imagecolorallocate($tmp, 255, 255, 255); 
						imagefill($tmp,0,0,$whiteBackground); // fill the background with white
						imagecopyresampled($tmp,$image,0,0,0,0,$width,$height,$size[0],$size[1]);
						$filename = $dir.$postvars["image"];
						imagejpeg($tmp,$filename,100);
					}
					imagedestroy($image);
					imagedestroy($tmp);
				}
			}
			  
				
				
          if(!empty($_FILES['custom_marker_active']['name'])){
			$valid_exts = array("jpg","jpeg","gif","png");
			$ext = end(explode(".",strtolower(trim($_FILES["custom_marker_active"]["name"]))));
			if(in_array($ext,$valid_exts)){
				$max_dimension = 800; // Max new width or height, can not exceed this value.
				 $dir = '../images/icons/';
				$postvars = array(
				"image"    => 'custom_marker_active.png',
				"image_tmp"    => $_FILES["custom_marker_active"]["tmp_name"],
				);
				 
					if($ext == "jpg" || $ext == "jpeg"){
					$image = imagecreatefromjpeg($postvars["image_tmp"]);
					}
					else if($ext == "gif"){
					$image = imagecreatefromgif($postvars["image_tmp"]);
					}
					else if($ext == "png"){
					$image = imagecreatefrompng($postvars["image_tmp"]);
					}
					$size = getimagesize($postvars["image_tmp"]);
					$ratio = $size[0]/$size[1]; // width/height
					if( $ratio > 1) {
					$width = 58;
					$height = 58/$ratio;
					}
					else {
					$width = 58*$ratio;
					$height = 58;
					}
					
					$tmp = imagecreatetruecolor($width,$height);
					if($ext == "gif" or $ext == "png"){
						imagecolortransparent($tmp, imagecolorallocatealpha($tmp, 0, 0, 0, 127));
						imagealphablending($tmp, false);
						imagesavealpha($tmp, true);
						imagecopyresampled($tmp,$image,0,0,0,0,$width,$height,$size[0],$size[1]);
						$filename = $dir.$postvars["image"];
						imagepng($tmp,$filename,9);
					}
					
					else
					{
						$whiteBackground = imagecolorallocate($tmp, 255, 255, 255); 
						imagefill($tmp,0,0,$whiteBackground); // fill the background with white
						imagecopyresampled($tmp,$image,0,0,0,0,$width,$height,$size[0],$size[1]);
						$filename = $dir.$postvars["image"];
						imagejpeg($tmp,$filename,100);
					}
					imagedestroy($image);
					imagedestroy($tmp);
				}
			}
	
}
?>