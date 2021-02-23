<h2>Requests uses join:</h2>
<ul>
  <?
    foreach($table as $row) {
      $info = '';
      $info_list = json_decode($row->info);
      if (is_array($info_list)) {
        foreach($info_list as $val) {
          $info .= $val->name.": ".$val->value."; ";
        }
      }
      echo "
        <li>
          <span class='width0'>
            {$row->r_id}&nbsp;
          </span>
          <span class='width1'>
            {$row->name}&nbsp;
          </span>
          <span class='width1'>
            {$row->sum}&nbsp;
          </span>
          <span class='width1'>
            {$row->date}&nbsp;
          </span>
          <span class='width2'>
            {$info}&nbsp;
          </span>
        </li>
        ";
    }
  ?>
</ul>
