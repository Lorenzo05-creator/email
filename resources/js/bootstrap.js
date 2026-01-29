import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// --- Import Bootstrap CSS e JS ---
import 'bootstrap/dist/css/bootstrap.min.css';  // CSS di Bootstrap
import * as bootstrap from 'bootstrap';         // JS di Bootstrap

