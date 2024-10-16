document.addEventListener('DOMContentLoaded', function() {
    const buttons = document.querySelectorAll('.show-more-button');

    buttons.forEach(button => {
        button.addEventListener('click', function() {
            const targetId = button.getAttribute('data-target');
            const textElement = document.getElementById(targetId);

            if (textElement.classList.contains('expanded')) {
                textElement.classList.remove('expanded');
                button.textContent = 'see more';
            } else {
                textElement.classList.add('expanded');
                button.textContent = 'see less';
            }
        });
    });
});
