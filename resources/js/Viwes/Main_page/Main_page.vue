<template>
    <div class="container">
          <div class="main_left">
                <div class="left_block">
                    <Main_box>
                        <div class="main_box_for_box" @click="holdOnCard('Tezkor')">
                            <font-awesome-icon :icon="['fas', 'rocket']" />
                            <p>Tezkor</p>
                        </div>
                    </Main_box>
                    <Main_box>
                        <div class="main_box_for_box" @click="holdOnCard('kokatlar')">
                            <font-awesome-icon :icon="['fas', 'carrot']" />
                            <p>ko`katlar</p>
                        </div>
                    </Main_box>
                    <Main_box>
                        <div class="main_box_for_box" @click="holdOnCard('Mevalar')">
                            <font-awesome-icon icon="fa-solid fa-apple-whole" />
                            <p>Mevalar</p>
                        </div>
                    </Main_box>
                    <Main_box>
                        <div class="main_box_for_box" @click="holdOnCard('ichimliklar')">
                            <font-awesome-icon :icon="['fas', 'bottle-water']" />
                            <p>ichimliklar</p>
                        </div>
                    </Main_box>
                    
                    <Main_box>
                        <div class="main_box_for_box" @click="holdOnCard('All')">
                            <font-awesome-icon :icon="['fas', 'bars']" />
                            <p>Xammasi</p>
                        </div>
                    </Main_box>
                    
                    
                </div>
            
          </div>


          <div class="main_right" id="main12" @click="this.TurnonAndofMenu">
             <div class="main_right_top">
               <div class="main_right_top_search">
                  <input type="text" placeholder="  Search">
               </div>
               <div class="main_right_top_scane">
                  <img src="../../images/Vector.svg" alt="">
               </div>
             </div>


             <div class="main">
                <p class="title_1">Savatda <font-awesome-icon :icon="['fass', 'basket-shopping']" /> {{ this.countOfProductNumber }}</p>
                <p class="title_2">#123123</p>
             </div>


             <div class="footer">
                  <div class="cards">
                    <div class="card" v-for="ProducList in ProducList">
                        <Main_page_cards :countofProduct="countofProduct" @eachDiscount="eachDiscount" :CalculateTotalPrice="CalculateTotalPrice" :product="ProducList" :DaletElementFromProducListForSell="DaletElementFromProducListForSell"/>
                    </div>
                  </div>
             </div>
          </div>
    </div>
</template>
<script >

import Main_page_cards from './Main_page_cards.vue';
import Main_box from '../UI_companents/Main_box.vue';
export default {
    components:{
        Main_box,
        Main_page_cards,
    },
    data() {
        return {
            countOfProductNumber: 0,
        }
    },
    methods:{
        holdOnCard(str){
            this.TurnOnAdnTurnOff(str);
        },
        eachDiscount(number,name,whichone){
           this.$emit('eachDiscount', number,name,whichone)
     
        },
        countofProduct(){
            this.countOfProductNumber = 0;
            this.ProducList.forEach(element => {
                this.countOfProductNumber += Number(element.quality)
            });
        },


    },
    updated() {
        this.countofProduct();
        this.CalculateTotalPrice();
        console.log(this.ProducList);
    },
    props:{
        TurnOnAdnTurnOff:{
            typeof: Function,
            Request: true,
        },
        ProducList:{
            typeof: Array,
        },
        DaletElementFromProducListForSell:{
            typeof: Function,
            Request: true,        
        },
        CalculateTotalPrice:{
            typeof: Function,
        },
        TurnonAndofMenu:{
            typeof: Function,
        },
        CalculateTotalPrice:{
            typeof: Function
        }
    }
}
</script>
<style scoped>

::-webkit-scrollbar{
    display: none;
}
.container{
    width: 100%;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
}

.container .main_left{
    width: 147px;
    height: 100vh;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;
}

.container .main_left .left_block{
    height: 90vh;
    overflow: auto;
    margin-top: 40px;
}

.container .main_left .left_block:nth-last-child(){
    margin-bottom: 0px;
}
.container .main_left .main_help{
    height: 10vh;
}












.container .main_right{
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    background: #e7d7d7;
    padding: 40px 40px 0;
}

.main_right_top_search{
    width: 709px;
    height: 60px;
}

.main_right_top_search input{
    width: 100%;
    height: 100%;
    background: #FFFFFF;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: 28px;
}


.main_right_top_scane{
    width: 53px;
    height: 53px;
}

.main_right_top_scane img{
    width: 100%;
    height: 100%;
}

.main_right_top{
    width: 100%;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
}

.container .main{
    width: 100%;
    height: 50px;
    display: flex;
    justify-content: space-between;
    margin-top: 39px;
}



.container .main .title_2{
    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 48px;
    line-height: 50px;
    /* identical to box height, or 104% */

    text-align: right;
    letter-spacing: -0.06em;

    /* text color */

    color: #656567;
}
.container .main .title_1{
    display: block;
    color: red;
    padding: 10px;
    background: #ffffff;
    border-radius: 15px;
    font-family: 'Inter';
    font-style: normal;
    font-weight: 700;
    font-size: 24px;
    line-height: 29px;
}

.footer{
    width: 100%;
    height: 70vh;
    overflow: auto;
}

.cards{
    width: 100%;
    
}

.cards:nth-child(1){
    margin-top: 0;
} 

.main_box_for_box{
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

.main_box_for_box p{
    font-size: 20px;
    margin-top: 10px;
}
 
</style>