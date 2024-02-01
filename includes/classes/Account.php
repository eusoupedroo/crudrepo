<?php
	class Account {

		private $con;
		private $errorArray;

		public function __construct($con) {
			$this->con = $con;
			$this->errorArray = array();
		}

		public function register($un, $fn, $em, $pw) {
			$this->validateUsername($un);
			$this->validateFullName($fn);
			$this->validateEmails($em);
			$this->validatePassword($pw);

			if(empty($this->errorArray) == true) { return $this->insertUserDetails($un, $fn, $em, $pw); }
			else { return false; }
		}

		public function getError($error) {
			if(!in_array($error, $this->errorArray)) { $error = ""; }
			return "<span class='errorMessage'>$error</span>";
		}

		private function insertUserDetails($un, $fn, $em, $pw) {
			$encryptedPw = md5($pw);
			$date = date("Y-m-d");

			$result = mysqli_query($this->con, "INSERT INTO users VALUES ('', '$un', '$fn', '$em', '$encryptedPw', '$date')");
			return $result;
		}

		private function validateUsername($un) {

			if(strlen($un) > 25 || strlen($un) < 5) {
				array_push($this->errorArray, Constants::$usernameCharacters);
				return;
			}

			$checkUsernameQuery = mysqli_query($this->con, "SELECT username FROM users WHERE username='$un'");
			if(mysqli_num_rows($checkUsernameQuery) != 0) {
				array_push($this->errorArray, Constants::$usernameTaken);
				return;
			}

		}

		private function validateFullName($fn) {
			if(strlen($fn) > 25 || strlen($fn) < 2) {
				array_push($this->errorArray, Constants::$fullNameCharacters);
				return;
			}
		}

		private function validateEmails($em) {

            if(!filter_var($em, FILTER_VALIDATE_EMAIL)) {
				array_push($this->errorArray, Constants::$emailInvalid);
				return;
			}

			$checkEmailQuery = mysqli_query($this->con, "SELECT email FROM users WHERE email='$em'");
			if(mysqli_num_rows($checkEmailQuery) != 0) {
				array_push($this->errorArray, Constants::$emailTaken);
				return;
			}

		}

		private function validatePassword($pw) {
			
			if(preg_match('/[^A-Za-z0-9]/', $pw)) {
				array_push($this->errorArray, Constants::$passwordNotAlphanumeric);
				return;
			}

			if(strlen($pw) > 30 || strlen($pw) < 5) {
				array_push($this->errorArray, Constants::$passwordCharacters);
				return;
			}

		}
	}
?>