function increaseQuantity() {
    const quantityInput = document.getElementById("quantity");
    let currentValue = parseInt(quantityInput.value);
    quantityInput.value = currentValue + 1;
}

function decreaseQuantity() {
    const quantityInput = document.getElementById("quantity");
    let currentValue = parseInt(quantityInput.value);
    if (currentValue > 1) {
        quantityInput.value = currentValue - 1;
    }
}

function toggleConfigurationOptions(event) {
  event.stopPropagation();

  const optionContent = event.currentTarget.nextElementSibling;
  const destinationOption = document.getElementById('destination-option'); // Kotak tujuan kota
  const cityOptions = document.getElementById('city-options'); // Opsi kota

  if (optionContent) {
      if (optionContent.classList.contains('hidden')) {
          optionContent.classList.remove('hidden');
          optionContent.classList.add('visible');
      } else {
          optionContent.classList.remove('visible');
          optionContent.classList.add('hidden');
      }

      const iconArrow = event.currentTarget.querySelector('.icon-arrow');
      if (iconArrow) {
          iconArrow.classList.toggle('rotate-arrow');
      }
  }

  const options = optionContent.querySelectorAll('.option');

  options.forEach(option => {
      option.addEventListener('click', function() {
          // Menghapus kelas 'selected' dari semua opsi
          options.forEach(opt => opt.classList.remove('selected'));

          // Menambahkan kelas 'selected' ke opsi yang diklik
          this.classList.add('selected');

          // Jika "Luar Kota" dipilih, tampilkan `#destination-option`
          if (this.getAttribute('value') === 'luarKota') {
              destinationOption.classList.remove('hidden');
              destinationOption.classList.add('visible');
              cityOptions.classList.add('hidden'); // Pastikan `#city-options` tetap disembunyikan
          } else {
              destinationOption.classList.add('hidden');
              cityOptions.classList.add('hidden'); // Reset tampilan `#city-options`
              cityOptions.querySelectorAll('.option').forEach(cityOption => cityOption.classList.remove('selected'));
          }
      });
  });
}

function toggleCityOptions(event) {
  event.stopPropagation();

  const cityOptions = document.getElementById('city-options');
  const iconArrow = event.currentTarget.querySelector('.icon-arrow');

  if (cityOptions.classList.contains('hidden')) {
      cityOptions.classList.remove('hidden');
      cityOptions.classList.add('visible');
  } else {
      cityOptions.classList.remove('visible');
      cityOptions.classList.add('hidden');
  }

  if (iconArrow) {
      iconArrow.classList.toggle('rotate-arrow');
  }

  const cityOptionsItems = cityOptions.querySelectorAll('.option');

  cityOptionsItems.forEach(option => {
      option.addEventListener('click', function() {
          // Menghapus kelas 'selected' dari semua opsi kota
          cityOptionsItems.forEach(opt => opt.classList.remove('selected'));

          // Menambahkan kelas 'selected' ke opsi kota yang diklik
          this.classList.add('selected');
      });
  });
}





