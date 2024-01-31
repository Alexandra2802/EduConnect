let filteredArray=[]

let galleryArray=[
    {
        id:1,
        name:"matematica",
        desc:"Pregatire Bacalaureat"
    },
    {
        id:2,
        name:"informatica",
        desc:"Pregatire concursuri si olimpiade"
    },
    {
        id:3,
        name:"chimie",
        desc:"Pregatire admitere facultate"
    },
    {
        id:4,
        name:"bilogie",
        desc:"Pregatire admitere facultate"
    },
    {
        id:5,
        name:"fizica",
        desc:"Pregatire concursuri si olimpiade"
    }
]

showGallery(galleryArray)

function showGallery(currentArray){

    document.getElementById("card").innerText=""

    for(let i=0;i<currentArray.length;i++){
        document.getElementById("card").innerHTML+=`
            <div class="col-md-4 mt-3">
                <div class="card p-3 ps-5 pe-5">
                    <h4 class="text-capitalize text-center">${currentArray[i].name}</h4>
                    <p class="mt-2">${currentArray[i].desc}</p>
                </div>
            </div> 
        `
    }
}

document.getElementById("myinput").addEventListener("keyup",function(){
    let text=document.getElementById("myinput").value
    filteredArray=galleryArray.filter(function(a){
        if(a.name.includes(text)){
            return a.name
        }
    })

    if(this.value == ""){
        showGallery(galleryArray)
    }
    else{
        if(filteredArray == ""){
            document.getElementById("not-found").style.display="block"
            document.getElementById("card").innerHTML = ""
        }
        else{
            showGallery(filteredArray)
            document.getElementById("not-found").style.display = 'none'
        }
    }
})