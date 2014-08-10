
var baseurl="http://localhost/digidu2/";
//baseurl=base_url+"index.php/";
// baseurl=base_url;
/* confirm delete question */
function delq(qid){
	if(confirm("Anda yakin akan menghapus pertanyaan ini?"))
	{
	window.location=baseurl+"qbank/del/"+qid;
	}
}

/* confirm delete subject */
function dels(sid){
	if(confirm("Anda yakin akan menghapus Subject ini?"))
	{
	window.location=baseurl+"subject/del/"+sid;
	}
}

/* confirm delete upload Category */
function delupc(id){
	if(confirm("Anda yakin akan menghapus kategori upload ini?"))
	{
	window.location=baseurl+"upload/del_upload_cat/"+id;
	}
}

/* confirm delete post */
function delpost(id){
	if(confirm("Anda yakin akan menghapus Posting ini?"))
	{
	window.location=baseurl+"blog/del/"+id;
	}
}

/* confirm delete kategori materi */
function del_kat_materi(id){
	if(confirm("Anda yakin akan menghapus Kategori ini?"))
	{
	window.location=baseurl+"materi/del_kategori/"+id;
	}
}


/* confirm delete group */
function delg(gid){
	if(confirm("Do you really want to delete group?"))
	{
	window.location=baseurl+"group/del/"+gid;
	}
}


/* confirm delete member */
function delmember(id){
	if(confirm("Apakah anda yakin akan menghapus user ini?"))
	{
	window.location=baseurl+"member/del/"+id;
	}
}

/* confirm delete test */
function delt(tid){
	if(confirm("Anda yakin akan menghapus Test ini?"))
	{
	window.location=baseurl+"test/del/"+tid;
	}
}

/* confirm delete result */
function delr(result_id){
	if(confirm("Anda yakin akan menghapus Hasil Test ini?"))
	{
	window.location=baseurl+"result/del/"+result_id;
	}
}

/* confirm delete upload */
function delupload(id){
	if(confirm("Anda yakin akan menghapus data ini?"))
	{
	window.location=baseurl+"upload/del/"+id;
	}
}

/* confirm delete notice */
function delnotice(id){
	if(confirm("Anda yakin akan menghapus pengumuman ini?"))
	{
	window.location=baseurl+"notice/del/"+id;
	}
}

/* search in question bank */
function searchQuestion(){
var str=document.getElementById('searchq').value;
window.location=baseurl+"qbank/search/"+str;
}

/* search in subjects */
function searchSubject(){
var str=document.getElementById('searchs').value;
window.location=baseurl+"subject/search/"+str;
}

/* search in groups */
function searchGroup(){
var str=document.getElementById('searchs').value;
window.location=baseurl+"group/search/"+str;
}

/* search in members */
function searchMember(){
var str=document.getElementById('searchm').value;
window.location=baseurl+"member/search/"+str;
}



/* search in test */
function searchtest(){
var str=document.getElementById('searcht').value;
window.location=baseurl+"test/search/"+str;
}
/* search in test */
function searchresult(){
var str=document.getElementById('searchr').value;
window.location=baseurl+"result/search/"+str;
}

/* search upload */
function searchUpload(){
var str=document.getElementById('searchu').value;
window.location=baseurl+"upload/search/"+str;
}

/* search Materi */
function searchMateri(){
var str=document.getElementById('searchmateri').value;
window.location=baseurl+"materi/search/"+str;
}

/* search Notice */
function searchNotice(){
var str=document.getElementById('searchn').value;
window.location=baseurl+"notice/search/"+str;
}

/* add new text field of options in question */
function addfield()
	{
	
	var table = document.getElementById('newOption');
			var nop = document.getElementById('nop').value;
			var rowCount = table.rows.length;
			var row = table.insertRow(rowCount);

			var cell1 = row.insertCell(0);
			var element1 = document.createElement("input");
			element1.type = "radio";
			element1.name = "answer";
			element1.value = nop;
			cell1.appendChild(element1);

			
			var cell2 = row.insertCell(1);
			var element2 = document.createElement("input");
			element2.type = "text";
			element2.name = "option[]";
			cell2.appendChild(element2);
			var nop=parseInt(nop)+parseInt(1);
			document.getElementById('nop').value=nop;
	//document.getElementById('newOption').innerHTML="<td><input type='radio' name='answer' value=''></td><td><input type='text' name='option[]' value='' ></td>";
	
	}
