<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin</title>

    <style>
        table span {
            margin-right: 8px;
        }

        .header__top {
            width: 100%;

            height: 600px;
        }

        .body__body {
            margin: 0;
            position: absolute;
            left: 50%;
            margin-right: -50%;
            transform: translate(-50%, -50%);
            line-height: 150%;

        }

        h1 {
            color: white;
            text-align: center;
        }

        a.button7 {
            font-weight: 600;
            color: black;
            text-decoration: none;
            padding: .5em 1em calc(.8em + 2px);
            border-radius: 2px;
            cursor: pointer;
            transition: 0.2s;
        }

        body {

            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }

        .center {
            text-align: center;
        }

        h2 {
            display: flex;
            text-align: right;
            justify-content: right;
        }

        .styled-table {
            text-align: center;
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 0.9em;
            font-family: sans-serif;
            min-width: 400px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        }

        .styled-table th,
        .styled-table td {
            padding: 12px 15px;
        }
    </style>
</head>
<header class="header__top">

</header>

<body class="body__body">
<a href='/default' class="button7 ">Главная страница</a>

<!-- Таблица админки -->
<table class="styled-table">
    <thead>
    <tr>
        <td>alias</td>
        <td>URL</td>
        <td>Parent</td>
        <td>Order№</td>
        <td>Title</td>
        <td>Creation date</td>
        <td>Edit date</td>
        <td>№</td>
        <td>Edit</td>
        <td>Delete</td>
        <td>Children</td>
        <td></td>
    </tr>
    </thead>
    @foreach($pagesList as $page)
        <tr>
            <td><span>{{$page->aliasOf}}</span></td>
            <td><span>{{$page->url}}</span></td>
            <td><span>{{$page->parentCode}}</span></td>
            <td><span>{{$page->orderNum}}</span></td>
            <td><span>{{$page->caption}}</span></td>
            <td><span>{{$page->createdDate}}</span></td>
            <td><span>{{$page->editedDate}}</span></td>
            <td><span>{{$page->id}}</span></td>
        @if($page->url != 'default')
            <!--  действие изменить страницу -->
                <td><span><a href='admin/edit/{{$page->id}}' class="button7"><button>Изменить</button></a></span></td>
                <!-- метод пост , действие удаление страницы -->
                <td style="display:flex"><span><form action="{{url('deletePage')}}" method="POST">
                    @csrf
                    <input type="text" name='id' style="display:none" value='{{$page->id}}'>
                            <!--  действие удалить страницу -->
                    <input type="submit" id="form-submit" value="Delete">
                </form></span></td>

                <td><span><a href="{{route('chi')}}/{{$page->url}}" class="button7"><button>children</button></a></span>
                </td>
                <td><span><a href="{{url($page->url)}}" class="button7"><button>View</button></a></span></td>
            @endif
        </tr>

@endforeach
<!--  выводим количетсво страниц -->

</table>
<div class="center">
    <!--  действие добавить новый пост на страницу -->
    <span><a href="{{route('new')}}" class="button7 "><button> Add new page</button></a></span>
</div>
<div class="center1">
    <!--  действие переход на главную страницу с родителями -->
</div>
</body>
<footer>
</footer>
</html>
