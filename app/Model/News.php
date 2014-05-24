<?php
App::uses('AppModel', 'Model');

class News extends AppModel {
	public function getNews()
	{
		$query = "SELECT `News`.*, COUNT(`Comment`.`id`) AS `count` FROM `news` AS `News` LEFT JOIN `comments` AS `Comment` ON `News`.`id` = `Comment`.`news_id` GROUP BY `Comment`.`news_id` ORDER BY `News`.`id` DESC";
		//$this->query_log($query);

		return $this->query($query);
	}
}