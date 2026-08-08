/* ===========================================
   Arasuvel CMS - Admin Script
=========================================== */

document.addEventListener("DOMContentLoaded", function () {

    // ===============================
    // Sidebar Toggle
    // ===============================

    const sidebar = document.querySelector(".sidebar");
    const mainContent = document.querySelector(".main-content");
    const sidebarToggle = document.getElementById("sidebarToggle");

    if (sidebarToggle) {

        sidebarToggle.addEventListener("click", function () {

            sidebar.classList.toggle("collapsed");
            mainContent.classList.toggle("expanded");

        });

    }

    // ===============================
    // Active Sidebar Menu
    // ===============================

    const currentUrl = window.location.href;

    document.querySelectorAll(".sidebar-menu a").forEach(function (link) {

        if (link.href === currentUrl) {

            link.classList.add("active");

        }

    });

    // ===============================
    // Auto Close Alerts
    // ===============================

    const alerts = document.querySelectorAll(".alert");

    alerts.forEach(function (alert) {

        setTimeout(function () {

            alert.classList.add("fade");

            setTimeout(function () {

                alert.remove();

            }, 300);

        }, 3000);

    });

    // ===============================
    // Delete Confirmation
    // ===============================

    document.querySelectorAll(".delete-confirm").forEach(function (button) {

        button.addEventListener("click", function (e) {

            if (!confirm("Are you sure you want to delete this record?")) {

                e.preventDefault();

            }

        });

    });


    const imageInput = document.getElementById("image");
    const preview = document.getElementById("preview");

    if (imageInput && preview) {

        imageInput.addEventListener("change", function (e) {

            const file = e.target.files[0];

            if (!file) {
                preview.src = "https://placehold.co/600x350?text=Image+Preview";
                return;
            }

            if (!file.type.startsWith("image/")) {
                alert("Please select a valid image.");
                imageInput.value = "";
                preview.src = "https://placehold.co/600x350?text=Image+Preview";
                return;
            }

            const reader = new FileReader();

            reader.onload = function (event) {
                preview.src = event.target.result;
            };

            reader.readAsDataURL(file);

        });

    }
    // ===============================
    // Bootstrap Tooltips
    // ===============================

    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));

    tooltipTriggerList.map(function (tooltipTriggerEl) {

        return new bootstrap.Tooltip(tooltipTriggerEl);

    });

});