<?php include("../components/header.php"); ?>

<div class="page max-w-md mx-auto px-6 py-12 space-y-6">

    <!-- Page Title -->
    <h2 class="text-4xl font-extrabold text-[var(--navy)]">Patient Login</h2>

    <!-- Input Field -->
    <input class="w-full border-2 border-[var(--navy)] rounded-2xl p-4 focus:border-[var(--teal)] focus:shadow-md focus:scale-102 transition"
           placeholder="Email or Phone">

    <!-- Login Button -->
    <a href="dashboard.php" class="clickable block w-full text-center py-4 text-xl font-bold">
        Login
    </a>

    <!-- Register Link -->
    <p class="mt-4 text-[var(--navy)]">
        New user?
        <a href="register.php" class="text-[var(--teal)] font-bold">Register</a>
    </p>

</div>

<?php include("../components/footer.php"); ?>
