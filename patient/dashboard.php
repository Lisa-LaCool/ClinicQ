<?php include("../components/header.php"); ?>

<div class="page max-w-6xl mx-auto px-6 py-12 space-y-8">

    <!-- Page Title -->
    <h2 class="text-4xl font-extrabold text-[var(--navy)]">Your Patient Dashboard</h2>

    <!-- Description -->
    <p class="text-lg text-[var(--navy)] mb-8">
        Manage your position in the clinic queue and track updates.
    </p>

    <!-- Action Buttons -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <a href="join_queue.php" class="clickable text-center py-8 text-xl font-bold">
            Join Queue
        </a>

        <a href="queue_status.php" class="clickable text-center py-8 text-xl font-bold">
            Queue Status
        </a>

        <a href="notifications.php" class="clickable text-center py-8 text-xl font-bold">
            Notifications
        </a>
    </div>

</div>

<?php include("../components/footer.php"); ?>
