<script setup>

</script>

<template>
    <div x-show="isShowModalReceipt" class="fixed w-full h-screen left-0 top-0 z-10 flex flex-wrap justify-center content-center p-24">
        <div x-show="isShowModalReceipt" class="fixed glass w-full h-screen left-0 top-0 z-0"></div>
        <div
            x-show="isShowModalReceipt"
            class="w-96 rounded-3xl bg-white shadow-xl overflow-hidden z-10"
        >
            <div id="receipt-content" class="text-left w-full text-sm p-6 overflow-auto">
                <div class="text-center">
                    <img src="img/receipt-logo.png" alt="Tailwind POS" class="mb-3 w-8 h-8 inline-block">
                    <h2 class="text-xl font-semibold">TAILWIND POS</h2>
                    <p>CABANG KONOHA SELATAN</p>
                </div>
                <div class="flex mt-4 text-xs">
                    <div class="flex-grow">No: <span x-text="receiptNo"></span></div>
                    <div x-text="receiptDate"></div>
                </div>
                <hr class="my-2">
                <div>
                    <table class="w-full text-xs">
                        <thead>
                        <tr>
                            <th class="py-1 w-1/12 text-center">#</th>
                            <th class="py-1 text-left">Item</th>
                            <th class="py-1 w-2/12 text-center">Qty</th>
                            <th class="py-1 w-3/12 text-right">Subtotal</th>
                        </tr>
                        </thead>
                        <tbody>
                        <template x-for="(item, index) in cart" :key="item">
                            <tr>
                                <td class="py-2 text-center" x-text="index+1"></td>
                                <td class="py-2 text-left">
                                    <span x-text="item.name"></span>
                                    <br/>
                                    <small x-text="priceFormat(item.price)"></small>
                                </td>
                                <td class="py-2 text-center" x-text="item.qty"></td>
                                <td class="py-2 text-right" x-text="priceFormat(item.qty * item.price)"></td>
                            </tr>
                        </template>
                        </tbody>
                    </table>
                </div>
                <hr class="my-2">
                <div>
                    <div class="flex font-semibold">
                        <div class="flex-grow">TOTAL</div>
                        <div x-text="priceFormat(getTotalPrice())"></div>
                    </div>
                    <div class="flex text-xs font-semibold">
                        <div class="flex-grow">PAY AMOUNT</div>
                        <div x-text="priceFormat(cash)"></div>
                    </div>
                    <hr class="my-2">
                    <div class="flex text-xs font-semibold">
                        <div class="flex-grow">CHANGE</div>
                        <div x-text="priceFormat(change)"></div>
                    </div>
                </div>
            </div>
            <div class="p-4 w-full">
                <button class="bg-cyan-500 text-white text-lg px-4 py-3 rounded-2xl w-full focus:outline-none"
                        x-on:click="printAndProceed()">PROCEED
                </button>
            </div>
        </div>
    </div>

</template>

<style scoped>

</style>
