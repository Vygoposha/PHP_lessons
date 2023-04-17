<style>
    input {
        margin-bottom: 20px;
    }
</style>

<form action="#" method="POST">
    <!-- вместо # вписывается фаайл обрабатывающий форму. Если не вписывать, то обработчиком выступает сама старница -->
    <input type="text" id="" name="name" placeholder="Input name"><br>
    <label for="check">I'm 18+</label>
    <input type="checkbox" id="check" name="age"><br>
    <input type="submit" name="submit" value="Вход">
</form>

<?php
// $_POST - массив в который передаются данные из POST запроса формы
// print_r($_POST);
if (isset($_POST['submit'])){
    $name = trim($_POST['name']);
    if(!preg_match('&^[a-zA-Za-яА-ЯёЁ]+$&u', $name)){//проверка корректности имени
        exit ('Имя не корректно');
    }
    $age_submit = $_POST['age']??'0';//Если age не передано, то значение по умолчанию 0
    // записываем в переменные данные переданные в POST запросе
    if ($age_submit == 'on'){
        echo "$name, доступ разрешен";
    }else{
        echo "$name, вам нет 18 лет";
    }
}

?>