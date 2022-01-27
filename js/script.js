Vue.config.devtools = true;

const app = new Vue({
    el: '#root',
    data: {
        discs: [],
        selectedGenre: ''
    },
    methods: {
        getDiscsApi: function() {
            axios.get('http://localhost:8888/php-ajax-dischi/server.php',
            {
                params: {
                    genre: this.selectedGenre
                }
            })
            .then((response) => {
                this.discs = response.data;
            });
        }
    },
    created: function() {
        this.getDiscsApi();
    }
});