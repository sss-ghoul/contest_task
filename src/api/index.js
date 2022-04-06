import axios from "axios";

const axiosInstance = axios.create({
    baseURL: 'https://contest.com/'
})
export default axiosInstance;