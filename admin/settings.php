<?php include("../components/header.php"); ?>
<?php include("../components/back_button.php"); ?>

<div class="page max-w-xl mx-auto px-6 py-12 space-y-6">

    <!-- Page Title -->
    <h2 class="text-4xl font-extrabold text-[var(--navy)]">System Settings</h2>

    <!-- Settings Form -->
    <div class="space-y-4">
        <div class="space-y-2">
            <label class="font-bold text-[var(--navy)]">Clinic Hours</label>
            <input type="text"
                   class="w-full border-2 border-[var(--navy)] rounded-2xl p-4 focus:border-[var(--teal)] focus:shadow-md focus:scale-102 transition"
                   placeholder="08:00 - 17:00">
        </div>

        <div class="space-y-2">
            <label class="font-bold text-[var(--navy)]">Notification Preferences</label>
            <input type="text"
                   class="w-full border-2 border-[var(--navy)] rounded-2xl p-4 focus:border-[var(--teal)] focus:shadow-md focus:scale-102 transition"
                   placeholder="SMS / Email">
        </div>

        <!-- Save Button -->
        <a class="clickable block w-full text-center py-4 text-xl font-bold mt-4">
            Save Settings
        </a>
    </div>

</div>

<?php include("../components/footer.php"); ?>
