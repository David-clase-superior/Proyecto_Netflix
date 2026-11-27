<!-- Interactive Logic for Search, Filter and Actions -->
<script>
    (function initMatrixUserDirectory() {
        const searchInput = document.getElementById('user-search-input');
        const roleFilter = document.getElementById('role-filter');
        const statusButtons = document.querySelectorAll('.status-filter-btn');
        const userRows = document.querySelectorAll('.user-row');
        const exportBtn = document.getElementById('export-btn');
        const addUserBtn = document.getElementById('btn-add-user');

        let currentStatusFilter = 'ALL';

        function applyFilters() {
            const query = (searchInput.value || '').toLowerCase().trim();
            const selectedRole = roleFilter.value;

            userRows.forEach(row => {
                const textContent = row.innerText.toLowerCase();
                const rowRole = row.getAttribute('data-role');
                const rowStatus = row.getAttribute('data-status');

                const matchesQuery = query === '' || textContent.includes(query);
                const matchesRole = selectedRole === 'ALL' || rowRole === selectedRole;
                const matchesStatus = currentStatusFilter === 'ALL' || rowStatus === currentStatusFilter;

                if (matchesQuery && matchesRole && matchesStatus) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        }

        if (searchInput) {
            searchInput.addEventListener('input', applyFilters);
        }

        if (roleFilter) {
            roleFilter.addEventListener('change', applyFilters);
        }

        statusButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                statusButtons.forEach(b => {
                    b.classList.remove('bg-primary-container', 'text-on-primary-container');
                    b.classList.add('text-on-surface-variant');
                });
                btn.classList.add('bg-primary-container', 'text-on-primary-container');
                btn.classList.remove('text-on-surface-variant');

                currentStatusFilter = btn.getAttribute('data-status');
                applyFilters();
            });
        });

        if (exportBtn) {
            exportBtn.addEventListener('click', () => {
                const originalText = exportBtn.innerHTML;
                exportBtn.innerHTML = '<span class="material-symbols-outlined animate-spin text-body-sm">sync</span><span>GENERANDO DUMP...</span>';
                setTimeout(() => {
                    exportBtn.innerHTML = '<span class="material-symbols-outlined text-body-sm text-primary">check_circle</span><span>DESCARGA LISTA</span>';
                    setTimeout(() => {
                        exportBtn.innerHTML = originalText;
                    }, 2500);
                }, 1200);
            });
        }

        if (addUserBtn) {
            addUserBtn.addEventListener('click', () => {
                const promptedName = prompt('// NEXUS_IDENTITY: Ingrese Nombre del nuevo operador / usuario:');
                if (promptedName) {
                    alert(`SUJETO [${promptedName.toUpperCase()}] registrado en buffer de red. Asignando Hash Neural...`);
                }
            });
        }
    })();
</script>