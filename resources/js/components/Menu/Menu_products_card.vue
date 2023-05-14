<template>
    <div>
        <div class="container">
            <div class="img">
              <img  alt="" src="../../images/asd.jfif">
              
            </div>
            <div class="product_name">
               <p>{{ products['name'] }}</p>
               <p>{{ products['price'] }} so'm</p>
            </div>
            
        </div>
       
    </div>
</template>


<script>


export default {

    

    props:{
        products:{
            typeof: Object,
            Request: true,
        },
    },
    methods:{
        
    }
    
}
</script>


<style scoped>


.container{
    width: 118.36px;
    height: 182.26px;
    border: 1px solid #000;
    display: flex;
    flex-direction: column;
    padding-top: 25px;
    padding-left: 15px;
    background: #fff;
    padding-bottom: 10px;
    margin-bottom: 10px;
    margin: auto;
    margin: 5px 5px 5px 5px;
    border: 1px solid #fff;
    border-radius: 25px;
    overflow: hidden;

}

.img{
    width: 70px;
    height: 70px;
    border: 1px solid #fff;
    border-radius: 25px;
    overflow: hidden;
    

}

img{
    width: 70px;
    height: 70px;
    
}

.product_name p{
    font-size: 13px;
    color: #656567 ;
}

    
</style>