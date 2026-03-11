import React from 'react';

const css = `
    @keyframes ab-house-float {
        0%,  100% { transform: translateY(0px)   rotate(-2deg) scale(1);    }
        25%        { transform: translateY(-20px) rotate(2deg)  scale(1.03); }
        75%        { transform: translateY(-10px) rotate(-1deg) scale(0.98); }
    }
    @keyframes ab-orbit-cw {
        from { transform: rotate(0deg)   translateX(138px) rotate(0deg);   }
        to   { transform: rotate(360deg) translateX(138px) rotate(-360deg); }
    }
    @keyframes ab-orbit-ccw {
        from { transform: rotate(0deg)    translateX(95px) rotate(0deg);   }
        to   { transform: rotate(-360deg) translateX(95px) rotate(360deg); }
    }
    @keyframes ab-glow {
        0%, 100% { opacity: 0.38; transform: scale(1);    }
        50%       { opacity: 0.65; transform: scale(1.1); }
    }
    @keyframes ab-ring-cw {
        from { transform: rotate(0deg);   }
        to   { transform: rotate(360deg); }
    }
    @keyframes ab-ring-ccw {
        from { transform: rotate(0deg);    }
        to   { transform: rotate(-360deg); }
    }
    @keyframes ab-dot {
        0%, 100% { opacity: 0;   transform: scale(0.3); }
        50%       { opacity: 1;   transform: scale(1);   }
    }
`;

/* ── Icon SVGs ── */
function WrenchIcon({ color = '#1C1917', size = 18 }) {
    return (
        <svg width={size} height={size} viewBox="0 0 24 24" fill="none"
            stroke={color} strokeWidth="2.5" strokeLinecap="round" strokeLinejoin="round">
            <path d="M14.7 6.3a1 1 0 000 1.4l1.6 1.6a1 1 0 001.4 0l3.77-3.77a6 6 0 01-7.94 7.94l-6.91 6.91a2.12 2.12 0 01-3-3l6.91-6.91a6 6 0 017.94-7.94l-3.76 3.76z"/>
        </svg>
    );
}

function BoltIcon({ color = 'white', size = 16 }) {
    return (
        <svg width={size} height={size} viewBox="0 0 24 24" fill="none"
            stroke={color} strokeWidth="2.5" strokeLinecap="round" strokeLinejoin="round">
            <path d="M13 10V3L4 14h7v7l9-11h-7z"/>
        </svg>
    );
}

function GearIcon({ color = 'white', size = 16 }) {
    return (
        <svg width={size} height={size} viewBox="0 0 24 24" fill="none"
            stroke={color} strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
            <path d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
            <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
        </svg>
    );
}

function HouseMinIcon({ color = '#1C1917', size = 14 }) {
    return (
        <svg width={size} height={size} viewBox="0 0 24 24" fill="none"
            stroke={color} strokeWidth="2.5" strokeLinecap="round" strokeLinejoin="round">
            <path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
        </svg>
    );
}

/* ── Floating orbital tool bubble ── */
function OrbitTool({ size, bg, glow, orbit, duration, delay, children }) {
    return (
        <div style={{
            position: 'absolute',
            top: '50%', left: '50%',
            width: size, height: size,
            marginTop: -(size / 2),
            marginLeft: -(size / 2),
            animation: `${orbit} ${duration} linear infinite`,
            animationDelay: delay,
        }}>
            <div style={{
                width: size, height: size,
                borderRadius: '50%',
                background: bg,
                boxShadow: `0 0 ${size * 0.4}px ${glow}`,
                display: 'flex', alignItems: 'center', justifyContent: 'center',
            }}>
                {children}
            </div>
        </div>
    );
}

