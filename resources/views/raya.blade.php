<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
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
            justify-content: center; /* Centers intro vertically */
            padding: 1rem;
            position: relative;
            z-index: 10;
            transition: all 0.5s ease-in-out;
        }
        .is-open .main-wrapper {
            padding-top: 2rem;
            justify-content: flex-start; /* Move up when open */
            overflow-y: auto;
        }
        .hidden-content { display: none; opacity: 0; }

        /* Admin Panel Styles */
        .admin-panel {
            position: fixed;
            top: 0;
            right: -100%;
            width: 100%;
            max-width: 400px;
            height: 100%;
            background: rgba(6, 78, 59, 0.95);
            backdrop-filter: blur(20px);
            z-index: 100;
            transition: right 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: -10px 0 30px rgba(0,0,0,0.5);
            border-left: 1px solid rgba(255, 255, 255, 0.1);
            padding: 2rem;
            overflow-y: auto;
        }
        .admin-panel.active { right: 0; }
        .admin-overlay {
            position: fixed;
            inset: 0;
            background: rgba(0,0,0,0.5);
            z-index: 90;
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.4s;
        }
        .admin-overlay.active { opacity: 1; pointer-events: auto; }
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

            <!-- 📝 Greeting Form (Hidden for Admin) -->
            @if(!session('admin_mode'))
            <div class="glass p-5 sm:p-6 rounded-2xl shadow-xl animate-fade-in">
                <form id="commentForm" method="POST" action="/raya" class="space-y-4">
                    @csrf
                    <input type="hidden" name="type" id="submitType" value="ucapan">
                    
                    <div class="space-y-1">
                        <input type="text" name="name" placeholder="Nama Anda" 
                            class="w-full bg-white/5 border border-white/10 rounded-xl p-3 focus:outline-none focus:ring-2 focus:ring-amber-400 focus:bg-white/10 transition-all placeholder:text-white/30" required maxlength="50">
                    </div>

                    <div class="space-y-1">
                        <textarea id="commentMessage" name="message" placeholder="Tuliskan ucapan raya anda di sini..." rows="3"
                            class="w-full bg-white/5 border border-white/10 rounded-xl p-3 focus:outline-none focus:ring-2 focus:ring-amber-400 focus:bg-white/10 transition-all resize-none placeholder:text-white/30" required maxlength="255"></textarea>
                    </div>

                    <button type="submit"
                        class="w-full bg-gradient-to-r from-emerald-500 to-green-600 text-white font-extrabold py-3 rounded-xl hover:scale-[1.02] active:scale-100 transition-all shadow-lg uppercase tracking-wider text-sm">
                        Hantar Ucapan 💚
                    </button>
                </form>
            </div>
            @endif

            <!-- 😂 Ruang Santai Raya (Random Generator) -->
            <div class="glass p-6 rounded-2xl shadow-xl text-center space-y-4 border-amber-400/30">
                <h3 class="font-festive text-3xl text-amber-400">Ruang Santai Raya 😂</h3>
                <p class="text-white/70 text-sm">Klik butang bawah kalau nak gelak surprize!</p>
                
                <div id="jokeDisplay" class="min-h-[60px] flex items-center justify-center p-4 bg-white/5 rounded-xl border border-white/5 italic text-amber-100 hidden">
                    <p id="jokeText"></p>
                </div>

                <button onclick="getLawak()"
                    class="bg-white/10 hover:bg-white/20 text-amber-400 border border-amber-400/50 px-6 py-2 rounded-full transition-all flex items-center gap-2 mx-auto active:scale-95">
                    🎲 <span id="btnJokeText">Bagi aku satu lawak!</span>
                </button>
            </div>

            <!-- 💬 Comment Wall -->
            <div class="space-y-8">
                <!-- Ucapan Section -->
                <div class="space-y-4">
                    <h3 class="text-xl font-bold text-emerald-400 flex items-center gap-2">
                        <span>💚</span> Ucapan Raya
                    </h3>
                    <div id="ucapanWall" class="grid gap-2">
                        @forelse($ucapan as $comment)
                            <div class="glass p-3 rounded-lg border-white/5 hover:bg-white/15 transition-all group relative">
                                <div class="flex justify-between items-start mb-0.5">
                                    <p class="font-bold text-emerald-300 group-hover:text-emerald-400 transition-colors text-[13px]">{{ $comment->name }}</p>
                                    <div class="flex items-center gap-2">
                                        <span class="text-[8px] uppercase tracking-widest opacity-40">{{ $comment->created_at->diffForHumans() }}</span>
                                        @if(session('admin_mode'))
                                            <form method="POST" action="/raya/comments/{{ $comment->id }}" class="inline">
                                                @csrf @method('DELETE')
                                                <button type="submit" class="text-red-400 hover:text-red-300 text-[10px] uppercase font-bold" onclick="return confirm('Padam?')">[x]</button>
                                            </form>
                                        @endif
                                    </div>
                                </div>
                                <p class="text-white/80 text-sm leading-snug">{{ $comment->message }}</p>
                            </div>
                        @empty
                            <div class="text-center py-6 opacity-40 italic text-sm">Tiada ucapan lagi...</div>
                        @endforelse
                    </div>
                </div>
            </div>
        </main>

        <footer class="mt-8 pb-4 text-center opacity-30 text-[9px]">
            <p>&copy; 2026 Keluarga Azhan. Built with 💚</p>
        </footer>
    </div>

    @if(session('admin_mode'))
    <!-- 🚀 Floating Admin Toggle -->
    <button type="button" onclick="toggleAdminPanel()" 
        class="fixed bottom-6 right-6 z-50 bg-amber-500 text-[#064e3b] w-14 h-14 rounded-full shadow-2xl flex items-center justify-center text-2xl hover:scale-110 active:scale-95 transition-all border-4 border-[#064e3b]">
        ⚙️
    </button>
    @endif


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
        const ucapanWall = document.getElementById('ucapanWall');
        const lawakWall = document.getElementById('lawakWall');

        commentForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            
            const formData = new FormData(commentForm);
            const submitBtn = e.submitter; // Get the specific button pressed
            const originalText = submitBtn.innerText;
            const type = document.getElementById('submitType').value;
            
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

                if (!response.ok) {
                    const errorData = await response.json();
                    if (response.status === 422 && errorData.errors) {
                        const firstError = Object.values(errorData.errors)[0][0];
                        alert(firstError);
                        return;
                    }
                    throw new Error('Server error');
                }

                const data = await response.json();

                if (data.success) {
                    const newComment = document.createElement('div');
                    newComment.className = `glass p-3 rounded-lg border-white/5 hover:bg-white/15 transition-all group relative animate-fade-in`;
                    newComment.innerHTML = `
                        <div class="flex justify-between items-start mb-0.5">
                            <p class="font-bold text-emerald-300 group-hover:text-amber-400 transition-colors text-[13px]">${data.comment.name}</p>
                            <div class="flex items-center gap-2">
                                <span class="text-[8px] uppercase tracking-widest opacity-40">Sekarang</span>
                            </div>
                        </div>
                        <p class="text-white/80 text-sm leading-snug">${data.comment.message}</p>
                    `;

                    // Remove empty message if exists
                    const emptyMsg = ucapanWall.querySelector('.italic');
                    if (emptyMsg) emptyMsg.style.display = 'none';
                    
                    ucapanWall.prepend(newComment);
                    commentForm.reset();
                    
                    // Success explosion
                    confetti({
                        particleCount: 100,
                        spread: 70,
                        origin: { y: 0.8 },
                        colors: ['#10b981', '#ffffff']
                    });
                }
            } catch (error) {
                console.error('Error submitting:', error);
                alert('Maaf, ada masalah teknikal. Cuba lagi.');
            } finally {
                submitBtn.disabled = false;
                submitBtn.innerText = originalText;
            }
        });

        // 🎲 Random Lawak Logic
        async function getLawak() {
            const jokeDisplay = document.getElementById('jokeDisplay');
            const jokeText = document.getElementById('jokeText');
            const btnText = document.getElementById('btnJokeText');
            
            btnText.innerText = "Mencari...";
            
            try {
                const response = await fetch('/random-lawak');
                const data = await response.json();
                
                jokeDisplay.classList.remove('hidden');
                
                if (data && data.message) {
                    jokeText.innerHTML = `😂 "${data.message}"`;
                } else {
                    jokeText.innerText = "Belum ada lawak lagi. Admin tengah masak lawak... 😆";
                }
                
                // Pop animation
                jokeDisplay.style.transform = 'scale(0.95)';
                setTimeout(() => jokeDisplay.style.transform = 'scale(1)', 100);
                
            } catch (error) {
                console.error('Error fetching joke:', error);
            } finally {
                btnText.innerText = "Bagi aku satu lawak!";
            }
        }

        // ⚙️ Admin Panel Logic
        function toggleAdminPanel() {
            const panel = document.getElementById('adminPanel');
            const overlay = document.getElementById('adminOverlay');
            panel.classList.toggle('active');
            overlay.classList.toggle('active');
        }

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

    @if(session('admin_mode'))
    <!-- ⚙️ Admin Panel Structure -->
    <div id="adminOverlay" class="admin-overlay" onclick="toggleAdminPanel()"></div>
    <div id="adminPanel" class="admin-panel text-white">
        <div class="flex justify-between items-center mb-8">
            <h2 class="text-xl font-bold text-amber-400 uppercase tracking-widest">Panel Kawalan Admin</h2>
            <button onclick="toggleAdminPanel()" class="text-white/50 hover:text-white text-2xl">&times;</button>
        </div>

        <div class="space-y-8">
            <!-- Part 1: Tambah Lawak (Strictly Message only) -->
            <section class="space-y-4">
                <h3 class="text-xs font-bold text-amber-400 uppercase tracking-widest border-b border-white/10 pb-2 flex items-center gap-2">
                   <span>😂</span> Tambah Lawak Baru
                </h3>
                <form id="adminJokeForm" class="space-y-3">
                    @csrf
                    <input type="hidden" name="type" value="lawak">
                    <div class="space-y-1">
                        <label class="text-[10px] uppercase text-white/40 font-bold ml-1">Ayat Lawak</label>
                        <textarea name="message" placeholder="Tulis ayat lawak kat sini..." rows="4"
                            class="w-full bg-white/5 border border-white/20 rounded-xl p-3 focus:outline-none focus:ring-1 focus:ring-amber-400 transition-all font-body text-sm placeholder:text-white/20" required></textarea>
                    </div>
                    <button type="submit" class="w-full bg-amber-500 text-[#064e3b] font-extrabold py-3 rounded-xl text-xs uppercase shadow-lg hover:scale-[1.02] transition-all">
                        Simpan & Bagi Ayat Lawak ✨
                    </button>
                </form>
            </section>

            <!-- Part 2: Urus Komen / Ucapan (Delete Only) -->
            <section class="space-y-4 pt-4 border-t border-white/10">
                <h3 class="text-xs font-bold text-emerald-400 uppercase tracking-widest flex items-center gap-2">
                   <span>💚</span> Padam Ucapan User
                </h3>
                <div class="space-y-2 max-h-[300px] overflow-y-auto pr-2 custom-scrollbar">
                    @forelse($ucapan as $c)
                        <div class="bg-white/5 p-3 rounded-lg border border-white/10 flex justify-between items-center group">
                            <div class="min-w-0 pr-2">
                                <p class="text-[10px] font-bold text-white/90 truncate">{{ $c->name }}</p>
                                <p class="text-[11px] text-white/50 truncate italic">"{{ $c->message }}"</p>
                            </div>
                            <form method="POST" action="/raya/comments/{{ $c->id }}">
                                @csrf @method('DELETE')
                                <button type="submit" class="bg-red-500/20 hover:bg-red-500 text-red-500 hover:text-white px-2 py-1 rounded text-[9px] font-bold uppercase transition-all" onclick="return confirm('Padam ucapan ini?')">Padam</button>
                            </form>
                        </div>
                    @empty
                        <div class="text-center py-8 opacity-20 text-[10px] italic">Tiada ucapan tersimpan...</div>
                    @endforelse
                </div>
            </section>
        </div>
    </div>

    <script>
        // Admin Joke Submission
        const adminJokeForm = document.getElementById('adminJokeForm');
        adminJokeForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            const submitBtn = adminJokeForm.querySelector('button');
            const originalText = submitBtn.innerText;
            submitBtn.disabled = true;
            submitBtn.innerText = 'Menyimpan...';

            try {
                const response = await fetch('/raya', {
                    method: 'POST',
                    body: new FormData(adminJokeForm),
                    headers: { 'X-Requested-With': 'XMLHttpRequest', 'Accept': 'application/json' }
                });
                const data = await response.json();
                if (data.success) {
                    alert('Lawak berjaya ditambah!');
                    adminJokeForm.reset();
                    // Optional: trigger confetti
                    confetti({ particleCount: 50, spread: 60, origin: { x: 0.8, y: 0.5 } });
                }
            } catch (err) {
                alert('Gagal simpan lawak.');
            } finally {
                submitBtn.disabled = false;
                submitBtn.innerText = originalText;
            }
        });
    </script>
    @endif

    </div>
</body>
</html>
