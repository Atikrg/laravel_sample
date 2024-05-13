<!DOCTYPE html>
<html lang="en">
@extends('links')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
    <div class="container">
        <div class="header">
            <h1>CRUD OPERATIONS</h1>
            <br>


        </div>
        <form class="crud_form" method="POST">
            <br>
            <div>
                <div>
                    <input type="number" name="id" placeholder="Enter id" />
                </div>
                <div>
                    <input type="text" name="full_name" placeholder="Enter your full name" />
                </div>
                <div>
                    <input type="email" name="email" placeholder="Enter email" />
                </div>
                <div>
                    <input type="password" name="password" placeholder="Enter your password" />
                </div>
                <div>
                    <input type="number" name="number" placeholder="favourite number" />
                </div>
                <div class="buttons">
                    <div>
                        <button class="btn btn-outline-primary" type="submit">Submit</button>
                    </div>
                    <div>
                        <a href="#">Next</a>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <hr />

    <div class="container-2 list">
        @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
        @endif

        <table class="table">
            <tr>
                <th class="text-uppercase">id</th>
                <th class="text-uppercase">name</th>
                <th class="text-uppercase">email</th>
                <th class="text-uppercase">password</th>
                <th class="text-uppercase">favourite number</th>
                <th class="text-uppercase" colspan="2">Actions</th>

            </tr>
            @if($users->isNotEmpty())
            @foreach($users as $user)
            <tr class="users_id-{{ $user->id }}">
                <td>{{ $user->id }}</td>
                <td>{{ $user->full_name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->password }}</td>
                <td>{{ $user->number }}</td>
                
                    <td><a href="#" onclick="deleteUser({{ $user->id }})" class="btn btn-danger btn-sm">DELETE</a>
                        <form id="user-delete-{{$user->id}}" action="{{ route('users.destroy', $user->id) }}" method="post">
                            @csrf
                            @method('delete')
                        </form>
                    </td>
                    <td>
                    <button class="btn btn-info text-white btn-sm">EDIT</button> 
    
                    </td>

                

            </tr>

            @endforeach
            @else
            <tr>
                <td colspan="6">No users found.</td>
            </tr>
            @endif



        </table>

        <div class="paginate">
            {{$users->links()}}

        </div>
    </div>

</body>

</html>

<style>
    .spinner-border {
        display: none;
        position: absolute;
        margin-left: 45%;
    }

    .paginate {
        margin: 12px;
    }

    .container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin-bottom: 34px;
    }

    .buttons {
        margin-top: 6px;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }
</style>


<script>
 function deleteUser(id) {
        if (confirm("Are you sure you want to delete?")) {
            console.log(document.getElementById('user-delete-' + id));
          
                document.getElementById('user-delete-' + id).submit();
            }

        }
    
</script>