const { createApp } = Vue;

const app = createApp({
    data(){
        return {
            title: 'To Do List',
            todoList: [],
            apiURL: './server.php',
            newTodoText: '',
        }
    }, 
    methods: {
        getTodo(){
            axios.get(this.apiURL).then((response) => {
                this.todoList = response.data;
            })
        },
        addTodo(){
            const data = {
                newTodoText: this.newTodoText,
            }
            axios.post(this.apiURL, data, {headers: {'Content-Type': 'multipart/form-data'}}).then((response) => {
                console.log(response.data);

                this.getTodo();
                this.newTodoText = '';
            })
        } 
    },
    mounted() {
        this.getTodo();
    },
}).mount('#app');