<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Hari Raya | Keluarga Azhan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;800&family=Great+Vibes&display=swap" rel="stylesheet">
    <!-- Confetti JS -->
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>
    
    <style>
        .font-festive { font-family: 'Great Vibes', cursive; }
        .font-body { font-family: 'Outfit', sans-serif; }
        .glass {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in { animation: fadeInUp 0.8s ease-out forwards; }
        
        .blob {
            position: fixed;
            width: 300px;
            height: 300px;
            background: radial-gradient(circle, #fbbf24 0%, transparent 70%);
            filter: blur(60px);
            opacity: 0.15;
            z-index: -1;
        }

        /* Envelope Styles */
        .envelope-wrapper {
            perspective: 1000px;
            cursor: pointer;
            transition: transform 0.3s;
        }
        .envelope-wrapper:hover { transform: scale(1.05); }
        
        .envelope {
            width: 280px;
            height: 180px;
            background: #065f46;
            position: relative;
            border-radius: 0 0 10px 10px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.3);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .envelope::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 0;
            height: 0;
            border-left: 140px solid transparent;
            border-right: 140px solid transparent;
            border-bottom: 100px solid #047857;
            z-index: 2;
        }

        .flap {
            width: 0;
            height: 0;
            border-left: 140px solid transparent;
            border-right: 140px solid transparent;
            border-top: 100px solid #064e3b;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 3;
            transform-origin: top;
            transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .open .flap {
            transform: rotateX(180deg);
            z-index: 1;
        }

        .hidden-content { display: none; opacity: 0; transition: opacity 1s ease-in; }

        /* Floating Animation */
        @keyframes float {
            0%, 100% { transform: translateY(0) rotate(0); }
            50% { transform: translateY(-20px) rotate(10deg); }
        }
        .animate-float { animation: float 6s ease-in-out infinite; }
        .delay-1 { animation-delay: 1s; }
        .delay-2 { animation-delay: 2s; }
        .delay-3 { animation-delay: 3s; }
    </style>
</head>

<body class="font-body bg-[#064e3b] bg-gradient-to-br from-[#064e3b] to-[#022c22] text-white min-h-screen flex flex-col items-center justify-center p-4 sm:p-6 overflow-x-hidden">

    <div class="blob top-[-100px] right-[-100px]"></div>
    <div class="blob bottom-[-150px] left-[-150px] !bg-green-400"></div>

    <!-- 🏮 Pelita & Ketupat Background Decorations -->
    <div class="fixed inset-0 pointer-events-none overflow-hidden z-0 opacity-20">
        <!-- Pelita 1 -->
        <div class="absolute top-10 left-[10%] animate-float delay-1">
            <svg width="60" height="60" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 2L9 7H15L12 2Z" fill="#fbbf24"/>
                <path d="M6 7H18V18C18 19.1046 17.1046 20 16 20H8C6.89543 20 6 19.1046 6 18V7Z" fill="#92400e"/>
                <rect x="5" y="7" width="14" height="2" fill="#78350f"/>
                <circle cx="12" cy="4" r="1" fill="#fef3c7"/>
            </svg>
        </div>
        <!-- Ketupat 1 -->
        <div class="absolute top-40 right-[15%] animate-float delay-2">
            <svg width="80" height="80" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 2L2 12L12 22L22 12L12 2Z" fill="#4ade80" stroke="#166534" stroke-width="1"/>
                <path d="M12 2V22M2 12H22" stroke="#166534" stroke-width="0.5"/>
                <path d="M7 7L17 17M17 7L7 17" stroke="#166534" stroke-width="0.5"/>
            </svg>
        </div>
        <!-- Pelita 2 -->
        <div class="absolute bottom-20 right-[10%] animate-float delay-3">
            <svg width="50" height="50" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 2L9 7H15L12 2Z" fill="#fbbf24"/>
                <path d="M6 7H18V18C18 19.1046 17.1046 20 16 20H8C6.89543 20 6 19.1046 6 18V7Z" fill="#92400e"/>
                <rect x="5" y="7" width="14" height="2" fill="#78350f"/>
            </svg>
        </div>
        <!-- Ketupat 2 -->
        <div class="absolute bottom-40 left-[15%] animate-float">
            <svg width="60" height="60" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 2L2 12L12 22L22 12L12 2Z" fill="#22c55e" stroke="#14532d" stroke-width="1"/>
                <path d="M12 2V22M2 12H22" stroke="#14532d" stroke-width="0.5"/>
            </svg>
        </div>
    </div>

    <!-- 🎵 Lagu Raya -->
    <audio id="rayaSong" loop>
        <source src="{{ asset('audio/raya.mp3') }}" type="audio/mpeg">
    </audio>

    <!-- 🧧 Sampul Raya Intro -->
    <div id="intro" class="flex flex-col items-center animate-fade-in">
        <div id="envelopeWrapper" class="envelope-wrapper mb-8">
            <div id="envelope" class="envelope">
                <div class="flap"></div>
                <div class="z-10 text-center">
                    <p class="text-amber-400 font-bold tracking-widest uppercase text-xs mb-1">Kepada Semua</p>
                    <span class="text-2xl">🎁</span>
                    <p class="mt-2 text-white/80 text-[10px] italic">Klik untuk buka</p>
                </div>
            </div>
        </div>
        <h2 class="font-festive text-3xl sm:text-4xl text-amber-400 text-center max-w-sm leading-relaxed">
            Di hari yang mulia ini,<br>
            kami sekeluarga menyusun sepuluh jari<br>
            memohon ampun dan maaf<br>
            zahir serta batin 💚
        </h2>
    </div>

    <!-- 🎉 Content Raya (Initially Hidden) -->
    <div id="mainContent" class="hidden-content w-full flex flex-col items-center">
        <!-- Header Section -->
        <header class="text-center mb-6">
            <h1 class="font-festive text-5xl sm:text-6xl text-amber-400 mb-1 drop-shadow-lg">Selamat Hari Raya</h1>
            <h2 class="text-xl sm:text-2xl font-light tracking-[0.2em] uppercase text-amber-100/80">Aidilfitri</h2>
            <div class="mt-4 flex flex-col items-center">
                <p class="text-base opacity-90 max-w-sm px-4">
                    Di hari yang mulia ini, kami sekeluarga memohon maaf zahir serta batin 💚
                </p>
                <p class="mt-2 text-lg font-bold text-white border-b border-amber-400 pb-0.5 uppercase tracking-widest">KELUARGA AZHAN</p>
            </div>
        </header>

        <!-- 🥘 Ketupat Image -->
        <div class="mb-6 text-center group">
            <div class="relative inline-block">
                <img src="https://upload.wikimedia.org/wikipedia/commons/3/3a/Ketupat.jpg"
                     class="rounded-2xl shadow-xl w-48 sm:w-56 mx-auto border-2 border-amber-400/20 group-hover:border-amber-400/50 transition-all duration-500"
                     alt="Ketupat Raya">
                <div class="absolute -bottom-3 left-1/2 -translate-x-1/2 glass px-4 py-1 rounded-full whitespace-nowrap shadow-lg">
                    <p class="text-[10px] font-bold text-amber-100 uppercase tracking-tighter">Jom makan-makan 😋🍽️</p>
                </div>
            </div>
        </div>

        <!-- Main Content Area -->
        <main class="w-full max-w-xl space-y-6">
            
            @if(session('success'))
                <div class="bg-emerald-500/20 border border-emerald-500 text-emerald-300 p-4 rounded-xl text-center shadow-xl">
                    {{ session('success') }}
                </div>
            @endif

            <!-- 📝 Form Card -->
            <div class="glass p-5 sm:p-6 rounded-2xl shadow-xl">
                <form method="POST" action="/raya" class="space-y-3">
                    @csrf
                    <div class="flex flex-col sm:flex-row gap-3">
                        <input type="text" name="name" placeholder="Nama Anda" 
                            class="flex-1 bg-white/5 border border-white/10 rounded-xl p-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-amber-400 focus:bg-white/10 transition-all" required maxlength="50">
                        <button type="submit"
                            class="sm:w-32 bg-gradient-to-r from-amber-400 to-amber-600 text-[#064e3b] font-extrabold py-2.5 rounded-xl hover:scale-[1.02] active:scale-100 transition-all shadow-lg uppercase text-xs tracking-wider">
                            Hantar
                        </button>
                    </div>
                    <textarea name="message" placeholder="Tuliskan ucapan raya anda di sini..." rows="2"
                        class="w-full bg-white/5 border border-white/10 rounded-xl p-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-amber-400 focus:bg-white/10 transition-all resize-none" required maxlength="255"></textarea>
                </form>
            </div>

            <!-- 💬 Comment Wall -->
            <div class="space-y-6">
                <h3 class="text-2xl font-bold text-center text-amber-400 flex items-center justify-center gap-3">
                    <span class="text-2xl">🎉</span> Ucapan Dari Tetamu
                </h3>

                <div class="grid gap-3">
                    @forelse($comments as $comment)
                        <div class="glass p-4 rounded-xl border-white/5 hover:bg-white/15 transition-all group relative">
                            <div class="flex justify-between items-start mb-1">
                                <p class="font-bold text-amber-300 group-hover:text-amber-400 transition-colors text-sm">{{ $comment->name }}</p>
                                <div class="flex items-center gap-3">
                                    <span class="text-[9px] uppercase tracking-widest opacity-40">{{ $comment->created_at->diffForHumans() }}</span>
                                    
                                    @if(session('admin_mode'))
                                        <form method="POST" action="/raya/comments/{{ $comment->id }}" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-400 hover:text-red-300 text-[10px] font-bold uppercase tracking-tighter" onclick="return confirm('Padam komen ni?')">
                                                [Delete]
                                            </button>
                                        </form>
                                    @endif
                                </div>
                            </div>
                            <p class="text-white/80 text-sm leading-snug">{{ $comment->message }}</p>
                        </div>
                    @empty
                        <div class="text-center py-10 opacity-50 italic">
                            Belum ada ucapan lagi. Jadilah yang pertama!
                        </div>
                    @endforelse
                </div>
            </div>
        </main>

        <footer class="mt-12 pb-6 text-center opacity-30 text-[10px]">
            <p>&copy; 2026 Keluarga Azhan. Built with 💚</p>
            @if(session('admin_mode'))
                <p class="mt-1 text-emerald-400 font-bold uppercase tracking-tighter">Admin Mode ON</p>
            @endif
        </footer>
    </div>

    <!-- 🎵 Music Control (Fixed) -->
    <div id="musicControl" class="hidden fixed bottom-6 right-6 z-50">
        <button id="musicToggle" class="w-12 h-12 bg-amber-400 text-[#064e3b] rounded-full shadow-2xl flex items-center justify-center hover:scale-110 active:scale-95 transition-all">
            <span id="musicIcon">🎵</span>
        </button>
    </div>

    <!-- Scripts -->
    <script>
        const audio = document.getElementById('rayaSong');
        const musicToggle = document.getElementById('musicToggle');
        const musicIcon = document.getElementById('musicIcon');
        const intro = document.getElementById('intro');
        const envelopeWrapper = document.getElementById('envelopeWrapper');
        const mainContent = document.getElementById('mainContent');
        const musicControl = document.getElementById('musicControl');
        let isPlaying = false;

        // Envelope Opening Logic
        envelopeWrapper.addEventListener('click', () => {
            document.getElementById('envelope').classList.add('open');
            
            // Trigger initial confetti
            confetti({
                particleCount: 150,
                spread: 100,
                origin: { y: 0.6 }
            });

            setTimeout(() => {
                intro.style.display = 'none';
                
                // Show content with fade effect
                mainContent.style.display = 'flex';
                setTimeout(() => {
                    mainContent.style.opacity = 1;
                }, 50);

                musicControl.classList.remove('hidden');
                document.body.classList.remove('justify-center'); // Switch to top alignment
                
                // Play music
                audio.play().then(() => {
                    isPlaying = true;
                    musicIcon.innerText = '🎵';
                }).catch(e => {
                    console.log("Autoplay blocked");
                    musicIcon.innerText = '🔇';
                });

                // Launch continuous confetti effect
                const duration = 3 * 1000;
                const end = Date.now() + duration;

                (function frame() {
                    confetti({
                        particleCount: 3,
                        angle: 60,
                        spread: 55,
                        origin: { x: 0 },
                        colors: ['#fbbf24', '#065f46', '#ffffff']
                    });
                    confetti({
                        particleCount: 3,
                        angle: 120,
                        spread: 55,
                        origin: { x: 1 },
                        colors: ['#fbbf24', '#065f46', '#ffffff']
                    });

                    if (Date.now() < end) {
                        requestAnimationFrame(frame);
                    }
                }());
            }, 800);
        });

        // Music Toggle Logic
        musicToggle.addEventListener('click', () => {
            if (isPlaying) {
                audio.pause();
                musicIcon.innerText = '🔇';
            } else {
                audio.play().catch(e => console.log("Play failed"));
                musicIcon.innerText = '🎵';
            }
            isPlaying = !isPlaying;
        });
    </script>
</body>
</html>
