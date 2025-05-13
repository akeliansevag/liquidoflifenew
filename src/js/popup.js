document.querySelectorAll('.solution-open-popup').forEach(button => {
  button.addEventListener('click', () => {
    const targetId = button.dataset.targetId;

    
    document.querySelector("#"+targetId).classList.remove('hidden');
    openPopup();

  });
});

// Pressing ESC key closes popup
document.addEventListener('keydown', (e) => {
  if (e.key === 'Escape') {
    closePopup();
  }
});

document.querySelector('.popup-overlay').addEventListener('click',()=>{
    closePopup();
});

document.querySelector("#popup-close").addEventListener("click",()=>{
    closePopup();
});

const closePopup = () => {
    document.getElementById('popup').classList.remove('show');
    document.querySelectorAll('.solution-popup-content').forEach(item => {
        item.classList.add('hidden');
    })
}

const openPopup = () => {
    document.getElementById('popup').classList.add('show');
}