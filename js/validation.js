      const formulario = document.getElementById('datos');
      const campo1 = document.getElementById('campo1');
      const campo2 = document.getElementById('campo2');
      const campo3 = document.getElementById('campo3');
      const enviar1 = document.getElementById('enviar');
      
      // Agrega un event listener para detectar cambios en los campos
      formulario.addEventListener('input', function () {
          // Verifica si todos los campos están llenos
          if (campo1.value.trim() !== '' && campo2.value.trim() !== '' && campo3.value.trim() !== '') {
              // Habilita el botón si todos los campos están llenos
              enviar1.removeAttribute('disabled');
          } else {
              // Deshabilita el botón si al menos un campo está vacío
              enviar1.setAttribute('disabled', 'disabled');
          }
      });
