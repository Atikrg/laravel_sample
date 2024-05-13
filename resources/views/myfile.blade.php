<!DOCTYPE html>
<html lang="en">
@extends('links')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        <table class="table">
            <tr>
                <th class="text-uppercase">id</th>
                <th class="text-uppercase">name</th>
                <th class="text-uppercase">email</th>
                <th class="text-uppercase">password</th>
                <th class="text-uppercase">favourite number</th>
                <th class="text-uppercase">Actions</th>

            </tr>
            <tr>
                <td>1</td>
                <td>Atik Salim Rangnkar</td>
                <td>atikrangnekar28@gmail.com</td>
                <td>76292026</td>
                <td>0102</td>
                <td>
                    <button class="btn btn-danger">DELETE</button>
                    <button class="btn btn-info text-white">EDIT</button>
                </td>

            </tr>



        </table>

       
    </div>

</body>

</html>

<style>
    .spinner-border{
        display: none;
        position: absolute;
        margin-left: 45%;
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