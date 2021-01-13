// Add chapter
$(document).on('click','#chapter',function(){
    var chapID= $(this).val();
    var sectionid= $(this).attr('sectionid');
    chapID++;
    var secdataname= '_'+chapID+'_'+sectionid;
     $('#Chapters').append('<div id="chap_'+chapID+'" class="chapSection"><div class="form-group row"><label for="language" class="col-md-4 col-form-label text-md-right">Id</label><div class="col-md-6"><input id="id_'+chapID+'" name="chapter['+chapID+'][id]" type="text" class="form-control" ></div><button type="button" chapid="chap_'+chapID+'" id="deleteChapter" class="btn btn-secondary">-</button></div><div class="form-group row"><label for="title" class="col-md-4 col-form-label text-md-right">Title</label><div class="col-md-6"><input id="title_'+chapID+'" name="chapter['+chapID+'][title]" type="text" class="form-control" ></div></div><div class="form-group row"><label for="data" class="col-md-4 col-form-label text-md-right">Data</label><div class="col-md-6"><textarea class="form-control" name="chapter['+chapID+'][data]" id="data_'+chapID+'"></textarea></div></div><div class="form-group row"><label for="section" class="col-md-4 col-form-label text-md-right">Section</label><div id="sections" sectionid="'+sectionid+'" chapID="'+chapID+'" class="sectionMainDiv'+secdataname+'"><div id="section'+secdataname+'" class="sectionContainer"><div class="form-group row"><label for="language" class="col-md-4 col-form-label text-md-right">Id</label><div class="col-md-6"><input id="id'+secdataname+'" name="chapter['+chapID+'][section]['+sectionid+'][id]" type="text" class="form-control" ></div></div><div class="form-group row"><label for="title" class="col-md-4 col-form-label text-md-right">Title</label><div class="col-md-6"><input id="title"name="chapter['+chapID+'][section]['+sectionid+'][title]" type="text" class="form-control" ></div></div><div class="form-group row"><label for="data" class="col-md-4 col-form-label text-md-right">Data</label><div class="col-md-6"><textarea class="form-control" name="chapter['+chapID+'][section]['+sectionid+'][data]" id="data'+secdataname+'"></textarea></div></div></div></div><div><button type="button" class="btn btn-secondary" id="newSection" sectionid="'+sectionid+'" chapID="'+chapID+'">+</button></div>');
    $(this).val(chapID);
});

// Addd section
$(document).on('click','#newSection',function(){
    var sectionid= $(this).attr('sectionid');
    var chapID= $(this).attr('chapID');
    var oldsecid = sectionid;
    sectionid++;
    var secdataname= '_'+chapID+'_'+sectionid;
    $(this).parent().prev('#sections').append('<div id="section'+secdataname+'" class="sectionContainer"><div class="form-group row"><label for="language" class="col-md-4 col-form-label text-md-right">Id</label><div class="col-md-6"><input id="id'+secdataname+'" name="chapter['+chapID+'][section]['+sectionid+'][id]" type="text" class="form-control" ></div><div><button type="button" class="btn btn-secondary" id="removeSection" sectionid="'+sectionid+'" chapID="'+chapID+'">-</button></div></div><div class="form-group row"><label for="title" class="col-md-4 col-form-label text-md-right">Title</label><div class="col-md-6"><input id="title" name="chapter['+chapID+'][section]['+sectionid+'][title]" type="text" class="form-control" ></div></div><div class="form-group row"><label for="data" class="col-md-4 col-form-label text-md-right">Data</label><div class="col-md-6"><textarea class="form-control" name="chapter['+chapID+'][section]['+sectionid+'][data]" id="data'+secdataname+'"></textarea></div></div></div></div></div>');
    $(this).attr('sectionid',sectionid);
});


//delete chapter
$(document).on('click','#deleteChapter',function(){
    var chapID= $(this).attr('chapid');
    $('#'+chapID).remove();
    $(this).remove();

});

//delete section
$(document).on('click','#removeSection',function(){
    var sectionId= $(this).attr('sectionid');
    var chapID= $(this).attr('chapID');
    var secdataname= '_'+chapID+'_'+sectionId;
    $('#section'+secdataname).remove();
    $(this).remove();
});
