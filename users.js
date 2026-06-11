document.addEventListener('DOMContentLoaded', () => {
    
    fetch('partions/admin-navbar.html')
        .then(response => response.text())
        .then(data => { document.getElementById('navbar-placeholder').innerHTML = data; })
        .catch(error => console.error('Error loading navbar:', error));

    fetch('partions/footer.html')
        .then(response => response.text())
        .then(data => { document.getElementById('footer-placeholder').innerHTML = data; })
        .catch(error => console.error('Error loading footer:', error));


    const tableBody = document.getElementById('users-table-body');
    const rowsPerPage = 2; 
    let currentPage = 1;

    function displayTablePage(page) {
        const rows = tableBody.querySelectorAll('tr');
        currentPage = page;

        rows.forEach((row, index) => {
            const start = (page - 1) * rowsPerPage;
            const end = start + rowsPerPage;
            row.style.display = (index >= start && index < end) ? '' : 'none';
        });

        document.querySelectorAll('.page-number-btn').forEach(btn => {
            if (parseInt(btn.textContent) === page) {
                btn.classList.add('active-page');
                btn.classList.remove('text-dark', 'bg-transparent');
            } else {
                btn.classList.remove('active-page');
                btn.classList.add('text-dark', 'bg-transparent');
            }
        });
    }

    const paginationContainer = document.querySelector('.pagination');
    paginationContainer.addEventListener('click', (e) => {
        e.preventDefault();
        const rows = tableBody.querySelectorAll('tr');
        const totalPages = Math.ceil(rows.length / rowsPerPage);
        
        if (e.target.classList.contains('page-number-btn')) {
            displayTablePage(parseInt(e.target.textContent));
        }

        const arrowBtn = e.target.closest('.pagination-arrow');
        if (arrowBtn) {
            const action = arrowBtn.getAttribute('aria-label');
            if (action === 'First') displayTablePage(1);
            else if (action === 'Previous' && currentPage > 1) displayTablePage(currentPage - 1);
            else if (action === 'Next' && currentPage < totalPages) displayTablePage(currentPage + 1);
            else if (action === 'Last') displayTablePage(totalPages);
        }
    });


    let rowToEdit = null;
    let rowToDelete = null; 

    const editModal = new bootstrap.Modal(document.getElementById('editUserModal'));
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteUserModal'));

    const editForm = document.getElementById('edit-user-form');
    const confirmDeleteBtn = document.getElementById('confirm-delete-btn');

    tableBody.addEventListener('click', (e) => {
        const targetRow = e.target.closest('tr');
        if (!targetRow) return;

        if (e.target.classList.contains('btn-delete')) {
            rowToDelete = targetRow; 
            const userName = targetRow.querySelector('.user-name-cell').textContent.trim();

            document.getElementById('delete-user-name').textContent = `"${userName}"`;
            
            deleteModal.show();
        }

        if (e.target.classList.contains('btn-edit')) {
            rowToEdit = targetRow;
            const currentName = targetRow.querySelector('.user-name-cell').textContent.trim();
            const currentRoom = targetRow.querySelector('.user-room-cell').textContent.trim();
            const currentExt = targetRow.querySelector('.user-ext-cell').textContent.trim();

            document.getElementById('edit-name').value = currentName;
            document.getElementById('edit-room').value = currentRoom;
            document.getElementById('edit-ext').value = currentExt;

            editModal.show();
        }
    });

    confirmDeleteBtn.addEventListener('click', () => {
        if (rowToDelete) {
            rowToDelete.style.transition = "all 0.3s ease";
            rowToDelete.style.opacity = "0";
            rowToDelete.style.transform = "translateX(20px)";
            
            setTimeout(() => {
                rowToDelete.remove();
                
                const rows = tableBody.querySelectorAll('tr');
                const totalPages = Math.ceil(rows.length / rowsPerPage);
                if (currentPage > totalPages && currentPage > 1) currentPage = totalPages;
                displayTablePage(currentPage);
                
                deleteModal.hide();
            }, 300);
        }
    });

    editForm.addEventListener('submit', (e) => {
        e.preventDefault();
        if (rowToEdit) {
            rowToEdit.querySelector('.user-name-cell').textContent = document.getElementById('edit-name').value;
            rowToEdit.querySelector('.user-room-cell').textContent = document.getElementById('edit-room').value;
            rowToEdit.querySelector('.user-ext-cell').textContent = document.getElementById('edit-ext').value;
            editModal.hide();
        }
    });

    displayTablePage(1);
});