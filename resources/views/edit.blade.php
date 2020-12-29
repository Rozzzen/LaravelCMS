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
<body class="createі">
<!-- Страница изменение поста  , аналогична созданию -->
<h2>Page editor</h1>
    <!-- Выводим номер страницы за ид -->
    <h3>Page number : {{$page->id}}</h2>
<!-- Выводим урл страницы  -->
<h2>Page url : {{$page->url}}</h2>
    <form action="{{url('editPage')}}" method="post">
        @csrf
        <label for="fname">alias</label>
        <input type="text" id="aliasOf" name="aliasOf" value="{{$page->aliasOf}}">
        <label for="fname">Title</label>
        <input type="text" id="caption" name="caption" value="{{$page->caption}}">
        <label for="fname">Parent code</label>
        <input type="text" id="parentCode" name="parentCode" value="{{$page->parentCode}}">
        <label for="fname">Order №</label>
        <input type="text" id="orderNum" name="orderNum" value="{{$page->orderNum}}">
        <label for="fname">Content</label>
        <textarea style="height:700px;width:700px;" type="text" id="content" name="content"
                                              required>{{$page->content}}</textarea>

        <input type="text" name='id' style="display:none" value='{{$page->id}}'>
        <input type="submit" id="form-submit" value="Apply changes">
    </form>

</body>
</html>
