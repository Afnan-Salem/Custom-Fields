<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="_token" content="{{ csrf_token() }}"/>
    <title>Material Design Login Form</title>



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">

</head>

<body>

<hgroup>
    <h1>Create Form</h1>
</hgroup>
<form id="myForm" >
    <table class="table table-bordered" id="add_field" >
        <tr>
            <td>
                <div class="group">
                    <input type="text" name="name[]" id="name" placeholder="Enter Form Field" required><span class="highlight"></span><span class="bar"></span>
                </div>
            </td>
            <td>
                <button type="button" class="btn btn-success" id="add">+
                </button>
            </td>
        </tr>
    </table>
    <input type="submit" id="submit" value="Submit" class="btn btn-primary">
</form>
<div class="form">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Field</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($rows as $row)
            <form method="get" action="edit/{{$row->id}}">
                <tr>
                    <td>{{$row->id}}</td>
                    <td><div class="group"><input type="text" name="name" id="name" value="{{$row->name}}"><span class="highlight"></span><span class="bar"></span></div></td>
                    <td><input type="submit" value="Save" class="btn btn-success small"> | <a href="delete/{{$row->id}}" class="btn btn-danger small">Delete</a> </td>
                </tr>
            </form>
        @endforeach
        {{$rows->render()}}
        </tbody>
    </table>
</div>


<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.3/angular.min.js"></script>


<script src="{{ URL::asset('js/index.js') }}"></script>




</body>
</html>
