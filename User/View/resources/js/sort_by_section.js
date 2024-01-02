'use strict';
console.log("hello world")
document.querySelectorAll('input[name="sort_by"]').forEach(radio => {
  radio.addEventListener('change', event => {
    console.log("hello world")
    const labels = document.querySelectorAll('.label');
    labels.forEach(label => {
      label.classList.remove('text-white');
      label.classList.add('text-gray-500');
    });

    if (event.target.checked) {
      const selectedLabel = document.querySelector(
        `[for="${event.target.id}"]`
      );
      selectedLabel.classList.remove('text-gray-500');
      selectedLabel.classList.add('text-white');
    }
  });
});
