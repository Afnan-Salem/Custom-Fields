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
<form id="myForm">
    <table class="table table-bordered" id="add_field" >
        <tr>
            <td>
                <div class="group">
                    <input type="text" name="name[]"  placeholder="Enter Form Field"><span class="highlight"></span><span class="bar"></span>
                </div>
            </td>
            <td>
                <br>
                <button type="button" class="btn btn-success" id="add">+
                </button>
            </td>
        </tr>
    </table>
    <input type="submit" id="submit" value="Submit" class="btn btn-primary">
</form>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script src="{{ URL::asset('js/index.js') }}"></script>




</body>
</html>
