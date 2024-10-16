const buttons = document.querySelectorAll('.menu-button');

buttons.forEach((button, index) => {
    button.addEventListener('click', function () {
        buttons.forEach(btn => btn.classList.remove('active-button'));
        this.classList.add('active-button');
        showForm(index);
    });
});

let currentFormIndex = 0;

function showForm(formIndex) {
    const forms = document.querySelectorAll('.box-of-review form');
    const nextButton = document.querySelector('.next-btn');
    const prevButton = document.querySelector('.prev-btn');
    
    forms.forEach(form => form.style.display = 'none');
    buttons.forEach(btn => btn.classList.remove('active-button'));

    currentFormIndex = formIndex;
    forms[currentFormIndex].style.display = 'block';
    buttons[currentFormIndex].classList.add('active-button');

    // Show/hide Previous button
    if (currentFormIndex > 0) {
        prevButton.style.display = 'inline-block';
    } else {
        prevButton.style.display = 'none';
    }

    // Update Next button text
    if (currentFormIndex === forms.length - 1) {
        nextButton.textContent = 'Submit';
    } else {
        nextButton.innerHTML = 'Next <i class="fa-solid fa-arrow-right"></i>';
    }
}

document.querySelector('.next-btn').addEventListener('click', () => {
    const forms = document.querySelectorAll('.box-of-review form');
    if (currentFormIndex < forms.length - 1) {
        currentFormIndex++;
        showForm(currentFormIndex);
    } else {
        alert("Form submitted!");
        // Add form submission logic here
    }
});

document.querySelector('.prev-btn').addEventListener('click', () => {
    if (currentFormIndex > 0) {
        currentFormIndex--;
        showForm(currentFormIndex);
    }
});

// Initially show the first form
showForm(currentFormIndex);

document.addEventListener('DOMContentLoaded', () => {
    const reviews = document.querySelectorAll('.star-buttons');

    reviews.forEach(review => {
        const buttons = review.querySelectorAll('.star-button');

        buttons.forEach((button, index) => {
            button.addEventListener('click', () => {
                const currentIndex = Array.from(buttons).indexOf(button);

                // Oldingi barcha tugmalardan active klassini olib tashlash
                buttons.forEach((btn, i) => {
                    if (i > currentIndex) {
                        btn.classList.remove('active');
                    } else {
                        btn.classList.add('active');
                    }
                });
            });
        });
    });
});


// textarea value bo'sh qilish
document.addEventListener('DOMContentLoaded', () => {
    // Select all textarea elements
    const textareas = document.querySelectorAll('textarea');

    // Clear the content of each textarea
    textareas.forEach(textarea => {
        textarea.value = '';
    });
});