export default function AboutAnimation() {
    return (
        <div style={{
            position: 'relative',
            width: 360,
            height: 360,
            display: 'flex',
            alignItems: 'center',
            justifyContent: 'center',
            flexShrink: 0,
        }}>
            <style>{css}</style>

            {/* Amber radial glow */}
            <div style={{
                position: 'absolute',
                inset: '18px',
                borderRadius: '50%',
                background: 'radial-gradient(circle, rgba(245,158,11,0.2) 0%, rgba(180,83,9,0.06) 55%, transparent 100%)',
                animation: 'ab-glow 3.5s ease-in-out infinite',
            }} />

            {/* Outer dashed ring (clockwise) */}
            <div style={{
                position: 'absolute',
                inset: '8px',
                borderRadius: '50%',
                border: '1.5px dashed rgba(245,158,11,0.22)',
                animation: 'ab-ring-cw 28s linear infinite',
            }} />

            {/* Inner dashed ring (counter-clockwise) */}
            <div style={{
                position: 'absolute',
                inset: '62px',
                borderRadius: '50%',
                border: '1px dashed rgba(234,88,12,0.18)',
                animation: 'ab-ring-ccw 20s linear infinite',
            }} />

            {/* ── Outer orbit (clockwise) ── */}

            {/* Wrench — outer orbit */}
            <OrbitTool size={38} bg="#F59E0B" glow="#F59E0B99"
                orbit="ab-orbit-cw" duration="11s" delay="0s">
                <WrenchIcon color="#1C1917" size={18} />
            </OrbitTool>

            {/* Bolt — outer orbit, opposite side */}
            <OrbitTool size={34} bg="#EA580C" glow="#EA580C99"
                orbit="ab-orbit-cw" duration="11s" delay="-5.5s">
                <BoltIcon color="white" size={16} />
            </OrbitTool>

            {/* ── Inner orbit (counter-clockwise) ── */}

            {/* Gear — inner orbit */}
            <OrbitTool size={31} bg="#B45309" glow="#B4530999"
                orbit="ab-orbit-ccw" duration="8s" delay="0s">
                <GearIcon color="white" size={15} />
            </OrbitTool>

            {/* Mini house — inner orbit, opposite side */}
            <OrbitTool size={28} bg="#FBBF24" glow="#FBBF2499"
                orbit="ab-orbit-ccw" duration="8s" delay="-4s">
                <HouseMinIcon color="#1C1917" size={14} />
            </OrbitTool>

            {/* ── Floating house ── */}
            <div style={{ animation: 'ab-house-float 4.5s ease-in-out infinite', zIndex: 2 }}>
                <svg viewBox="0 0 200 200" width="200" height="200"
                    xmlns="http://www.w3.org/2000/svg" aria-label="House illustration">
                    <defs>
                        <linearGradient id="ab-roof" x1="10%" y1="0%" x2="90%" y2="100%">
                            <stop offset="0%"   stopColor="#FDE68A" />
                            <stop offset="45%"  stopColor="#F59E0B" />
                            <stop offset="100%" stopColor="#D97706" />
                        </linearGradient>
                        <linearGradient id="ab-wall" x1="0%" y1="0%" x2="0%" y2="100%">
                            <stop offset="0%"   stopColor="#F5F5F4" />
                            <stop offset="100%" stopColor="#D6D3D1" />
                        </linearGradient>
                        <linearGradient id="ab-door" x1="0%" y1="0%" x2="0%" y2="100%">
                            <stop offset="0%"   stopColor="#F59E0B" />
                            <stop offset="100%" stopColor="#B45309" />
                        </linearGradient>
                        <radialGradient id="ab-sheen" cx="35%" cy="25%" r="45%">
                            <stop offset="0%"   stopColor="rgba(255,255,255,0.55)" />
                            <stop offset="100%" stopColor="rgba(255,255,255,0)"    />
                        </radialGradient>
                        <filter id="ab-shadow" x="-22%" y="-18%" width="144%" height="165%">
                            <feDropShadow dx="0" dy="8" stdDeviation="10" floodColor="rgba(0,0,0,0.22)" />
                        </filter>
                    </defs>

                    {/* Ground shadow */}
                    <ellipse cx="100" cy="190" rx="54" ry="5" fill="rgba(0,0,0,0.10)" />

                    <g filter="url(#ab-shadow)">

                        {/* Chimney */}
                        <rect x="134" y="62" width="17" height="44" fill="#B45309" />
                        <rect x="131" y="59" width="23" height="6" rx="1" fill="#92400E" />

                        {/* Roof */}
                        <polygon points="22,107 100,36 178,107" fill="url(#ab-roof)" />
                        {/* Roof sheen */}
                        <polygon points="22,107 100,36 178,107" fill="url(#ab-sheen)" />
                        {/* Ridge line */}
                        <line x1="100" y1="36" x2="100" y2="107" stroke="#B45309" strokeWidth="1.5" opacity="0.25" />
                        {/* Roof edge shadow */}
                        <line x1="22" y1="107" x2="178" y2="107" stroke="#B45309" strokeWidth="3" opacity="0.3" />

                        {/* Walls */}
                        <rect x="36" y="105" width="128" height="78" fill="url(#ab-wall)" />

                        {/* Left window */}
                        <rect x="48" y="118" width="34" height="28" rx="1" fill="#BAE6FD" />
                        <rect x="48" y="118" width="34" height="28" rx="1" fill="none" stroke="#94A3B8" strokeWidth="1.5" />
                        <line x1="65" y1="118" x2="65" y2="146" stroke="#94A3B8" strokeWidth="1" />
                        <line x1="48" y1="132" x2="82" y2="132" stroke="#94A3B8" strokeWidth="1" />
                        {/* Window sill */}
                        <rect x="45" y="145" width="40" height="4" rx="1" fill="#CBD5E1" />

                        {/* Right window */}
                        <rect x="118" y="118" width="34" height="28" rx="1" fill="#BAE6FD" />
                        <rect x="118" y="118" width="34" height="28" rx="1" fill="none" stroke="#94A3B8" strokeWidth="1.5" />
                        <line x1="135" y1="118" x2="135" y2="146" stroke="#94A3B8" strokeWidth="1" />
                        <line x1="118" y1="132" x2="152" y2="132" stroke="#94A3B8" strokeWidth="1" />
                        <rect x="115" y="145" width="40" height="4" rx="1" fill="#CBD5E1" />

                        {/* Door */}
                        <rect x="79" y="137" width="42" height="46" rx="1" fill="url(#ab-door)" />
                        {/* Door header */}
                        <rect x="79" y="137" width="42" height="7" rx="1" fill="#92400E" />
                        {/* Door knob */}
                        <circle cx="115" cy="162" r="3" fill="#92400E" />

                        {/* Foundation */}
                        <rect x="32" y="181" width="136" height="5" rx="1" fill="#D6D3D1" />
                    </g>
                </svg>
            </div>

            {/* Corner accent glows */}
            <div style={{
                position: 'absolute', bottom: 28, right: 28,
                width: 13, height: 13, borderRadius: '50%',
                background: '#EA580C',
                boxShadow: '0 0 16px #EA580C99',
                animation: 'ab-dot 2.1s ease-in-out infinite',
            }} />
            <div style={{
                position: 'absolute', top: 34, left: 38,
                width: 9, height: 9, borderRadius: '50%',
                background: '#FBBF24',
                boxShadow: '0 0 12px #FBBF2499',
                animation: 'ab-dot 2.7s ease-in-out infinite',
                animationDelay: '-0.8s',
            }} />
        </div>
    );
}
