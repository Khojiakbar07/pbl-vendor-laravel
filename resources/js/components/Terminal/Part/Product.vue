<script>
export default {
    name: "Product",
    props: ['product'],
    data: function () {
        return {
            //product: this.product
            //product: {}
        }
    }
}
</script>

<template>
    <div role="button" class="select-none cursor-pointer transition-shadow overflow-hidden rounded-2xl bg-white shadow hover:shadow-lg" title="Beef Burger">
        <!-- <img src="/theme/terminal/beef-burger.png" alt="Beef Burger"> -->
        <div class="flex pb-3 px-3 text-sm -mt-3">
            <p class="flex-grow truncate mr-1">{{ product.name }}</p>
            <p class="nowrap font-semibold">{{ product.price }} UZS</p>
        </div>
    </div>



</template>



<style scoped>

</style>
