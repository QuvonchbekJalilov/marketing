const buttons = document.querySelectorAll('.menu-button');

// Har bir forma uchun kiritilgan ma'lumotlarni saqlash uchun obyekt
let formData = {};

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

    // Previous button visibility
    prevButton.style.display = currentFormIndex > 0 ? 'inline-block' : 'none';

    // Update Next button text
    nextButton.textContent = currentFormIndex === forms.length - 1 ? 'Submit' : 'Next <i class="fa-solid fa-arrow-right"></i>';

    // Load saved data into the form fields
    loadFormData();
}

function loadFormData() {
    const currentForm = document.querySelectorAll('.box-of-review form')[currentFormIndex];
    const inputs = currentForm.querySelectorAll('input, textarea');

    inputs.forEach(input => {
        const name = input.name;
        if (formData[name]) {
            input.value = formData[name]; // Save data from formData to inputs
        }

        // Save data on input change
        input.addEventListener('input', () => {
            formData[name] = input.value; // Save input value to formData
        });
    });
}

document.querySelector('.next-btn').addEventListener('click', () => {
    const forms = document.querySelectorAll('.box-of-review form');
    const currentForm = forms[currentFormIndex];

    // Validate the form
    if (currentForm.checkValidity()) {
        if (currentFormIndex < forms.length - 1) {
            currentFormIndex++;
            showForm(currentFormIndex);
        } else {
            alert("Oxirgi formaga o'tildi va yuborilmoqda!");
            submitFormData(formData); // Formani yuborish

        }
    } else {
        alert("Iltimos, barcha maydonlarni to'ldiring.");
    }
});

console.log('Sending CSRF Token:', csrfToken);
function submitFormData(data) {
    fetch('/save-review', { // Controller manzilini to'g'rilash
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'), // CSRF tokenni qo'shish
            body: JSON.stringify({

            })
        },
        body: JSON.stringify(data)
    })
        .then(response => {
            if (response.ok) {
                return response.json(); // Javobni JSON formatida olish
            } else {
                throw new Error('Network response was not ok.');
            }
        })
        .then(data => {
            alert("Ma'lumotlar muvaffaqiyatli saqlandi!");
            console.log(data); // Serverdan olingan javobni konsolga chiqarish
            // Ehtimol, foydalanuvchini boshqa sahifaga yo'naltirish mumkin
        })
        .catch(error => {
            console.error('There was a problem with the fetch operation:', error);
        });
}

document.querySelector('.prev-btn').addEventListener('click', () => {
    if (currentFormIndex > 0) {
        currentFormIndex--;
        showForm(currentFormIndex);
    }
});

// Initially show the first form
showForm(currentFormIndex);

// Star button functionality
document.addEventListener('DOMContentLoaded', () => {
    const reviews = document.querySelectorAll('.star-buttons');

    reviews.forEach(review => {
        const buttons = review.querySelectorAll('.star-button');

        buttons.forEach((button, index) => {
            button.addEventListener('click', () => {
                const currentIndex = Array.from(buttons).indexOf(button);

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

// Clear textareas on load
document.addEventListener('DOMContentLoaded', () => {
    const textareas = document.querySelectorAll('textarea');

    textareas.forEach(textarea => {
        textarea.value = ''; // Clear each textarea
    });
});
