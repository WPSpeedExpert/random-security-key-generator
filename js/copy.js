/*!
 * File: js/copy.js
 * Version: 1.0.2
 * Description: Adds “Copy” button functionality to the security‑key code block.
 */

document.addEventListener('DOMContentLoaded', function() {
  document.querySelectorAll('.rskg-copy-button').forEach(function(btn) {
    btn.addEventListener('click', function() {
      var code = btn.parentElement.querySelector('code').textContent;
      if (navigator.clipboard && navigator.clipboard.writeText) {
        navigator.clipboard.writeText(code).then(function() {
          btn.textContent = 'Copied!';
          setTimeout(function(){ btn.textContent = 'Copy'; }, 1500);
        });
      } else {
        var ta = document.createElement('textarea');
        ta.value = code;
        document.body.appendChild(ta);
        ta.select();
        document.execCommand('copy');
        document.body.removeChild(ta);
        btn.textContent = 'Copied!';
        setTimeout(function(){ btn.textContent = 'Copy'; }, 1500);
      }
    });
  });
});
