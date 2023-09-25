
function getUniqueValuesFromColumn(){
    var unique_col_values_dict = {}
    allFilters = document.querySelectionAll(".table-filter")
    allFilters.foreach(filter_i => {
        col_index = filter_i.parentelement.getAttribute("col-index");
        //alert(col_index)
        const rows= document.querySelectionAll("#dataTable > tbody > tr")

        rows.foreach((row) => {
            cell_value = row.querySelector("td:nth-child("+col_index+")").innerHTML;
            if (col_index in unique_col_values_dict){
                if (unique_col_values_dict[col_index].includes(cell_value)){
                    //alert(cell_value + "is already present in the array" + unique_col_values_dict[col_index] )
                }else{
                    unique_col_values_dict[col_index].push(cell_value)
                    //alert(cell_value + "Array after adding " + unique_col_values_dict[col_index] )
                }

            }else{
                unique_col_values_dict[col_index]=new Array(cell_value)
            }
        });
    });
    for(i in unique_col_values_dict){
        alert("Comun index: " + i + "has unique values : \n" + unique_col_values_dict[i])
    }
    updateSelectionOptions(unique_col_values_dict)

};
function updateSelectionOptions(unique_col_values_dict){
allFilters = document.querySelectorAll(".table-filter")
allfilters.foreach((filter_i) => {
    col_index = filter_i.parentElement.getAttribute('col-index')
    unique_col_values_dict[col_index].forEach((i) => {
    filter_i.innerHTML = filter_innerHTML + `\n<option value="${i}"> ${i}</option>`
    });
});
};
function filter_rows(){
all_Filters = document.querySelectorAll(".table-Filter")
var filter_value_dict = {}
allFilter.foreach((filter_i) => {
col_index = filter_i.parentElement.getAttribute('col-index')
value = filter_i.value
if(value != "All"){
    filter_value_dict[col-index]= value;

}
});
var col_cell_value_dict = {};
const rows =document.querySelectorAll("#dataTable tbody tr");
rows.forEach((row) => {
var display_row = true;
allFilters.forEach((filter_i) => {
col_index = filter_i.parentElement.getAttribute('col-index')
coll_cell_value_dict[col_index] = row.querySelector("td:nth-child("+ col_index + ")").innerHTML
})
for (var col_i in filter_value_dict){
    filter_value = filter_value_dict[col_i]
    row_cell_value = col_cell_value_dict[col_i]
    if (row_cell_value.indexOf(filter_value) == -1 && filter_value != "All"){
        display_row = false;
        break;
    }
}
if (display_row == true){
    row.style.display = "table-row"
} else {
    row.style.display = "none"
}
});
};
