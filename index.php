<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>

    <link rel="stylesheet" type="text/css" href="css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.1/axios.min.js" integrity="sha512-NbjaUHU8g0+Y8tMcRtIz0irSU3MjLlEdCvp82MqciVF4R2Ru/eaXHDjNSOvS6EfhRYbmQHuznp/ghbUvcC0NVw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
</head>
<body>
    
<div id="app">
    <div class="container">

        <div class="row text-center">
            <div class="col-12"> <h1>To Do List</h1> </div>
        </div>

        <div class="row bg-white rounded">
            <div class="col-12">

                <ul>
                    <li v-for="(item, index) in toDoItems" :class="(item.done === true) ? 'done' : ''"> {{ item.todo }}  </li>
                </ul>

            </div>
        </div>
        
        <div class="row inputrow">
            <div class="col-12">
                <div class="input-group mt-3">
                    <input type="text" class="form-control border-warning" placeholder="Inserisci elemento..." aria-label="addlist" aria-describedby="button-addlist">
                    <button class="btn btn-lg btn-outline-warning" type="button" id="button-addlist" @click="toDoItemAdd()">Inserisci</button>
                </div>
            </div>
        </div>

    </div>
</div>


<script src="./js/script.js"></script>

</body>
</html>