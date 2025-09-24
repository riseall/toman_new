<script>
    window.sessionLifetime = {{ config('session.lifetime') }} * 60 * 1000; // dari .env (menit → ms)

    let idleTimer, warningTimer;

    function resetTimer() {
        clearTimeout(idleTimer);
        clearTimeout(warningTimer);

        // Warning 1 menit sebelum expired
        warningTimer = setTimeout(() => {
            alert("⚠️ Sesi Anda akan habis dalam 1 menit karena tidak ada aktivitas.");
        }, window.sessionLifetime - 60000);

        // Auto redirect ke login
        idleTimer = setTimeout(() => {
            window.location.href = "{{ route('home') }}";
        }, window.sessionLifetime);
    }

    ['mousemove', 'keydown', 'click', 'scroll'].forEach(evt => {
        window.addEventListener(evt, resetTimer);
    });

    resetTimer();
</script>
