function sendMessage() {
    alert("Thank you for reaching out! I’ll get back to you soon.");
    return false; // Prevent actual form submission
  }
  
  // Make projects appear as the user scrolls
const projects = document.querySelectorAll('.project');

window.addEventListener('scroll', () => {
  projects.forEach(project => {
    const rect = project.getBoundingClientRect();
    if (rect.top < window.innerHeight) {
      project.classList.add('visible');
    }
  });
});

// para mag dark mode

/* document.getElementById('theme-toggle').addEventListener('click', () => {
  document.body.classList.toggle('dark-mode');
}); */

