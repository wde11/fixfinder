import React from 'react';

const orbitParticles = [
    { delay: '0s',    color: '#FBBF24', size: 10 },
    { delay: '-1s',   color: '#EA580C', size: 7  },
    { delay: '-2s',   color: '#F59E0B', size: 12 },
    { delay: '-3s',   color: '#B45309', size: 8  },
    { delay: '-4s',   color: '#FBBF24', size: 9  },
    { delay: '-5s',   color: '#EA580C', size: 6  },
];

const css = `
    @keyframes hat-float {
        0%,  100% { transform: translateY(0px)   rotate(-4deg) scale(1);    }
        25%        { transform: translateY(-22px) rotate(3deg)  scale(1.03); }
        75%        { transform: translateY(-11px) rotate(-2deg) scale(0.98); }
    }
    @keyframes orbit-particle {
        from { transform: rotate(0deg)   translateX(148px) rotate(0deg);    }
        to   { transform: rotate(360deg) translateX(148px) rotate(-360deg); }
    }
    @keyframes glow-pulse {
        0%,  100% { opacity: 0.45; transform: scale(1);    }
        50%        { opacity: 0.8;  transform: scale(1.1); }
    }
    @keyframes ring-drift {
        from { transform: rotate(0deg);   }
        to   { transform: rotate(360deg); }
    }
    @keyframes ring-drift-r {
        from { transform: rotate(0deg);    }
        to   { transform: rotate(-360deg); }
    }
    @keyframes spark-twinkle {
        0%,  100% { opacity: 0;   transform: scale(0.4); }
        50%        { opacity: 1;   transform: scale(1);   }
    }
    @keyframes tool-cycle {
        0%   { opacity: 0;   transform: scale(0.55) rotate(-20deg); }
        10%  { opacity: 1;   transform: scale(1)    rotate(0deg);   }
        28%  { opacity: 1;   transform: scale(1)    rotate(0deg);   }
        38%  { opacity: 0;   transform: scale(0.55) rotate(20deg);  }
        100% { opacity: 0;   transform: scale(0.55) rotate(-20deg); }
    }
`;

