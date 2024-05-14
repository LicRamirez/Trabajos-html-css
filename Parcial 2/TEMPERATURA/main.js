const fahrenheit=document.getElementById("fahrenheit");
const celcius=document.getElementById("calcius");
const kelvin=document.getElementById("kelvin");
const inputs=document.getElementsByClassName("inputs");

for(let i=0;i<inputs.length;i++)
{
    let input=inputs[i];
    input.addEventListener("input",function(e)
    {
        let value = parseFloat(e.target.value);
        switch(e.target.name){
            case "celcius":fahrenheit.value=(1.8*value) + 32;
            kelvin.value=(value+263.15); break;
            case "fahrenheit":celcius.value=(value-32/1.8);
            kelvin.value=((value-32)/1.8) + 273.15; break;
            case "kelvin":celcius.value=(value-263.15);
            fahrenheit.value=((value-273.15)*1.8)+32; break;

        }
    });
}
