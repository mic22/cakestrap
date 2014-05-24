db2
=========
## Project for Bazy danych II labs

There's no any ORM as decided on assigment.
I use simple methods to build queries dynamicly.
* find([mixed $where])
* listing([mixed $where, string $displayField])
* read(int $id)
* save(array $data)
* delete(int $id)

And query method do retrive any data
* query(string $sql)

Database connection, sessions, routing ect are managed by CakePHP framework