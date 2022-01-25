const app = new Vue({
  el: "#reg",
  data: {
    valueEmail: '',
    valuePassword: '',
    nevPassword: '',
    nevEmail: '',
},
  methods: {
    inputEmail(event){
      this.valueEmail = event.target.value;
    },
    inputPassword(event){
      this.valuePassword = event.target.value;
    },
    consoleData(){
      console.log(`email: ${this.valueEmail} password: ${this.valuePassword}`);
      this.valueEmail = '';
      this.valuePassword = '';
    }
  }  
});

const reg = new Vue({
  el: "#xue",
  data:{
    valueEmail: '',
    valuePassword: '',
    nevPassword: '',
    nevEmail: '',
  },
  methods:{
    nevEmail(event){
      this.valueEmail = event.target.value;
    },
    nevPassword(event){
      this.valuePassword = event.target.value;
    },
    consoleData(){
      console.log(`email: ${this.nevEmail} password: ${this.nevPassword}`);
      this.nevEmail = '';
      this.nevPassword = '';
    }
  }
})
