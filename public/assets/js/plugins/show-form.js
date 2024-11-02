// const buttons = document.querySelectorAll('.menu-button');
//
// let formData = {};
//
// document.addEventListener('DOMContentLoaded', () => {
//     const reviews = document.querySelectorAll('.star-buttons');
//
//     reviews.forEach(review => {
//         const buttons = review.querySelectorAll('.star-button');
//         const scoreInput = review.parentElement.querySelector('input[type="hidden"]');
//
//         buttons.forEach((button, index) => {
//             button.addEventListener('click', () => {
//                 const currentIndex = Array.from(buttons).indexOf(button);
//
//                 buttons.forEach((btn, i) => {
//                     if (i <= currentIndex) {
//                         btn.classList.add('active');
//                     } else {
//                         btn.classList.remove('active');
//                     }
//                 });
//                 scoreInput.value = currentIndex + 1;
//                 formData[scoreInput.name] = currentIndex + 1;
//             });
//         });
//     });
// });
// buttons.forEach((button, index) => {
//     button.addEventListener('click', function () {
//         buttons.forEach(btn => btn.classList.remove('active-button'));
//         this.classList.add('active-button');
//         showForm(index);
//     });
// });
//
// let currentFormIndex = 0;
// function showForm(formIndex) {
//     const forms = document.querySelectorAll('.box-of-review form');
//     const nextButton = document.querySelector('.next-btn');
//     const prevButton = document.querySelector('.prev-btn');
//
//     forms.forEach(form => form.style.display = 'none');
//     buttons.forEach(btn => btn.classList.remove('active-button'));
//
//     currentFormIndex = formIndex;
//     forms[currentFormIndex].style.display = 'block';
//     buttons[currentFormIndex].classList.add('active-button');
//
//     prevButton.style.display = currentFormIndex > 0 ? 'inline-block' : 'none';
//
//     nextButton.textContent = currentFormIndex === forms.length - 1 ? 'Submit' : 'Next';
//     loadFormData();
// }
// function loadFormData() {
//     const currentForm = document.querySelectorAll('.box-of-review form')[currentFormIndex];
//     const inputs = currentForm.querySelectorAll('input, textarea,select');
//
//     inputs.forEach(input => {
//         const name = input.name;
//         if (formData[name]) {
//             if (input.type === 'hidden') {
//                 input.value = formData[name];
//                 const buttons = input.closest('.star-review').querySelectorAll('.star-button');
//                 buttons.forEach((btn, index) => {
//                     if (index < formData[name]) {
//                         btn.classList.add('active');
//                     } else {
//                         btn.classList.remove('active');
//                     }
//                 });
//             }
//             else if (input.type === 'checkbox' || input.type === 'radio')
//             {
//                 if (input.checked) {
//                     formData[name] = input.value;
//                 }
//             }
//             else {
//                 input.value = formData[name];
//             }
//         }
//         input.addEventListener('input', () => {
//             formData[name] = input.value;
//         });
//     });
// }
// document.querySelector('.next-btn').addEventListener('click', () => {
//     const forms = document.querySelectorAll('.box-of-review form');
//     const currentForm = forms[currentFormIndex];
//
//     if (currentForm.checkValidity()) {
//         console.log("Hozirgi forma saqlangan ma'lumotlar:", formData);
//
//         if (currentFormIndex < forms.length - 1) {
//             currentFormIndex++;
//             showForm(currentFormIndex);
//         } else {
//             alert("Oxirgi formaga o'tildi va yuborilmoqda!");
//             submitFormData(formData);
//         }
//     } else {
//         alert("Iltimos, barcha maydonlarni to'ldiring.");
//     }
// });
// function submitFormData(data) {
//     console.log("Yuborilayotgan ma'lumotlar:", JSON.stringify(data, null, 2));
//     fetch('/api/save-review', {
//         method: 'POST',
//         headers: {
//             'Content-Type': 'application/json',
//         },
//         body: JSON.stringify(data),
//     })
//         .then(response => {
//             if (response.ok) {
//                 return response.json();
//             } else {
//                 throw new Error('Ma\'lumotni saqlashda xatolik yuz berdi.');
//             }
//         })
//         .then(data => {
//             alert("Ma'lumotlar muvaffaqiyatli saqlandi!");
//             console.log(data);
//         })
//         .catch(error => {
//             console.error("Xatolik:", error.message);
//             alert("Xatolik yuz berdi: " + error.message);
//         });
// }
//
// document.querySelector('.prev-btn').addEventListener('click', () => {
//     if (currentFormIndex > 0) {
//         currentFormIndex--;
//         showForm(currentFormIndex);
//     }
// });
// document.addEventListener('DOMContentLoaded', () => {
//     const reviews = document.querySelectorAll('.star-buttons');
//     reviews.forEach(review => {
//         const buttons = review.querySelectorAll('.star-button');
//         buttons.forEach((button, index) => {
//             button.addEventListener('click', () => {
//                 const currentIndex = Array.from(buttons).indexOf(button);
//                 buttons.forEach((btn, i) => {
//                     if (i > currentIndex) {
//                         btn.classList.remove('active');
//                     } else {
//                         btn.classList.add('active');
//                     }
//                 });
//             });
//         });
//     });
// });
// document.addEventListener('DOMContentLoaded', () => {
//     const textareas = document.querySelectorAll('textarea');
//
//     textareas.forEach(textarea => {
//         textarea.value = '';
//     });
// });
// showForm(currentFormIndex);
// loadFormData();
