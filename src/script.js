import Vue from 'vue';

const axios = require('axios').default;

var app = new Vue({
  el: '#app',
  data: {
    library: [],
    
  },
  mounted: function(){
    
    axios.get('server.php').then( element => {
     console.log(element);
      this.library= element.data;
     
    });
    
  }
 
  
})