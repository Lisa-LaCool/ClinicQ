<?php
$path = "";
if (strpos($_SERVER['PHP_SELF'], '/patient/') !== false) $path = "../";
if (strpos($_SERVER['PHP_SELF'], '/clinic/') !== false) $path = "../";
if (strpos($_SERVER['PHP_SELF'], '/admin/') !== false) $path = "../";

$showBackButton = basename($_SERVER['PHP_SELF']) !== 'index.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Heroicons -->
    <script src="https://unpkg.com/heroicons@2.0.18/dist/outline.js"></script>

    <!-- Lottie -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.10.2/lottie.min.js"></script>

    <title>ClinicQ</title>

    <style>
        :root {
            --navy: #062A4D;
            --teal: #0FB9B1;
            --white: #FFFFFF;
        }
        .dark {
            --navy: #EFFFFF;
            --teal: #18E3D0;
            --white: #081727;
        }

        /* General Body */
        body {
            background: radial-gradient(circle at 20% 20%, rgba(15,185,177,0.18), transparent 50%),
            radial-gradient(circle at 80% 70%, rgba(6,42,77,0.18), transparent 55%),
            var(--white);
            color: var(--navy);
            font-family: 'Inter', sans-serif;
            animation: fadeInPage .5s ease-out;
            margin: 0;
            padding-bottom: 100px;
        }
        @keyframes fadeInPage {
            from { opacity: 0; transform: translateY(8px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        /* Buttons */
        .clickable, .btn-primary {
            cursor: pointer;
            border: 2px solid var(--navy);
            padding: 14px 22px;
            border-radius: 16px;
            font-weight: 800;
            font-size: 1.05rem;
            background: var(--white);
            transition: .25s ease;
            display: inline-block;
            text-decoration: none;
            text-align: center;
        }
        .clickable:hover, .btn-primary:hover {
            background: var(--teal);
            color: white;
            transform: translateY(-4px);
            box-shadow: 0 8px 22px rgba(0,0,0,0.15);
        }

        .btn-dark {
            background: var(--navy);
            color: white;
            border: 2px solid var(--navy);
        }
        .btn-dark:hover {
            background: var(--teal);
            border-color: var(--teal);
            transform: translateY(-4px);
        }

        .btn-outline {
            background: transparent;
            border: 2px solid var(--navy);
            color: var(--navy);
        }
        .btn-outline:hover {
            background: var(--teal);
            color: white;
            transform: translateY(-4px);
        }

        /* Inputs, textarea, selects */
        input, textarea, select {
            border: 2px solid var(--navy);
            padding: 14px 18px;
            border-radius: 16px;
            font-weight: 600;
            transition: .22s ease;
            width: 100%;
        }
        input:focus, textarea:focus, select:focus {
            border-color: var(--teal);
            box-shadow: 0 0 0 4px rgba(15,185,177,0.3);
            transform: scale(1.02);
        }

        /* Navbar */
        .glass-nav {
            background: rgba(255,255,255,0.7);
            backdrop-filter: blur(20px);
            box-shadow: 0 8px 28px rgba(0,0,0,0.07);
        }
        .dark .glass-nav {
            background: rgba(12,25,44,0.5);
        }

        /* Mobile menu */
        #mobileMenu {
            transition: .3s ease;
            transform: translateY(-18px);
            opacity: 0;
        }
        #mobileMenu.open {
            transform: translateY(0px);
            opacity: 1;
        }

        /* CTA pulse */
        .cta-attention {
            animation: gentlePulse 3.8s ease-in-out infinite;
        }
        @keyframes gentlePulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.02); }
            100% { transform: scale(1); }
        }

        /* Back Button */
        .back-button {
            position: fixed;
            bottom: 20px;
            left: 20px;
            z-index: 9999;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-weight: bold;
            color: var(--navy);
            text-decoration: none;
            background: rgba(255,255,255,0.9);
            padding: 8px 12px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }
        .back-button svg {
            height: 1.5rem;
            width: 1.5rem;
            stroke-width: 2;
            transition: transform 0.2s ease;
        }
        .back-button:hover svg {
            transform: translateX(-4px);
        }
        .dark .back-button {
            color: var(--teal);
            background: rgba(12,25,44,0.8);
        }

        /* Page Wrapper */
        .page {
            max-width: 6xl;
            margin: 0 auto;
            padding: 2rem 1.5rem;
        }

        /* Titles */
        h2, h3 {
            color: var(--navy);
        }
        .dark h2, .dark h3 {
            color: var(--white);
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<header class="glass-nav py-4 px-4 sticky top-0 z-50">
    <div class="max-w-6xl mx-auto flex justify-between items-center">
        <div class="flex items-center gap-3">
            <img src="<?php echo $path; ?>assets/img/logo.jpg" class="h-12 rounded-xl shadow-lg">
            <h1 class="text-3xl font-extrabold" style="color:var(--navy);">ClinicQ</h1>
        </div>
        <nav class="hidden md:flex gap-10 text-xl font-bold">
            <a href="<?php echo $path; ?>index.php" class="hover:text-[var(--teal)]">Home</a>
        </nav>
        <div class="flex items-center gap-4">
            <button onclick="speakPage()">
                <svg class="h-8 w-8 text-[var(--navy)] hover:text-[var(--teal)]"><use href="#speaker-wave" /></svg>
            </button>
            <button onclick="toggleDarkMode()">
                <svg class="h-8 w-8 text-[var(--navy)] dark:text-white"><use href="#moon" /></svg>
            </button>
            <button onclick="toggleMenu()" class="md:hidden">
                <svg class="h-10 w-10 text-[var(--navy)] dark:text-white"><use href="#bars-3" /></svg>
            </button>
        </div>
    </div>
    <div id="mobileMenu" class="hidden bg-white dark:bg-[#0d2038] border-t px-6 py-4">
        <a href="<?php echo $path; ?>index.php" class="block py-3 text-lg font-bold">Home</a>
    </div>
</header>

<!-- Free icons -->
<svg style="display:none;">
    <symbol id="bars-3" viewBox="0 0 24 24"><path stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></symbol>
    <symbol id="moon" viewBox="0 0 24 24"><path stroke-width="2" d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/></symbol>
    <symbol id="speaker-wave" viewBox="0 0 24 24"><path stroke-width="2" d="M11 5L6 9H2v6h4l5 4V5zm9.54 3.46a7 7 0 0 1 0 6.08m-2.83-3.04a3 3 0 0 1 0 2.6"/></symbol>
    <symbol id="heart" viewBox="0 0 24 24"><path stroke-width="2" d="M12 21s-8-4.5-8-11a5 5 0 0 1 9-3 5 5 0 0 1 9 3c0 6.5-8 11-8 11z"/></symbol>
    <symbol id="check-circle" viewBox="0 0 24 24"><path stroke-width="2" d="M9 12l2 2 4-4m6 2A9 9 0 1 1 3 12a9 9 0 0 1 18 0z"/></symbol>
    <symbol id="chart-bar" viewBox="0 0 24 24"><path stroke-width="2" d="M3 3v18h18M9 17v-6m4 6V7m4 10v-4"/></symbol>
</svg>

<?php if ($showBackButton): ?>
    <a href="javascript:history.back()" class="back-button">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
            <path d="M15 19l-7-7 7-7" />
        </svg>
        <span>Return to previous page</span>
    </a>
<?php endif; ?>

<script>
    function toggleDarkMode() {
        document.documentElement.classList.toggle("dark");
        localStorage.setItem("darkMode", document.documentElement.classList.contains("dark"));
    }
    if (localStorage.getItem("darkMode") === "true") document.documentElement.classList.add("dark");

    function toggleMenu() {
        const x = document.getElementById("mobileMenu");
        x.classList.toggle("hidden");
        x.classList.toggle("open");
    }

    function speakPage() {
        let text = document.body.innerText;
        let msg = new SpeechSynthesisUtterance(text);
        msg.lang = "en-US";
        speechSynthesis.speak(msg);
    }
</script>
