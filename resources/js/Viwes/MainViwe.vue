<template>
    <div class="container1">
      <div class="container">
        <div class="top">
            <Menu_products :class="[{cards: card},{hiddn: !card}]" :products="products2" :AddList="AddList" />
          <div class="main">
            <Main_page :CalculateTotalDiscount="CalculateTotalPrice" @eachDiscount="overDiscount" :TurnonAndofMenu="TurnonAndofMenu" :CalculateTotalPrice="CalculateTotalPrice" :TurnOnAdnTurnOff="TurnOnAndTurnOff" :ProducList="this.ProducListForSell" :DaletElementFromProducListForSell="DaletElementFromProducListForSell"/>
          </div>
          <div class="right" id="right">
            <Right_for_page :discount="overSumDiscount" :whichOneBtnForAddAndReturn="whichOneBtnForAddAndReturn" :price="this.totalPrice" :Pay="Pay" :ClearProductList="ClearProductList" :SaveFirstProducts="SaveFirstProducts" :ReturnFirsProductList="ReturnFirsProductList"/>

          </div>
        </div>
        <div class="footer" >


        </div>
      </div>
    </div>

  </template>

  <style scoped>



  .container{
    position: relative;
    width: 100%;
    height: 100vh;
  }

  .top{
    width: 100%;
    height: 100%;
    display: flex;
  }
  .cards{
    position: absolute;
    width: 400px;
    z-index: 10;
    display: block;
    left: 130px;
    top: 0;
  }


  .hiddn{
    position: absolute;
    display: none;
  }

  .main{
    width: 75%;
  }

  .right{
    width: 25%;
  }
  </style>

  <script>

  import Menu_products from '../Viwes/Menu/Menu_products.vue';
  import Main_page from '../Viwes/Main_page/Main_page.vue';
  import Right_for_page from '../Viwes/Right_page/Right_for_page.vue';
  import Registration from '../Viwes/Registration.vue';
  var today = new Date();
  export default{
    components:{
      Menu_products,
      Main_page,
      Right_for_page,
      Registration,
    },
    data() {
      return {
        products:[
          {
            name : 'banana',
            maxOfqulaty: 12,
            tyupe: 'Mevalar',
            price: 200,
          },
          {
            name : 'apple',
            maxOfqulaty: 12,
            tyupe: 'Tezkor',
            price: 200
          },
          {
            name : 'pear',
            maxOfqulaty: 12,
            tyupe: 'kokatlar',
            price: 200
          },
          {
            name: 'Cola',
            price: 10000,
            tyupe: 'ichimliklar',
            maxOfqulaty: 12,
          }

        ],
        products2:[

        ],
        ProducListForSell:[

        ],
        card: false,
        saved: "first",
        totalPrice: 0,
        oldSaver: [],
        whichOneBtnForAddAndReturn: false,
        overSumDiscount: 0,
      }
    },

    methods:{
      TurnOnAndTurnOff(str){
        if (this.saved == str) {
          this.card = !this.card;
        }else if(this.saved == "first"){
          this.card = true;
          if(str == 'All')
           this.products2 = this.products
          else
           this.products2 = this.products.filter(e=> e.tyupe == str);
        } else{
           if(this.card == true){
            if(str == 'All'){
            this.products2 = this.products
            }
            else{
            this.products2 = this.products.filter(e=> e.tyupe == str);
            }
           }else{
            if(str == 'All'){
            this.products2 = this.products
            this.card = true;
            }
            else{
            this.products2 = this.products.filter(e=> e.tyupe == str);
            this.card = true;
            }
           }
        }
        this.saved = str;
      },

      overDiscount(number,name,discount){
        this.ProducListForSell.forEach(element => {
          if(element.name === name){
            element.discount = number;
            discount ? element.whichIsDiscount = "sum" : element.whichIsDiscount = "%"
          }
        });
      },


      AddList(product){
        let checkProduct = true
         let produt1 = {
          name : product.name,
          price: product.price,
          tyupe: product.tyupe,
          quality: 1,
          maxOfqulaty: product.maxOfqulaty,
         };
         this.ProducListForSell.forEach(element => {
            if(element.name == product.name){
              checkProduct = false;
            }
         });

         if(checkProduct){
          this.ProducListForSell.push(produt1)
         }else{
          this.ProducListForSell.forEach(element => {
            if(element.name == product.name)
            element.quality+=1;
          });
         }

      },


      CalculateTotalPrice(){
        this.totalPrice=0;
        this.ProducListForSell.forEach(element => {
           this.totalPrice+=element.price*element.quality;
         });
      },



      CalculateTotalDiscount(){
        this.overSumDiscount = 0;
          this.ProducListForSell.forEach(element => {
            if(element.discount != undefined){
              if(element.whichIsDiscount == "sum")
              element.overDiscount = (Number(element.discount)* Number(element.quality));
              else
              element.overDiscount = (Number(element.quality) * (Number(element.price)*Number(element.discount)/100))
            }
          });

          this.ProducListForSell.forEach(element => {
            if(element.overDiscount != undefined){
              this.overSumDiscount +=  Number(element.overDiscount);
            }
          });
          console.log(this.ProducListForSell);
      },


       DaletElementFromProducListForSell(name){
        let numberOfProduct=0;
        this.ProducListForSell.forEach(element => {
          if(element.name == name){
            this.ProducListForSell.splice(numberOfProduct,1);
            return;
          }
          numberOfProduct++;
        });
       },


       Pay(){
        this.ProducListForSell = [];
       },


       TurnonAndofMenu(){
        if(this.card==true){
          this.card=false
        }else
        return
       },


       ClearProductList(){
        this.ProducListForSell = [];
       },


       SaveFirstProducts(){
        if(this.oldSaver.length == 0){
        this.oldSaver.push(this.ProducListForSell);
        this.ProducListForSell=[];
        }
        else
        {
          this.ReturnFirsProductList();
        }
        this.whichOneBtnForAddAndReturn = !this.whichOneBtnForAddAndReturn
       },
       ReturnFirsProductList(){
        if(this.oldSaver.length!=0)
        this.ProducListForSell = this.oldSaver.pop();
        else
        console.log("Stackda malumot yo`q");
       },
    },


    updated() {
      this.CalculateTotalPrice();
      this.CalculateTotalDiscount();
    },
  }
  </script>
