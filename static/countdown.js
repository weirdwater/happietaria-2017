(function() {
    const daysLeftSpan = document.getElementById('phDaysLeft');
    const dueDate = new Date(daysLeftSpan.dataset.date);
    const daysInMS = 86400000;

    function updateRemainingTime() {
        const now = Date.now();
        const msRemaining = dueDate.valueOf() - now;
        daysLeftSpan.innerText = Math.floor(msRemaining / daysInMS);
    }

    updateRemainingTime();

})();