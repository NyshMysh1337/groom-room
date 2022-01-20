
const app = new Vue({
  el: "#tht",
  data: {
    valueInputName: '',
    valueInputService: '',
    selected: '',
    options: [
      { text: "Стрижка", value: 'Стрижка' },
      { text: "Маникюр", value: 'Маникюр' },
      { text: "Экспресс-линька", value: 'Экспресс-линька' },
    ],

    services: [{
    url: '',
    name: '',
    options: '',
    status: '',
  }],
  
},

  methods: {
      inputName(event){
        this.valueInputName = event.target.value;
      },
      inputService(event){
        this.valueInputService = event.target.value;
      },
      applicationForm(){
        this.services.push({
          url: "image/porodistye-sobaki-krasivye-kartinki-19.jpg",
          name: this.valueInputName,
          option: this.selected,
          status: "Обрабатывается"
        });
        this.valueInputName = '';
        this.status = 'Обрабатывается'
      },
  }
});
