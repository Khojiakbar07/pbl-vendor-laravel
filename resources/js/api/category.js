import http from "@/function/http";

class category {

    // PAGES
    getCategories(data = {}){
        return http.post('/categories', data);
    }

    getCategory(data = {}){
        return http.post('/category/{data.id}', data);
    }

}

export default new category();
