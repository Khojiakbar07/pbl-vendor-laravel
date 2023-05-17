<script>
import Product from "@/components/Terminal/Part/Product.vue";
import LeftSidebar from "@/components/Terminal/Part/LeftSidebar.vue";
import RightSidebar from "@/components/Terminal/Part/RightSidebar.vue";
import product from "@/api/product";

export default {
    name: "Terminal",
    components: { RightSidebar, LeftSidebar, Product },
    data() {
        return {
            cart: [],
            cartDetails: {
                productsPrice: 0,
                commissionPrice: 0,
                totalPrice: 0,
            },
            customerDetails: {
                name: "",
                phone: "+998",
                comment: ""
            },
            company: {
                phone: '',
                email: '',
            },
            page: {
                header: {
                    links: [
                        { name: "Asosiy" },
                        { name: "Filiallar" },
                        { name: "Vakantlar" },
                        { name: "Yangiliklar" },
                        { name: "Biz haqimizda" },
                        { name: "Kontaktlar" },
                    ]
                }
            },
            choseProducts:[],
            products: [],
            numberOfProducts: 0,
            AllPrice: 0,
            whichOneKindOfPeymentname: "Naqt pul",
            senttoapi: [],
        }
    },
    updated() {
    },
    created() {
    },
    mounted() {
        this.apiGetProducts();
        this.CalculateAllSum();
    },

    methods: {
        whichone(name) {
            this.whichOneKindOfPeymentname = name;
        },
        Clear() {
            this.choseProducts = [];
        },
        TurnOnBill() {
            let bill = document.querySelector('#bill');
            bill.style.zIndex = "30";
        },
        TurnOffBill() {
            let bill = document.querySelector('#bill');
            bill.style.zIndex = "1";
            this.Clear();
        },
        AddChoseProductlist(id) {
            let yesOrNo = false;
            let counter = 0;
            let i = 0;
            let product;
            this.CalculateProducts();
            console.log(product);
            this.choseProducts.forEach(element => {
                if (element.id == this.products[id].id) {
                    yesOrNo = true;
                    counter = i;
                }
                i++;
            });

            if (yesOrNo == true) {
                this.choseProducts[counter].numberofProduct++;
            } else {
                product = this.products[id];
                product.numberofProduct = 1;
                this.choseProducts.push(product);
            }
        },
        ProductsWhichSentToApi(){
        
        },
        ReduceNumberOfProduct(id) {
            this.choseProducts[id].numberofProduct <= 0 ? '' : this.choseProducts[id].numberofProduct -= 1;
        },
        ImprovNumberOfProduct(id, max) {
            this.choseProducts[id].numberofProduct < max + 1 ? this.choseProducts[id].numberofProduct += 1 : '';

        },
        CalculateProducts() {
            this.CalculateAllSum();
            this.numberOfProducts = 0;
            this.choseProducts.forEach(element => {
                this.numberOfProducts += element.numberofProduct;
            });
        },
        CalculateAllSum() {
            this.AllPrice = 0;
            this.choseProducts.forEach(element => {
                this.AllPrice += Number(element.price) * element.numberofProduct;
            });
        },
        apiGetProducts() {
            product.getProducts().then((response) => {
                if (response.data) {
                    //console.log(response.data)
                    this.products = response.data.data
                } else {
                    console.log(response.data)
                }
            })
        },

        addToCart(id) {
            console.log('product added (id: ' + id + ')')
            this.cart.push(
                this.getProductByID(id)
            )
            this.sumCart()

        },
        sumCart() {
            let productsPrice = 0;
            let commission = 15;
            this.cart.forEach(function (cartProduct, index) {
                productsPrice += parseInt(cartProduct.price)
            })

            let commissionPrice = (productsPrice / 100 * commission)
            this.cartDetails.productsPrice = productsPrice
            this.cartDetails.commissionPrice = commissionPrice
            this.cartDetails.totalPrice = productsPrice + commissionPrice

        },
        removeFromCart(id) {
            let removeCartIndex;
            this.cart.forEach(function (eid, index) {
                //console.log(eid)
                if (eid.id === id) {
                    console.log('remove: id ' + id)
                    removeCartIndex = index;
                }
            })
            this.cart.shift(removeCartIndex)
            this.sumCart()
        },
        clearFromCart() {
            this.cart = []
            this.sumCart()
        },
        getProductByID(id) {
            console.log('get product (id: ' + id + ')')
            return this.products.filter(d => d.id === id)[0];
        },
        orderNow() {
            let order = {
                cart: this.cart,
                customer: this.customerDetails,
                totalPrice: this.cartDetails.totalPrice
            }

            apiPos.sendOrder(order).then((response) => {
                if (response.data.status) {
                    console.log('order sent')
                    console.log(response.data)

                    this.cart = []

                    this.cartDetails = {
                        productsPrice: 0,
                        commissionPrice: 0,
                        totalPrice: 0,
                    }

                    this.customerDetails = {
                        name: "",
                        phone: "+998 ",
                        comment: ""
                    }

                    //$('#payment-popup').modal('hide')
                    document.getElementById('payment-popup').click();


                    //this.products = response.data.data
                } else {
                    console.log(response.data)
                }
            })

            console.log(order)
        },
        priceFormat(price, add = '') {
            return this.number_format(price, 0, '.', ' ') + '' + add;
        },
        number_format(number, decimals = 0, dec_point = '.', thousands_sep = ' ') {
            // Strip all characters but numerical ones.
            number = (number + '').replace(/[^0-9+\-Ee.]/g, '');
            var n = !isFinite(+number) ? 0 : +number,
                prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
                sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
                dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
                s = '',
                toFixedFix = function (n, prec) {
                    var k = Math.pow(10, prec);
                    return '' + Math.round(n * k) / k;
                };
            // Fix for IE parseFloat(0.55).toFixed(0) = 0;
            s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
            if (s[0].length > 3) {
                s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
            }
            if ((s[1] || '').length < prec) {
                s[1] = s[1] || '';
                s[1] += new Array(prec - s[1].length + 1).join('0');
            }
            return s.join(dec);
        }

    }
}
</script>

