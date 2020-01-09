$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
$('.ssn').keyup(function() {
        var val = this.value.replace(/\D/g, '');
        var newVal = '';
        while (val.length > 4) {
          newVal += val.substr(0, 3) + '-';
          val = val.substr(3);
        }
        newVal += val;
        this.value = newVal;
    });

