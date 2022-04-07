function getXMLHttp()
{
    var xmlHttp;
    try
        {
        xmlHttp = new XMLHttpRequest();
        }   
    catch(e)
        {
        //Internet Explorer is different than the others
        try
            {
            xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
            }
        catch(e)
            {
                try
                    {
                    xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
                    }
                catch(e)
                    {
                    alert("Old browser? Upgrade today so you can use AJAX!")
                    return false;
                    }
            }
        }
    return xmlHttp;
}

// usar essa função no onclick, ou outra para executar
function AjaxRequest()
    {
        var xmlHttp = getXMLHttp();
        xmlHttp.onreadystatechange = function()
        {
            if(xmlHttp.readyState == 4)
            {
            HandleResponse(xmlHttp.responseText);
            }
        }
        // modificar program.php quando tiver as funções de crud em classe separado
        xmlHttp.open("GET", "program.php", true);
        xmlHttp.send(null);
    }
function HandleResponse(response)
    {
        document.getElementById('AjaxResponse').innerHTML = response;
    }