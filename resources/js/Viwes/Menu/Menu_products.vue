<template>
    <div>
        <div class="container">
            <div class="blocks">
                <div class="Block" v-for="product in products" @click="AddList1(product)">
                    <Menu_products_card :products="product"/>
                </div>
            </div>
        </div>
    </div>
</template>


<script>

import Menu_products_card from './Menu_products_card.vue';
export default {

    components:{
        Menu_products_card,
    },

    data() {
        return {
            info:{
                img : '../../images/asd.jfif',
                name: 'Banana',
                price: 123.0,
            }
        }
    },

     props:{
        products:{
            typeof: Array,
        },
        AddList:{
            typeof: Function,
        },
    },

    methods: {
        AddList1(product){
            this.AddList(product);
        }
    },
    
}
</script>



<style scoped>
    .container{
        width: 100%;
        height: 100vh;
        background: #D9D9D9;
        overflow: auto;
    }
    ::-webkit-scrollbar{
        width: 10px;
    }

    ::-webkit-scrollbar-track{
        background: #D9D9D9;
    }

    
    ::-webkit-scrollbar-thumb{
        border: 1px solid #000;
        border-radius: 55px;
    }

    .blocks{
        width: 100%;
        background: #D9D9D9;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: flex-start;
        
    }

   
</style>