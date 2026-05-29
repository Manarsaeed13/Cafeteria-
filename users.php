<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cafeteria System - Users Management</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="users.css">
</head>
<body>
  
<?php include 'partions/admin-navbar.html'; ?>

<div class="container px-4 px-md-5 my-5">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="page-main-title h2 fw-bold">All Users</h1>
    <a href="add-user.html" class="btn btn-add-user fw-bold px-3 py-2">
      <i class="bi bi-person-plus-fill me-1"></i> Add User
    </a>
  </div>

  <div class="card users-card p-4 shadow-sm border-0">
    <div class="table-responsive">
      <table class="table table-hover align-middle mb-0">
        <thead>
          <tr class="text-secondary fw-bold">
            <th scope="col" class="py-3">Name</th>
            <th scope="col" class="py-3">Room</th>
            <th scope="col" class="py-3">Image</th>
            <th scope="col" class="py-3">Ext.</th>
            <th scope="col" class="py-3">Action</th>
          </tr>
        </thead>
        <tbody id="users-table-body">
          <tr>
            <td class="user-name-cell fw-bold">Abdulrahman Hamdy</td>
            <td class="user-room-cell">2010</td>
            <td>
              <img src="images\Ultra_realistic_studio_portrait,_soft_202605292224.jpeg" class="rounded-3 border user-table-img" alt="User Image">
            </td>
            <td class="user-ext-cell">5605</td>
            <td>
              <button class="btn btn-sm me-2 action-btn btn-edit">Edit</button>
              <button class="btn btn-sm action-btn btn-delete">Delete</button>
            </td>
          </tr>
          <tr>
            <td class="user-name-cell fw-bold">Islam Askar</td>
            <td class="user-room-cell">2010</td>
            <td>
              <img src="images/A_young_man_with_a_202605292225.jpeg" class="rounded-3 border user-table-img" alt="User Image">
            </td>
            <td class="user-ext-cell">5605</td>
            <td>
              <button class="btn btn-sm me-2 action-btn btn-edit">Edit</button>
              <button class="btn btn-sm action-btn btn-delete">Delete</button>
            </td>
          </tr>
          <tr>
            <td class="user-name-cell fw-bold">Sayed Fathy</td>
            <td class="user-room-cell">2010</td>
            <td>
              <img src=images\Ultra_realistic_studio_portrait,_soft_202605292224.jpeg class="rounded-3 border user-table-img" alt="User Image">
            </td>
            <td class="user-ext-cell">5605</td>
            <td>
              <button class="btn btn-sm me-2 action-btn btn-edit">Edit</button>
              <button class="btn btn-sm action-btn btn-delete">Delete</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <nav aria-label="Page navigation" class="mt-4">
    <ul class="pagination justify-content-center gap-1">
      <li class="page-item"><a class="page-link border-0 rounded-3 text-success bg-transparent pagination-arrow" href="#" aria-label="First"><i class="bi bi-chevron-double-left"></i></a></li>
      <li class="page-item"><a class="page-link border-0 rounded-3 text-success bg-transparent pagination-arrow" href="#" aria-label="Previous"><i class="bi bi-chevron-left"></i></a></li>
      <li class="page-item"><a class="page-link border-0 rounded-3 page-number-btn active-page" href="#">1</a></li>
      <li class="page-item"><a class="page-link border-0 rounded-3 page-number-btn text-dark bg-transparent" href="#">2</a></li>
      <li class="page-item"><a class="page-link border-0 rounded-3 page-number-btn text-dark bg-transparent" href="#">3</a></li>
      <li class="page-item"><span class="page-link border-0 bg-transparent text-muted">...</span></li>
      <li class="page-item"><a class="page-link border-0 rounded-3 text-success bg-transparent pagination-arrow" href="#" aria-label="Next"><i class="bi bi-chevron-right"></i></a></li>
      <li class="page-item"><a class="page-link border-0 rounded-3 text-success bg-transparent pagination-arrow" href="#" aria-label="Last"><i class="bi bi-chevron-double-right"></i></a></li>
    </ul>
  </nav>
</div>

<div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-0 shadow-lg" style="background-color: #FBF5DD; border-radius: 16px;">
      <div class="modal-header border-0">
        <h5 class="modal-title fw-bold" id="editUserModalLabel" style="color: #0D530E;">Edit User Info</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="edit-user-form">
          <div class="mb-3">
            <label for="edit-name" class="form-label fw-bold text-secondary">Name</label>
            <input type="text" class="form-control bg-white" id="edit-name" required style="border-radius: 10px; border: 1px solid rgba(0,0,0,0.08);">
          </div>
          <div class="mb-3">
            <label for="edit-room" class="form-label fw-bold text-secondary">Room</label>
            <input type="text" class="form-control bg-white" id="edit-room" required style="border-radius: 10px; border: 1px solid rgba(0,0,0,0.08);">
          </div>
          <div class="mb-3">
            <label for="edit-ext" class="form-label fw-bold text-secondary">Ext.</label>
            <input type="text" class="form-control bg-white" id="edit-ext" required style="border-radius: 10px; border: 1px solid rgba(0,0,0,0.08);">
          </div>
          <div class="d-flex gap-2 mt-4">
            <button type="button" class="btn w-50 py-2 fw-bold text-secondary border" data-bs-dismiss="modal" style="border-radius: 12px; background: rgba(0,0,0,0.02);">Cancel</button>
            <button type="submit" class="btn w-50 py-2 fw-bold text-white shadow-sm" style="background-color: #0D530E; border-radius: 12px;">Save Changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="deleteUserModal" tabindex="-1" aria-labelledby="deleteUserModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-sm">
    <div class="modal-content border-0 shadow-lg" style="background-color: #FBF5DD; border-radius: 16px;">
      <div class="modal-header border-0 pb-0">
        <h5 class="modal-title fw-bold text-danger mx-auto" id="deleteUserModalLabel"><i class="bi bi-exclamation-triangle-fill"></i> Delete User</h5>
      </div>
      <div class="modal-body text-center py-3">
        <p class="mb-0 text-secondary fw-semibold">Are you sure you want to delete <br><span id="delete-user-name" class="text-dark fw-bold"></span>?</p>
      </div>
      <div class="modal-footer border-0 pt-0 d-flex gap-2">
        <button type="button" class="btn flex-grow-1 py-2 fw-bold text-secondary border" data-bs-dismiss="modal" style="border-radius: 12px; background: rgba(0,0,0,0.02);">Cancel</button>
        <button type="button" id="confirm-delete-btn" class="btn flex-grow-1 py-2 fw-bold text-white btn-danger shadow-sm" style="border-radius: 12px;">Delete</button>
      </div>
    </div>
  </div>
</div>

<div id="footer-placeholder"></div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="users.js"></script>
</body>
</html>