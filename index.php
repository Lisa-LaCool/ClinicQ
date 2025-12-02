<?php include("components/header.php"); ?>

<!-- Back button (hidden automatically on index.php) -->
<?php if($showBackButton) include("components/back_button.php"); ?>

<!-- Hero section (contains main header, subtitle, buttons) -->
<?php include("components/hero.php"); ?>

<!-- Additional page content -->
<div class="page-wrapper min-h-screen flex flex-col justify-center items-center">
    <!-- Any content below the hero can go here -->
    <p class="text-lg text-gray-600 mt-6">
        Welcome to ClinicQ! Manage queues easily and efficiently.
    </p>
</div>

<?php include("components/footer.php"); ?>
