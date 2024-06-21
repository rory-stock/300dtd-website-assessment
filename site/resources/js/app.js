import './bootstrap';

import Alpine from 'alpinejs'
import collapse from '@alpinejs/collapse'

import htmx from 'htmx.org'


Alpine.plugin(collapse)

window.Alpine = Alpine
window.htmx = htmx

Alpine.start()
