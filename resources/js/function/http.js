import axios from "axios";

export default axios.create({
    //baseURL: process.env.MIX_BASE_API_URL,
    baseURL: '/api',
    headers: {
        //"Authorization": "Bearer " + process.env.MIX_ACCESS_TOKEN,
        "Content-type": "application/json",
    }
});

export function request(method, url, data = {}) {
    console.log(url);
    return fetch(url, {
        method,
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json',
            //"Authorization": "Bearer " + process.env.MIX_ACCESS_TOKEN,
            'X-CSRF-TOKEN': document.head.querySelector('meta[name=csrf-token]').content
            // 'Content-Type': 'application/x-www-form-urlencoded',
        },
        ...(method === 'get' ? {}: {body: JSON.stringify(data)})
    }).then(async (response) => {
        if (response.status >=200 && response.status <300) {
            return response.json()
        }
        throw await response.json();
    })
}

export function get(url, data = {}) {
    return request('get', url, data)
}

export function post(url, data = {}) {
    return request('post', url, data)
}
