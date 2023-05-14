<template>
    <div class="container1">
        <slot></slot>
    </div>
</template>


<script>
export default {



}
</script>


<style scoped>
.container1{
    width: 109px;
    height: 99px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    padding: 10px 0 10px 0;
    align-items: center;
    font-size: 30px;
    margin-bottom: 20px;
    background: rgba(248, 250, 255, 0.55);
    background-blend-mode: darken;
    border: 0.5px solid #656567;
    box-shadow: 0px 1px 7px rgba(0, 0, 0, 0.25);
    filter: blur(0.5px);
    border-radius: 19px;
}

   

</style>