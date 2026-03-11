import './bootstrap';
import Alpine from 'alpinejs';
import { mountHardHat } from './mount-react.jsx';

window.Alpine = Alpine;
Alpine.start();

// Mount the hard-hat React animation once the DOM is ready
document.addEventListener('DOMContentLoaded', () => {
    mountHardHat();
});

