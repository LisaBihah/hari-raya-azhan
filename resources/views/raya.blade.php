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

        .hidden-content { display: none; opacity: 0; }

        /* Floating Animation */
        @keyframes float {
            0%, 100% { transform: translateY(0) rotate(0); }
            50% { transform: translateY(-20px) rotate(10deg); }
        }
        .animate-float { animation: float 6s ease-in-out infinite; }
        .delay-1 { animation-delay: 1s; }
        .delay-2 { animation-delay: 2s; }
        .delay-3 { animation-delay: 3s; }
        /* Screenshot/Copy Discouragement */
        body {
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        img {
            -webkit-touch-callout: none;
        }
        /* Mobile No-Scroll Setup */
        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
        }
        body.is-locked {
            overflow: hidden;
            height: 100dvh;
        }
        .main-wrapper {
            min-height: 100dvh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center; /* Centers intro */
            padding: 1rem;
            position: relative;
            z-index: 10;
            transition: justify-content 0.5s;
        }
        .is-open .main-wrapper {
            padding-top: 2rem;
            overflow-y: auto;
        }
        .hidden-content { display: none; opacity: 0; }
    </style>
</head>

<body class="font-body bg-[#064e3b] bg-gradient-to-br from-[#064e3b] to-[#022c22] text-white is-locked">
    <div class="main-wrapper" id="pageWrapper">

    <div class="blob top-[-100px] right-[-100px]"></div>
    <div class="blob bottom-[-150px] left-[-150px] !bg-green-400"></div>

    <!-- 🏮 Pelita & Ketupat Background Decorations -->
    <div class="fixed inset-0 pointer-events-none overflow-hidden z-0 opacity-10">
        <!-- Pelita 1 -->
        <div class="absolute top-5 left-[5%] animate-float delay-1">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 2L9 7H15L12 2Z" fill="#fbbf24"/>
                <path d="M6 7H18V18C18 19.1046 17.1046 20 16 20H8C6.89543 20 6 19.1046 6 18V7Z" fill="#92400e"/>
                <rect x="5" y="7" width="14" height="2" fill="#78350f"/>
            </svg>
        </div>
        <!-- Ketupat 1 -->
        <div class="absolute top-20 right-[5%] animate-float delay-2">
            <svg width="60" height="60" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 2L2 12L12 22L22 12L12 2Z" fill="#4ade80" stroke="#166534" stroke-width="1"/>
            </svg>
        </div>
    </div>


    <!-- 🧧 Sampul Raya Intro -->
    <div id="intro" class="flex flex-col items-center animate-fade-in py-4">
        <div id="envelopeWrapper" class="envelope-wrapper mb-4 scale-90 sm:scale-100">
            <div id="envelope" class="envelope glass">
                <div class="flap"></div>
                <div class="z-10 text-center">
                    <p class="text-amber-400 font-bold tracking-widest uppercase text-[10px] mb-1">Kepada Semua</p>
                    <span class="text-xl">🎁</span>
                    <p class="mt-1 text-white/80 text-[9px] italic">Klik untuk buka</p>
                </div>
            </div>
        </div>
        <h2 class="font-festive text-2xl sm:text-3xl text-amber-400 text-center max-w-xs leading-relaxed">
            Selamat Hari Raya Aidilfitri 🌙<br>
            Dengan penuh keikhlasan,<br>
            kami sekeluarga memohon maaf<br>
            zahir dan batin 💚
        </h2>
    </div>

    <!-- 🎉 Content Raya (Initially Hidden) -->
    <div id="mainContent" class="hidden-content w-full flex flex-col items-center px-4 pb-24">
        <!-- Header Section -->
        <header class="text-center mb-4">
            <h1 class="font-festive text-4xl sm:text-5xl text-amber-400 mb-0.5 drop-shadow-lg">Selamat Hari Raya</h1>
            <h2 class="text-lg sm:text-xl font-light tracking-[0.2em] uppercase text-amber-100/80">Aidilfitri</h2>
            <div class="mt-2 flex flex-col items-center">
                <p class="text-sm opacity-90 max-w-xs px-2">
                    Kami sekeluarga memohon maaf zahir dan batin 💚
                </p>
                <p class="mt-1 text-base font-bold text-white border-b border-amber-400 pb-0.5 uppercase tracking-widest leading-none">KELUARGA AZHAN</p>
            </div>
        </header>

        <div class="mb-4 text-center group">
            <div class="relative inline-block">
                <img src="{{ asset('images/raya-2026.jpg') }}"
                     class="rounded-xl shadow-lg w-56 sm:w-64 mx-auto border border-amber-400/20 group-hover:border-amber-400/50 transition-all duration-500"
                     id="familyImage"
                     alt="Keluarga Azhan">
            </div>
        </div>

        <!-- Main Content Area -->
        <main class="w-full max-w-xl space-y-6">

            <!-- 📝 Form Card -->
            <div class="glass p-5 sm:p-6 rounded-2xl shadow-xl">
                <form id="commentForm" method="POST" action="/raya" class="space-y-4">
                    @csrf
                    <div class="space-y-1">
                        <input type="text" name="name" placeholder="Nama Anda" 
                            class="w-full bg-white/5 border border-white/10 rounded-xl p-3 focus:outline-none focus:ring-2 focus:ring-amber-400 focus:bg-white/10 transition-all" required maxlength="50">
                    </div>

                    <div class="space-y-1">
                        <textarea name="message" placeholder="Tuliskan ucapan raya anda di sini..." rows="3"
                            class="w-full bg-white/5 border border-white/10 rounded-xl p-3 focus:outline-none focus:ring-2 focus:ring-amber-400 focus:bg-white/10 transition-all resize-none" required maxlength="255"></textarea>
                    </div>

                    <button type="submit"
                        class="w-full bg-gradient-to-r from-amber-400 to-amber-600 text-[#064e3b] font-extrabold py-3 rounded-xl hover:scale-[1.02] active:scale-100 transition-all shadow-lg uppercase tracking-wider">
                        Hantar Ucapan
                    </button>
                </form>
            </div>

            <!-- 💬 Comment Wall -->
            <div class="space-y-4">
                <h3 class="text-xl font-bold text-center text-amber-400 flex items-center justify-center gap-2">
                    <span class="text-xl">💌</span> Titipan Ucapan dari Saudara & Sahabat
                </h3>

                <div id="commentWall" class="grid gap-2">
                    @forelse($comments as $comment)
                        <div class="glass p-3 rounded-lg border-white/5 hover:bg-white/15 transition-all group relative">
                            <div class="flex justify-between items-start mb-0.5">
                                <p class="font-bold text-amber-300 group-hover:text-amber-400 transition-colors text-[13px]">{{ $comment->name }}</p>
                                <div class="flex items-center gap-2">
                                    <span class="text-[8px] uppercase tracking-widest opacity-40">{{ $comment->created_at->diffForHumans() }}</span>
                                    
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

        <footer class="mt-8 pb-4 text-center opacity-30 text-[9px]">
            <p>&copy; 2026 Keluarga Azhan. Built with 💚</p>
            @if(session('admin_mode'))
                <p class="mt-0.5 text-emerald-400 font-bold uppercase tracking-tighter">Admin Mode ON</p>
            @endif
        </footer>
    </div>


    <!-- Scripts -->
    <script>
        const intro = document.getElementById('intro');
        const envelopeWrapper = document.getElementById('envelopeWrapper');
        const mainContent = document.getElementById('mainContent');


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
                document.body.classList.remove('is-locked');
                document.body.classList.add('is-open');
                
                // Show content with fade effect
                mainContent.style.display = 'flex';
                setTimeout(() => {
                    mainContent.style.opacity = 1;
                }, 50);

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


        // 🚀 AJAX Form Submission
        const commentForm = document.getElementById('commentForm');
        const commentWall = document.getElementById('commentWall');

        commentForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            
            const formData = new FormData(commentForm);
            const submitBtn = commentForm.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerText;
            
            submitBtn.disabled = true;
            submitBtn.innerText = 'Menghantar...';

            try {
                const response = await fetch('/raya', {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'Accept': 'application/json'
                    }
                });

                const data = await response.json();

                if (data.success) {
                    // Create new comment element
                    const newComment = document.createElement('div');
                    newComment.className = 'glass p-3 rounded-lg border-white/5 hover:bg-white/15 transition-all group relative animate-fade-in';
                    newComment.innerHTML = `
                        <div class="flex justify-between items-start mb-0.5">
                            <p class="font-bold text-amber-300 group-hover:text-amber-400 transition-colors text-[13px]">${data.comment.name}</p>
                            <div class="flex items-center gap-2">
                                <span class="text-[8px] uppercase tracking-widest opacity-40">${data.comment.created_at}</span>
                            </div>
                        </div>
                        <p class="text-white/80 text-sm leading-snug">${data.comment.message}</p>
                    `;

                    // Prepend and hide empty message if exists
                    const emptyMsg = commentWall.querySelector('.italic');
                    if (emptyMsg) emptyMsg.style.display = 'none';
                    
                    commentWall.prepend(newComment);
                    commentForm.reset();
                    
                    // Small success explosion
                    confetti({
                        particleCount: 40,
                        spread: 70,
                        origin: { y: 0.8 }
                    });
                }
            } catch (error) {
                console.error('Error submitting comment:', error);
                alert('Maaf, ada masalah teknikal. Cuba lagi.');
            } finally {
                submitBtn.disabled = false;
                submitBtn.innerText = originalText;
            }
        });

        // 🛡️ Security: Block Right-Click and Common Shortcuts
        document.addEventListener('contextmenu', (e) => e.preventDefault());

        document.addEventListener('keydown', (e) => {
            // Block Ctrl+S, Ctrl+U, Ctrl+P, Ctrl+Shift+I, F12
            // Also block Win+Shift+S (PrintScreen) attempt
            if (
                (e.ctrlKey && (e.key === 's' || e.key === 'u' || e.key === 'p')) ||
                (e.ctrlKey && e.shiftKey && (e.key === 'i' || e.key === 'j' || e.key === 'c' || e.key === 's')) ||
                e.key === 'F12' || e.key === 'PrintScreen' || e.key === 'p' && e.metaKey
            ) {
                e.preventDefault();
                return false;
            }
        });
    </script>
    </div>
</body>
</html>
