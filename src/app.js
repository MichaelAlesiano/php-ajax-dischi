var app = new Vue ({
  el: '#app',
  data: {
    dischi: [],
    tipi : [],
    filtro : 'All'
  },
  mounted(){
    axios
    .get('server.php')
    .then((result ) =>  {
      this.dischi = result.data;
      console.log(this.dischi);
      this.dischi.forEach((element) => {
        if(!this.tipi.includes(element.genere)){
          this.tipi.push(element.genere);
        }
      });
    });
  },
  methods: {
    sceltaGenere(){
      console.log(this.filtro);
    }
  }

});
