<script>
    window.sessionLifetime = {{ config('session.lifetime') }} * 60 * 1000; // dari .env (menit → ms)

    let idleTimer, warningTimer;

    function resetTimer() {
        clearTimeout(idleTimer);
        clearTimeout(warningTimer);

        // Warning 1 menit sebelum expired
        warningTimer = setTimeout(() => {
            Swal.fire({
                title: 'Sesi Anda akan habis dalam 1 menit',
                text: 'Karena tidak ada aktivitas.',
                icon: 'warning',
                confirmButtonText: 'OK',
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.reload();
                }
            });
        }, window.sessionLifetime - 60000);

        idleTimer = setTimeout(() => {
            window.location.reload();
        }, window.sessionLifetime);
    }

    ['mousemove', 'keydown', 'click', 'scroll'].forEach(evt => {
        window.addEventListener(evt, resetTimer);
    });

    resetTimer();
</script>
