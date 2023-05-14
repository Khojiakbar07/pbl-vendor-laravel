<template >
    <div class="container2">
        <div class="left">
           <input type="number" name="" id="" min="0" :max="product.maxOfqulaty" :value="product.quality" @input="ListInput($event)">
        </div>
    
        <div class="main">
            <div class="product_info">
                <p class="name">{{ product.name }}</p>
                <p class="barcode">0987854689034</p>
                <div class="p">Sotuvda bor: {{product.maxOfqulaty}}ta</div>
            </div>

            
            

            <div class="colculation">
                <div class="calculText">
                    <div class="blockSum" v-if="this.whichOneSumOrProtsent">
                        <p class="calculation">{{ product.price }}x{{product.quality}}={{ product.price*product.quality }}</p>
                        <p class="calculation">{{ this.product.discount == undefined ? this.nothing : product.price-product.overDiscount }} {{ this.product.discount == undefined ? this.nothing : "x" }}  {{ this.product.discount == undefined ? this.nothing : product.quality}} {{ this.product.discount == undefined ? this.nothing : "=" }}  {{ this.product.discount == undefined ? this.nothing : (product.price-product.discount)*product.quality }} </p>
                        <p class="calculation">{{ this.product.discount == undefined ? this.nothing : "chegirma" }} {{ this.product.overDiscount }} {{ this.product.discount == undefined ? this.nothing : "so`m" }}</p>
                    </div>

                    <div class="blockProtsent" v-else>
                        <p class="calculation">{{ product.price }}x{{product.quality}}={{ product.price*product.quality }}</p>
                        <p class="calculation">{{ this.product.discount == undefined ? this.nothing : product.price-product.overDiscount }} {{ this.product.discount == undefined ? this.nothing : "x" }}  {{ this.product.discount == undefined ? this.nothing : product.quality}} {{ this.product.discount == undefined ? this.nothing : "=" }}  {{ this.product.discount == undefined ? this.nothing : (product.price-product.overDiscount)*product.quality }} </p>
                        <p class="calculation">chegirma {{ this.product.overDiscount }} so`m</p>
                    </div>
                   
                </div>
                <div class="discounteachone" :id="product.name">
                    <input type="text" v-model="product.discount" @input="sentDiscount">
                </div>
                    <img src="../../images/Group 61.svg" alt="" @click="ShowDiscountInput" >
            </div>
            
        </div>

        <div class="right">
            <div class="bin" @click="click1(product.name)" :id="product.name+'bin'">
                <img src="../../images/delete_icon.svg" alt="">
                
            </div>

            <div class="whichone" :id="product.name+'whichone'">
                <button :id="product.name+'whichone1'" @click="changeDiscountCalculate">Sum</button>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props:{
        product:{
            typeof: Object
        },
        DaletElementFromProducListForSell:{
            typeof: Function,
        },
        CalculateTotalPrice:{
            typeof: Function,
        },
        countofProduct:{
            typeof: Function,
        }
    },
    methods: {
        click1(name){
            this.DaletElementFromProducListForSell(name);
        },
        ListInput(event){
            this.product.quality = event.target.value;
            this.CalculateTotalPrice();
        },
        ShowDiscountInput(){
            let textForId = "#" + this.product.name;
            let textBin = "#" + this.product.name +"bin";
            let textWhichone = "#" + this.product.name +"whichone";
            let iconDiscount = document.querySelector(textForId);
            let bin = document.querySelector(textBin)
            let whichone = document.querySelector(textWhichone)
            if(iconDiscount.style.display === "none"){
                iconDiscount.style.display = "block"
                bin.style.display = "none"
                whichone.style.display = "block"
                
            }else{
                iconDiscount.style.display = "none"
                bin.style.display = "block"
                whichone.style.display = "none"
            }
           
           
        },
        sentDiscount(){
            this.$emit('eachDiscount', this.product.discount ,this.product.name,this.whichOneSumOrProtsent);
        },
        changeDiscountCalculate(){
            let textWhichone = '#'+this.product.name+'whichone1';
            let whichone = document.querySelector(textWhichone)
            this.whichOneSumOrProtsent = !this.whichOneSumOrProtsent;
            this.whichOneSumOrProtsent ? whichone.innerText= 'Sum' : whichone.innerText = '%';
            this.$emit('eachDiscount', this.product.discount ,this.product.name,this.whichOneSumOrProtsent);
        }
    },
    updated() {
        this.countofProduct()
    },

    data() {
        return {
            nothing: " ",
            whichOneSumOrProtsent: true,
        }
    },

}
</script>
<style scoped >

.container2{
    width: 100%;
    height: 98px;
    

    /* elemens

    color
    */
    background: #FFFFFF;
    /* text color */
    border: 1px solid #656567;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.08);
    border-radius: 25px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 8px;
    margin-top: 10px;
}


.left{
    width: 117px;
    height: 52px;
    
}

.left input{
   width: 100%;
   height: 100%;
   border-radius: 20px;
}

.main{
    width: 740px;
    display: flex;
    justify-content: space-between;
}
.discounteachone{
    display: flex;
    justify-content: center;
    align-items: center;
    display: none;
}

.colculation{
    width: 400px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

input[type="number"]{
    width: 100px;
    font-size: 20px;
    
}

input[type="number"]::-webkit-inner-spin-button,
input[type="number"]::-webkit-outer-spin-button{
    height: 45px;
    margin-right: 1px;
}

.right{
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 50px;
}

.right .bin{
  position: absolute;
  z-index: 1;
}
.right .whichone{
    position: absolute;
    z-index: 0;
    display: none;
}

    
</style>