<h2>Requests list:</h2>
<ul>
  <?
    foreach($table as $row) {
      $info = '';
      if (is_array($row['request_info'])) {
        foreach($row['request_info'] as $val) {
          $info .= $val->name.": ".$val->value."; ";
        }
      }
      echo "
        <li>
          <span class='width0'>
            {$row['request_id']}
          </span>
          <span class='width1'>
            {$row['buyer_name']}
          </span>
          <span class='width1'>
            {$row['sum']}
          </span>
          <span class='width1'>
            {$row['date']}
          </span>
          <span class='width2'>
            {$info}&nbsp;
          </span>
        </li>
        ";
    }
  ?>
</ul>