<template>
    <div class="contener_main">
        <div class="bill" id="bill">
            <div class="bill_item">
                <div class="logo">
                    <img src="../../../../public/images/logo/logo.png" alt="">
                </div>
                <div class="product_list">
                    <table>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(item, index) in choseProducts" :key="index">
                                <td>{{ item.name }}</td>
                                <td> {{ item.numberofProduct }}</td>
                                <td>{{ item.price }}</td>
                            </tr>
                            <tr>
                                <td>Umumiy sum</td>
                                <td></td>
                                <td>{{ AllPrice }}</td>
                            </tr>
                            <tr>
                                <td>Tolov turi</td>
                                <td></td>
                                <td>{{ whichOneKindOfPeymentname }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="button_for_pay">
                    <button @click="TurnOffBill" style="width: 100%; background-color: #7f75f0;">To` lov</button>
                </div>
            </div>
        </div>
        <div class="products hide-print flex flex-row h-screen antialiased text-blue-gray-800">
            <!-- left sidebar -->
            <LeftSidebar></LeftSidebar>

            <!-- page content -->
            <div class="flex-grow flex">
                <!-- store menu -->
                <div class="flex flex-col bg-blue-gray-50 h-full w-full py-4">
                    <div class="flex px-2 flex-row relative">
                        <div class="absolute left-5 top-3 px-2 py-2 rounded-full bg-cyan-500 text-white"
                            style="background-color: #7f75f0;">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                        <input type="text"
                            class="bg-white rounded-3xl shadow text-lg full w-full h-16 py-4 pl-16 transition-shadow focus:shadow-2xl focus:outline-none"
                            placeholder="Search ..." v-model="search">
                    </div>
                    <div class="h-full overflow-hidden mt-4">
                        <div class="h-full overflow-y-auto px-2">
                            <div class="select-none bg-blue-gray-100 rounded-3xl flex flex-wrap content-center justify-center h-full opacity-25"
                                x-show="products.length === 0" style="display: none;">
                                <div class="w-full text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 inline-block" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4">
                                        </path>
                                    </svg>
                                    <p class="text-xl">
                                        YOU DON'T HAVE
                                        <br>
                                        ANY PRODUCTS TO SHOW
                                    </p>
                                </div>
                            </div>
                            <div class="select-none bg-blue-gray-100 rounded-3xl flex flex-wrap content-center justify-center h-full opacity-25"
                                x-show="filteredProducts().length === 0 &amp;&amp; keyword.length &gt; 0"
                                style="display: none;">
                                <div class="w-full text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 inline-block" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                    </svg>
                                    <p class="text-xl">
                                        EMPTY SEARCH RESULT
                                    </p>
                                </div>
                            </div>
                            <div class="grid grid-cols-4 gap-4 pb-3">

                                <div role="button" @click="AddChoseProductlist(index)"
                                    class="select-none cursor-pointer transition-shadow overflow-hidden rounded-2xl bg-white shadow hover:shadow-lg"
                                    :title="product.name" v-if="products" v-for="(product, index) in products" :key="index"
                                    :product="product">
                                    <img :src="'/' + product.image ?? '/theme/terminal/beef-burger.png'"
                                        :alt="product.name">
                                    <div class="flex pb-3 px-3 text-sm -mt-3">
                                        <p class="flex-grow truncate mr-1">{{ product.name }}</p>
                                        <p class="nowrap font-semibold">{{ number_format(product.price) }} UZS</p>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of store menu -->

                <!-- right sidebar -->
                <RightSidebar :number_format="number_format" :whichOneKindOfPeymentname="whichOneKindOfPeymentname" @whichone="whichone" :TurnOnBill="TurnOnBill" :AllPrice="AllPrice"
                    :CalculateProducts="CalculateProducts" :ImprovNumberOfProduct="ImprovNumberOfProduct"
                    :ReduceNumberOfProduct="ReduceNumberOfProduct" :numberofproduct="numberOfProducts" :Clear="Clear"
                    :choseProducts="choseProducts"></RightSidebar>
                <!-- end of right sidebar -->
            </div>

        </div>

    </div>
</template>

<style scoped>
.contener_main {
    position: relative;
   
}

.bill {
    width: 100%;
    height: 100vh;
    position: absolute;
    background: #ffffff88;
    z-index: 1;
    display: flex;
    justify-content: center;
    align-items: center;
}

.bill_item{
    width: 30%;
    height: 80%;
    background: #fff;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    border-radius: 20px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.bill_item .logo{
    width: 90%;
    margin: auto;
    height: 20%;
}

.bill_item .product_list{
    width: 90%;
    height: 60%;
    margin: auto;
    overflow: auto;
}
.bill_item .product_list table{
    width: 100%;
    height: 100%;
}

.bill_item .button_for_pay{
    width: 90%;
    height: 10%;
    margin: auto;
    margin-bottom: 10px;
}

.bill_item .button_for_pay button{
    width: 100%;
    height: 100%;
    background: #000;
}

.products {
    position: absolute;
    width: 100%;
    height: 100vh;
    z-index: 20;

}

   
</style>
