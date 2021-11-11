<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="product" method="post">
        @csrf
        <label for="name">Введите ФИО</label>
        <input type="text" id="name" name="name" placeholder="ФИО"/>
        <label for="comment">Введите комментарий</label>
        <textarea name="comment" id="comment" cols="30" rows="10" placeholder="Коммент"></textarea>
        <label for="code">Введите артикул</label>
        <input type="text" id="code" name="code" placeholder="Артикул"/>
        <label for="brand">Введите бренд</label>
        <input type="text" id="brand" name="brand" placeholder="Брэнд"/>
        <button type="submit" name="submit">Отправить</button>
    </form>
</body>
</html>