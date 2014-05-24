<?php foreach ($queries as $query): ?>
<pre><?php echo h($query['Query']['query']); ?></pre>
<hr />
<?php endforeach; ?>