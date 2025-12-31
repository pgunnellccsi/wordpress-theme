// Select all buttons and tabs
const tabButtons = document.querySelectorAll('.tab-btn');
const tabs = document.querySelectorAll('.tab');

tabButtons.forEach(button => {
    button.addEventListener('click', () => {
        // Remove 'active' class from all buttons
        tabButtons.forEach(btn => btn.classList.remove('active'));
        // Add 'active' class to clicked button
        button.classList.add('active');

        const target = button.dataset.tab;

        // Hide all tabs
        tabs.forEach(tab => tab.classList.remove('active'));
        // Show the selected tab
        document.getElementById(target).classList.add('active');
    });
});