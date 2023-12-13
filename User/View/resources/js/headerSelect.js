const items = document.querySelectorAll('.item');

items.forEach(item => {
   
    item.addEventListener('click', () => {
        items.forEach(i => {
            i.classList.remove('bg-teal-700');
            i.classList.remove('md:text-teal-700');

        })
        item.classList.add('bg-teal-700');
        item.classList.add('md:text-teal-700')
        console.log('clicked')
    })
});