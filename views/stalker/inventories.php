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
<h1>Таблица вещей игроков</h1>
<a href="/stalker/create-inventories" class="btn btn-primary">Создать</a>

<table>
  <thead>
    <tr>
      <th><a href="http://yii.sru/stalker/index">item_parent</a></th>
      <th>item_id</th>
      <th>item_uses_number</th>
      <th>item_location</th>
      <th>actions</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($players as $player) {
      $inventories = $player->inventories;
      foreach ($inventories as $inventory) { ?>
        <tr>
          <th><?php echo $inventory->item_parent ?> </th>
          <th><?php echo $inventory->item_id ?> </th>
          <th><?php echo $inventory->item_uses_number ?> </th>
          <th><?php echo $inventory->item_location ?> </th>
          <th>
            <a href="/stalker/edit-inventories/<?=$inventory->spot_id?>">Редактировать</a>
            |
            <a href="/stalker/delete-inventories/<?=$inventory->spot_id?>">Удалить</a>
          </th>
        </tr>
      <?php }
    } ?>
  </tbody>
</table>
