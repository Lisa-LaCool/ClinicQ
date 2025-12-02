<?php
$isIndex = basename($_SERVER['PHP_SELF']) === 'index.php';

if (!$isIndex):
    ?>
    <a href="javascript:history.back()"
       class="fixed bottom-5 left-5 z-50 inline-flex items-center gap-3 text-[var(--navy)] dark:text-[var(--teal)] font-bold group">

        <svg class="h-8 w-8 transition group-hover:-translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>

        <span class="text-lg">Return to previous page</span>
    </a>
<?php endif; ?>
