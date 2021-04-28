<?php $this->beginBlock('block1'); ?>
  <h1>Система управления персонажем</h1>
<?php $this->endBlock(); ?>

<style type="text/css">
  table {
    font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
    font-size: 14px;
    border-collapse: collapse;
    text-align: center;
  }
  th, td:first-child {
    background: #AFCDE7;
    color: white;
    padding: 10px 20px;
  }
  th, td {
    border-style: solid;
    border-width: 0 1px 1px 0;
    border-color: white;
  }
  td {
    background: #D8E6F3;
  }
  th:first-child, td:first-child {
    text-align: center;
  }
</style>
<h1>Таблица игроков</h1>

<?php 
  echo '<table>';
    echo '<thead>';
      echo'<tr>';
        echo '<th>' . 'user_id' . '</th>';
        echo '<th>' . 'name' . '</th>';
        echo '<th>' . 'clan' . '</th>';
        echo '<th>' . 'registration_date' . '</th>';
        echo '<th>' . 'last_visit_date' . '</th>';
        echo '<th>' . 'password' . '</th>';
        echo '<th>' . 'killing_number' . '</th>';
        echo '<th>' . 'actions' . '</th>';
      echo'</tr>';
    echo '</thead>';
    echo '<tbody>';
    foreach ($players as $player) {
      echo'<tr>';
        echo '<th>' . $player->user_id . '</th>';
        echo '<th>' . $player->name . '</th>';
        echo '<th>' . $player->clan . '</th>';
        echo '<th>' . $player->registration_date . '</th>';
        echo '<th>' . $player->last_visit_date . '</th>';
        echo '<th>' . $player->password . '</th>';
        echo '<th>' . $player->killing_number . '</th>';
        echo '<th><a href="/admin/default/edit/<?=$player->user_id?>">Редактировать</a>|<a href="/admin/default/edit/<?=$player->user_id?">Удалить</a></th>';
      echo '</tr>';
    }
    echo '</tbody>';
  echo '</table>';
?>

<br/>
<br/>
<br/>

<h1>Таблица вещей</h1>


<?php 
  echo '<table>';
    echo '<thead>';
      echo'<tr>';
        echo '<th>' . 'user_id' . '</th>';
        echo '<th>' . 'item_id' . '</th>';
        echo '<th>' . 'item_uses_number' . '</th>';
        echo '<th>' . 'item_location' . '</th>';
        echo '<th>' . 'actions' . '</th>';
      echo'</tr>';
    echo '</thead>';
    echo '<tbody>';
      foreach ($players as $player) {
        $items = $player->items;
        foreach ($items as $item) {
          echo'<tr>';
            echo '<th>' . $player->user_id . '</th>';
            echo '<th>' . $item->item_id . '</th>';
            echo '<th>' . $item->item_uses_number . '</th>';
            echo '<th>' . $item->item_location . '</th>';
            echo '<th><a href="/admin/default/edit/<?=$player->user_id?>">Редактировать</a>|<a href="/admin/default/edit/<?=$player->user_id?">Удалить</a></th>';
          echo'</tr>';
        }
      }
    echo '</tbody>';
  echo '</table>';
?>

<br/>
<br/>
<br/>

<h1>Таблица передвижений</h1>


<?php
  echo '<table>';
    echo '<thead>';
      echo'<tr>';
        echo '<th>' . 'user_id' . '</th>';
        echo '<th>' . 'location_id' . '</th>';
        echo '<th>' . 'last_visit_date' . '</th>';
        echo '<th>' . 'actions' . '</th>';
      echo'</tr>';
    echo '</thead>';
    echo '<tbody>';
    foreach ($players as $player) {
      $movements = $player->movements;
      foreach ($movements as $movement) {
        echo'<tr>';
          echo '<th>' . $player->user_id . '</th>';
          echo '<th>' . $movement->location_id . '</th>';
          echo '<th>' . $movement->last_visit_date . '</th>';
          echo '<th><a href="/admin/default/edit/<?=$player->user_id?>">Редактировать</a>|<a href="/admin/default/edit/<?=$player->user_id?">Удалить</a></th>';
        echo'</tr>';
      }
    }
    echo '</tbody>';
  echo '</table>';
?>