function init() {
  new Vue({
    el: '#app',
    data: {
      dischi: []
    },
    methods: {
      update: function(author) {
        axios
          .get('data.php', {
            params: {
              'author': author
            }
          })
          .then(res => {
            this.dischi = res.data;
          });
      },
      clear: function() {
        this.update('');
      }
    },
    mounted: function() {
        this.clear();
    }
  });
}

init();
