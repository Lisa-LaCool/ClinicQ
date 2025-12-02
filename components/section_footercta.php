<?php
// same path logic used in header.php so this component never errors
$path = "";
if (strpos($_SERVER['PHP_SELF'], '/patient/') !== false) $path = "../";
if (strpos($_SERVER['PHP_SELF'], '/clinic/') !== false) $path = "../";
if (strpos($_SERVER['PHP_SELF'], '/admin/') !== false) $path = "../";
?>

<div class="w-full py-12 px-6 bg-[var(--teal)] text-white text-center rounded-t-3xl mt-20 shadow-xl">
    <h3 class="text-3xl font-extrabold">Ready to skip the line?</h3>
    <p class="mt-2 text-lg font-semibold">Join the queue instantly and get live updates.</p>

    <div class="mt-6">
        <a href="<?php echo $path; ?>patient/login.php"
           class="bg-white text-[var(--teal)] px-10 py-3 rounded-2xl text-xl font-extrabold shadow-lg hover:shadow-2xl transition">
            Get Started
        </a>
    </div>
</div>
