<?php
App::uses('AppModel', 'Model');

class Comment extends AppModel {
	public function getComments($where)
	{
		$where = $where != null ? 'WHERE '.$where : null;

		$query = "SELECT `Comment`.*, `User`.* FROM `comments` AS `Comment` LEFT JOIN `users` AS `User` ON `Comment`.`user_id` = `User`.`id` $where ORDER BY `Comment`.`id` DESC";

		//$this->query_log($query);
		return $this->query($query);
	}
}