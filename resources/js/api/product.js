import http from "@/function/http";

class product {

    // PAGES
    getProducts(data = {}){
        return http.post('/products', data);
    }

    getProduct(data = {}){
        return http.post('/product/{data.id}', data);
    }

    sendOrder(data = {}){
        return http.post('/order/store', data);
    }

}

export default new product();
