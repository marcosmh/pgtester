


$(document).ready(function()
{
    
    $('#guardar_frm').click(function()
    {
        $('#proceso').val('guardar_form');
        document.forms['frm_user'].action = "ctrl_procesos.php";
        document.forms['frm_user'].submit();
        
    });
    
    
    
});