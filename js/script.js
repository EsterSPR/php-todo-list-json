const { createApp } = Vue;

createApp({

    data() {
        return{
            server: 'server.php',
            toDoItems: [],
            toDoBar: '',
        }
    },
    methods: {
        toDoItemAdd(){
            const data = {
                toDoBarContent: this.toDoBar,
                done: false,
            }

            axios.post(this.server, data, {
                headers: {'Content-Type': 'multipart/form-data '}
            }).then((response) => {
                this.toDoBar = '';
                this.toDoItems = response.data;
            })
        }
    },
    mounted(){
        axios.get(this.server).then((response) => {
            
            // let jsonFile = JSON.parse(response.data);
            // console.log(jsonFile)

            this.toDoItems = response.data;
        });
    }

}).mount('#app')