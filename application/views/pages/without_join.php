<h2>Requests list:</h2>
<ul>
  <li>
    <span class='width0'>request_id</span>
    <span class='width0'>buyer_id</span>
    <span class='width1'>buyer_name</span>
    <span class='width1'>sum</span>
    <span class='width1'>date</span>
    <span class='width2'>info</span>
  </li>
  <?
    foreach($table as $key=>$val) {
      $info = '';
      if (is_array($val['request_info'])) {
        foreach($val['request_info'] as $item) {
          $info .= $item->name.": ".$item->value."; ";
        }
      }
      echo "
        <li>
          <span class='width0'>
            {$key}
          </span>
          <span class='width0'>
            {$val['buyer_id']}
          </span>
          <span class='width1'>
            {$val['buyer']}
          </span>
          <span class='width1'>
            {$val['sum']}
          </span>
          <span class='width1'>
            {$val['date']}
          </span>
          <span class='width2'>
            {$info}&nbsp;
          </span>
        </li>
        ";
    }
  ?>
</ul>
