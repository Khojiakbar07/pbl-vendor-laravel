import http from "@/function/http";

class brand {

    // PAGES
    getBrands(data = {}){
        return http.post('/brands', data);
    }

    getBrand(data = {}){
        return http.post('/brand/{data.id}', data);
    }

}

export default new brand();
