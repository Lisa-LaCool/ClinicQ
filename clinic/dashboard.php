<?php include("../components/header.php"); ?>

<div class="page max-w-4xl mx-auto px-6 py-12 space-y-8">

    <!-- Page Title -->
    <h2 class="text-4xl font-extrabold text-[var(--navy)]">Queue Management</h2>

    <!-- Description -->
    <p class="text-lg text-[var(--navy)] mb-8">
        Monitor patient flow and update queue positions.
    </p>

    <!-- Action Buttons -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <a href="override.php" class="clickable text-center py-6 text-xl font-bold">
            Manual Queue Override
        </a>

        <a href="../admin/reports.php" class="clickable text-center py-6 text-xl font-bold">
            View Analytics
        </a>
    </div>

</div>

<?php include("../components/footer.php"); ?>
