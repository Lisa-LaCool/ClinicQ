<div class="max-w-6xl mx-auto px-6 pt-20 pb-14 flex flex-col md:flex-row items-center justify-between gap-12">

    <!-- left side -->
    <div class="md:w-1/2 space-y-6">
        <h2 class="text-4xl md:text-5xl font-extrabold leading-tight" style="color:var(--navy);">
            Smarter Queues.<br>Better Care.
        </h2>

        <p class="text-lg font-medium" style="color:var(--navy);">
            ClinicQ gives clinics a simple and fair patient queue system.
            (backend team will plug in real queue data later)
        </p>

        <div class="flex gap-4 mt-4">
            <a href="patient/login.php" class="clickable cta-attention">Patient Portal</a>
            <a href="clinic/login.php" class="clickable">Clinic Staff</a>
        </div>
    </div>

    <!-- right side (lottie animation) -->
    <div class="md:w-1/2">
        <div id="heroLottie" class="w-full h-64 md:h-80 mx-auto"></div>
    </div>

</div>

<script>
    // placeholder animation – backend team can replace JSON later
    lottie.loadAnimation({
        container: document.getElementById("heroLottie"),
        renderer: "svg",
        loop: true,
        autoplay: true,
        animationData: {
            "v": "5.5.7",
            "fr": 30,
            "ip": 0,
            "op": 120,
            "w": 500,
            "h": 500,
            "layers": []
        }
    });
</script>
