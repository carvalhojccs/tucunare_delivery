import './bootstrap';

import Alpine from 'alpinejs';

// Import TailwindCSS variables
import { tailwindConfig } from './utils';

import focus from '@alpinejs/focus';
window.Alpine = Alpine;

Alpine.plugin(focus);

Alpine.start();
