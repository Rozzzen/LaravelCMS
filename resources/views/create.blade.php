<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Traveling</title>

    <style>
        * {
            box-sizing: border-box;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        form input {
            width: 100%;
        }

        form div {
            display: flex;
            margin-bottom: 24px;
        }

        .create {
            position: absolute;
            top: 50%;
            left: 50%;
            margin: 0 -50% 0 0;
            transform: translate(-50%, -50%);
            line-height: 150%;
        }

        input[type=text], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        h2 {
            display: flex;
            text-align: center;
            justify-content: center;
            margin: 0 auto 10px;
        }

        input[type=text], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }
        div {
            border-radius: 5px;
            background-color: black;
            padding: 20px;
            color: white;
        }
    </style>
</head>
<body class="create ">
<!-- Страница создание поста  -->
<h1>Create page</h1>

    <form action="{{url('createPage')}}" method="post">
    @csrf
    <!-- Выводим поля для вода данных-->
        <label for="fname">Title</label>
        <input type="text" id="caption" name="caption" required maxlength="71">
        <label for="fname">alias</label>
        <input type="text" id="aliasOf" name="aliasOf" maxlength="40">
        <label for="fname">URL</label>
        <input type="text" id="url" name="url" required maxlength="40">
        <label for="fname">parent</label>
        <input type="text" id="parentCode" name="parentCode" required maxlength="71">
        <label for="fname">order</label>
        <input type="text" id="orderNum" name="orderNum" required maxlength="40">
        <!-- Проверяем данные на пагинатор и водим данные которые потом будут подставляться под контент-->
        <label for="fname">Content</label>
        <textarea style="height:200px;width:700px;" type="text" id="content" name="content"
                                              required pattern="<([A-Z][A-Z0-9]*)\b[^>]*>(.*?)</\1>"></textarea>
        <input type="submit" id="form-submit" value="Submit">
    </form>

</body>
</html>
