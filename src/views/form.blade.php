<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>
<div class="container">
    <form action="{{route('form.store')}}" method="post"> @csrf
        <label for="name">Name</label>
        <input name="name" type="text" placeholder="Type name"><br>
        <label for="class[]">Select any class</label><br>
        <input name="class[]" type="checkbox" value="a"> <label for="class"> Class A</label>
        <input name="class[]" type="checkbox" value="b"> <label for="class"> Class B</label>
        <input name="class[]" type="checkbox" value="c"> <label for="class"> Class C</label><br>
        <label for="status">Status</label><br>
        <input name="status" type="radio" value="active" checked> <label for="type">Active</label>
        <input name="status" type="radio" value="inactive"> <label for="type">Inactive</label><br>
        <label for="tag">Select Tag</label>
        <select name="tag">
            <option value="x">Tag X</option>
            <option value="y">Tag Y</option>
            <option value="z">Tag Z</option>
        </select><br>
        <button class="btn btn-dark" type="submit">Submit</button>
    </form>
    @if(isset($data))
        <hr>
        <table>
            <tr>
                <th>Name</th>
                <th>Class</th>
                <th>Status</th>
                <th>Tag</th>
            </tr>
            @foreach($data as $info)
                <tr>
                    <td style="border-bottom: 1px solid #ddd; border-right-style: groove">
                        {{$info->name}}
                    </td>
                    <td style="border-bottom: 1px solid #ddd; border-right-style: groove">
                        @foreach(json_decode(json_encode($info->class),true) as $class)
                            <span>{{$class}}</span>,
                        @endforeach
                    </td>
                    <td style="border-bottom: 1px solid #ddd; border-right-style: groove">
                        {{$info->status}}
                    </td>
                    <td style="border-bottom: 1px solid #ddd;">
                        {{$info->tag}}
                    </td>
                </tr>
            @endforeach
        </table>
    @endif
</div>
</body>
</html>
