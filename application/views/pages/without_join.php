<h1>Request WITHOUT Join</h1>
<h2>Buyers:</h2>
<ul>
  <?
    foreach($buyers as $row) {
      echo "<li>$row->name</li>";
    }
  ?>
</ul>
<h2>Requests:</h2>
<ul>
  <?
    foreach($requests as $row) {
      echo "<li>$row->sum</li>";
    }
  ?>
</ul>
<h2>Buyers:</h2>
<ul>
  <?
    foreach($requests_info as $row) {
      echo "<li>{$row->info[1]}</li>";
    }
  ?>
</ul>