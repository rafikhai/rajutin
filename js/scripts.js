//home page -----------------------------------------------------------------------------------------
// animasi mouseover card products
document.addEventListener("DOMContentLoaded", function () {
  const cards = document.querySelectorAll(".card"); // Mengambil semua elemen card

  // Menambah event listener untuk setiap card
  cards.forEach(function (card) {
    card.addEventListener("mouseover", function () {
      card.classList.add("animate__animated", "animate__bounce"); // Menambah kelas animasi saat kursor masuk
    });

    card.addEventListener("mouseout", function () {
      card.classList.remove("animate__animated", "animate__bounce"); // Menghapus kelas animasi saat kursor keluar
    });
  });
});

// animasi scroll card products
document.addEventListener("DOMContentLoaded", function () {
  const cards = document.querySelectorAll(".card");

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("animate__animated", "animate__slideInLeft");
      } else {
        entry.target.classList.remove(
          "animate__animated",
          "animate__slideInLeft"
        );
      }
    });
  });

  cards.forEach((card) => {
    observer.observe(card);
  });
});

//animasi logo navbar-brand
document.addEventListener("DOMContentLoaded", function () {
  const logoImg = document.querySelector(".navbar-brand img");

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        logoImg.classList.add("animate__animated", "animate__heartBeat");
      } else {
        logoImg.classList.remove("animate__animated", "animate__heartBeat");
      }
    });
  });

  observer.observe(logoImg);
});

//animasi about section
document.addEventListener("DOMContentLoaded", function () {
  window.addEventListener("scroll", function () {
    var element = document.getElementById("about-section");
    var position = element.getBoundingClientRect().top;
    var screenHeight = window.innerHeight;

    if (position < screenHeight) {
      element.classList.add("animate__animated", "animate__fadeInDown");
    } else {
      element.classList.remove("animate__animated", "animate__fadeInDown");
    }
  });
});

// Animasi bounce pada gambar logo di about section
document.addEventListener("DOMContentLoaded", function () {
  const logoAboutImg = document.querySelector("#about-section .container img");

  logoAboutImg.addEventListener("mouseenter", function () {
    logoAboutImg.classList.add("animate__animated", "animate__tada");
  });

  logoAboutImg.addEventListener("mouseleave", function () {
    logoAboutImg.classList.remove("animate__animated", "animate__tada");
  });
});

//page gallery---------------------------------------------------------------------------------

//Animasi bounce pada gambar logo di gallery section
document.addEventListener("DOMContentLoaded", function () {
  const galleryImages = document.querySelectorAll("#gallery-section img");

  galleryImages.forEach(function (image) {
    image.addEventListener("mouseover", function () {
      image.classList.add("animate__animated", "animate__tada");
    });

    image.addEventListener("mouseout", function () {
      image.classList.remove("animate__animated", "animate__tada");
    });
  });
});

//animasi ketikan our gallery
const text = "Our Gallery";
let index = 0;

function type() {
  document.getElementById('typing-text').textContent = text.slice(0, index++);
  if (index <= text.length) {
    setTimeout(type, 200);
  }
}

type();

//animasi gallery
document.addEventListener("DOMContentLoaded", function() {
    const products = document.querySelectorAll(".col-lg-4, .col-lg-8");
  
    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("animate__animated", "animate__pulse");
        } else {
          entry.target.classList.remove("animate__animated", "animate__pulse");
        }
      });
    });
  
    products.forEach((product) => {
      observer.observe(product);
    });
  });



  

