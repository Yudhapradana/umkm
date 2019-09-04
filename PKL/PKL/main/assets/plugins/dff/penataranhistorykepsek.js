var room = 1;

function penataran_fields() {

    room++;
    var objTo = document.getElementById('penataran_fields')
    var divtest = document.createElement("div");
    divtest.setAttribute("class", "form-group removeclass" + room);
    var rdiv = 'removeclass' + room;
    divtest.innerHTML = '<div class="row"> <div class="col-sm-3 nopadding"> <div class="form-group"> <input type="text" class="form-control required" id="Nama" name="Namapenataran[]" value="" placeholder="Nama Penataran"> </div> </div> <div class="col-sm-3 nopadding"> <div class="form-group"> <input type="text" class="form-control required" id="TingkatPenyelenggara" name="Tingkatpenataran[]" value="" placeholder="Tingkat Penyelenggara"> </div> </div> <div class="col-sm-3 nopadding"> <div class="form-group"> <input type="number" class="form-control required" id="LamaWaktu" name="Lamapenataran[]" value="" placeholder="Lama/Waktu (Hari)"> </div> </div> <div class="col-sm-3 nopadding"> <div class="form-group"> <div class="input-group"> <input type="text" class="form-control required" id="Tempat" name="Tempatpenataran[]" value="" placeholder="Tempat/Lokasi"> <div class="input-group-append"> <button class="btn btn-danger" type="button" onclick="remove_penataran_fields(' + room + ');"> <i class="fa fa-minus"></i> </button> </div> </div> </div> </div> <div class="clear"></div></row>';

    objTo.appendChild(divtest)
}

function remove_penataran_fields(rid) {
    $('.removeclass' + rid).remove();
}