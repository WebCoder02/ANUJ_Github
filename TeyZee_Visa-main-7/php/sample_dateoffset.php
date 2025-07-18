<?php
// Visa type-based offsets
$dateOffsets = [
    'business' => 3,
    'tourist' => 5,
    'student' => 7
];
?>
<script>
    const visaOffsets = <?php echo json_encode($dateOffsets); ?>;
</script>