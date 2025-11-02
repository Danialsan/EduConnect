<script>
    document.addEventListener('DOMContentLoaded', () => {
        const loader = document.getElementById('loader');
        loader.classList.add('hidden');

        // Setelah transisi selesai hapus
        setTimeout(() => {
            loader.remove();
        }, 1000);
    });
</script>
