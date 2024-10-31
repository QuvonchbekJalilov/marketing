// Tugmalarni tanlash
const buttons = document.querySelectorAll('.menu-button');

// Har bir forma uchun kiritilgan ma'lumotlarni saqlash uchun obyekt
let formData = {};


// Star tugmalar funksionalligi
document.addEventListener('DOMContentLoaded', () => {
    const reviews = document.querySelectorAll('.star-buttons');

    reviews.forEach(review => {
        const buttons = review.querySelectorAll('.star-button');
        const scoreInput = review.parentElement.querySelector('input[type="hidden"]'); // Yashirin input

        buttons.forEach((button, index) => {
            button.addEventListener('click', () => {
                const currentIndex = Array.from(buttons).indexOf(button);

                buttons.forEach((btn, i) => {
                    if (i <= currentIndex) {
                        btn.classList.add('active'); // Aktiv yulduzlarni belgilang
                    } else {
                        btn.classList.remove('active'); // Aktiv bo'lmagan yulduzlarni olib tashlang
                    }
                });

                // Tanlangan bahoni formData ga saqlash
                scoreInput.value = currentIndex + 1; // Yashirin inputga bahoni saqlang
                formData[scoreInput.name] = currentIndex + 1; // formData ga ham saqlang
            });
        });
    });
});




// Tugmalarni bosganda, tegishli formani ko'rsatish
buttons.forEach((button, index) => {
    button.addEventListener('click', function () {
        buttons.forEach(btn => btn.classList.remove('active-button'));
        this.classList.add('active-button');
        showForm(index);
    });
});

let currentFormIndex = 0;

// Forma ko'rsatish funksiyasi
function showForm(formIndex) {
    const forms = document.querySelectorAll('.box-of-review form');
    const nextButton = document.querySelector('.next-btn');
    const prevButton = document.querySelector('.prev-btn');

    forms.forEach(form => form.style.display = 'none');
    buttons.forEach(btn => btn.classList.remove('active-button'));

    currentFormIndex = formIndex;
    forms[currentFormIndex].style.display = 'block';
    buttons[currentFormIndex].classList.add('active-button');

    // Oldingi tugmani ko'rsatish yoki yashirish
    prevButton.style.display = currentFormIndex > 0 ? 'inline-block' : 'none';

    // Keyingi tugma matnini yangilash
    nextButton.textContent = currentFormIndex === forms.length - 1 ? 'Submit' : 'Next';

    // Saqlangan ma'lumotlarni form maydonlariga yuklash
    loadFormData();
}


// Form ma'lumotlarini yuklash va saqlash
function loadFormData() {
    const currentForm = document.querySelectorAll('.box-of-review form')[currentFormIndex];
    const inputs = currentForm.querySelectorAll('input, textarea,select');

    inputs.forEach(input => {
        const name = input.name;
        if (formData[name]) {
            if (input.type === 'hidden') {
                input.value = formData[name]; // Yashirin inputlarni to'ldiring
                // Yulduzlar holatini yangilash
                const buttons = input.closest('.star-review').querySelectorAll('.star-button');
                buttons.forEach((btn, index) => {
                    if (index < formData[name]) {
                        btn.classList.add('active');
                    } else {
                        btn.classList.remove('active');
                    }
                });

            }
            else if (input.type === 'checkbox' || input.type === 'radio')
            {
                if (input.checked) {
                    formData[name] = input.value; // Checkbox yoki radio tugmachasi
                }
            }
            else {
                input.value = formData[name]; // Boshqa inputlarni to'ldiring
            }
        }

        // Inputdagi o'zgarishlarni formData ga saqlash
        input.addEventListener('input', () => {
            formData[name] = input.value; // Input qiymatini formData ga saqlash
        });
    });
}



// "Next" tugmasini bosganda formni tekshirish va yuborish
document.querySelector('.next-btn').addEventListener('click', () => {
    const forms = document.querySelectorAll('.box-of-review form');
    const currentForm = forms[currentFormIndex];

    // Validatsiya
    if (currentForm.checkValidity()) {
        // Saqlangan ma'lumotlarni konsolga chiqarish
        console.log("Hozirgi forma saqlangan ma'lumotlar:", formData);

        if (currentFormIndex < forms.length - 1) {
            currentFormIndex++;
            showForm(currentFormIndex);
        } else {
            alert("Oxirgi formaga o'tildi va yuborilmoqda!");
            submitFormData(formData); // formData obyektini serverga yuborish
        }
    } else {
        alert("Iltimos, barcha maydonlarni to'ldiring.");
    }
});


// Ma'lumotlarni serverga jo'natadigan funksiya
function submitFormData(data) {
    console.log("Yuborilayotgan ma'lumotlar:", JSON.stringify(data, null, 2));
    fetch('/api/save-review', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify(data),
    })
        .then(response => {
            console.log(response); // Bu yerda response ob'ektini tekshirib ko'ring
            if (response.ok) {
                return response.json();
            } else {
                throw new Error('Yuuuuuuuuuuuq');
            }
        })
        .then(data => {
                    alert("Ma'lumotlar muvaffaqiyatli saqlandi!"); // Xabarni chiqarish
                    console.log(data); // Serverdan olingan javobni konsolga chiqarish
                })

}


// "Previous" tugmasini bosganda oldingi formani ko'rsatish
document.querySelector('.prev-btn').addEventListener('click', () => {
    if (currentFormIndex > 0) {
        currentFormIndex--;
        showForm(currentFormIndex);
    }
});


// Star tugmalar funksionalligi
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


// Sahifa yuklanganda textarealarni tozalash
document.addEventListener('DOMContentLoaded', () => {
    const textareas = document.querySelectorAll('textarea');

    textareas.forEach(textarea => {
        textarea.value = ''; // Har bir textarea ni tozalash
    });
});


// Dastlabki formani ko'rsatish va input ma'lumotlarini yuklash
showForm(currentFormIndex);
loadFormData();
