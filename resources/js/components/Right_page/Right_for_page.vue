<template >
    <div class="container_for_right">
        <div class="cards">
            <Main_box :FunctionForBox="ClearProductList">
                        <font-awesome-icon icon="fa-solid fa-circle-xmark" style="color: #ff0000;" size="xl"/>
                        <p style="font-size: 16px;">Bekorqilish</p>
            </Main_box>

            <Main_box :FunctionForBox="WhichOneBtnForAddAndReturn">
                        <font-awesome-icon :icon="this.whichOneBtnForAddAndReturn == false ? ['fas', 'plus'] : ['fas', 'arrow-left'] " size="xl"/>
                        <p style="font-size: 16px;" id="textChange">Qo`shish</p>
            </Main_box>

            <Main_box>
                        <font-awesome-icon :icon="['fas', 'rotate-left']" size="xl"/>
                        <p style="font-size: 16px;">Qaytarish</p>
            </Main_box>
        </div>

        <div class="customer_discount">


             <div class="customer">

                <div class="text">
                   <h4>Mijoz</h4>
                   <p>Yaratish</p>
                </div>
                <div class="input">
                  <input type="text">
                </div>

             </div>

             <!-- <div class="discount">

                <div class="text">
                   <h4>chegirma</h4>
                </div>
                <div class="input">
                  <input type="text" v-model="this.discount">
                  <div class="protsent" id="protsentOrSum"  @click="this.changeDiscount">
                    %
                  </div>
                </div>

             </div> -->


        </div>
        

        <div class="pay">
           <table cellspacing="0">
            <tr>
                <td>  Jami</td>
                <td>{{ this.price }} so`m</td>
            </tr>

            <tr>
                <td>  Chegirma</td>
                <td>{{ discount }} so`m</td>
            </tr>

            <tr>
                
                <td colspan="2"><div class="PriceBox"><p> To`lov</p> <button @click="Pay">To`lov</button></div></td>
                
            </tr>
             
           </table>
        </div>
    </div>
</template>


<script>
import Main_box from '../UI_companents/Main_box.vue';

export default {  
    props:{
        price:{
            typeof: Number,
        },
        Pay:{
            typeof: Function
        },
        ClearProductList:{
            typeof: Function,
        },
        SaveFirstProducts:{
            typeof: Function,
        },
        ReturnFirsProductList:{
            typeof: Function,
        },
        discount:{
            typeof: Number,
        }
    },
    components:{
        Main_box,
    },
    methods: {
        HoldonPay(){
            this.Pay();
        },
        WhichOneBtnForAddAndReturn(){
            this.whichOneBtnForAddAndReturn = !this.whichOneBtnForAddAndReturn;
            this.SaveFirstProducts();
            let text = document.querySelector('#textChange');
            this.whichOneBtnForAddAndReturn == false ? text.innerText = "Qo`shish" : text.innerText = "Qaytish";
        }
       
    },
    data() {
        return {
            whichOne: "%",
            whichOneBtnForAddAndReturn: false,
        }
    }
  
}
</script>



<style scoped >
    .container_for_right{
        width: 100%;
        height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: center;
    }

    .container_for_right table{
        width: 100%;
       
    }

    .container_for_right .cards{
        width: 100%;
        height: 150px;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-evenly;
        padding-top: 25px;
    }
    

    .container_for_right .customer_discount{
        width: 90%;
        height: 220px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        
    }

    .container_for_right .customer_discount .customer,
    .container_for_right .customer_discount .discount
    {
        height: 100px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .container_for_right .customer_discount .text{
        display: flex;
        justify-content: space-between;
        font-family: 'Inter';
        font-style: normal;
        font-weight: 700;
        font-size: 20px;
        line-height: 24px;

        color: #656567;
    }

    .container_for_right .customer_discount .text p{
        color: #1D61FF;
        font-size: 20px;
    }

    .container_for_right .customer_discount input{
        width: 80%;
        height: 50px;
        left: 1048.99px;
        top: 326px;

        background: rgba(248, 250, 255, 0.55);
        background-blend-mode: darken;
        /* text color */

        border: 0.5px solid #656567;
        box-shadow: 0px 1px 7px rgba(0, 0, 0, 0.25);
        filter: blur(0.5px);
        border-radius: 10px;
    }

    .container_for_right .customer_discount .customer input{
        width: 100%;
    }
    .container_for_right .customer_discount .discount .protsent{
        width: 18%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        background: #FFFFFF;
        border-radius: 10px;
        font-size: 26px;
        box-shadow: 0px 1px 7px rgba(0, 0, 0, 0.25);
        filter: blur(0.5px);
    }

    .container_for_right .customer_discount .discount .input{
        display: flex;
        justify-content: space-between;
    }


   

    .container_for_right .pay{
        width: 80%;
        height: 130px;
        display: flex;
        align-items: flex-end;
        justify-content: center;
 }

    .container_for_right .pay table{
        width: 100%;
        background: #FFFFFF;
        box-shadow: 0px 4px 13px 1px rgba(0, 0, 0, 0.31);
        border-radius: 15px 15px 0px 0px;
        padding: 0;
        padding-top: 25px;
        border: none;
    }

    .container_for_right .pay td{
        padding:  7px;
    }

    .container_for_right .pay tr .PriceBox{
        width: 100%;
        padding: 0 15px 0 0;
        height: 40px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-radius: 15px;
        background: linear-gradient(90deg, #1D61FF 0%, #213B75 100%);
    }
    table, th, td {
        border: none;
        border-collapse: none;
        padding: 0;
        margin: 0;
        border-spacing: 0;
    }
</style>