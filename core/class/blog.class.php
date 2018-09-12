<?php
	# Blog class

	class Blog 
	{

		public function addPost($title,$content) 
		{
			global $db;
			$title = self::validate($title,8,64); // 8 - min 64 - max
			$content = self::validate($content,6,2000);

			if ($title != false && $content != false) {
				$result = $db->insert("INSERT INTO posts(title,content) values('$title','$content')");
				return true;
			}else{
				return false;
			}
		}

		public function editPost($id,$title,$content) 
		{
			global $db;
			$title = self::validate($title,8,64); // 8 - min 64 - max
			$content = self::validate($content,6,2000);

			if ($title != false && $content != false) {
				$result = $db->update("UPDATE posts SET
					title='$title',
					content='$content',
					updated_at=NOW()
					WHERE id='$id'");
				return true;
			}else{
				return false;
			}
		}

		public function addComment($id,$name,$email,$msg) 
		{
			global $db;
			$name = self::validate($name,2,24);
			$email = self::validate($email,4,64);
			$msg = self::validate($msg,1,255);

			if ($name != false && $email != false && $msg != false) {
				$result = $db->insert("INSERT INTO comments(post_id,name,email,msg) values('$id','$name','$email','$msg')");
				return true;
			}else{
				return false;
			}
		}

		static function validate($string,$min,$max) 
		{
			$string = trim($string);
    		$string = stripslashes($string);
    		$string = strip_tags($string);
    		$string = htmlspecialchars($string);

			if (!empty($string)) {
				$result = (mb_strlen($string) < $min || mb_strlen($string) > $max);
				if ($result) return false;
				return $string;
			}else{
				return false;
			}
		}

	}
