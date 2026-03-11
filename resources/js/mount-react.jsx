import { createRoot } from 'react-dom/client';
import HardHatAnimation from './components/HardHatAnimation.jsx';

export function mountHardHat() {
    const el = document.getElementById('hard-hat-animation');
    if (el) {
        createRoot(el).render(<HardHatAnimation />);
    }
}
