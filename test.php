
<img id="rotated" src="element/svg/double_arrow_left.svg" alt="Image to Rotate">

<button onclick="toggleRotate()">Rotate Image</button>

<script>
  let rotated = false;

  function toggleRotate() {
    const img = document.getElementById("rotated");
    
    if (rotated) {
      img.style.transform = "rotate(0deg)"; // Rotate back to original
    } else {
      img.style.transform = "rotate(90deg)"; // Rotate to 90 degrees
    }

    rotated = !rotated; // Toggle the state
  }
</script>