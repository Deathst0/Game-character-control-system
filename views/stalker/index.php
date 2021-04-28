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
<a href="/stalker/create" class="btn btn-primary">Создать</a>

<table>
  <thead>
    <tr>
      <th>user_id</th>
      <th>name</th>
      <th>clan</th>
      <th>registration_date</th>
      <th><a href="http://yii.sru/stalker/moves">last_visit_date</a></th>
      <th>password</th>
      <th>killing_number</th>
      <th>actions</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($players as $player) {
      $movements = $player->movements;
      foreach ($movements as $movement) { ?>
        <tr>
          <th><?php echo $player->user_id; ?></th>
          <th><?php echo $player->name; ?></th>
          <th><?php echo $player->clan; ?></th>
          <th><?php echo $player->registration_date; ?></th>
          <th><?php echo $movement->last_visit_date; ?></th>
          <th><?php echo $player->password; ?></th>
          <th><?php echo $player->killing_number; ?></th>
          <th>
            <a href='/stalker/edit/<?=$player->user_id?>'>Редактировать</a>
            |
            <a href='/stalker/delete/<?=$player->user_id?>'>Удалить</a>
          </th>
        </tr>
      <?php }
    } ?>
  </tbody>
</table>