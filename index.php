<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>PHP ToDo List JSON</title>
</head>

<body>
    <div id="app">
        <h1>{{title}}</h1>
        <input type="text" v-model="newTodoText" class="mb-3">
        <button @click="addTodo">Aggiungi</button>
        <ul>
            <li v-for="(todo, index) in todoList" class="todo" :class="todo.done ? 'done' : ''">{{todo.text}}</li>
        </ul>
    </div>
    <script src="./script.js"></script>
</body>

</html>