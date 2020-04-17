
import Vue from 'vue';
import VCalendar from 'v-calendar';
import moment from 'moment';
import {db} from '../../firebase';
Vue.use(VCalendar, {
  });
  
  Vue.use(require('vue-moment'));
export default {
  name: 'calendar',
  components: {
    
  },
  props: [

  ],
  data () {
    return {
          addPlantToFieldDate: new Date()  , //Date from database (when add plant to field)
          startWatering: moment(this.addPlantToFieldDate).add('days',1).format('YYYY-MM-DD'), //Date to Start Watering
          plantDay: moment(this.startWatering).add('days',7).format('YYYY-MM-DD'), //Date to Plant
          getWatering:[] // Schedule from database based on plant type (2-3month , 4-5 month, 6 month)
    }
  },
  computed: {
     
  },
  mounted () {
  },
  methods: {
    getWateringDay(){
        db.collection("watering").get().then((querySnapshot) => {
            querySnapshot.forEach((doc) => {
                this.getWatering.push(
                    {
                        id: doc.data().cat_id,
                        shifting_days: moment(this.plantDay).add('days',doc.data().shifting_days).format('YYYY-MM-DD')
                    }
                    
                    )  ;
            });
        });
      }
  },
  created(){

    this.getWateringDay()
  }
}


