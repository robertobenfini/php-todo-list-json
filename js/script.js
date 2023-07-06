const { createApp } = Vue;

createApp({
    data() {
        return {
            todoItem: '',
            todoList: [],
            apiUrl: 'server.php'
        }
    },

    mounted() {
        //chiamata axios
        axios.get(this.apiUrl).then((response) => {
            this.todoList = response.data
        })
    },

    methods: {


    },
}).mount('#app');