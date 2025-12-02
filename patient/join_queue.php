<?php include("../components/header.php"); ?>

<div class="page max-w-xl mx-auto px-6 py-12 space-y-6">

    <!-- Page Title -->
    <h2 class="text-4xl font-extrabold text-[var(--navy)]">Join the Queue</h2>

    <!-- Reason for Visit -->
    <div class="space-y-2">
        <label class="font-bold text-[var(--navy)]">Reason for Visit</label>
        <select class="w-full p-4 border-2 border-[var(--navy)] rounded-2xl focus:border-[var(--teal)] focus:shadow-md focus:scale-102 transition">
            <option>General Consultation</option>
            <option>Check-up</option>
            <option>Medication Refill</option>
            <option>Urgent Care</option>
        </select>
    </div>

    <!-- Symptoms -->
    <div class="space-y-2">
        <label class="font-bold text-[var(--navy)]">Symptoms</label>
        <textarea class="w-full p-4 border-2 border-[var(--navy)] rounded-2xl focus:border-[var(--teal)] focus:shadow-md focus:scale-102 transition"
                  placeholder="Describe your symptoms..."></textarea>
    </div>

    <!-- Age Group (Dropdown) -->
    <div class="space-y-2">
        <label class="font-bold text-[var(--navy)]">Age Group</label>
        <select class="w-full p-4 border-2 border-[var(--navy)] rounded-2xl focus:border-[var(--teal)] focus:shadow-md focus:scale-102 transition">
            <option>Child</option>
            <option>Adult</option>
            <option>Elderly</option>
        </select>
    </div>

    <!-- Critical Case (Radio Buttons) -->
    <div class="space-y-2">
        <label class="font-bold text-[var(--navy)]">Critical Case</label>
        <div class="flex gap-6 mt-2">
            <label class="flex items-center gap-2">
                <input type="radio" name="critical_case" value="low" class="accent-[var(--teal)]">
                <span>Low</span>
            </label>
            <label class="flex items-center gap-2">
                <input type="radio" name="critical_case" value="medium" class="accent-[var(--teal)]">
                <span>Medium</span>
            </label>
            <label class="flex items-center gap-2">
                <input type="radio" name="critical_case" value="high" class="accent-[var(--teal)]">
                <span>High</span>
            </label>
        </div>
    </div>

    <!-- Submit Button -->
    <a href="queue_status.php" class="clickable block w-full text-center py-4 text-xl font-bold">
        Submit
    </a>

</div>

<?php include("../components/footer.php"); ?>
