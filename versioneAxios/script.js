

function init() {

  var app = new Vue ({
    el: "#app",
    data: {
      dischi: []
    },
    mounted: function () {
      axios
        .get('data.php')
        .then(response => {
          console.log(response.data);
          this.dischi = response.data;
      });
    }
  });


}

init();
