<h1>Request WITHOUT Join</h1>
<h2>Requests list:</h2>
<ul>
  <?
    foreach($table as $row) {
      echo "
        <li>
          <span>
            {$row['request_id']}
          </span>
          <span>
            {$row['buyer_name']}
          </span>
          <span>
            {$row['sum']}
          </span>
          <span>
            {$row['date']}
          </span>
          <span>
            {$row['request_info'][0]->name}
          </span>
        </li>
        ";
    }
  ?>
</ul>
