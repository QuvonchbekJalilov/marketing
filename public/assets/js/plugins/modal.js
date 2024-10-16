document.addEventListener("DOMContentLoaded", function () {
    const card = document.getElementById('card');
    const modal = document.getElementById('modal');
    const close = document.getElementById('image-modal-close-footer');

    close.style.display="block";

    // Modalni ochish
    card.addEventListener('click', function () {
        modal.style.display = 'flex'; // Modalni ochish
    });

    // Modalni yopish
    function closeModal() {
        modal.style.display = 'none'; // Modalni yopish
    }

    // Modal foniga bosilganda yopish
    modal.addEventListener('click', function (event) {
        if (event.target === modal) {
            closeModal();
        }
    });

    close.addEventListener('click', function (event) {
            closeModal();
        
    });

    // Escape tugmasi bilan modalni yopish
    window.addEventListener('keydown', function (event) {
        if (event.key === 'Escape') {
            closeModal();
        }
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const modal = document.getElementById('imageModal');
    const modalImg = document.getElementById('imgInImageModal');
    const closeModal = document.getElementById('image-modal-close-footer');
    const images = document.querySelectorAll('.album .img');
    const closeBtn = document.querySelector('.image-modal-close');
    const prevBtn = document.querySelector('.image-modal-prev');
    const nextBtn = document.querySelector('.image-modal-next');
    let currentIndex = 0;


    function showImage(index) {
        if (index >= 0 && index < images.length) {
            currentIndex = index;
            modalImg.src = images[currentIndex].src;
            modal.style.display = 'block';
        }
    }

    images.forEach((img, index) => {
        img.addEventListener('click', function () {
            showImage(index);
        });
    });

    // Modalni yopish
    closeBtn.addEventListener('click', function () {
        modal.style.display = 'none';
    });

    // Modalning tashqarisiga bosilganda modalni yopish
    modal.addEventListener('click', function (event) {
        if (event.target === modal) {
            modal.style.display = 'none';
        }
    });

    // Oldingi rasmga o'tish
    prevBtn.addEventListener('click', function () {
        const newIndex = (currentIndex - 1 + images.length) % images.length;
        showImage(newIndex);
    });

    // Keyingi rasmga o'tish
    nextBtn.addEventListener('click', function () {
        const newIndex = (currentIndex + 1) % images.length;
        showImage(newIndex);
    });
});


