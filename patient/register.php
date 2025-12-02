<?php include("../components/header.php"); ?>

<div class="page max-w-md mx-auto px-6 py-12 space-y-6">

    <!-- Page Title -->
    <h2 class="text-4xl font-extrabold text-[var(--navy)]">Create Patient Account</h2>

    <!-- Input Fields -->
    <div class="space-y-4">
        <input class="w-full border-2 border-[var(--navy)] rounded-2xl p-4 focus:border-[var(--teal)] focus:shadow-md focus:scale-102 transition"
               placeholder="Full Name">
        <input class="w-full border-2 border-[var(--navy)] rounded-2xl p-4 focus:border-[var(--teal)] focus:shadow-md focus:scale-102 transition"
               placeholder="Email">
        <input class="w-full border-2 border-[var(--navy)] rounded-2xl p-4 focus:border-[var(--teal)] focus:shadow-md focus:scale-102 transition"
               placeholder="Phone Number">
    </div>

    <!-- Register Button -->
    <a href="dashboard.php" class="clickable block w-full text-center py-4 text-xl font-bold mt-4">
        Register
    </a>

</div>

<?php include("../components/footer.php"); ?>
