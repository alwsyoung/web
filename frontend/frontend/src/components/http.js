import axios from "axios";

/**
 * HTTP компонент для отправки запросов по REST API.
 * @type {AxiosInstance}
 */
const HTTP = axios.create({
    baseURL: 'http://192.168.99.100:50001/api/v1',
    headers: {
        'Content-Type': 'application/json',
        //'Authorization': 'Bearer 3S06Dml8Htz1YDQgSwRKE2BM_aoBm2E6'
    }
});

export default HTTP;