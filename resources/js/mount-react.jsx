import { createRoot } from 'react-dom/client';
import HardHatAnimation from './components/HardHatAnimation.jsx';
import AboutAnimation from './components/AboutAnimation.jsx';

export function mountHardHat() {
    const el = document.getElementById('hard-hat-animation');
    if (el) {
        createRoot(el).render(<HardHatAnimation />);
    }
}

export function mountAbout() {
    const el = document.getElementById('about-animation');
    if (el) {
        createRoot(el).render(<AboutAnimation />);
    }
}
