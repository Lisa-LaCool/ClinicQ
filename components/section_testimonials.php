<?php
// making sure the component doesn't break depending on folder depth
$path = "";
if (strpos($_SERVER['PHP_SELF'], '/patient/') !== false) $path = "../";
if (strpos($_SERVER['PHP_SELF'], '/clinic/') !== false) $path = "../";
if (strpos($_SERVER['PHP_SELF'], '/admin/') !== false) $path = "../";
?>

<div class="max-w-6xl mx-auto px-6 py-20 space-y-14">

    <h2 class="text-4xl font-extrabold text-center" style="color:var(--navy);">What People Say</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">

        <div class="p-8 rounded-2xl bg-white shadow-lg border-2 border-[var(--navy)] tilt-card">
            <p style="color:var(--navy);">
                “ClinicQ makes our workflow way smoother. No more reception crowding.”
            </p>
            <p class="mt-4 font-bold text-[var(--teal)]">— Clinic Staff.</p>
        </div>

        <div class="p-8 rounded-2xl bg-white shadow-lg border-2 border-[var(--navy)] tilt-card">
            <p style="color:var(--navy);">
                “Finally an app that tells me exactly when it’s my turn.”
            </p>
            <p class="mt-4 font-bold text-[var(--teal)]">— Patient.</p>
        </div>

    </div>
</div>
