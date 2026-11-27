/*
 * app.js
 * ------------------------------------------------------------------
 * JavaScript aplikasi:
 * 1. Mengaktifkan validasi form Bootstrap (class needs-validation).
 * 2. Menutup sidebar offcanvas setelah menu diklik di layar kecil.
 */

(function () {
	'use strict';

	// -----------------------------------------------------------------
	// 1. Validasi form Bootstrap
	// -----------------------------------------------------------------
	var forms = document.querySelectorAll('.needs-validation');

	Array.prototype.forEach.call(forms, function (form) {
		form.addEventListener('submit', function (event) {
			if (!form.checkValidity()) {
				event.preventDefault();
				event.stopPropagation();
			}

			form.classList.add('was-validated');
		}, false);
	});

	// -----------------------------------------------------------------
	// 2. Tutup sidebar otomatis di mobile setelah navigasi
	// -----------------------------------------------------------------
	var sidebar = document.getElementById('sidebarMenu');

	if (sidebar) {
		var links = sidebar.querySelectorAll('.nav-link');

		Array.prototype.forEach.call(links, function (link) {
			link.addEventListener('click', function () {
				if (window.innerWidth >= 992 || !window.bootstrap) {
					return;
				}

				var instance = window.bootstrap.Offcanvas.getInstance(sidebar);
				if (instance) {
					instance.hide();
				}
			});
		});
	}
})();
