document.addEventListener('DOMContentLoaded', function() {
    const scrollLink = document.querySelector('.scroll-link');
  
    scrollLink.addEventListener('click', function(event) {
      event.preventDefault();
  
      const targetId = scrollLink.getAttribute('href').substring(1);
      const targetElement = document.getElementById(targetId);
      const offsetTop = targetElement.offsetTop;
  
      window.scroll({
        top: offsetTop,
        behavior: 'smooth'
      });
    });
  });
  