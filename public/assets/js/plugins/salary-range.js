document.addEventListener("DOMContentLoaded", function () {
    function setupRangeFilters(filterId) {
        const minRangeInput = document.querySelector(`${filterId} .min.input-ranges`);
        const maxRangeInput = document.querySelector(`${filterId} .max.input-ranges`);
        const minValueMoney = document.querySelector(`${filterId} .min-value-money`);
        const maxValueMoney = document.querySelector(`${filterId} .max-value-money`);
        const minValueHidden = document.querySelector(`${filterId} .min-value`);
        const maxValueHidden = document.querySelector(`${filterId} .max-value`);

        if (!minRangeInput || !maxRangeInput || !minValueMoney || !maxValueMoney || !minValueHidden || !maxValueHidden) {
            console.error('One or more elements are missing in ' + filterId);
            return;
        }

        function updateValues() {
            minValueMoney.value = `$${minRangeInput.value}`;
            maxValueMoney.value = `$${maxRangeInput.value}`;
            minValueHidden.value = minRangeInput.value;
            maxValueHidden.value = maxRangeInput.value;
        }

        function updateRanges() {
            let minMoneyValue = parseInt(minValueMoney.value.replace('$', '')) || 0;
            let maxMoneyValue = parseInt(maxValueMoney.value.replace('$', '')) || 0;

            if (minMoneyValue < 0) minMoneyValue = 0;
            if (maxMoneyValue < minMoneyValue) maxMoneyValue = minMoneyValue;

            minRangeInput.value = minMoneyValue;
            maxRangeInput.value = maxMoneyValue;
            updateValues();
        }

        minRangeInput.addEventListener('input', function () {
            if (parseInt(minRangeInput.value) > parseInt(maxRangeInput.value)) {
                maxRangeInput.value = minRangeInput.value;
            }
            updateValues();
        });

        maxRangeInput.addEventListener('input', function () {
            if (parseInt(maxRangeInput.value) < parseInt(minRangeInput.value)) {
                minRangeInput.value = maxRangeInput.value;
            }
            updateValues();
        });

        minValueMoney.addEventListener('input', function () {
            updateRanges();
        });

        maxValueMoney.addEventListener('input', function () {
            updateRanges();
        });

        // Initially set the values
        updateValues();
    }

    // Set up both filters
    setupRangeFilters('#filter-box-1');
    setupRangeFilters('#filter-box-2');

    const resetButton = document.querySelector(".buttons-filter .btn:last-child");

    resetButton.addEventListener("click", function() {
        const inputs = document.querySelectorAll(".sidebar-filters input[type='text']");
        const selects = document.querySelectorAll(".sidebar-filters select");

        // Matnli inputlarni tozalash
        inputs.forEach(input => {
            input.value = "";
        });

        // Seçimlarni dastlabki holatiga qaytarish
        selects.forEach(select => {
            select.selectedIndex = 0;
        });
    });

    var button = document.getElementById('change-filter-btn'); 
    var button2 = document.getElementById('change-filter-btn-2'); 
    var filterBox = document.getElementById('filter-box-2');
    var cards = document.querySelectorAll('.card-integration-big');

    button.addEventListener('click', function() {
        if (getComputedStyle(filterBox).display === 'block') {
            // Filter-boxni yashirish va kartochkalarni ko'rsatish
            filterBox.style.display = 'none';
            cards.forEach(function(card) {
                card.style.display = 'block';
            });
            // Button yozuvini "Show Filter" ga o'zgartirish
            button.textContent = 'Show Filter';
        } else {
            // Filter-boxni ko'rsatish va kartochkalarni yashirish
            filterBox.style.display = 'block';
            cards.forEach(function(card) {
                card.style.display = 'none';
            });
            // Button yozuvini "Close Filter" ga o'zgartirish
            button.textContent = 'Close Filter';
        }
    });

    button2.addEventListener('click', function() {
        // Filter-boxni yashirish
        filterBox.style.display = 'none';
        // Button1ning yozuvini "Show Filter" ga o'zgartirish
        button.textContent = 'Show Filter';
        // Kartochkalarni qayta ko'rsatish
        cards.forEach(function(card) {
            card.style.display = 'block';
        });
    });
});
