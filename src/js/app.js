// import "./index.scss";

require('bootstrap');

import jQuery from "jquery";
window.$ = window.jQuery = jQuery; // workaround for https://github.com/parcel-bundler/parcel/issues/333
import 'bootstrap/dist/js/bootstrap.bundle';

import Highway from '@dogstudio/highway';
