const items = document.querySelectorAll('.items');

items.forEach(item => {
   
    item.addEventListener('click', () => {
        items.forEach(i => {
            i.classList.remove('bg-gray-100');
            i.classList.remove('dark:bg-gray-700');
        })
        item.classList.add('bg-gray-100');
        item.classList.add('dark:bg-gray-700')
    })
});