export default function HardHatAnimation() {
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
                inset: '20px',
                borderRadius: '50%',
                background: 'radial-gradient(circle, rgba(245,158,11,0.22) 0%, rgba(180,83,9,0.07) 55%, transparent 100%)',
                animation: 'glow-pulse 3s ease-in-out infinite',
            }} />

            {/* Outer dashed ring (slow clockwise spin) */}
            <div style={{
                position: 'absolute',
                inset: '10px',
                borderRadius: '50%',
                border: '1.5px dashed rgba(245,158,11,0.25)',
                animation: 'ring-drift 24s linear infinite',
            }} />

            {/* Inner dashed ring (slow counter-clockwise) */}
            <div style={{
                position: 'absolute',
                inset: '55px',
                borderRadius: '50%',
                border: '1px dashed rgba(234,88,12,0.2)',
                animation: 'ring-drift-r 18s linear infinite',
            }} />

            {/* Orbiting particles */}
            {orbitParticles.map((p, i) => (
                <div
                    key={i}
                    style={{
                        position: 'absolute',
                        top: '50%',
                        left: '50%',
                        width: p.size,
                        height: p.size,
                        marginTop: -(p.size / 2),
                        marginLeft: -(p.size / 2),
                        animation: `orbit-particle 7s linear infinite`,
                        animationDelay: p.delay,
                    }}
                >
                    <div style={{
                        width: p.size,
                        height: p.size,
                        borderRadius: '50%',
                        background: p.color,
                        boxShadow: `0 0 ${p.size}px ${p.color}88`,
                        animation: `spark-twinkle ${1.5 + i * 0.3}s ease-in-out infinite`,
                        animationDelay: `${-i * 0.4}s`,
                    }} />
                </div>
            ))}

            {/* Floating hard hat */}
            <div style={{ animation: 'hat-float 4.2s ease-in-out infinite', zIndex: 2 }}>
                <svg
                    viewBox="0 0 230 195"
                    width="230"
                    height="195"
                    xmlns="http://www.w3.org/2000/svg"
                    aria-label="Construction hard hat"
                >
                    <defs>
                        {/* Dome gradient: bright top-left to deep amber bottom-right */}
                        <linearGradient id="ff-dome" x1="10%" y1="0%" x2="90%" y2="100%">
                            <stop offset="0%"   stopColor="#FDE68A" />
                            <stop offset="40%"  stopColor="#F59E0B" />
                            <stop offset="100%" stopColor="#D97706" />
                        </linearGradient>

                        {/* Highlight sheen — top-left white glow */}
                        <radialGradient id="ff-sheen" cx="32%" cy="22%" r="42%">
                            <stop offset="0%"   stopColor="rgba(255,255,255,0.65)" />
                            <stop offset="100%" stopColor="rgba(255,255,255,0)"    />
                        </radialGradient>

                        {/* Brim gradient: darker amber */}
                        <linearGradient id="ff-brim" x1="0%" y1="0%" x2="0%" y2="100%">
                            <stop offset="0%"   stopColor="#B45309" />
                            <stop offset="100%" stopColor="#7C2D12" />
                        </linearGradient>

                        {/* Badge gradient */}
                        <linearGradient id="ff-badge" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%"   stopColor="#7C2D12" />
                            <stop offset="100%" stopColor="#92400E" />
                        </linearGradient>

                        {/* Drop shadow filter */}
                        <filter id="ff-shadow" x="-25%" y="-20%" width="150%" height="170%">
                            <feDropShadow dx="2" dy="10" stdDeviation="12" floodColor="rgba(0,0,0,0.28)" />
                        </filter>
                    </defs>

                    {/* Ground shadow ellipse */}
                    <ellipse cx="115" cy="188" rx="70" ry="5.5" fill="rgba(0,0,0,0.12)" />

                    <g filter="url(#ff-shadow)">
                        {/* ── Brim underside (darkest) ── */}
                        <path
                            d="M 6 126
                               Q 5 148 115 148
                               Q 225 148 224 126
                               L 205 119
                               Q 175 133 115 133
                               Q 55 133 25 119 Z"
                            fill="url(#ff-brim)"
                        />

                        {/* ── Brim top face ── */}
                        <path
                            d="M 25 119
                               Q 55 131 115 131
                               Q 175 131 205 119
                               L 192 112
                               Q 162 124 115 124
                               Q 68 124 38 112 Z"
                            fill="#92400E"
                        />

                        {/* ── Dome (main body) ── */}
                        <path
                            d="M 38 112
                               Q 32 70 76 45
                               Q 115 24 154 45
                               Q 198 70 192 112 Z"
                            fill="url(#ff-dome)"
                        />

                        {/* ── Sheen overlay ── */}
                        <path
                            d="M 38 112
                               Q 32 70 76 45
                               Q 115 24 154 45
                               Q 198 70 192 112 Z"
                            fill="url(#ff-sheen)"
                        />

                        {/* ── Centre ridge ── */}
                        <path
                            d="M 109 27 Q 115 23 121 27 L 123 112 L 107 112 Z"
                            fill="#92400E"
                            opacity="0.32"
                        />

                        {/* ── Side reinforcement ribs ── */}
                        <path d="M 60 108 Q 55 78 76 50" stroke="#B45309" strokeWidth="2" fill="none" opacity="0.35" />
                        <path d="M 170 108 Q 175 78 154 50" stroke="#B45309" strokeWidth="2" fill="none" opacity="0.35" />

                        {/* ── Front badge plate ── */}
                        <rect x="87" y="78" width="56" height="28" rx="7" fill="url(#ff-badge)" opacity="0.82" />

                        {/* ── Animated tool icons on badge ── */}

                        {/* Wrench — first in cycle */}
                        <g style={{
                            transformBox: 'fill-box',
                            transformOrigin: 'center',
                            animation: 'tool-cycle 6s ease-in-out infinite',
                            animationDelay: '0s',
                        }}>
                            <svg x="106" y="83" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#FDE68A" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
                                <path d="M14.7 6.3a1 1 0 000 1.4l1.6 1.6a1 1 0 001.4 0l3.77-3.77a6 6 0 01-7.94 7.94l-6.91 6.91a2.12 2.12 0 01-3-3l6.91-6.91a6 6 0 017.94-7.94l-3.76 3.76z"/>
                            </svg>
                        </g>

                        {/* Bolt/Lightning — second in cycle */}
                        <g style={{
                            transformBox: 'fill-box',
                            transformOrigin: 'center',
                            animation: 'tool-cycle 6s ease-in-out infinite',
                            animationDelay: '-2s',
                        }}>
                            <svg x="108" y="83" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#FDE68A" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
                                <path d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </g>

                        {/* Gear/Settings — third in cycle */}
                        <g style={{
                            transformBox: 'fill-box',
                            transformOrigin: 'center',
                            animation: 'tool-cycle 6s ease-in-out infinite',
                            animationDelay: '-4s',
                        }}>
                            <svg x="106" y="83" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#FDE68A" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
                                <path d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                                <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </g>

                        {/* ── Inner sweat band (thin strip at brim line) ── */}
                        <path
                            d="M 38 112 Q 68 117 115 117 Q 162 117 192 112
                               L 192 112 Q 162 119 115 119 Q 68 119 38 112 Z"
                            fill="#1C1917"
                            opacity="0.18"
                        />
                    </g>
                </svg>
            </div>

            {/* Construction-orange corner accent glows */}
            <div style={{
                position: 'absolute', bottom: 28, right: 28,
                width: 14, height: 14, borderRadius: '50%',
                background: '#EA580C',
                boxShadow: '0 0 18px #EA580C99',
                animation: 'spark-twinkle 2s ease-in-out infinite',
            }} />
            <div style={{
                position: 'absolute', top: 32, left: 40,
                width: 10, height: 10, borderRadius: '50%',
                background: '#FBBF24',
                boxShadow: '0 0 14px #FBBF2499',
                animation: 'spark-twinkle 2.5s ease-in-out infinite',
                animationDelay: '-0.8s',
            }} />
        </div>
    );
}
