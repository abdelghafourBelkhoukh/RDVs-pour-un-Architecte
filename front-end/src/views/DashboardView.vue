<template>
<NavBarDash />
  <div class="container1">
  <!-- <h2>Responsive Tables Using LI <small>Triggers on 767px</small></h2> -->
  <h2>Clients Table</h2>
  <ul class="responsive-table">
    <li class="table-header">
      <div class="col col-1">First name</div>
      <div class="col col-2">Last name</div>
      <div class="col col-3">job</div>
      <div class="col col-4">Age</div>
      <div class="col col-5">Reference</div>
      <div class="col col-6">Date time</div>
      <div class="col col-7">Date</div>
      <div class="col col-8">Action</div>
    </li>
    <li class="table-row">
      <div class="col col-1" data-label="First name"><input :type="type" value="Abdelghafour"></div>
      <div class="col col-2" data-label="Last name"><input :type="type" value="Belkhoukh"></div>
      <div class="col col-3" data-label="job"><input :type="type" value="developper"></div>
      <div class="col col-4" data-label="Age"><input :type="type" value="26"></div>
      <div class="col col-5" data-label="Reference"><input :type="type" value="RTF16556543"></div>
      <div class="col col-6" data-label="Date time"><input :type="type" value="10h 11h30min"></div>
      <div class="col col-7" data-label="Date"><input :type="type"  value="29-04-2022"></div>
      <div class="col col-8 action-icon" data-label="Action"><input :type="typeHidden" @click="Save" value="Save"><i class="fa-solid fa-pen" :style="display" @click="changeType"></i><i class="fa-solid fa-trash-can" :style="display" ></i></div>
    </li>
    <li class="table-row" >
      <div class="col col-1" data-label="First name"><input :type="type" value="Abdelghafour"></div>
      <div class="col col-2" data-label="Last name"><input :type="type" value="Belkhoukh"></div>
      <div class="col col-3" data-label="job"><input :type="type" value="developper"></div>
      <div class="col col-4" data-label="Age"><input :type="type" value="26"></div>
      <div class="col col-5" data-label="Reference"><input :type="type" value="RTF16556543"></div>
      <div class="col col-6" data-label="Date time"><input :type="type" value="10h 11h30min"></div>
      <div class="col col-7" data-label="Date"><input :type="type"  value="29-04-2022"></div>
      <div class="col col-8 action-icon" data-label="Action">
        <input :type="typeHidden" @click="Save" value="Save">
        <i class="fa-solid fa-pen" :style="display" @click="changeType"></i>
        <i class="fa-solid fa-trash-can" :style="display" ></i>
        </div>
    </li>
    <li class="table-row" >
      <div class="col col-1" data-label="First name"><input :type="type" value="Abdelghafour"></div>
      <div class="col col-2" data-label="Last name"><input :type="type" value="Belkhoukh"></div>
      <div class="col col-3" data-label="job"><input :type="type" value="developper"></div>
      <div class="col col-4" data-label="Age"><input :type="type" value="26"></div>
      <div class="col col-5" data-label="Reference"><input :type="type" value="RTF16556543"></div>
      <div class="col col-6" data-label="Date time"><input :type="type" value="10h 11h30min"></div>
      <div class="col col-7" data-label="Date"><input :type="type"  value="29-04-2022"></div>
      <div class="col col-8 action-icon" data-label="Action">
        <input :type="typeHidden" @click="Save" value="Save">
        <i class="fa-solid fa-pen" :style="display" @click="changeType"></i>
        <i class="fa-solid fa-trash-can" :style="display" ></i>
        </div>
    </li>
    <li class="table-row" >
      <div class="col col-1" data-label="First name"><input :type="type" value="Abdelghafour"></div>
      <div class="col col-2" data-label="Last name"><input :type="type" value="Belkhoukh"></div>
      <div class="col col-3" data-label="job"><input :type="type" value="developper"></div>
      <div class="col col-4" data-label="Age"><input :type="type" value="26"></div>
      <div class="col col-5" data-label="Reference"><input :type="type" value="RTF16556543"></div>
      <div class="col col-6" data-label="Date time"><input :type="type" value="10h 11h30min"></div>
      <div class="col col-7" data-label="Date"><input :type="type"  value="29-04-2022"></div>
      <div class="col col-8 action-icon" data-label="Action">
        <input :type="typeHidden" @click="Save" value="Save">
        <i class="fa-solid fa-pen" :style="display" @click="changeType"></i>
        <i class="fa-solid fa-trash-can" :style="display" ></i>
        </div>
    </li>
    <li class="table-row" >
      <div class="col col-1" data-label="First name"><input :type="type" value="Abdelghafour"></div>
      <div class="col col-2" data-label="Last name"><input :type="type" value="Belkhoukh"></div>
      <div class="col col-3" data-label="job"><input :type="type" value="developper"></div>
      <div class="col col-4" data-label="Age"><input :type="type" value="26"></div>
      <div class="col col-5" data-label="Reference"><input :type="type" value="RTF16556543"></div>
      <div class="col col-6" data-label="Date time"><input :type="type" value="10h 11h30min"></div>
      <div class="col col-7" data-label="Date"><input :type="type"  value="29-04-2022"></div>
      <div class="col col-8 action-icon" data-label="Action">
        <input :type="typeHidden" @click="Save" value="Save">
        <i class="fa-solid fa-pen" :style="display" @click="changeType"></i>
        <i class="fa-solid fa-trash-can" :style="display" ></i>
        </div>
    </li>
    <li class="table-row" >
      <div class="col col-1" data-label="First name"><input :type="type" value="Abdelghafour"></div>
      <div class="col col-2" data-label="Last name"><input :type="type" value="Belkhoukh"></div>
      <div class="col col-3" data-label="job"><input :type="type" value="developper"></div>
      <div class="col col-4" data-label="Age"><input :type="type" value="26"></div>
      <div class="col col-5" data-label="Reference"><input :type="type" value="RTF16556543"></div>
      <div class="col col-6" data-label="Date time"><input :type="type" value="10h 11h30min"></div>
      <div class="col col-7" data-label="Date"><input :type="type"  value="29-04-2022"></div>
      <div class="col col-8 action-icon" data-label="Action">
        <input :type="typeHidden" @click="Save" value="Save">
        <i class="fa-solid fa-pen" :style="display" @click="changeType"></i>
        <i class="fa-solid fa-trash-can" :style="display" ></i>
        </div>
    </li>
    
    
  </ul>
