document.querySelectorAll('.faq-question').forEach(question => {
    question.addEventListener('click', () => {
      const answer = question.nextElementSibling;
      const icon = question.querySelector('.faq-icon');
      
      // Toggle the answer
      if (answer.style.maxHeight) {
        answer.style.maxHeight = null;
        icon.classList.remove('rotate-180');
        answer.classList.remove('active');
      } else {
        answer.style.maxHeight = answer.scrollHeight + "px";
        icon.classList.add('rotate-180');
        answer.classList.add('active');
      }
    });
  });