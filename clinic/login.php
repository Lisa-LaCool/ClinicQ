<?php include("../components/header.php"); ?>
<?php include("../components/back_button.php"); ?>

<div class="page max-w-md mx-auto px-6 py-12 space-y-6">

    <!-- Page Title -->
    <h2 class="text-4xl font-extrabold text-[var(--navy)]">Clinic Staff Login</h2>

    <!-- Login Form -->
    <div class="space-y-4">
        <input type="text"
               class="w-full border-2 border-[var(--navy)] rounded-2xl p-4 focus:border-[var(--teal)] focus:shadow-md focus:scale-102 transition"
               placeholder="Staff ID">
        <input type="password"
               class="w-full border-2 border-[var(--navy)] rounded-2xl p-4 focus:border-[var(--teal)] focus:shadow-md focus:scale-102 transition"
               placeholder="Password">

        <!-- Login Button -->
        <a href="dashboard.php" class="clickable block w-full text-center py-4 text-xl font-bold">
            Login
        </a>
    </div>

</div>

<?php include("../components/footer.php"); ?>
