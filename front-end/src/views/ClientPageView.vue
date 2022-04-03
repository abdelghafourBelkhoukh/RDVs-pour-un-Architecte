<template>
  <NavBarClient />
  <div class="container">
    <div class="calendar">
      <div class="calendar__picture">
        <h2>18, Sunday</h2>
        <h3>November</h3>
      </div>
      <div class="calendar__date">
        <div class="container1">
      <!-- <h2>Responsive Tables Using LI <small>Triggers on 767px</small></h2> -->
      <ul class="responsive-table">
        <li class="table-header">
          <div class="col col-1">Date time</div>
          <div class="col col-2">Date</div>
          <div class="col col-3">Action</div>
        </li>
        <li class="table-row">
          <div class="col col-1" data-label="Date time">
            <input :type="type" value="10h 11h30min" />
          </div>
          <div class="col col-2" data-label="Date">
            <input :type="type" value="29-04-2022" />
          </div>
          <div class="col col-3 action-icon" data-label="Action">
            <input :type="typeHidden" @click="Save" value="Save" /><i
              class="fa-solid fa-pen"
              :style="display"
              @click="changeType"
            ></i
            ><i class="fa-solid fa-trash-can" :style="display"></i>
          </div>
        </li>
        <li class="table-row">
          <div class="col col-1" data-label="Date time">
            <input :type="type" value="10h 11h30min" />
          </div>
          <div class="col col-2" data-label="Date">
            <input :type="type" value="29-04-2022" />
          </div>
          <div class="col col-3 action-icon" data-label="Action">
            <input :type="typeHidden" @click="Save" value="Save" /><i
              class="fa-solid fa-pen"
              :style="display"
              @click="changeType"
            ></i
            ><i class="fa-solid fa-trash-can" :style="display"></i>
          </div>
        </li>
        <li class="table-row">
          <div class="col col-1" data-label="Date time">
            <input :type="type" value="10h 11h30min" />
          </div>
          <div class="col col-2" data-label="Date">
            <input :type="type" value="29-04-2022" />
          </div>
          <div class="col col-3 action-icon" data-label="Action">
            <input :type="typeHidden" @click="Save" value="Save" /><i
              class="fa-solid fa-pen"
              :style="display"
              @click="changeType"
            ></i
            ><i class="fa-solid fa-trash-can" :style="display"></i>
          </div>
        </li>
        <li class="table-row">
          <div class="col col-1" data-label="Date time">
            <input :type="type" value="10h 11h30min" />
          </div>
          <div class="col col-2" data-label="Date">
            <input :type="type" value="29-04-2022" />
          </div>
          <div class="col col-3 action-icon" data-label="Action">
            <input :type="typeHidden" @click="Save" value="Save" /><i
              class="fa-solid fa-pen"
              :style="display"
              @click="changeType"
            ></i
            ><i class="fa-solid fa-trash-can" :style="display"></i>
          </div>
        </li>
        <li class="table-row">
          <div class="col col-1" data-label="Date time">
            <input :type="type" value="10h 11h30min" />
          </div>
          <div class="col col-2" data-label="Date">
            <input :type="type" value="29-04-2022" />
          </div>
          <div class="col col-3 action-icon" data-label="Action">
            <input :type="typeHidden" @click="Save" value="Save" /><i
              class="fa-solid fa-pen"
              :style="display"
              @click="changeType"
            ></i
            ><i class="fa-solid fa-trash-can" :style="display"></i>
          </div>
        </li>
        <li class="table-row">
          <div class="col col-1" data-label="Date time">
            <input :type="type" value="10h 11h30min" />
          </div>
          <div class="col col-2" data-label="Date">
            <input :type="type" value="29-04-2022" />
          </div>
          <div class="col col-3 action-icon" data-label="Action">
            <input :type="typeHidden" @click="Save" value="Save" /><i
              class="fa-solid fa-pen"
              :style="display"
              @click="changeType"
            ></i
            ><i class="fa-solid fa-trash-can" :style="display"></i>
          </div>
        </li>
      </ul>
    </div>
      </div>
    </div>
    
  </div>
  <Footer />
</template>


<script>
import NavBarClient from "../components/NavBarClient.vue";
import Footer from "../components/Footer.vue";

export default {
  name: "ClientPage",
  components: {
    NavBarClient,
    Footer,
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
.container {
  width: 100%;
  display: flex;
  justify-content: center;
}

.calendar {
  position: relative;
  width: 60%;
  background-color: #fff;
  box-sizing: border-box;
  box-shadow: 0 5px 50px rgba(#000, 0.5);
  border-radius: 8px;
  overflow: hidden;
  margin: 5% 0;
}

.calendar__picture {
  position: relative;
  height: 100px;
  padding: 20px;
  color: #fff;
  background: #262626;
  text-shadow: 0 2px 2px rgba(#000, 0.2);
  box-sizing: border-box;

  &::before {
    content: "";
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    position: absolute;
    background: linear-gradient(to top, rgba(#000, 0.25), rgba(#000, 0.1));
  }

  h2 {
    margin: 0;
  }

  h3 {
    margin: 0;
    font-weight: 500;
  }
}

.calendar__date {
  padding: 20px;
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(25px, 1fr));
  grid-gap: 10px;
  box-sizing: border-box;
}

.calendar__day {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 25px;
  font-weight: 600;
  color: #262626;

  &:nth-child(7) {
    color: #ff685d;
  }
}

.calendar__number {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 25px;
  color: #262626;

  &:nth-child(7n) {
    color: #ff685d;
    font-weight: 700;
  }

  &--current,
  &:hover {
    background-color: #009688;
    color: #fff !important;
    font-weight: 700;
    cursor: pointer;
  }
}

//dashboard client

.container1 {
  max-width: 1000px;
  margin-left: auto;
  margin-right: auto;
  padding-left: 10px;
  padding-right: 10px;
  width: 80%;
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
    box-shadow: 0px 0px 9px 0px rgba(0, 0, 0, 0.1);
    .action-icon {
      input {
        background-color: green;
        color: white;
        border-radius: 7px;
        padding: 8px 11px;
        width: 80px;
      }
    }
    input {
      background-color: transparent;
      border: none;
      width: 100%;
    }
  }
  .action-icon {
    display: flex;
    justify-content: space-evenly;
  }
  .col-1 {
    flex-basis: 35%;
  }
  .col-2 {
    flex-basis: 35%;
  }
  .col-3 {
    flex-basis: 30%;
  }

  @media all and (max-width: 767px) {
    .table-header {
      display: none;
    }
    .table-row {
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
        color: #6c7a89;
        padding-right: 10px;
        content: attr(data-label);
        flex-basis: 50%;
        text-align: right;
      }
    }
  }
}
footer{
  margin-top: 0;
}
</style>