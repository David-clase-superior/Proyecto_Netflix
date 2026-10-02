<script>
    // Simple micro-interaction for date filter buttons
    document.querySelectorAll('section button').forEach(button => {
        button.addEventListener('click', function () {
            if (this.parentElement && this.parentElement.classList.contains('bg-surface-container-high')) {
                this.parentElement.querySelectorAll('button').forEach(b => {
                    b.className = 'px-space-md py-1 rounded-full text-on-surface-variant hover:text-on-surface font-label-md text-label-md transition-all';
                });
                this.className = 'px-space-md py-1 rounded-full bg-primary-container text-on-primary-container font-label-md text-label-md transition-all shadow-sm';
            }
        });
    });
</script>
</main>
</div>
</body>
</html>