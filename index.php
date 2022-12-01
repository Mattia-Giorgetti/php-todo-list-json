<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>PHP ToDo List JSON</title>
</head>

<body>
    <div id="app">
        <div class="wrap w-50 m-auto pt-4 rounded-3">
            <h1 class="mb-5">{{title}}</h1>
            <div class="d-flex align-items-center mb-5 gap-4">
                <input type="text" v-model="newTodoText" class="p-1">
                <button class="btn my-color" @click="addTodo">Aggiungi</button>
            </div>
            <ul class="ps-0">
                <li v-for="(todo, index) in todoList" class="d-flex justify-content-between border-bottom">
                    <span class="todo" :class="todo.done ? 'done' : ''">{{todo.text}}</span>
                    <span class="ms-auto me-3" @click.stop="toggleTodo(index)"><i
                            class="fa-solid fa-circle-check"></i></span>
                    <span class="d-block" @click.stop="deleteTodo(index)"><i class="fa-solid fa-trash-can"></i></span>
                </li>
            </ul>
        </div>
    </div>
    <script src="./script.js"></script>
</body>

</html>