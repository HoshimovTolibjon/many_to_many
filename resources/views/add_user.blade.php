<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>


<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form action="{{url('/store-user')}}" method="post">
                @csrf
                  <div class="form-group">
                      <label for="">name</label>
                      <input type="text" name="name" class="form-control">
                  </div>
                <div class="form-group">
                    <label for="">select role</label>
                    <select name="roles[]" class="custom-select" multiple>
                        <option value="" disabled selected>select role</option>
                        @foreach(\App\Models\Role::all() as $role)
                            <option value="{{$role->id}}">{{$role->name}}</option>
                        @endforeach
                    </select>
                </div>

                <input type="submit" class="btn btn-primary" value="add user">

            </form>
        </div>
    </div>
</div>


</body>
</html>
