var room = 1;

function working_fields() {

    room++;
    var objTo = document.getElementById('working_fields')
    var divtest = document.createElement("div");
    divtest.setAttribute("class", "form-group removeclass" + room);
    var rdiv = 'removeclass' + room;
    divtest.innerHTML = '<div class="row"> <div class="col-sm-3 nopadding"> <div class="form-group"> <input type="text" class="form-control required" id="Jabatan" name="Jabatan[]" value="" placeholder="Jabatan"> </div> </div> <div class="col-sm-3 nopadding"> <div class="form-group"> <input type="text" class="form-control required" id="Unitkerja" name="Unitkerja[]" value="" placeholder="Unit Kerja"> </div> </div> <div class="col-sm-3 nopadding"> <div class="input-group"> <input type="date" id="datepicker-tmt" class="form-control" name="tmt[]" placeholder="Tgl Mulai Tugas"> <div class="input-group-append"> <span class="input-group-text"><i class="ti-calendar"></i></span> </div> </div> </div> <div class="col-sm-3 nopadding"> <div class="form-group"> <div class="input-group"> <input type="text" class="form-control required" id="Nomorsk" name="Nomorsk[]" value="" placeholder="No.SK/Nota Tugas"> <div class="input-group-append"> <button class="btn btn-danger" type="button" onclick="remove_working_fields(' + room + ');"> <i class="fa fa-minus"></i> </button> </div> </div> </div> </div> <div class="clear"></div></row>';

    objTo.appendChild(divtest)
}

function remove_working_fields(rid) {
    $('.removeclass' + rid).remove();
}