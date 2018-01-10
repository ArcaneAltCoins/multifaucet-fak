// Are we ready?
document.addEventListener('DOMContentLoaded', function() { 

  // Copy & Paste functionality fo shizzle
  document.querySelector('.copy').addEventListener('click', function() {
    document.querySelector('.copy-select').select();

    try {
      var successful = document.execCommand('copy');
      document.querySelector('.address').classList.add('flash');
      setTimeout(function() {
        document.querySelector('.address').classList.remove('flash');
      }, 1000);
    } catch(err) {
      console.log('Oops, unable to copy');
    }
  });

}, false);