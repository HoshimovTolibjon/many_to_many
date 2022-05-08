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
          <a href="{{url('/create-role')}}" class="btn btn-primary m-3">add role</a>
          <a href="{{url('/create-user')}}" class="btn btn-success m-3">add user</a>
      </div>
    <div class="row">
         <table class="table table-bordered">
               <tr>
                   <th>id</th>  <th>name </th> <th>roles</th>
               </tr>

             @foreach(\App\Models\User::all() as $user)
                 <tr>
                     <td>{{$user->id}}</td>  <td>{{$user->name}}</td>

                     <td>
                         @foreach($user->roles as $role)
                             <span class="badge badge-primary">{{$role->name}}</span>
                         @endforeach
                     </td>
                 </tr>
             @endforeach
         </table>
    </div>
</div>


</body>
</html>
