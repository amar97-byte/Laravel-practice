import 'preline'



// It will initiate all the preline components that is needed in the navigation of page
document.addEventListener('livewire:navigated', () => {
    window.HSStaticMethods.autoInit();
});
