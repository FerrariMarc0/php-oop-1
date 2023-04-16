const { createApp } = Vue

createApp({
    data() {
        return {
        apiUrl: 'server.php',
        movies: []
        }
    },
    methods: {
        getMovies() {
        axios.get(this.apiUrl).then((response) => {
            
            this.movies = response.data;
            console.log(this.movies);
        })
        }
    },
    created() {
        this.getMovies()
    }
}).mount('#app')