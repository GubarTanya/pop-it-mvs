<a href="<?= app()->route->getUrl('/staff') ?>">Добавить нового сотрудника</a>
<a href="<?= app()->route->getUrl('/division') ?>">Добавить новое подразделение</a>
<a href="<?= app()->route->getUrl('/list') ?>">Список сотрудников</a>
<a href="<?= app()->route->getUrl('/attach') ?>">Прикрепить сотрудника к подразделению</a>

<form method="post">
    <label>Название подразделения <input type="" name=""></label>
    <label>Вид подразделения <input type="" name=""></label>
    <button>Добавить</button>
</form>