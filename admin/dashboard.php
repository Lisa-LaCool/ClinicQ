<?php include("../components/header.php"); ?>
<?php include("../components/back_button.php"); ?>

<div class="page max-w-6xl mx-auto px-6 py-12 space-y-8">

    <!-- Page Title -->
    <h2 class="text-4xl font-extrabold text-[var(--navy)]">Admin Dashboard</h2>

    <!-- Action Buttons -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <a href="reports.php" class="clickable block w-full text-center py-6 text-xl font-bold">
            Reports & Analytics
        </a>

        <a href="settings.php" class="clickable block w-full text-center py-6 text-xl font-bold">
            System Settings
        </a>
    </div>

</div>

<?php include("../components/footer.php"); ?>
