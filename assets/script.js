document.addEventListener('DOMContentLoaded', function() {
    var toggle = document.querySelector('.nav-toggle');
    var dropdownMenu = document.querySelector('.dropdown-menu');

    toggle.addEventListener('click', function(event) {
        dropdownMenu.classList.toggle('active');
    });

    document.addEventListener('click', function(event) {
        var isClickInsideToggle = toggle.contains(event.target);
        if (!isClickInsideToggle && dropdownMenu.classList.contains('active')) {
            dropdownMenu.classList.remove('active');
        }
    });
});
