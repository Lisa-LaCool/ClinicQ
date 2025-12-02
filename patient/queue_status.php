<?php include("../components/header.php"); ?>

<div class="page max-w-xl mx-auto px-6 py-12 text-center space-y-6">

    <!-- Page Title -->
    <h2 class="text-4xl font-extrabold text-[var(--navy)]">Your Queue Position</h2>

    <!-- Queue Card -->
    <div class="bg-[var(--teal)] text-white rounded-2xl p-10 shadow-lg space-y-2">
        <p class="text-2xl font-semibold">Position</p>
        <p class="text-7xl font-extrabold mt-2">12</p>
    </div>

    <!-- Estimated Wait Time -->
    <p class="mt-6 text-[var(--navy)] text-lg">
        Estimated Wait Time:
        <span class="font-bold text-[var(--navy)]">18 minutes</span>
    </p>

    <!-- Return Button -->
    <a href="dashboard.php" class="clickable inline-block mt-6 py-3 px-8 text-xl font-bold">
        Return
    </a>

</div>

<?php include("../components/footer.php"); ?>