</div>
</template>


<script>

import NavBarDash from "../components/NavBarDash.vue"

export default {
  name: "Dashboard",
  components: {
    NavBarDash
  },
  data(){
    return{
      type: 'submit',
      typeHidden: 'hidden',
      display : "display: block;"
    }
  },
  methods:{
    changeType(){
      this.type= 'text';
      this.typeHidden= 'button';
      this.display = "display: none;"
    },
    Save(){
      this.type= 'submit';
      this.typeHidden= 'hidden';
      this.display = "display: block;"
      
    }
  }
};
</script>


<style scoped lang="scss">
  body {
  font-family: 'lato', sans-serif;
}
.container1 {
  max-width: 1000px;
  margin-left: auto;
  margin-right: auto;
  padding-left: 10px;
  padding-right: 10px;
  
}

h2 {
  font-size: 20px;
  margin: 30px 0;
  text-align: center;
  small {
    font-size: 0.5em;
  }
}

.responsive-table {
  li {
    border-radius: 3px;
    padding: 25px 30px;
    display: flex;
    justify-content: space-between;
    margin-bottom: 25px;
    align-items: center;
  }
  .table-header {
    background-color: black;
    color: white;
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 0.003em;
  }
  .table-row {
    background-color: #ffffff;
    box-shadow: 0px 0px 9px 0px rgba(0,0,0,0.1);
    .action-icon{
      input{
        background-color: green;
        color: white;
        border-radius: 7px;
        padding: 8px 11px;
        width: 80px;
      }
    }
    input{
      background-color: transparent;
      border: none;
      width: 100%;
    }
  }
  .action-icon{
    display: flex;
    justify-content: space-evenly;
  }
  .col-1 {
    flex-basis: 15%;
  }
  .col-2 {
    flex-basis: 15%;
  }
  .col-3 {
    flex-basis: 15%;
  }
  .col-4 {
    flex-basis: 10%;
  }
  .col-5 {
    flex-basis: 20%;
  }
  .col-6 {
    flex-basis: 15%;
  }
  .col-7 {
    flex-basis: 15%;
  }
  .col-8 {
    flex-basis: 15%;
  }
  
  @media all and (max-width: 767px) {
    .table-header {
      display: none;
    }
    .table-row{
      
    }
    li {
      display: block;
    }
    .col {
      
      flex-basis: 100%;
      
    }
    .col {
      display: flex;
      padding: 10px 0;
      &:before {
        color: #6C7A89;
        padding-right: 10px;
        content: attr(data-label);
        flex-basis: 50%;
        text-align: right;
      }
    }
  }
}
</style>
