document.addEventListener("DOMContentLoaded", function () {
    // Filtrlar uchun event listenerlar qo'shish
    const filterButtons = document.querySelectorAll(".box-button-filters .btn");
    const sections = {
      all: document.querySelector(".services-section"),
      development: document.querySelector(".portfolios"),
      marketing: document.querySelector(".team-section"),
      technology: document.querySelector(".awards-section"),
      education: document.querySelector(".reviews-section"),
      contact: document.querySelector(".contact-section")
    };
  
    // Dastlabki holatni sozlash: faqat services-section ko'rsatilsin
    Object.keys(sections).forEach(key => {
      if (sections[key]) {
        sections[key].style.display = "none";
      }
    });
    if (sections.all) {
      sections.all.style.display = "block";
    }
  
    filterButtons.forEach(button => {
      button.addEventListener("click", function (event) {
        event.preventDefault(); // Link bosilganda sahifani qayta yuklamaslik uchun
  
        // Aktiv holatni yangilash
        filterButtons.forEach(btn => btn.classList.remove("active"));
        this.classList.add("active");
  
        // Filtrlangan bo'limlarni yashirish
        Object.keys(sections).forEach(key => {
          if (sections[key]) {
            sections[key].style.display = "none";
          }
        });
  
        // Tanlangan bo'limni ko'rsatish
        const filter = this.getAttribute("data-filter");
        if (filter === "all") {
          // Faqat services-section ni ko'rsatish
          if (sections.all) {
            sections.all.style.display = "block";
          }
        } else if (sections[filter]) {
          sections[filter].style.display = "block";
        }
      });
    });
  });
  