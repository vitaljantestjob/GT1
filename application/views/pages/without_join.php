<h1>Request WITHOUT Join</h1>
<h2>Requests list:</h2>
<ul>
  <?
    foreach($table as $row) {
      $info = '';
      if (is_array($row['request_info'])) {
        foreach($row['request_info'] as $val) {
          $info .= $val->name.": ".$val->value.";";
        }
      }
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
            {$info}
          </span>
        </li>
        ";
    }
  ?>
</ul>
