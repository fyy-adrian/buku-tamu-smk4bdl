function modalInput() {
    document.getElementById("modalInput").classList.toggle('hidden');
    document.getElementById("modalList").classList.add('hidden');
  }
  
function modalList() {
    document.getElementById("modalInput").classList.add('hidden');
    document.getElementById("modalList").classList.toggle('hidden');
  }

function modalProfile() {
    document.getElementById("modalProfile").classList.toggle('hidden');
    document.getElementById("modalProfile").classList.toggle('flex');
  }
  