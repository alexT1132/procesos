document.getElementById('redirigir').addEventListener('change', function() {
    if (this.checked) {
        // Si el checkbox está marcado, redirige a una página específica
        window.location.href = "paso3.php?ID=<?php echo $row['ID']?>";
    }
});