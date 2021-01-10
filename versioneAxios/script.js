var app = new Vue ({
  el: "#app",
  data: {
    dischi: []
  },
  mounted: function () {
    axios
      .get('data.php')
      .then(response => {
        this.dischi = response.data;
    });
  }
});
