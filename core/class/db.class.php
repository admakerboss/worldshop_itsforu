<?php
	// Класс для работы с СУБД MySQL
	class DB {

		var $connection = null;

		# Подключаемся к БД
		public function open() {
			$this->connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
			if (!$this->connection) die("ERROR WITH DATABASE CONNECTION");
			mysqli_query($this->connection,"SET NAMES utf8");
			return $this->connection;
		}

		# Выбор данных из БД
		public function select($q, $debug = 0) {
			if ($q != "") {
				$list = array();

				$result = mysqli_query($this->connection,$q);
				while ($r = mysqli_fetch_assoc($result)) {
					$list[] = $r;
				}    

				if ($debug) echo mysqli_errno($this->connection).":".mysqli_error($this->connection);

				return $list;
			}else return array();
		} 

		# Добавление данных в БД
		public function insert($q, $debug = 0) {
			if ($q != "") {
				if(mysqli_query($this->connection,$q)) {
					return mysqli_insert_id($this->connection);
				}else{
					if ($debug) echo mysqli_errno($this->connection).":".mysqli_error($this->connection);
					return 0;
				}
			}
		}

		# Изменение данных в БД 
		public function update($q, $debug = 0) {
			if ($q != "") {
				if ($res = mysqli_query($this->connection,$q)) {
					if (mysqli_affected_rows($this->connection) == 0) return 1; else return mysqli_affected_rows($this->connection);

				}
				if ($debug == 1) return mysqli_errno($this->connection).":".mysqli_error($this->connection)." | ".$q." |";
				return 0;
			} 
		}

		# Удаление из БД
		public function delete($q = "", $debug = 0){
			if ($q != "") {
				if($debug) echo $q;
				return intval(mysqli_query($this->connection,$q))*mysqli_affected_rows($this->connection);
			}
		}

		# Count
		public function count($q = "", $debug = 0){
			if ($q != "") {
				if($debug) echo $q;
				$result = mysqli_query($this->connection,$q);
				$r = mysqli_fetch_assoc($result);
				if (isset($r['COUNT(1)'])) {
					return $r['COUNT(1)'];
				}
				return $r['COUNT(0)'];
			}
		}

		# Закрыть соеденение
		public function close($connect){
			mysqli_close($connect);
		}

	}