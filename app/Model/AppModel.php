<?php
App::uses('Model', 'Model');

class AppModel extends Model
{
	public $table_name, $alias_name;

	public function __construct()
	{
		parent::__construct();

		$this->table_name = strtolower(Inflector::pluralize($this->name));
		$this->alias_name = ucfirst(Inflector::singularize($this->table_name));
	}

	private function query_log($query)
	{
		$this->query("INSERT INTO queries (query) VALUES ('".mysql_real_escape_string($query)."')");
	}

	public function find($where = null)
	{
		$where = $where != null ? 'WHERE '.$where : null;

		$query = "SELECT * FROM $this->table_name AS `$this->alias_name` $where ORDER BY id DESC";

		$this->query_log($query);
		return $this->query($query);
	}

	public function listing($where = null, $displayField = 'id')
	{
		$data = $this->find($where);
		$return = array();
		foreach($data as &$row)
			$return[$row[$this->alias_name]['id']] = $row[$this->alias_name][$displayField];
		unset($data);

		return $return;
	}

	public function read($id)
	{
		$query = "SELECT * FROM $this->table_name AS `$this->alias_name` WHERE id = '$id' LIMIT 1";

		$this->query_log($query);

		return $this->query($query)[0];
	}

	public function save($data)
	{
		if(method_exists($this, 'beforeSave'))
			$this->beforeSave($data);

		$name = Inflector::singularize($this->alias_name);
		$data = $data[$name];

		$id = $data['id'];
		$update = is_numeric($id);
		unset($data['id']);

		$fields = '`'.implode('`, `', array_keys($data)).'`';
		$values = '\''.implode('\', \'', array_values($data)).'\'';

		foreach($data as $field => $value)
		{
			if($value != null)
				$u[] = "`$field` = '$value'";
		}
		$u = implode(', ', $u);

		$query = $update ? "UPDATE $this->table_name SET $u WHERE id = '$id' LIMIT 1" : "INSERT INTO $this->table_name ($fields) VALUES ($values)";

		$this->query_log($query);

		$this->query($query);

		if(method_exists($this, 'afterSave'))
			$this->afterSave($this->getAffectedRows());

		return $this->getAffectedRows();
	}

	public function delete($id)
	{
		$query = "DELETE FROM $this->table_name WHERE id = '$id' LIMIT 1";

		$this->query_log($query);

		$this->query($query);
		return $this->getAffectedRows();
	}
}
