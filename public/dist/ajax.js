
console.log("ajax file loaded");
function delete_department(dep_id){
    console.log(dep_id)
    axios.get("/department/index/delete/"+dep_id,{
    }).then((res)=>{
        alert("تمت عمليه الحذف بنجاح");
        $("#dep_row_"+dep_id).hide();
    }).catch((error)=>{
        alert("فشلت العمليه");
        console.log(error);
    });
}
