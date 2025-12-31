window.addEventListener("scroll", function () {
  const header = document.querySelector(".header");
  if (window.scrollY > 50) {
    header.classList.add("scrolled");
  } else {
    header.classList.remove("scrolled");
  }
});

document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    const target = document.querySelector(this.getAttribute("href"));
    if (target) {
      e.preventDefault();
      window.scrollTo({
        top: target.offsetTop - 80,
        behavior: "smooth",
      });
    }
  });
});
const fadeElements = document.querySelectorAll(
  ".course-card, .modul-card, .pricing-card"
);
const observer = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("show");
      }
    });
  },
  { threshold: 0.2 }
);
fadeElements.forEach((el) => observer.observe(el));
const hoverSound = new Audio(
  "https://cdn.pixabay.com/audio/2022/03/15/audio_78b4a7f6f1.mp3"
);
document
  .querySelectorAll(".course-card, .pricing-card, .modul-card")
  .forEach((card) => {
    card.addEventListener("mouseenter", () => {
      card.style.transform = "translateY(-8px) scale(1.03)";
      card.style.transition = "0.3s ease";
      hoverSound.currentTime = 0;
      hoverSound.volume = 0.2;
      hoverSound.play();
    });
    card.addEventListener("mouseleave", () => {
      card.style.transform = "translateY(0) scale(1)";
    });
  });

const contactForm = document.querySelector(".contact-form");
if (contactForm) {
  contactForm.addEventListener("submit", (e) => {
    e.preventDefault();
    alert("Terima kasih! Pesan Anda telah dikirim ✅");
    contactForm.reset();
  });
}
function showTab(tab) {
  const loginForm = document.getElementById("login-form");
  const registerForm = document.getElementById("register-form");
  const tabLogin = document.getElementById("tab-login");
  const tabRegister = document.getElementById("tab-register");

  if (tab === "login") {
    loginForm.style.display = "block";
    registerForm.style.display = "none";
    tabLogin.classList.add("active");
    tabRegister.classList.remove("active");
  } else {
    loginForm.style.display = "none";
    registerForm.style.display = "block";
    tabRegister.classList.add("active");
    tabLogin.classList.remove("active");
  }
}

const whatsappButton = document.querySelector(".whatsapp-button");
if (whatsappButton) {
  setInterval(() => {
    whatsappButton.classList.toggle("pulse");
  }, 1500);
}

function togglePassword(id) {
  const input = document.getElementById(id);
  const icon = input.nextElementSibling;

  if (input.type === "password") {
    input.type = "text";
    icon.classList.remove("fa-eye-slash");
    icon.classList.add("fa-eye");
  } else {
    input.type = "password";
    icon.classList.remove("fa-eye");
    icon.classList.add("fa-eye-slash");
  }
}
